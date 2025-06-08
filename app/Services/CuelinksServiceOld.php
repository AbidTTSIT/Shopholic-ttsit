<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;

class CuelinksServiceOld
{
    protected $baseUrl = 'https://api.cuelinks.com/';
    protected $token;

    public function __construct()
    {
        $this->token = config('app.cuelinks_api_key');
    }

    protected function headers()
    {
        return [
            'token' => $this->token,
            'Accept' => 'application/json',
        ];
    }

    /**
     * Get all merchants
     * @param array $params - optional filters like sort_column, sort_direction, page, per_page, search_term, country_id
     */
    public function getMerchants(array $params = [])
    {
        $response = Http::withHeaders($this->headers())
            ->get($this->baseUrl . 'publishers/merchant.json', $params);

        if ($response->successful()) {
            return $response->json();
        }

        // Log or handle errors accordingly
        return null;
    }

    /**
     * Get transactions by date
     * @param string|null $startDate - YYYY-mm-dd format, default yesterday
     * @param string|null $endDate - YYYY-mm-dd format, default today
     */
    public function getTransactionsByDate(?string $startDate = null, ?string $endDate = null)
    {
        $params = [];
        if ($startDate) $params['start_date'] = $startDate;
        if ($endDate) $params['end_date'] = $endDate;

        $response = Http::withHeaders($this->headers())
            ->get($this->baseUrl . 'publishers/transaction-date.json', $params);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }

    /**
     * Get transactions by sub_id
     * @param string $subId - required
     * @param string|null $startDate - YYYY-mm-dd
     * @param string|null $endDate - YYYY-mm-dd
     */
    public function getTransactionsBySubId(string $subId, ?string $startDate = null, ?string $endDate = null)
    {
        $params = ['sub_id' => $subId];
        if ($startDate) $params['start_date'] = $startDate;
        if ($endDate) $params['end_date'] = $endDate;

        $response = Http::withHeaders($this->headers())
            ->get($this->baseUrl . 'publishers/transaction-subid.json', $params);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}
