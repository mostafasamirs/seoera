<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('isadmin');
    }

    public function dashboard()
    {
        $settings = Setting::first();

        return view('dashboard.welcome',compact('settings'));
    }

    public function lang(Request $request)
    {
        $lang = $request->lang;
        $user = User::where('id', Auth::user()->id)->first();
        if($lang == 'en'){
            $user->update(['language_id'=> 1]);
        }else{
            $user->update(['language_id'=> 3]);
        }
        return redirect()->back();
    }

}
