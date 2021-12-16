@extends('frontend.layout.index')
@section('section')
    <header id="header">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-10 juatify-content-center">
                    <div class="header_right">
                        <div class="header_right_top">
                            <div class="left">
                                <img class="w-100" src="{{ asset('frontend') }}/img/logo.png" alt="">
                            </div>
                            <div class="right">
                                <h1 class="heading_text">দি স্টুডেন্টস ওয়েলফেয়ার ফাউন্ডেশন</h1>
                                <h2 class="heading_text_2">The Students Welfare Foundation</h2>
                                <p class="heading_p">(গভ: রেজি: নং- S-9287/09)</p>
                                <p class="heading_p">www.swfdhaka.info</p>
                            </div>
                        </div>
                        <div class="row  text-center">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="text-center" placeholder="বৃত্তি পরীক্ষা..................ইং">
                                <div class="f_hader">
                                    <h3 class="reg_form_btn">লগিন ফরম</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="fi_one">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('user_login_post') }}" class="form_table">
                        @csrf
                        <div>
                            <label class="ps-0" for="name">Name (ইংরেজীতে):</label>
                            <input type="text" class="{{($errors->first('name_eng')) ? "form-error" : ""}}" id="name" name="name_eng" value="{{ old('name_eng') }}" placeholder="Your Name...">
                            @error('name_eng')
                                <span class="col-12 text-danger">ইংরেজী নাম অত্যাবশ্যকীয়</span>
                            @enderror
                        </div>
                        <div>
                            <div class="col-12 p-0">
                                <label for="name">Father's Name (ইংরেজীতে):</label>
                                <input type="text" class="{{($errors->first('father_name_eng')) ? "form-error" : ""}}" id="name" name="father_name_eng" value="{{ old('father_name_eng') }}" placeholder="Your Father's Name...">
                                @error('father_name_eng')
                                    <span class="col-12 text-danger">পিতার ইংরেজী নাম অত্যাবশ্যকীয়</span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="col-12 p-0">
                                <label for="name">Mother's Name (ইংরেজীতে):</label>
                                <input type="text" class="{{($errors->first('mother_name_eng')) ? "form-error" : ""}}" id="name" name="mother_name_eng" value="{{ old('mother_name_eng') }}" placeholder="Your Mother's Name...">
                                @error('mother_name_eng')
                                    <span class="col-12 text-danger">মাতার ইংরেজী নাম অত্যাবশ্যকীয়</span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="col-md-6">
                                <label for="number">ফোন/মোবাইল:</label>
                                <input type="number" class="{{($errors->first('mobile_number')) ? "form-error" : ""}}" name="mobile_number" id="number"
                                    placeholder="ফোন/মোবাইল......." value="{{ old('mobile_number') }}">
                                @error('mobile_number')
                                    <span class="col-12 text-danger">ফোন/মোবাইল অত্যাবশ্যকীয়</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                            </div>
                            <div class="col-md-2" style="margin: 1px solid black">
                                <div class="f_hader">
                                    <button type="submit"><h3 class="reg_form_btn">লগিন ফরম</h3></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection