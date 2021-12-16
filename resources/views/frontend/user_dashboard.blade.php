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
                                    <img src="{{ $collection->photo }}" alt="">
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
                            <div class="right_side text-center">
                                <p style="font-size: 17px; margin-bottom: 0.1rem">আগে রেজিষ্টার করে থাকলে</p>
                                <div class="f_hader">
                                    <a href="{{ route('user_login') }}"><h3 class="reg_form_btn">লগিন করুন</h3></a>
                                    
                                </div>
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
                    <div class="col-md-12 fill_by_office_table_body">
                        <table class="fill_by_office_table" style="border: 1px solid black">
                            <tr>
                                <td>
                                    নাম:
                                </td>
                                <td>
                                    {{ $collection->name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Name (ইংরেজীতে):
                                </td>
                                <td>
                                    {{ $collection->name_eng }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   পিতার নাম:
                                </td>
                                <td>
                                    {{ $collection->father_name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   পিতার পেশা:
                                </td>
                                <td>
                                    {{ $collection->father_occupation }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   Father's Name (ইংরেজীতে):
                                </td>
                                <td>
                                    {{ $collection->father_name_eng }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   মাতার নাম:
                                </td>
                                <td>
                                    {{ $collection->mother_name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   মাতার পেশা:
                                </td>
                                <td>
                                    {{ $collection->mother_occupation }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   Mother's Name (ইংরেজী):
                                </td>
                                <td>
                                    {{ $collection->mother_name_eng }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   বর্তমান ঠিকানা:
                                </td>
                                <td>
                                    {{ $collection->present_address }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   স্থায়ী ঠিকানা:
                                </td>
                                <td>
                                    {{ $collection->parmanent_address }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   ফোন/মোবাইল:
                                </td>
                                <td>
                                    {{ $collection->mobile_number }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   জন্ম তারিখ:
                                </td>
                                <td>
                                    {{ $collection->birth_date }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   শিক্ষা প্রতিষ্ঠান:
                                </td>
                                <td>
                                    {{ $collection->school_name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   শিফট:
                                </td>
                                <td>
                                    {{ $collection->shift }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                Institute (ইংরেজীতে):
                                </td>
                                <td>
                                    {{ $collection->school_name_eng }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   শ্রেণি:
                                </td>
                                <td>
                                    {{ $collection->class_name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   শাখা:
                                </td>
                                <td>
                                    {{ $collection->section_name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   রোল নং:
                                </td>
                                <td>
                                    {{ $collection->roll_no }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    বিভাগ:
                                </td>
                                <td>
                                    {{ $collection->section_name }}
                                </td>
                            </tr>
                        </table>
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
    