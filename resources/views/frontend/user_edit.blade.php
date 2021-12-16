@extends('frontend.layout.index')
@section('section')
    <form action="{{ route('user_update', $collection->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="header_left">
                        <div class="picture">
                            <div class="pic select_iamge_body text-center">
                                <label class="d-block select_image" class="{{($errors->first('photo')) ? "form-error" : ""}}">
                                    <input type="file" name="photo" style="visibility: hidden;">
                                    <img src="/{{ $collection->photo }}" height="198px" width="198px" alt="user photo">
                                </label>
                            </div>
                            <div class="gender">
                                <label for="male" class="{{($errors->first('gander')) ? "form-error" : ""}}">
                                    <input name="gander" @if(!$collection->gander) checked @endif value="0" type="radio" id="male">
                                    ছাত্র
                                </label>
                                <label for="female" class="{{($errors->first('gander')) ? "form-error" : ""}}">
                                    <input name="gander" @if($collection->gander) checked @endif value="1" type="radio" id="female">
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
                                        <input name="is_school" @if($collection->is_school) checked @endif value="1" type="radio" id="school">
                                        স্কুল
                                    </label>

                                    <div class="ps-4">
                                        <label for="bangla_medium" class="{{($errors->first('medium')) ? "form-error" : ""}}">
                                            <input name="medium"  @if(!$collection->medium) checked @endif type="radio" value="0" id="bangla_medium">
                                            বাংলা মাধ্যম
                                        </label>
                                        <label for="english" class="{{($errors->first('medium')) ? "form-error" : ""}}">
                                            <input name="medium"  @if($collection->medium) checked @endif type="radio" value="1" id="english">
                                            ইংরেজী মাধ্যম
                                        </label>
                                    </div>
                                    <label for="madrasha" class="{{($errors->first('is_school')) ? "form-error" : ""}}">
                                        <input name="is_school" @if(!$collection->is_school) checked @endif value="0" type="radio" id="madrasha">
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
                                    <h3 class="reg_form_btn">তথ্য সম্পাদনা ফরম</h3>
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
                                <input type="text" class="{{($errors->first('name')) ? "form-error" : ""}}" name="name" value="{{ $collection->name }}" id="name" placeholder="আপনার নাম...">
                                @error('name')
                                    <span class="col-12 text-danger">নাম অত্যাবশ্যকীয়</span>
                                @enderror
                            </div>
                            <div>
                                <label class="ps-0" for="name">Name (ইংরেজীতে):</label>
                                <input type="text" class="{{($errors->first('name_eng')) ? "form-error" : ""}}" id="name" name="name_eng" value="{{ $collection->name_eng }}" placeholder="Your Name...">
                                @error('name_eng')
                                    <span class="col-12 text-danger">ইংরেজী নাম অত্যাবশ্যকীয়</span>
                                @enderror
                            </div>
                            <div>
                                <div class="col-md-6">
                                    <label for="name">পিতার নাম:</label>
                                    <input type="text" class="{{($errors->first('father_name')) ? "form-error" : ""}}" id="name" name="father_name" value="{{ $collection->father_name }}" placeholder="পিতার নাম....">
                                    @error('father_name')
                                        <span class="col-12 text-danger">পিতার নাম অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="name">পিতার পেশা:</label>
                                    <input type="text" id="name" class="{{($errors->first('father_occupation')) ? "form-error" : ""}}" name="father_occupation" value="{{ $collection->father_occupation }}" placeholder="পিতার পেশা....">
                                    @error('father_occupation')
                                        <span class="col-12 text-danger">পিতার পেশা অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="col-12 p-0">
                                    <label for="name">Father's Name (ইংরেজীতে):</label>
                                    <input type="text" class="{{($errors->first('father_name_eng')) ? "form-error" : ""}}" id="name" name="father_name_eng" value="{{ $collection->father_name_eng }}" placeholder="Your Father's Name...">
                                    @error('father_name_eng')
                                        <span class="col-12 text-danger">পিতার ইংরেজী নাম অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="col-md-6">
                                    <label for="name">মাতার নাম:</label>
                                    <input type="text" class="{{($errors->first('mother_name')) ? "form-error" : ""}}" id="name" name="mother_name" value="{{ $collection->mother_name }}" placeholder="মাতার নাম....">
                                    @error('mother_name')
                                        <span class="col-12 text-danger">মাতার নাম অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="name">মাতার পেশা:</label>
                                    <input type="text" class="{{($errors->first('mother_occupation')) ? "form-error" : ""}}" id="name" name="mother_occupation" value="{{ $collection->mother_occupation }}" placeholder="মাতার পেশা....">
                                    @error('mother_name')
                                        <span class="col-12 text-danger">মাতার পেশা অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="col-12 p-0">
                                    <label for="name">Mother's Name (ইংরেজীতে):</label>
                                    <input type="text" class="{{($errors->first('mother_name_eng')) ? "form-error" : ""}}" id="name" name="mother_name_eng" value="{{ $collection->mother_name_eng }}" placeholder="Your Mother's Name...">
                                    @error('mother_name_eng')
                                        <span class="col-12 text-danger">মাতার ইংরেজী নাম অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="col-12 p-0">
                                    <label for="name">বর্তমান ঠিকানা:</label>
                                    <input type="text" class="{{($errors->first('present_address')) ? "form-error" : ""}}" id="name" name="present_address" value="{{ $collection->present_address }}" placeholder="বর্তমান ঠিকানা...">
                                    @error('present_address')
                                        <span class="col-12 text-danger">বর্তমান ঠিকানা অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="col-12 p-0">
                                    <label for="name">স্থায়ী ঠিকানা:</label>
                                    <input type="text" class="{{($errors->first('parmanent_address')) ? "form-error" : ""}}" id="name" name="parmanent_address" value="{{ $collection->parmanent_address }}" placeholder="স্থায়ী ঠিকানা...">
                                    @error('parmanent_address')
                                        <span class="col-12 text-danger">স্থায়ী ঠিকানা অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="col-md-6">
                                    <label for="number">ফোন/মোবাইল:</label>
                                    <input type="number" class="{{($errors->first('mobile_number')) ? "form-error" : ""}}" name="mobile_number" id="number"
                                        placeholder="ফোন/মোবাইল......." value="{{ $collection->mobile_number }}">
                                    @error('mobile_number')
                                        <span class="col-12 text-danger">ফোন/মোবাইল অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 ">
                                    <label for="birthday">জন্ম তারিখ:</label>
                                    <input type="date" class="{{($errors->first('birth_date')) ? "form-error" : ""}}" id="birthday" name="birth_date" value = "{{ $collection->birth_date }}">
                                    @error('birth_date')
                                        <span class="col-12 text-danger">জন্ম তারিখ অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="col-md-6 ">
                                    <label for="name">শিক্ষা প্রতিষ্ঠান:</label>
                                    <input type="text" class="{{($errors->first('school_name')) ? "form-error" : ""}}" id="name" name="school_name" value="{{ $collection->school_name }}" placeholder="শিক্ষা প্রতিষ্ঠান....">
                                    @error('school_name')
                                        <span class="col-12 text-danger">শিক্ষা প্রতিষ্ঠান অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 ">
                                    <label for="name">শিফট:</label>
                                    <input type="text" class="{{ ($errors->first('shift')) ? "form-error" : "" }}" id="name" name="shift" value="{{ $collection->shift }}" placeholder="শিফট....">
                                    @error('present_address')
                                        <span class="col-12 text-danger">শিফট অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="col-md-12 p-0 ">
                                    <label for="name">Institution (ইংরেজীতে):</label>
                                    <input type="text" class="{{($errors->first('school_name_eng')) ? "form-error" : ""}}" id="name" name="school_name_eng" value="{{ $collection->school_name_eng }}" placeholder="Institution Name...">
                                    @error('school_name_eng')
                                        <span class="col-12 text-danger">শিক্ষা প্রতিষ্ঠানের ইংরেজী নাম অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-lg-2">
                                    <label for="name">শ্রেণি:</label>
                                    <input type="text" class="{{($errors->first('class_name')) ? "form-error" : ""}}" id="name" name="class_name" value="{{ $collection->class_name }}" placeholder="শ্রেণি....">
                                    @error('class_name')
                                        <span class="col-12 text-danger">শ্রেণি অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>

                                <div class="col-md-2 ">
                                    <label for="name">শাখা:</label>
                                    <input type="text" class="{{($errors->first('section_name')) ? "form-error" : ""}}" id="name" name="section_name" value="{{ $collection->section_name }}" placeholder="শাখা....">
                                    @error('section_name')
                                        <span class="col-12 text-danger">শাখা অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>

                                <div class="col-md-3 ">
                                    <label for="number">রোল নং:</label>
                                    <input type="text" class="{{($errors->first('roll_no')) ? "form-error" : ""}}"  name="roll_no" id="number"
                                      value="{{ $collection->roll_no }}"  placeholder="রোল নং.......">
                                    @error('roll_no')
                                        <span class="col-12 text-danger">রোল অত্যাবশ্যকীয়</span>
                                    @enderror
                                </div>
                                <div class="col-md-2 col-lg-5 class_section {{($errors->first('section_name')) ? "form-error" : ""}} ">
                                    <label>বিভাগ:</label>

                                    <div>
                                        <input name="division" @if($collection->division == 0) checked @endif value="0" type="radio" id="since">
                                        <label for="since" class="ps-1">বিজ্ঞান</label>
                                    </div>

                                    <div>
                                        <input name="division" @if($collection->division == 1) checked @endif value="1" type="radio" id="comarc">
                                        <label for="comarc" class="ps-1">বাণিজ্য</label>
                                    </div>

                                    <div>
                                        <input name="division" @if($collection->division == 2) checked @endif value="2" type="radio" id="art">
                                        <label for="art" class="ps-1">মানবিক</label>
                                    </div>
                                    @error('division')
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
                            <h3 class="reg_form_btn">সেভ করুন</h3>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </form>
    
@endsection
    
