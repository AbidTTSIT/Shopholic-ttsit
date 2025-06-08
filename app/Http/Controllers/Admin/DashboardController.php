<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use DateTime;
use DateInterval;

class DashboardController extends Controller 
{
    /* dashboard login page start code */
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $post_data = $request->input();
            unset($post_data['_token']);
    
            $email = $request->input('email');
            $password = $request->input('password');
            $otp = $request->input('otp');
    
            $admin = Admin::where('email', $email)->first();
        
    
            if ($admin) {
                if(Auth::guard('admin')->attempt(['email'=> $email, 'password' => $password])) 
                {
                   toastr()->addSuccess('You Have Successfully login.');
                  return redirect()->route('dashboard');
                }else{
                    return redirect()->back()->with('error', 'Invalid credential');
                }
            } else {
                return redirect()->back()->with('msg', ['type' => 'warning', 'text' => 'User not valid.']);
            }
        }
    
        return view('admin.Auth.login');
    }
   
    public function index()
    {
        return view('admin.dashboard');
    }
  
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
    
   public function getUserData(Request $request)
 {
        $year = $request->input('year');

        // Dummy data until integrated with actual database
        $dummyData = $this->getDummyChartData($year);

        return response()->json(['data' => $dummyData]);
    }

    private function getDummyChartData($year)
    {
        // Dummy sales and purchase data for each month
        $dummySales = [500, 450, 600, 700, 500, 450, 600, 700, 750, 780, 850, 990];
        $dummyPurchase = [-210, -540, -450, -350, -210, -540, -450, -350, -200, -100, -700, -960];
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        // If you need to generate dynamic dummy data based on year, you can modify it here
        
        return [
            'sales' => $dummySales,
            'purchase' => $dummyPurchase,
            'month' => $months
        ];
    }


    /* admin logout end code */
}
