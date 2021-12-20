@extends('frontend.layout.index')
@section('section')
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="header_left" style="visibility: hidden">
                    <div class="picture">
                        <div class="pic select_iamge_body text-center">
                            <label class="d-block select_image" class="{{($errors->first('photo')) ? "form-error" : ""}}">uplod your pic
                                <input type="file" name="photo" style="visibility: hidden;">
                                <img src="" alt="">
                            </label>
                        </div>
                        <div class="gender">
                            <label for="male"  class="{{($errors->first('gander')) ? "form-error" : ""}}">
                                <input name="gander" value="0" type="radio" id="male">
                                ছাত্র
                            </label>
                            <label for="female" class="{{($errors->first('gander')) ? "form-error" : ""}}">
                                <input name="gander" value="1" type="radio" id="female">
                                ছাত্রী
                            </label>
                        </div>
                        @error('photo')
                            <span class="col-12 text-danger">ছবি অত্যাবশ্যকীয়</span>
                        @enderror
                        @error('gander')
                            <span class="col-12 text-danger">ছাত্র/ছাত্রী নির্ধারন অত্যাবশ্যকীয়</span>
                        @enderror
                    </div>
                </div>
                <div class="header_right">
                    <div class="header_right_top">
                        <div class="left">
                            <img class="w-100" src="{{ asset('contents/frontend') }}/img/logo.png" alt="">
                        </div>
                        <div class="right">
                            <h1 class="heading_text">দি স্টুডেন্টস ওয়েলফেয়ার ফাউন্ডেশন</h1>
                            <h2 class="heading_text_2">The Students Welfare Foundation</h2>
                            <p class="heading_p">(গভ: রেজি: নং- S-9287/09)</p>
                            <p class="heading_p">www.swfdhaka.info</p>
                        </div>
                        <div class="right_side text-center"  style="visibility: hidden">
                            <p style="font-size: 17px; margin-bottom: 0.1rem">আগে রেজিষ্টার করে থাকলে</p>
                            <div class="f_hader">
                                <a href="{{ route('user_login') }}"><h3 class="reg_form_btn">লগিন করুন</h3></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"  style="visibility: hidden">
                            <div class="select_sc_madrsa">
                                <label>টিক চিহ্ন দাও</label><br>
                                <label for="school"  class="{{($errors->first('is_school')) ? "form-error" : ""}}">
                                    <input name="is_school" value="1" type="radio" id="school">
                                    স্কুল
                                </label>

                                <div class="ps-4">
                                    <label for="bangla_medium" class="{{($errors->first('medium')) ? "form-error" : ""}}">
                                        <input name="medium" type="radio" value="0" id="bangla_medium">
                                        বাংলা মাধ্যম
                                    </label>
                                    <label for="english" class="{{($errors->first('medium')) ? "form-error" : ""}}">
                                        <input name="medium" type="radio" value="1" id="english">
                                        ইংরেজী মাধ্যম
                                    </label>
                                </div>
                                <label for="madrasha" class="{{($errors->first('is_school')) ? "form-error" : ""}}">
                                    <input name="is_school" value="0" type="radio" id="madrasha">
                                    মাদরাসা
                                </label>
                                <br>
                            </div>
                            @error('is_school')
                                <span class="col-12 text-danger">স্কুল/মাদ্রাসা নির্ধারন অত্যাবশ্যকীয়</span>
                            @enderror
                            @error('medium')
                                <span class="col-12 text-danger">মাধ্যম অত্যাবশ্যকীয়</span>
                            @enderror
                        </div>
                        <div class="col-md-4 text-center">
                            <input type="text" class="text-center" placeholder="বৃত্তি পরীক্ষা..................ইং">
                            <div class="f_hader"  style="visibility: hidden">
                                <h3 class="reg_form_btn">রেজিষ্ট্রেশন ফরম</h3>
                            </div>
                        </div>
                        <div class="col-md-5 fill_by_office_table_body"  style="visibility: hidden">
                            <table class="fill_by_office_table">
                                <tr>
                                    <td colspan="2">
                                        <h3>অফিস কর্তৃক পূরণীয়</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>রেজি: নং:</td>
                                    <td>
                                        <input type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>পরীক্ষার রোল নং:</td>
                                    <td>
                                        <input type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>জোনের নাম:</td>
                                    <td>
                                        <input type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>জোন পরিচালকের স্বাক্ষর:</td>
                                    <td>
                                        <input type="text">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="containter" style="margin: 35px 100px">
        <div class="row">
            <div class="col-12" style="display: flex; align-items: center">
                <div class="classbutton">
                    <p>আপনার শিক্ষা কারিকুলাম নির্ধারন করুন</p>
                </div>
            </div>
        </div>
    </div>
    <div class="containter" style="margin: 35px 100px">
        <div class="row">
            <div class="col-12" style="display: flex; align-items: center">
                <div class="classbutton">
                    <div class="row">
                        <div class="col-3">
                            <a href="https://forms.gle/tgcbtkjgsKQVDXTq5" target="_blank"><h3 class="reg_form_btn">বাংলা মিডিয়াম</h3></a>
                        </div>
                        <div class="col-3">
                            <a href="https://forms.gle/tgcbtkjgsKQVDXTq5" target="_blank"><h3 class="reg_form_btn">ইংলিশ মিডিয়াম</h3></a>
                        </div>
                        <div class="col-3">
                            <a href="https://forms.gle/tgcbtkjgsKQVDXTq5" target="_blank"><h3 class="reg_form_btn">মাদরাসা</h3></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection