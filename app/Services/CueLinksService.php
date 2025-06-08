<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CueLinksService
{
    public function generateAffiliateLink($url)
    {
        try {
            $response = Http::withToken(config('services.cuelinks.api_key'))
            ->get('https://www.cuelinks.com/api/integrations/affiliate_link', [
                'url' => $url,
            ]);

            if ($response->successful()) {
                $data = $response->json();

                if (isset($data['data']['affiliate_link'])) {
                    return $data['data']['affiliate_link'];
                }
            }


            return $url;
        } catch (Exception $e) {
            Log::error('Cuelinks Exception: ' . $e->getMessage());
            return $url;
        }
    }
}
