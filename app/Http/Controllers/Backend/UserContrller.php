<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserContrller extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'photo'=>'required',
            'gander'=>'required',
            'medium'=>'required',
            'is_school'=>'required',
            'name'=>'required',
            'name_eng'=>'required',
            'father_name'=>'required',
            'father_occupation'=>'required',
            'father_name_eng'=>'required',
            'mother_name'=>'required',
            'mother_occupation'=>'required',
            'mother_name_eng'=>'required',
            'present_address'=>'required',
            'parmanent_address'=>'required',
            'mobile_number'=>'required',
            'birth_date'=>'required',
            'school_name'=>'required',
            'shift'=>'required',
            'school_name_eng'=>'required',
            'class_name'=>'required',
            'section_name'=>'required',
            'roll_no'=>'required',
        ]);
        
        $user = new User();
        $user->gander = $request->gander;
        $user->medium = $request->medium;
        $user->is_school = $request->is_school;
        $user->name = $request->name;
        $user->name_eng = $request->name_eng;
        $user->father_name = $request->father_name;
        $user->father_occupation = $request->father_occupation;
        $user->father_name_eng = $request->father_name_eng;
        $user->mother_name = $request->mother_name;
        $user->mother_occupation = $request->mother_occupation;
        $user->mother_name_eng = $request->mother_name_eng;
        $user->present_address = $request->present_address;
        $user->parmanent_address = $request->parmanent_address;
        $user->mobile_number = $request->mobile_number;
        $user->birth_date = $request->birth_date;
        $user->school_name = $request->school_name;
        $user->shift = $request->shift;
        $user->school_name_eng = $request->school_name_eng;
        $user->class_name = $request->class_name;
        $user->section_name = $request->section_name;
        $user->roll_no = $request->roll_no;
        $user->division = $request->division;
        $user->password = rand(10000000,99999999);
        $user->email = strtolower(str_replace(' ', '_', $request->name)).rand(99,999) . '@' . 'swfdhaka.com';
        $user->save();

        if($request->hasFile('photo')){
            $user->photo = Storage::put('uploads/user',$request->photo);
            $user->save();
        }

        return 'User Data Saved Successfully';
    }
}
