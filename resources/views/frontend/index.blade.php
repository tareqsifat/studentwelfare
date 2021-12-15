@extends('frontend.layout.index')
@section('section')
    <form action="{{ route('user_store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="header_left">
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
                                <img class="w-100" src="{{ asset('frontend') }}/img/logo.png" alt="">
                            </div>
                            <div class="right">
                                <h1 class="heading_text">দি স্টুডেন্টস ওয়েলফেয়ার ফাউন্ডেশন</h1>
                                <h2 class="heading_text_2">The Students Welfare Foundation</h2>
                                <p class="heading_p">(গভ: রেজি: নং- S-9287/09)</p>
                                <p class="heading_p">www.swfdhaka.info</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
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
                                <div class="f_hader">
                                    <h3 class="reg_form_btn">রেজিষ্ট্রেশন ফরম</h3>
                                </div>
                            </div>
                            <div class="col-md-5 fill_by_office_table_body">
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
        <section id="fi_one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form_table">
                            <div class="">
                                <label class="ps-0" for="name">নাম:</label>
                                <input type="text" class="{{($errors->first('name')) ? "form-error" : ""}}" name="name" value="{{ old('name') }}" id="name" placeholder="আপনার নাম...">
                                @error('name')
                                    <span class="col-12 text-danger">নাম অত্যাবশ্যকীয়</span>
                                @enderror
                            </div>
                            <div>
                                <label class="ps-0" for="name">Name (ইংরেজীতে):</label>
                                <input type="text" class="{{($errors->first('name_eng')) ? "form-error" : ""}}" id="name" name="name_eng" value="{{ old('name_eng') }}" placeholder="Your Name...">
                                @error('name_eng')
                                    <span class="col-12 text-danger">ইংরেজী নাম অত্যাবশ্যকীয়</span>
                                @enderror
                            </div>
                            <div>
                                <div class="col-md-6">
                                    <label for="name">পিতার নাম:</label>
                                    <input type="text" class="{{($errors->first('father_name')) ? "form-error" : ""}}" id="name" name="father_name" value="{{ old('father_name') }}" placeholder="পিতার নাম....">
                                    @error('father_name')
                                        <span class="col-12 text-danger">পিতার নাম অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="name">পিতার পেশা:</label>
                                    <input type="text" id="name" class="{{($errors->first('father_occupation')) ? "form-error" : ""}}" name="father_occupation" value="{{ old('father_occupation') }}" placeholder="পিতার পেশা....">
                                    @error('father_occupation')
                                        <span class="col-12 text-danger">পিতার পেশা অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
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
                                <div class="col-md-6">
                                    <label for="name">মাতার নাম:</label>
                                    <input type="text" class="{{($errors->first('mother_name')) ? "form-error" : ""}}" id="name" name="mother_name" value="{{ old('mother_name') }}" placeholder="মাতার নাম....">
                                    @error('mother_name')
                                        <span class="col-12 text-danger">মাতার নাম অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="name">মাতার পেশা:</label>
                                    <input type="text" class="{{($errors->first('mother_occupation')) ? "form-error" : ""}}" id="name" name="mother_occupation" value="{{ old('mother_occupation') }}" placeholder="মাতার পেশা....">
                                    @error('mother_name')
                                        <span class="col-12 text-danger">মাতার পেশা অত্যাবশ্যকীয়</span>
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
                                <div class="col-12 p-0">
                                    <label for="name">বর্তমান ঠিকানা:</label>
                                    <input type="text" class="{{($errors->first('present_address')) ? "form-error" : ""}}" id="name" name="present_address" value="{{ old('present_address') }}" placeholder="বর্তমান ঠিকানা...">
                                    @error('present_address')
                                        <span class="col-12 text-danger">বর্তমান ঠিকানা অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="col-12 p-0">
                                    <label for="name">স্থায়ী ঠিকানা:</label>
                                    <input type="text" class="{{($errors->first('parmanent_address')) ? "form-error" : ""}}" id="name" name="parmanent_address" value="{{ old('parmanent_address') }}" placeholder="স্থায়ী ঠিকানা...">
                                    @error('parmanent_address')
                                        <span class="col-12 text-danger">স্থায়ী ঠিকানা অত্যাবশ্যকীয়</span>
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
                                <div class="col-md-6 ">
                                    <label for="birthday">জন্ম তারিখ:</label>
                                    <input type="date" class="{{($errors->first('birth_date')) ? "form-error" : ""}}" id="birthday" name="birth_date" value = "{{ old('birth_date') }}">
                                    @error('birth_date')
                                        <span class="col-12 text-danger">জন্ম তারিখ অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="col-md-6 ">
                                    <label for="name">শিক্ষা প্রতিষ্ঠান:</label>
                                    <input type="text" class="{{($errors->first('school_name')) ? "form-error" : ""}}" id="name" name="school_name" value="{{ old('school_name') }}" placeholder="শিক্ষা প্রতিষ্ঠান....">
                                    @error('school_name')
                                        <span class="col-12 text-danger">শিক্ষা প্রতিষ্ঠান অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 ">
                                    <label for="name">শিফট:</label>
                                    <input type="text" class="{{ ($errors->first('shift')) ? "form-error" : "" }}" id="name" name="shift" value="{{ old('shift') }}" placeholder="শিফট....">
                                    @error('present_address')
                                        <span class="col-12 text-danger">শিফট অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="col-md-12 p-0 ">
                                    <label for="name">Institution (ইংরেজীতে):</label>
                                    <input type="text" class="{{($errors->first('school_name_eng')) ? "form-error" : ""}}" id="name" name="school_name_eng" value="{{ old('school_name_eng') }}" placeholder="Institution Name...">
                                    @error('school_name_eng')
                                        <span class="col-12 text-danger">শিক্ষা প্রতিষ্ঠানের ইংরেজী নাম অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-lg-2">
                                    <label for="name">শ্রেণি:</label>
                                    <input type="text" class="{{($errors->first('class_name')) ? "form-error" : ""}}" id="name" name="class_name" value="{{ old('class_name') }}" placeholder="শ্রেণি....">
                                    @error('class_name')
                                        <span class="col-12 text-danger">শ্রেণি অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>

                                <div class="col-md-2 ">
                                    <label for="name">শাখা:</label>
                                    <input type="text" class="{{($errors->first('section_name')) ? "form-error" : ""}}" id="name" name="section_name" value="{{ old('section_name') }}" placeholder="শাখা....">
                                    @error('section_name')
                                        <span class="col-12 text-danger">শাখা অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>

                                <div class="col-md-3 ">
                                    <label for="number">রোল নং:</label>
                                    <input type="text" class="{{($errors->first('roll_no')) ? "form-error" : ""}}"  name="roll_no" id="number"
                                      value="{{ old('roll_no') }}"  placeholder="রোল নং.......">
                                    @error('roll_no')
                                        <span class="col-12 text-danger">রোল অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                                <div class="col-md-2 col-lg-5 class_section {{($errors->first('section_name')) ? "form-error" : ""}} ">
                                    <label>বিভাগ:</label>

                                    <div>
                                        <input name="section_name" value="0" type="radio" id="since">
                                        <label for="since" class="ps-1">বিজ্ঞান</label>
                                    </div>

                                    <div>
                                        <input name="section_name" value="1" type="radio" id="comarc">
                                        <label for="comarc" class="ps-1">বাণিজ্য</label>
                                    </div>

                                    <div>
                                        <input name="section_name" value="2" type="radio" id="art">
                                        <label for="art" class="ps-1">মানবিক</label>
                                    </div>
                                    @error('section_name')
                                        <span class="col-12 text-danger">বিভাগ অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-10"></div>
                <div class="col-md-2 col-lg-2">
                    <button type="submit">
                        <div class="f_hader">
                            <h3 class="reg_form_btn">রেজিষ্ট্রেশন করুন</h3>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <section id="signature" class="my-3 mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h4>পরীক্ষার্থীর স্বাক্ষর</h4>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h4>অভিভাবকের স্বাক্ষর</h4>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h4>অধ্যক্ষ/প্রধান শিক্ষক/শিক্ষক প্রতিনিধির স্বাক্ষর</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="header2">
        <div class="container">
            <div class="d-flex">
                <div class="header_left">
                    <div class="pic select_iamge_body text-center">
                        <label class="d-block select_image">uplod your pic
                            <input type="file" style="visibility: hidden;">
                            <img src="" alt="">
                        </label>
                    </div>
                </div>
                <div class="header_right">
                    <div class="header_right_top">
                        <div class="left">
                            <img class="w-100" src="img/logo.png" alt="">
                        </div>
                        <div class="right">
                            <h1>দি স্টুডেন্টস ওয়েলফেয়ার ফাউন্ডেশন</h1>
                            <h2>The Students Welfare Foundation</h2>
                            <p class="heading_p">(গভ: রেজি: নং- S-9287/09)</p>
                            <p class="heading_p">www.swfdhaka.info</p>
                            <div class="f_hader">
                                <h3 class="reg_form_btn">প্রবেশ পত্র</h3>
                            </div>
                        </div>
                        <div class="end">
                            <div class="select_sc_madrsa">
                                <label>টিক চিহ্ন দাও</label><br>
                                <label for="school">
                                    <input name="Institution" value="" type="checkbox" id="school">
                                    স্কুল
                                </label>

                                <div class="ps-4">
                                    <label for="bangla_medium">
                                        <input type="checkbox" id="bangla_medium">
                                        বাংলা মাধ্যম
                                    </label>
                                    <label for="english">
                                        <input type="checkbox" id="english">
                                        ইংরেজী মাধ্যম
                                    </label>
                                </div>

                                <label for="madrasha">
                                    <input name="Institution" value="" type="checkbox" id="madrasha">
                                    মাদরাসা
                                </label>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fi_two">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="" class="form_table" method="" name="form_data" enctype="multipart/form-data">
                        <fieldset>
                            <div>
                                <div class="col-md-4">
                                    <label for="number">পরীক্ষার্থীর রোল নং:</label>
                                    <input type="number" min="" max="" step="" name="number" id="number"
                                        placeholder="রোল নং.......">
                                </div>
                                <div class="col-md-4">
                                    <label for="name">শ্রেণি:</label>
                                    <input type="text" id="name" name="" value="" placeholder="শ্রেণি....">

                                </div>
                                <div class="col-md-4">
                                    <label for="name">জোনের নাম:</label>
                                    <input type="text" id="name" name="" value="" placeholder="শ্রেণি....">
                                </div>
                            </div>
                            <div>
                                <div class="col-md-12 p-0">
                                    <label for="name">নাম:</label>
                                    <input type="text" name="" value="" id="name" placeholder="আপনার নাম...">
                                </div>
                            </div>
                            <div>
                                <div class="col-md-6">
                                    <label for="name">পিতার নাম:</label>
                                    <input type="text" id="name" name="" value="" placeholder="পিতার নাম....">
                                </div>
                                <div class="col-md-6">
                                    <label for="number">বাসার ফোন:</label>
                                    <input type="number" min="" max="" step="" name="number" id="number"
                                        placeholder="বাসার ফোন.......">
                                </div>

                            </div>
                            <div>
                                <div class="col-md-6">
                                    <label for="name">শিক্ষা প্রতিষ্ঠান:</label>
                                    <input type="text" id="name" name="" value="" placeholder="শিক্ষা প্রতিষ্ঠান....">
                                </div>
                                <div class="col-md-6 class_section" >
                                    <label>বিভাগ:</label>
                                    <div>
                                        <input name="dev" value="" type="radio" id="since">
                                        <label for="since" class="ps-2">বিজ্ঞান</label>
                                    </div>

                                    <div>
                                        <input name="dev" value="" type="radio" id="comarc">
                                        <label for="comarc" class="ps-2">বাণিজ্য</label>
                                    </div>

                                    <div>
                                        <input name="dev" value="" type="radio" id="art">
                                        <label for="art" class="ps-2">মানবিক</label>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="col-md-6">
                                    <label for="birthday">পরীক্ষার তারিখ:</label>
                                    <input type="date" id="birthday" name="birthday">
                                </div>
                                <div class="col-md-6">
                                    <label for="name">কেন্দ্র:</label>
                                    <input type="text" id="name" name="" value="" placeholder="কেন্দ্র...">
                                </div>

                            </div>

                            </table>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
    
