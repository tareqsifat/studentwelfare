<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('frontend.custom_login');
    }
    public function customLogin(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name_eng' => 'required',
            'father_name_eng' => 'required',
            'mother_name_eng' => 'required',
            'mobile_number' => 'required',
        ]);
   
        $user = User::where('name_eng',$request->name_eng)
                    ->where('father_name_eng',$request->father_name_eng)
                    ->where('mother_name_eng',$request->mother_name_eng)
                    ->where('mobile_number',$request->mobile_number)
                    ->first();
        if($user){
            // dd($user);
            return redirect()->route('user_dashboard', [$user]);
        }
        else{
            return back();
        }
    }

    public function user_dashboard($user)
    {
        $collection = User::find($user);
        // $collection = User::where('name_eng',$name_eng)->first();
        return view('frontend.user_dashboard',compact('collection'));
    }
}
