@extends('frontend.layout.index')
@section('section')
{{-- {{ dd($collection->photo); }} --}}
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="header_left">
                    <div class="picture">
                        <div class="pic select_iamge_body text-center">
                            <img src="/{{ $collection->photo }}" alt="User Photo" height="198px" width="198px">
                        </div>
                        <div class="gender">
                            <label for="male" >
                                <input name="gander" type="radio" @if(!$collection->gander) checked @else disabled @endif  id="male">
                                ছাত্র
                            </label>
                            <label for="female">
                                <input name="gander" type="radio" @if($collection->gander) checked @else disabled @endif id="female">
                                ছাত্রী
                            </label>
                        </div>
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
                                <label for="school">
                                    <input name="is_school" @if($collection->is_school) checked @else disabled @endif type="radio" id="school">
                                    স্কুল
                                </label>
                                @if($collection->is_school)
                                    <div class="ps-4">
                                        <label for="bangla_medium">
                                            <input name="medium" @if(!$collection->medium) checked @else disabled @endif type="radio" value="0" id="bangla_medium">
                                            বাংলা মাধ্যম
                                        </label>
                                        <label for="english">
                                            <input name="medium" @if($collection->medium) checked @else disabled @endif type="radio" value="1" id="english">
                                            ইংরেজী মাধ্যম
                                        </label>
                                    </div>
                                @endif
                                <label for="madrasha">
                                    <input name="is_school" @if(!$collection->is_school) checked @else disabled @endif type="radio" id="madrasha">
                                    মাদরাসা
                                </label>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <input type="text" class="text-center" placeholder="বৃত্তি পরীক্ষা..................ইং">
                            <div class="f_hader">
                                <h3 class="reg_form_btn">শিক্ষার্থীর তথ্য</h3>
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
                    <div class="form_table">
                        <div class="">
                            <label class="ps-0" for="name">নাম:</label>
                            <input type="text" value="{{ $collection->name }}" id="name" disabled>
                        </div>
                        <div>
                            <label class="ps-0" for="name">Name (ইংরেজীতে):</label>
                            <input type="text" value="{{ $collection->name_eng }}" disabled>
                        </div>
                        <div>
                            <div class="col-md-6">
                                <label for="name">পিতার নাম:</label>
                                <input type="text" value="{{ $collection->father_name }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="name">পিতার পেশা:</label>
                                <input type="text" value="{{ $collection->father_occupation }}" disabled>
                            </div>
                        </div>
                        <div>
                            <div class="col-12 p-0">
                                <label for="name">Father's Name (ইংরেজীতে):</label>
                                <input type="text" value="{{ $collection->father_name_eng }}" disabled>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-6">
                                <label for="name">মাতার নাম:</label>
                                <input type="text" value="{{ $collection->mother_name }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="name">মাতার পেশা:</label>                                
                                <input type="text" value="{{ $collection->mother_occupation }}" disabled>
                            </div>
                        </div>
                        <div>
                            <div class="col-12 p-0">
                                <label for="name">Mother's Name (ইংরেজীতে):</label>
                                <input type="text" value="{{ $collection->mother_name_eng }}" disabled>
                            </div>
                        </div>
                        <div>
                            <div class="col-12 p-0">
                                <label for="name">বর্তমান ঠিকানা:</label>
                                <input type="text" value="{{ $collection->present_address }}" disabled>
                            </div>
                        </div>
                        <div>
                            <div class="col-12 p-0">
                                <label for="name">স্থায়ী ঠিকানা:</label>
                                <input type="text" value="{{ $collection->parmanent_address }}" disabled>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-6">
                                <label for="number">ফোন/মোবাইল:</label>
                                <input type="text" value="{{ $collection->mobile_number }}" disabled>
                            <div class="col-md-6 ">
                                <label for="birthday">জন্ম তারিখ:</label>
                                <input type="text" value="{{ $collection->birth_date }}" disabled>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-6 ">
                                <label for="name">শিক্ষা প্রতিষ্ঠান:</label>
                                <input type="text" value="{{ $collection->school_name }}" disabled>
                            </div>
                            <div class="col-md-6 ">
                                <label for="name">শিফট:</label>
                                <input type="text" value="{{ $collection->shift }}" disabled>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-12 p-0 ">
                                <label for="name">Institution (ইংরেজীতে):</label>
                                <input type="text" value="{{ $collection->school_name_eng }}" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-lg-2">
                                <label for="name">শ্রেণি:</label>
                                <input type="text" value="{{ $collection->class_name }}" disabled>
                            </div>

                            <div class="col-md-2 ">
                                <label for="name">শাখা:</label>
                                <input type="text" value="{{ $collection->section_name }}" disabled>
                            </div>

                            <div class="col-md-3 ">
                                <label for="number">রোল নং:</label>
                                <input type="text" value="{{ $collection->roll_no }}" disabled>
                            </div>
                            <div class="col-md-2 col-lg-5 class_section">
                                <label>বিভাগ:</label>

                                <div>
                                    <input @if($collection->division == 0) checked @else disabled @endif value="0" type="radio">
                                    <label for="since" class="ps-1">বিজ্ঞান</label>
                                </div>

                                <div>
                                    <input @if($collection->division == 1) checked @else disabled @endif type="radio">
                                    <label for="comarc" class="ps-1">বাণিজ্য</label>
                                </div>

                                <div>
                                    <input  @if($collection->division == 2) checked @else disabled @endif type="radio">
                                    <label for="art" class="ps-1">মানবিক</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-10">উপরের কোন তথ্য ভুল থাকলে তথ্য সম্পাদনা করতে পারেন</div>
            <div class="col-md-2 col-lg-2">
                <button type="submit">
                    <div class="f_hader">
                        <a href="{{ route('user_edit', $collection->id) }}"><h3 class="reg_form_btn">তথ্য সম্পাদনা করুন</h3></a>
                    </div>
                </button>
            </div>
        </div>
    </div>


@endsection
    
