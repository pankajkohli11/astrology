<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use App\Models\Tenant;
use App\Models\PaymentHistory;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function adminDashboard(){
       
        // dd($headCount);
        $totalRooms = Room::latest()->count();
        $availableRooms = Room::where('is_available', 1)->count();
        $booked = Room::where('is_available', 0)->count();
        // dd($availableRooms);
        // $leads = Tenant::where("status","=",0)->get();
        $tenants = Tenant::latest()->get();

        return view('admin.dashboard',compact(
            'totalRooms',
            'tenants',
            'availableRooms',
            'booked',
            
            
        ));
    }

    public function adminProfile(){
        return view('admin.profile.profile');
    }
}
