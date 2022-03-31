<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ThankYouController extends Controller
{
    // public function index(Request $request)
    // {
    //     $user = User::findByUserToken($request->get('eut'))->first();
    //     //return view('frontend.thank-you.index',compact('user'));
    //     return view('frontend.thank-you.index',compact('user'));
    // }

    public function index(Request $request)
    {
        $user = User::findByUserToken($request->get('eut'))->first();
        // if ($user->spinAlreadyUsed)
        // {
        //     flash()->error('You have already played your spin');
        //     return redirect()->route('frontend.register.index');
        // }
        return view('frontend.wheel.index');
    }
}
