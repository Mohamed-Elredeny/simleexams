@extends('layouts.app')
@section('content')
    @if (LaravelLocalization::getCurrentLocale() == 'en')
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay"
            style="background-image: url({{ asset('assets/site/images/bg/bg3.jpg') }})">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="page-title">{{ $subject->title_en }}</h1>
                            <ul>
                                <li>
                                    <a class="active" href="{{ route('home') }}">Home</a>
                                </li>
                                <li>{{ $subject->title_en }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Courses Details Start -->
        <div class="rs-courses-details pt-100 pb-70">
            <div class="container">
                <div class="row mb-30">
                    <div class="col-lg-8 col-md-12">
                        <div class="detail-img">
                            <img src="{{ asset('assets/images/subjects/' . $subject->media->file) }}" alt="Courses Images"
                                style="height: 400px !important; width:100%" />
                            <div class="course-seats price">
                                {{ $subject->rate }} <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="course-meta-style">
                                    <li class="author">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/instructors/' . $instructors[0]->media->file) }}"
                                                width="60" alt="">
                                        </div>
                                        <div class="author-name">
                                            <a href="#">{{ $instructors[0]->name }}</a>
                                            <p>{{ $instructors[0]->degree }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        Reviews
                                        <div class="client-rating">
                                            <center>
                                                <div class="ratings">
                                                    <?php $remind = 5 - intval($subject->rate); ?>
                                                    @for ($i = 0; $i < intval($subject->rate); $i++)
                                                        <i class="fa fa-star star-fill"></i>
                                                    @endfor
                                                    @for ($i = 0; $i < $remind; $i++)
                                                        <i class="fa fa-star" style="color:black"></i>
                                                    @endfor
                                                </div>
                                            </center>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="course-des-tabs">
                                    <div class="tab-btm">
                                        <!-- Nav tabs -->
                                        <div class="tabs-wrapper">
                                            <ul class="nav classic-tabs tabs-cyan" role="tablist">
                                                <li class="nav-item" style="width: fit-content;">
                                                    <a class="nav-link waves-light active" data-toggle="tab" href="#panel51"
                                                        role="tab">Description</a>
                                                </li>
                                                <li class="nav-item" style="width: fit-content;">
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#curriculum"
                                                        role="tab">Sections</a>
                                                </li>

                                                <li class="nav-item" style="width: fit-content;">
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#curriculum2"
                                                        role="tab">Exams</a>
                                                </li>

                                                <li class="nav-item" style="width: fit-content;">
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#curriculum3"
                                                        role="tab">Questions Bank</a>
                                                </li>

                                                <li class="nav-item" style="width: fit-content;">
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#instructors"
                                                        role="tab">Instructors</a>
                                                </li>
                                                <li class="nav-item" style="width: fit-content;">
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#review"
                                                        role="tab">Review</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Tab panels -->
                                    <div class="tab-content card">
                                        <!--Panel 1-->
                                        <div class="tab-pane fade in active show" id="panel51" role="tabpanel">
                                            <h4 class="desc-title">Course Details</h4>
                                            <p> {{ $subject->description_en }} </p>
                                        </div>
                                        <!--/.Panel 1-->
                                        <!--Panel 2-->
                                        <div class="tab-pane fade " id="curriculum" role="tabpanel">
                                            <div class="course-syllabus">
                                                <h4 class="desc-title">SECTIONS</h4>
                                                <?php $i = 1; ?>
                                                @foreach ($subject->sections as $section)
                                                    <div id="accordion{{ $i }}" class="rs-accordion-style1">

                                                        <div class="card">
                                                            <div class="card-header" id="heading{{ $i }}">
                                                                <h3 class="acdn-title" data-toggle="collapse"
                                                                    data-target="#collapse{{ $i }}"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapse{{ $i }}">
                                                                    <strong>Section {{ $i }}: </strong>
                                                                    <span>{{ $section->name_en }}</span>
                                                                </h3>
                                                            </div>
                                                            <div id="collapse{{ $i }}" class="collapse "
                                                                aria-labelledby="heading{{ $i }}"
                                                                data-parent="#accordion{{ $i }}">
                                                                <div class="card-body">
                                                                    {{ $section->description_en }}
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <?php $i++; ?>
                                                @endforeach

                                            </div>
                                        </div>
                                        <!--/.Panel 2-->

                                        <!--Panel 2-->
                                        <div class="tab-pane fade " id="curriculum2" role="tabpanel">
                                            <div class="course-syllabus">
                                                <h4 class="desc-title mt-30">Exams</h4>
                                                <?php $i = 1; ?>
                                                @foreach ($subject->exams as $exam)
                                                    @if ($exam->type == 'exam')

                                                        <div id="accordiontTwo{{ $exam->id }}"
                                                            class="rs-accordion-style1">

                                                            <div class="card">
                                                                <div class="card-header" id="toty{{ $exam->id }}">
                                                                    <h3 class="acdn-title collapsed" data-toggle="collapse"
                                                                        data-target="#totyt{{ $exam->id }}"
                                                                        aria-expanded="false"
                                                                        aria-controls="totyt{{ $exam->id }}">
                                                                        <strong>Exam {{ $i }}:
                                                                        </strong><span>{{ $exam->name_en }}</span>
                                                                    </h3>
                                                                </div>
                                                                <div id="totyt{{ $exam->id }}" class="collapse"
                                                                    aria-labelledby="toty{{ $exam->id }}"
                                                                    data-parent="#accordiontTwo{{ $exam->id }}">
                                                                    <div class="card-body">
                                                                        Count Of Questions: {{ count($exam->questions) }}
                                                                        <center>
                                                                            <button class="btn"
                                                                                style="background:#ff3115;color: #fff">Enroll
                                                                                Now</button>
                                                                        </center>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php $i++; ?>
                                                    @endif
                                                @endforeach

                                            </div>
                                        </div>
                                        <!--/.Panel 2-->

                                        <!--Panel 2-->
                                        <div class="tab-pane fade " id="curriculum3" role="tabpanel">
                                            <div class="course-syllabus">
                                                <h4 class="desc-title mt-30">Questions Bank</h4>
                                                <?php $y = 1; ?>
                                                @foreach ($subject->exams as $exam)
                                                    @if ($exam->type == 'bank')

                                                        <div id="taccordiontTwo{{ $exam->id }}"
                                                            class="rs-accordion-style1">

                                                            <div class="card">
                                                                <div class="card-header" id="ttoty{{ $exam->id }}">
                                                                    <h3 class="acdn-title collapsed" data-toggle="collapse"
                                                                        data-target="#ttotyt{{ $exam->id }}"
                                                                        aria-expanded="false"
                                                                        aria-controls="ttotyt{{ $exam->id }}">
                                                                        <strong>Bank Question {{ $y }}:
                                                                        </strong><span>{{ $exam->name_en }}</span>
                                                                    </h3>
                                                                </div>
                                                                <div id="ttotyt{{ $exam->id }}" class="collapse"
                                                                    aria-labelledby="toty{{ $exam->id }}"
                                                                    data-parent="#taccordiontTwo{{ $exam->id }}">
                                                                    <div class="card-body">
                                                                        Count Of Questions: {{ count($exam->questions) }}
                                                                        <center>
                                                                            <button class="btn"
                                                                                style="background:#ff3115;color: #fff">Enroll
                                                                                Now</button>
                                                                        </center>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php $i++; ?>
                                                    @endif

                                                @endforeach

                                            </div>
                                        </div>
                                        <!--/.Panel 2-->

                                        <!--Panel 3-->
                                        <div class="tab-pane fade" id="instructors" role="tabpanel">
                                            <h4 class="desc-title mt-30">Instructors</h4>
                                            @foreach ($instructors as $instructor)
                                                <div class="instructor-list pt-5">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/images/instructors/' . $instructor->media->file) }}"
                                                            width="150" />
                                                    </div>
                                                    <div class="author-name">
                                                        <a href="#">
                                                            <h4>{{ $instructor->name }}</h4>
                                                        </a>
                                                        <span>{{ $instructor->degree }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!--/.Panel 3-->

                                        <!--Panel 4-->
                                        <div class="tab-pane fade" id="review" role="tabpanel">
                                            <h4 class="desc-title">Reviews</h4>
                                            @foreach ($subject->students as $student)
                                                <div class="instructor-list mt-15">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/images/students/' . $student->student->media->file) }}"
                                                            width="150" alt="">
                                                    </div>
                                                    <div class="author-name">
                                                        <div class="client-rating">
                                                            {{-- <div class="ratings"> --}}
                                                            <?php $remind = 5 - intval($student->rate); ?>
                                                            @for ($i = 0; $i < intval($student->rate); $i++)
                                                                <i class="fa fa-star star-fill"></i>
                                                            @endfor
                                                            @for ($i = 0; $i < $remind; $i++)
                                                                <i class="fa fa-star" style="color:black"></i>
                                                            @endfor
                                                            {{-- </div> --}}
                                                        </div>
                                                        <a>
                                                            <h4>{{ $student->student->name }}</h4>
                                                        </a>
                                                        <p>
                                                            {{ $student->rate_message }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                        <!--/.Panel 4-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar-area">
                            <div class="course-features-info">
                                <h4 class="desc-title">Course Features</h4>
                                <ul>
                                    <li><i class="fa fa-files-o"></i> <span class="label">Sections</span> <span
                                            class="value">{{ count($subject->sections) }}</span></li>
                                    <li><i class="fa fa-check-square-o"></i> <span class="label">Exams</span> <span
                                            class="value">{{ $i }}</span></li>
                                    <li><i class="fa fa-level-up"></i> <span class="label">Questions Bank</span>
                                        <span class="value">{{ $y }}</span>
                                    </li>
                                    <li><i class="fa fa-check-square-o"></i> <span
                                            class="label">Instructors</span> <span
                                            class="value">{{ count($instructors) }}</span></li>
                                    <li><i class="fa fa-users"></i> <span class="label">Students</span> <span
                                            class="value">{{ count($subject->students) }}</span></li>
                                </ul>
                            </div>

                            <div class="latest-courses">
                                <h3 class="title">Latest Subjects</h3>
                                @foreach ($subjectslimits as $subjectslimit)
                                    <div class="post-item">
                                        <div class="post-img">
                                            <a href="{{ route('subject', ['id' => $subjectslimit->id]) }}"><img
                                                    src="{{ asset('assets/images/subjects/' . $subjectslimit->media->file) }}"
                                                    alt="Courses Images" /></a>
                                        </div>
                                        <div class="post-desc">
                                            <h4><a
                                                    href="{{ route('subject', ['id' => $subjectslimit->id]) }}">{{ $subjectslimit->title_en }}</a>
                                            </h4>
                                            <div class="ratings">
                                                <?php $remind = 5 - intval($subjectslimit->rate); ?>
                                                @for ($z = 0; $z < intval($subjectslimit->rate); $z++)
                                                    <i class="fa fa-star star-fill" style="color: orange"></i>
                                                @endfor
                                                @for ($z = 0; $z < $remind; $z++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-45">
                <!-- Testimonial Start -->
                <div class="related-courses rs-courses-3">
                    <div class="sec-title-2 mb-50">
                        <h2>RELATED SUBJECTS</h2>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                        data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1500" data-nav="true"
                        data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-ipad-device="2"
                        data-ipad-device-nav="true" data-md-device="3" data-md-device-nav="true">
                        @foreach ($allSubjects as $allSubject)
                            <div class="course-item">
                                <div class="course-img">
                                    <img src="{{ asset('assets/images/subjects/' . $allSubject->media->file) }}"
                                        style="height: 250px !important;" alt="" />
                                    <span class="course-value">{{ $subject->rate }} <i class="fa fa-star"></i>
                                    </span>
                                    <div class="course-toolbar">

                                    </div>
                                </div>
                                <div class="course-body" style="height: 150px !important;">
                                    <div class="course-desc">
                                        <h4 class="course-title"><a
                                                href="{{ route('subject', ['id' => $subject->id]) }}">{{ $allSubject->title_en }}</a>
                                        </h4>
                                        <p>
                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

                                        <div class="desciptionn" style="display: none"><?php $x = html_entity_decode($allSubject->description_en); echo $x; ?></div>

                                        <div class="" id="dev{{ $allSubject->id }}"></div>
                                        <script>
                                            var divs = document.getElementsByClassName('desciptionn');
                                            if ($(".desciptionn").html().length > 300) {
                                                short_text = $(".desciptionn").html().substr(0, 300);
                                                $(".desciptionn").html(short_text + "...");
                                            }
                                            document.getElementById('dev' + {{ $allSubject->id }}).innerHTML = divs[0].textContent;
                                            divs[0].classList.remove("desciptionn");
                                        </script>
                                        </p>
                                    </div>
                                </div>
                                <div class="course-footer">
                                    <div class="course-seats">
                                        <i class="fa fa-users"></i> {{ count($allSubject->students) }} STUDENT
                                    </div>
                                    <div class="course-button">
                                        <a href="#">Enter NOW</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Details End -->

    @else
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="row" dir="rtl">
                        <div class="col-md-12 text-center">
                            <h1 class="page-title">Business Management</h1>
                            <ul>
                                <li>
                                    <a class="active" href="index.html">Home</a>
                                </li>
                                <li>Business Management</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Courses Details Start -->
        <div class="rs-courses-details pt-100 pb-70">
            <div class="container " dir="rtl">
                <div class="row mb-30 text-right" dir="rtl">
                    <div class="col-lg-8 col-md-12">
                        <div class="detail-img">
                            <img src="{{ asset('assets/site/images/courses/courses-details.jpg') }}"
                                alt="Courses Images" />
                            <div class="course-seats price">
                                $50.0
                            </div>
                            <div class="course-seats">
                                170 <span>SEATS</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="course-meta-style">
                                    <li class="author">
                                        <div class="image">
                                            <img src="{{ asset('assets/site/images/teachers/2.jpg') }}" width="60"
                                                alt="">
                                        </div>
                                        <div class="author-name">
                                            <a href="#">Alex Hilfisher</a>
                                            <p>Teacher</p>
                                        </div>
                                    </li>
                                    <li class="categories">
                                        <a href="#" class="course-name">Spoken English</a>
                                        <p>Categories</p>
                                    </li>
                                    <li>
                                        4 Reviews
                                        <div class="client-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                                aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                                aria-hidden="true"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <div class="btn-area">
                                    <a href="#">Enroll This Course</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="course-des-tabs">
                                    <div class="tab-btm">
                                        <!-- Nav tabs -->
                                        <div class="tabs-wrapper">
                                            <ul class="nav classic-tabs tabs-cyan" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link waves-light active" data-toggle="tab"
                                                        href="#curriculum" role="tab">Lessons</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link waves-light " data-toggle="tab" href="#panel51"
                                                        role="tab">Description</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#instructors"
                                                        role="tab">Instructors</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#review"
                                                        role="tab">Review</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Tab panels -->
                                    <div class="tab-content card">
                                        <!--Panel 1-->
                                        <div class="tab-pane fade " id="panel51" role="tabpanel">
                                            <h4 class="desc-title">Course Details</h4>
                                            <p>Donec lorem leo, gravida ut cursus et, ultrices non tortor. Duis vel
                                                venenatis ligula. Etiam hendrerit at urna ac tempus. Integer sagittis luctus
                                                tellus, eu molestie magna volutpat quis. Praesent ullamcorper faucibus quam.
                                                Nam sed facilisis neque. Etiam dictum dolor et volutpat malesuada. Aliquam
                                                molestie felis in justo feugiat semper. In magna arcu, luctus a nisl et,
                                                mollis ultricies sem. Etiam cursus mi eget tellus ultrices fermentum.
                                                Vestibulum tempor erat ac eros egestas rutrum.</p>

                                            <p>Aliquam pulvinar blandit eros, vel tempor tellus eleifend eget. Vestibulum
                                                ultricies egestas ante, eu consectetur leo pretium vel. Aliquam mollis dolor
                                                libero, ac sagittis velit dignissim at. Nulla a tellus eu enim porta
                                                posuere. Sed posuere at lectus ac fringilla.</p>
                                            <h4 class="desc-title">Requirements</h4>
                                            <ul class="requirements-list">
                                                <li>Lorem ipsum dolor sit elit</li>
                                                <li>Sed posuere at lectus ac fringilla</li>
                                                <li>Aliquam mollis dolor libero</li>
                                                <li>Sagittis velit dignissim</li>
                                                <li>Aliquam mollis dolor libero</li>
                                                <li>Lorem ipsum dolor sit elit</li>
                                                <li>consectetur adipisicing elit</li>
                                                <li>Lorem consectetur adipisicing elit</li>
                                                <li>pariatur. Tempora, placeat ratione</li>
                                                <li>Lorem consectetur adipisicing elit</li>
                                                <li>Nihil odit magnam minima</li>
                                                <li>Lorem ipsum dolor sit elit</li>
                                            </ul>
                                        </div>
                                        <!--/.Panel 1-->
                                        <!--Panel 2-->
                                        <div class="tab-pane fade in active show" id="curriculum" role="tabpanel">
                                            <div class="course-syllabus">
                                                <h4 class="desc-title">SECTION 1 : INTRODUCTION</h4>
                                                <div id="accordion" class="rs-accordion-style1">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne">
                                                            <h3 class="acdn-title" data-toggle="collapse"
                                                                data-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                <strong>Lessons 1: </strong>
                                                                <span>Computer Science And Engineering</span>
                                                            </h3>
                                                        </div>
                                                        <div id="collapseOne" class="collapse show"
                                                            aria-labelledby="headingOne" data-parent="#accordion">
                                                            <div class="card-body">
                                                                There are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered alteration in some
                                                                form,

                                                                <center>
                                                                    <button class="btn"
                                                                        style="background:#ff3115;color: #fff">View
                                                                        Details</button>
                                                                </center>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingTwo">
                                                            <h3 class="acdn-title collapsed" data-toggle="collapse"
                                                                data-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                <strong>Lessons 2: </strong><span>Business Management</span>
                                                            </h3>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse"
                                                            aria-labelledby="headingTwo" data-parent="#accordion">
                                                            <div class="card-body">
                                                                There are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered alteration in some
                                                                form,

                                                                <center>
                                                                    <button class="btn"
                                                                        style="background:#ff3115;color: #fff">View
                                                                        Details</button>
                                                                </center>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header mb-0" id="headingThree">
                                                            <h3 class="acdn-title collapsed" data-toggle="collapse"
                                                                data-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                <strong>Lessons 3: </strong>
                                                                <span>Civil Engineering</span>
                                                            </h3>
                                                        </div>
                                                        <div id="collapseThree" class="collapse"
                                                            aria-labelledby="headingThree" data-parent="#accordion">
                                                            <div class="card-body">
                                                                There are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered alteration in some
                                                                form,

                                                                <center>
                                                                    <button class="btn"
                                                                        style="background:#ff3115;color: #fff">View
                                                                        Details</button>
                                                                </center>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                                <h4 class="desc-title mt-30">SECTION 2 : COMPUTER SCIENCE AND ENGINEERING
                                                </h4>
                                                <div id="accordiontTwo" class="rs-accordion-style1">
                                                    <div class="card">
                                                        <div class="card-header" id="headingFour">
                                                            <h3 class="acdn-title collapsed" data-toggle="collapse"
                                                                data-target="#collapseFour" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                <strong>Lessons 4: </strong><span>Business Management</span>
                                                            </h3>
                                                        </div>
                                                        <div id="collapseFour" class="collapse"
                                                            aria-labelledby="headingFour" data-parent="#accordiontTwo">
                                                            <div class="card-body">
                                                                There are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered alteration in some
                                                                form,

                                                                <center>
                                                                    <button class="btn"
                                                                        style="background:#ff3115;color: #fff">View
                                                                        Details</button>
                                                                </center>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingFive">
                                                            <h3 class="acdn-title collapsed" data-toggle="collapse"
                                                                data-target="#collapseFive" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                <strong>Lessons 5: </strong><span>Business Management</span>
                                                            </h3>
                                                        </div>
                                                        <div id="collapseFive" class="collapse"
                                                            aria-labelledby="headingFive" data-parent="#accordiontTwo">
                                                            <div class="card-body">
                                                                There are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered alteration in some
                                                                form,

                                                                <center>
                                                                    <button class="btn"
                                                                        style="background:#ff3115;color: #fff">View
                                                                        Details</button>
                                                                </center>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingSix">
                                                            <h3 class="acdn-title collapsed" data-toggle="collapse"
                                                                data-target="#collapseSix" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                <strong>Lessons 6: </strong>
                                                                <span>Civil Engineering</span>
                                                            </h3>
                                                        </div>
                                                        <div id="collapseSix" class="collapse"
                                                            aria-labelledby="headingSix" data-parent="#accordiontTwo">
                                                            <div class="card-body">
                                                                There are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered alteration in some
                                                                form,

                                                                <center>
                                                                    <button class="btn"
                                                                        style="background:#ff3115;color: #fff">View
                                                                        Details</button>
                                                                </center>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingSeven">
                                                            <h3 class="acdn-title collapsed" data-toggle="collapse"
                                                                data-target="#collapseSeven" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                <strong>Lessons 7: </strong>
                                                                <span>Diploma Electrical</span>
                                                            </h3>
                                                        </div>
                                                        <div id="collapseSeven" class="collapse"
                                                            aria-labelledby="headingSeven" data-parent="#accordiontTwo">
                                                            <div class="card-body">
                                                                There are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered alteration in some
                                                                form,

                                                                <center>
                                                                    <button class="btn"
                                                                        style="background:#ff3115;color: #fff">View
                                                                        Details</button>
                                                                </center>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingEight">
                                                            <h3 class="acdn-title collapsed" data-toggle="collapse"
                                                                data-target="#collapseEight" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                <strong>Lessons 8: </strong>
                                                                <span>Bachelor of Arts</span>
                                                            </h3>
                                                        </div>
                                                        <div id="collapseEight" class="collapse"
                                                            aria-labelledby="headingEight" data-parent="#accordiontTwo">
                                                            <div class="card-body">
                                                                There are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered alteration in some
                                                                form,

                                                                <center>
                                                                    <button class="btn"
                                                                        style="background:#ff3115;color: #fff">View
                                                                        Details</button>
                                                                </center>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.Panel 2-->

                                        <!--Panel 3-->
                                        <div class="tab-pane fade" id="instructors" role="tabpanel">
                                            <div class="instructor-list">
                                                <div class="image">
                                                    <img src="{{ asset('assets/site/images/teachers/2.jpg') }}"
                                                        width="150" alt="">
                                                </div>
                                                <div class="author-name">
                                                    <a href="#">
                                                        <h4>John Doe</h4>
                                                    </a>
                                                    <span>Professor</span>
                                                    <div class="social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="dsc">There are many variations of passages of Lorem
                                                    Ipsum available, but the majority have suffered altera tion in some
                                                    form, by injected humour, or randomised words which don't look even
                                                    slightly believable. If you are going to use a passage of Lorem Ipsum
                                                </p>
                                            </div>
                                            <div class="instructor-list pt-45">
                                                <div class="image">
                                                    <img src="{{ asset('assets/site/images/teachers/9.jpg') }}"
                                                        width="150" alt="">
                                                </div>
                                                <div class="author-name">
                                                    <a href="#">
                                                        <h4>Nuhan Freddy</h4>
                                                    </a>
                                                    <span>Bachelor</span>
                                                    <div class="social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="dsc">There are many variations of passages of Lorem
                                                    Ipsum available, but the majority have suffered altera tion in some
                                                    form, by injected humour, or randomised words which don't look even
                                                    slightly believable. If you are going to use a passage of Lorem Ipsum
                                                </p>
                                            </div>
                                            <div class="instructor-list pt-45">
                                                <div class="image">
                                                    <img src="{{ asset('assets/site/images/teachers/6.jpg') }}"
                                                        width="150" alt="">
                                                </div>
                                                <div class="author-name">
                                                    <a href="#">
                                                        <h4>Naila Naime</h4>
                                                    </a>
                                                    <span>Bachelor</span>
                                                    <div class="social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="dsc">There are many variations of passages of Lorem
                                                    Ipsum available, but the majority have suffered altera tion in some
                                                    form, by injected humour, or randomised words which don't look even
                                                    slightly believable. If you are going to use a passage of Lorem Ipsum
                                                </p>
                                            </div>
                                        </div>
                                        <!--/.Panel 3-->

                                        <!--Panel 4-->
                                        <div class="tab-pane fade" id="review" role="tabpanel">
                                            <h4 class="desc-title">Reviews</h4>
                                            <div class="instructor-list">
                                                <div class="image">
                                                    <img src="{{ asset('assets/site/images/teachers/8.jpg') }}"
                                                        width="150" alt="">
                                                </div>
                                                <div class="author-name">
                                                    <div class="client-rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h4>Jesika Helan</h4>
                                                    </a>
                                                    <span>Bachelor</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered altera tion in some form, by injected
                                                        humour
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="instructor-list mt-15">
                                                <div class="image">
                                                    <img src="{{ asset('assets/site/images/teachers/7.jpg') }}"
                                                        width="150" alt="">
                                                </div>
                                                <div class="author-name">
                                                    <div class="client-rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h4>Alex Hilfisher</h4>
                                                    </a>
                                                    <span>Bachelor</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered altera tion in some form, by injected
                                                        humour
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="instructor-list mt-15">
                                                <div class="image">
                                                    <img src="{{ asset('assets/site/images/teachers/4.jpg') }}"
                                                        width="150" alt="">
                                                </div>
                                                <div class="author-name">
                                                    <div class="client-rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h4>Rhusda D’suza</h4>
                                                    </a>
                                                    <span>Bachelor</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered altera tion in some form, by injected
                                                        humour
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="instructor-list mt-15">
                                                <div class="image">
                                                    <img src="{{ asset('assets/site/images/teachers/7.jpg') }}"
                                                        width="150" alt="">
                                                </div>
                                                <div class="author-name">
                                                    <div class="client-rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i> <i
                                                            class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h4>Eyamin Hossen</h4>
                                                    </a>
                                                    <span>Bachelor</span>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered altera tion in some form, by injected
                                                        humour
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.Panel 4-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 text-right">
                        <div class="sidebar-area">
                            <div class="course-features-info">
                                <h4 class="desc-title">Course Features</h4>
                                <ul>
                                    <li><i class="fa fa-files-o"></i> <span class="label">Lectures</span> <span
                                            class="value">9</span></li>
                                    <li><i class="fa fa-clock-o"></i> <span class="label">Duration</span> <span
                                            class="value">1.5 hours</span></li>
                                    <li><i class="fa fa-level-up"></i> <span class="label">Skill level</span>
                                        <span class="value">All level</span>
                                    </li>
                                    <li><i class="fa fa-language"></i> <span class="label">Language</span> <span
                                            class="value">English</span></li>
                                    <li><i class="fa fa-users"></i> <span class="label">Students</span> <span
                                            class="value">560</span></li>
                                    <li><i class="fa fa-check-square-o"></i> <span
                                            class="label">Assessments</span> <span
                                            class="value">Yes</span></li>
                                </ul>
                            </div>
                            <div class="cate-box">
                                <h3 class="title"> Lessons</h3>
                                <ul>
                                    <li>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i> <a href="#">Learning
                                            Lessons<span>(05)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i> <a href="#">Video Reviews
                                            Lessons <span>(07)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i> <a href="#">Engineering Tech
                                            Lessons <span>(09)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i> <a href="#"> Righteous
                                            Indignation Lessons<span>(08)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i> <a href="#">General Education
                                            Lessons<span>(04)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="latest-courses">
                                <h3 class="title">Latest Courses</h3>
                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="courses-details.html"><img
                                                src="{{ asset('assets/site/images/blog-details/sm1.jpg') }}" alt=""
                                                title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="courses-details.html">Raken develops reporting The software</a></h4>
                                        <span class="duration">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 4 Years
                                        </span>
                                        <span class="price">Price: <span>$350</span></span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="courses-details.html"><img
                                                src="{{ asset('assets/site/images/blog-details/sm2.jpg') }}" alt=""
                                                title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="courses-details.html">Raken develops reporting The software</a></h4>
                                        <span class="duration">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 4 Years
                                        </span>
                                        <span class="price">Price: <span>$350</span></span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="courses-details.html"><img
                                                src="{{ asset('assets/site/images/blog-details/sm3.jpg') }}" alt=""
                                                title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="courses-details.html">Raken develops reporting The software</a></h4>
                                        <span class="duration">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 4 Years
                                        </span>
                                        <span class="price">Price: <span>$350</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tags-cloud clearfix">
                                <h3 class="title">courses Tags</h3>
                                <ul>
                                    <li>
                                        <a href="#">SCIENCE</a>
                                    </li>
                                    <li>
                                        <a href="#">HUMANITIES</a>
                                    </li>
                                    <li>
                                        <a href="#">DIPLOMA</a>
                                    </li>
                                    <li>
                                        <a href="#">BUSINESS</a>
                                    </li>
                                    <li>
                                        <a href="#">SPROTS</a>
                                    </li>
                                    <li>
                                        <a href="#">RESEARCH</a>
                                    </li>
                                    <li>
                                        <a href="#">ARTS</a>
                                    </li>
                                    <li>
                                        <a href="#">ADMISSIONS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-45">
                <!-- Testimonial Start -->
                <div class="related-courses rs-courses-3">
                    <div class="sec-title-2 mb-50 text-right">
                        <h2>RELATED COURSES</h2>
                        <p>Considering primary motivation for the generation of narratives is a useful concept</p>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                        data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1500" data-nav="true"
                        data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-ipad-device="2"
                        data-ipad-device-nav="true" data-md-device="3" data-md-device-nav="true">
                        <div class="course-item text-right">
                            <div class="course-img">
                                <img src="{{ asset('assets/site/images/courses/10.jpg') }}" alt="" />
                                <span class="course-value">$450</span>
                                <div class="course-toolbar">
                                    <h4 class="course-category"><a href="#">Science</a></h4>
                                    <div class="course-date">
                                        <i class="fa fa-calendar"></i> 28-06-2017
                                    </div>
                                    <div class="course-duration">
                                        <i class="fa fa-clock-o"></i> 4 year
                                    </div>
                                </div>
                            </div>
                            <div class="course-body">
                                <div class="course-desc">
                                    <h4 class="course-title"><a href="courses-details.html">Computer Engineering</a></h4>
                                    <p>
                                        Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean
                                        egestas a
                                        Nullam augue augue.
                                    </p>
                                </div>
                            </div>
                            <div class="course-footer">
                                <div class="course-seats">
                                    <i class="fa fa-users"></i> 70 SEATS
                                </div>
                                <div class="course-button">
                                    <a href="#">APPLY NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="course-item text-right">
                            <div class="course-img">
                                <img src="{{ asset('assets/site/images/courses/11.jpg') }}" alt="" />
                                <span class="course-value">$450</span>
                                <div class="course-toolbar">
                                    <h4 class="course-category"><a href="#">Business</a></h4>
                                    <div class="course-date">
                                        <i class="fa fa-calendar"></i> 28-06-2017
                                    </div>
                                    <div class="course-duration">
                                        <i class="fa fa-clock-o"></i> 4 year
                                    </div>
                                </div>
                            </div>
                            <div class="course-body">
                                <div class="course-desc">
                                    <h3 class="course-title"><a href="#">Business Management</a></h3>
                                    <p>
                                        Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean
                                        egestas a
                                        Nullam augue augue.
                                    </p>
                                </div>
                            </div>
                            <div class="course-footer">
                                <div class="course-seats">
                                    <i class="fa fa-users"></i> 70 SEATS
                                </div>
                                <div class="course-button">
                                    <a href="#">APPLY NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="course-item text-right">
                            <div class="course-img">
                                <img src="{{ asset('assets/site/images/courses/13.jpg') }}" alt="" />
                                <span class="course-value">$450</span>
                                <div class="course-toolbar">
                                    <h4 class="course-category"><a href="#">Diploma</a></h4>
                                    <div class="course-date">
                                        <i class="fa fa-calendar"></i> 28-06-2017
                                    </div>
                                    <div class="course-duration">
                                        <i class="fa fa-clock-o"></i> 4 year
                                    </div>
                                </div>
                            </div>
                            <div class="course-body">
                                <div class="course-desc">
                                    <h3 class="course-title"><a href="#">Diploma Electrical</a></h3>
                                    <p>
                                        Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean
                                        egestas a
                                        Nullam augue augue.
                                    </p>
                                </div>
                            </div>
                            <div class="course-footer">
                                <div class="course-seats">
                                    <i class="fa fa-users"></i> 70 SEATS
                                </div>
                                <div class="course-button">
                                    <a href="#">APPLY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Details End -->
    @endif
@endsection
