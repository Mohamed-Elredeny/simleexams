@extends('layouts.app')
@section('content')
    @if (LaravelLocalization::getCurrentLocale() == 'en')
        <!-- Slider Area Start -->
        <div id="rs-slider" class="slider-overlay-2">
            <div id="home-slider">
                <!-- Item 1 -->
                @for ($i = 0; $i < count($subjects); $i++)
                    @if ($i == 0)
                        <div class="item active">
                            <img src="{{ asset('assets/images/subjects/'.$subjects[$i]->media->file) }}" alt="Slide1" style="height: 470px !important;"/>
                            <div class="slide-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="container text-center">
                                            <h1 class="slider-title" data-animation-in="fadeInLeft"
                                                data-animation-out="animate-out">{{$subjects[$i]->title_en}}</h1>
                                            <p data-animation-in="fadeInUp" data-animation-out="animate-out"
                                                class="slider-desc">
                                                {{$subjects[$i]->description_en}}
                                            </p>
                                            <a href="#" class="sl-readmore-btn mr-30" data-animation-in="lightSpeedIn"
                                                data-animation-out="animate-out">View Details</a>
                                            <a href="#" class="sl-get-started-btn" data-animation-in="lightSpeedIn"
                                                data-animation-out="animate-out">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="item ">
                            <img src="{{ asset('assets/images/subjects/'.$subjects[$i]->media->file) }}" alt="Slide1" style="height: 470px !important;"/>
                            <div class="slide-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="container text-center">
                                            <h1 class="slider-title" data-animation-in="fadeInLeft"
                                                data-animation-out="animate-out">{{$subjects[$i]->title_en}}</h1>
                                            <p data-animation-in="fadeInUp" data-animation-out="animate-out"
                                                class="slider-desc">
                                                {{$subjects[$i]->description_en}}
                                            </p>
                                            <a href="#" class="sl-readmore-btn mr-30" data-animation-in="lightSpeedIn"
                                                data-animation-out="animate-out">View Details</a>
                                            <a href="#" class="sl-get-started-btn" data-animation-in="lightSpeedIn"
                                                data-animation-out="animate-out">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor


            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Services Start -->
        <div class="rs-services rs-services-style1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item rs-animation-hover">
                            <div class="services-icon">
                                <i class="fa fa-american-sign-language-interpreting rs-animation-scale-up"></i>
                            </div>
                            <div class="services-desc">
                                <h4 class="services-title">Exams and evaluation</h4>
                                <p>The Exam and display the results after completion and show your weaknesses in the test and the most section that must be reviewed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item rs-animation-hover">
                            <div class="services-icon">
                                <i class="fa fa-book rs-animation-scale-up"></i>
                            </div>
                            <div class="services-desc">
                                <h4 class="services-title">Question bank</h4>
                                <p>A question bank to test your level that contains many questions and can be prepared and displayed in a random manner and errors are known</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item rs-animation-hover">
                            <div class="services-icon">
                                <i class="fa fa-user rs-animation-scale-up"></i>
                            </div>
                            <div class="services-desc">
                                <h4 class="services-title">Blogs</h4>
                                <p>Lots of articles to increase knowledge, experience and scientific culture</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item rs-animation-hover">
                            <div class="services-icon">
                                <i class="fa fa-graduation-cap rs-animation-scale-up"></i>
                            </div>
                            <div class="services-desc">
                                <h4 class="services-title">Monitoring and evaluation</h4>
                                <p>You can follow your level and weaknesses in the tests by displaying the results of all previous exams and your mistakes in them</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Courses Start -->
        <div id="rs-courses-3" class="rs-courses-3 sec-spacer">
            <div class="container">
                <div class="abt-title">
                    <h2>OUR Subjects</h2>
                </div> 
                <div class="row grid">
                    @foreach ($subjects as $subject)
                    <div class="col-lg-4 col-md-6 grid-item" >
                        <div class="course-item">
                            <div class="course-img">
                                <img src="{{ asset('assets/images/subjects/'.$subject->media->file) }}" alt="" style="height: 250px !important;"/>
                                <span class="course-value">{{$subject->rate}} <i class="fa fa-star"></i> </span>
                                <div class="course-toolbar"> 
                                </div>
                            </div>
                            <div class="course-body" style="height: 150px !important;">
                                <div class="course-desc">
                                    <h4 class="course-title"><a href="courses-details.html">{{$subject->title_en}}</a></h4>
                                    <p>
                                        {{$subject->description_en}}
                                    </p>
                                </div>
                            </div>
                            <div class="course-footer">
                                <div class="course-seats">
                                    {{-- <i class="fa fa-users"></i> 70 SEATS --}}
                                </div>
                                <div class="course-button">
                                    <a href="#">Enter NOW</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- Courses End -->
        <!-- Courses End -->

        <!-- About Us Start -->
        <div id="rs-about" class="rs-about sec-spacer">
            <div class="container">
                <div class="sec-title mb-50 text-center">
                    <h2>ABOUT US</h2>
                    <p>Fusce sem dolor, interdum in fficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img rs-animation-hover">
                            <img src="{{ asset('assets/site/images/about/about.jpg') }}" alt="img02" />
                            <a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=tzMpWiGL8D8"
                                title="Video Icon">
                            </a>
                            <div class="overly-border"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-desc">
                            <h3>WELCOME TO EDULEARN</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua</p>
                        </div>
                        <div id="accordion" class="rs-accordion-style1">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Our History
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Our Mission
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header mb-0" id="headingThree">
                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Our Vision
                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us End -->

        <!-- Team Start -->
        <div id="rs-team" class="rs-team sec-color sec-spacer">
            <div class="container">
                <div class="sec-title mb-50 text-center">
                    <h2>OUR EXPERIENCED Instructors</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                    data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true"
                    data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
                    data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
                    data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                    @foreach ($instructors as $instructor)
                        
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/instructors/'.$instructor->media->file) }}" style="height: 370px !important;"/>
                            <div class="normal-text">
                                <h3 class="team-name">{{$instructor->name}}</h3>
                                <span class="subtitle">{{$instructor->degree}}</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single.html">{{$instructor->name}}</a></h3>
                                    <span class="team-title">{{$instructor->degree}}</span> 
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Calltoaction Start -->
        <div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
            <div class="container">
                <div class="rs-cta-inner text-center">
                    <div class="sec-title mb-50 text-center">
                        <h2 class="white-color">WEB DESIGN &amp; DEVLOPMENT COURSE</h2>
                        <p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</p>
                    </div>
                    <a class="cta-button" href="#">Join Now</a>
                </div>
            </div>
        </div>
        <!-- Calltoaction End -->

        <!-- Latest News Start -->
        <div id="rs-latest-news" class="rs-latest-news sec-spacer">
            <div class="container">
                <div class="sec-title mb-50 text-center">
                    <h2>OUR LASTEST NEWS</h2>
                    <p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="news-normal-block">
                            <div class="news-img">
                                <a href="#">
                                    <img src="{{ asset('assets/site/images/blog/1.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="news-date">
                                <i class="fa fa-calendar-check-o"></i>
                                <span>June 28, 2017</span>
                            </div>
                            <h4 class="news-title"><a href="blog-details.html">Those Other College Expenses You Aren't
                                    Thinking About</a></h4>
                            <div class="news-desc">
                                <p>
                                    Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem
                                    the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
                                </p>
                            </div>
                            <div class="news-btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-list-block">
                            <div class="news-list-item">
                                <div class="news-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/site/images/blog/2.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="news-content">
                                    <h5 class="news-title"><a href="blog-details.html">While the lovely valley team
                                            work</a></h5>
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>June 28, 2017</span>
                                    </div>
                                    <div class="news-desc">
                                        <p>
                                            Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="news-list-item">
                                <div class="news-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/site/images/blog/3.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="news-content">
                                    <h5 class="news-title"><a href="blog-details.html">I must explain to you how all
                                            this idea</a></h5>
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>June 28, 2017</span>
                                    </div>
                                    <div class="news-desc">
                                        <p>
                                            Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="news-list-item">
                                <div class="news-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/site/images/blog/4pg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="news-content">
                                    <h5 class="news-title"><a href="blog-details.html">I should be incapable of drawing
                                            a stroke</a></h5>
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>June 28, 2017</span>
                                    </div>
                                    <div class="news-desc">
                                        <p>
                                            Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest News End -->
    @else
        <!-- Slider Area Start -->
        <div id="rs-slider" class="slider-overlay-2">
            <div id="home-slider">
                <!-- Item 1 -->
                @for ($i = 0; $i < count($subjects); $i++)
                    @if ($i == 0)
                        <div class="item active">
                            <img src="{{ asset('assets/images/subjects/'.$subjects[$i]->media->file) }}" alt="Slide1" style="height: 470px !important;"/>
                            <div class="slide-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="container text-center">
                                            <h1 class="slider-title" data-animation-in="fadeInLeft"
                                                data-animation-out="animate-out">{{$subjects[$i]->title_ar}}</h1>
                                            <p data-animation-in="fadeInUp" data-animation-out="animate-out"
                                                class="slider-desc">
                                                {{$subjects[$i]->description_ar}}
                                            </p>
                                            <a href="#" class="sl-readmore-btn mr-30" data-animation-in="lightSpeedIn"
                                                data-animation-out="animate-out">عرض التفاصيل</a>
                                            <a href="#" class="sl-get-started-btn" data-animation-in="lightSpeedIn"
                                                data-animation-out="animate-out">اشترك الان</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="item ">
                            <img src="{{ asset('assets/images/subjects/'.$subjects[$i]->media->file) }}" alt="Slide1" style="height: 470px !important;"/>
                            <div class="slide-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="container text-center">
                                            <h1 class="slider-title" data-animation-in="fadeInLeft"
                                                data-animation-out="animate-out">{{$subjects[$i]->title_ar}}</h1>
                                            <p data-animation-in="fadeInUp" data-animation-out="animate-out"
                                                class="slider-desc">
                                                {{$subjects[$i]->description_ar}}
                                            </p>
                                            <a href="#" class="sl-readmore-btn mr-30" data-animation-in="lightSpeedIn"
                                                data-animation-out="animate-out">عرض التفاصيل</a>
                                            <a href="#" class="sl-get-started-btn" data-animation-in="lightSpeedIn"
                                                data-animation-out="animate-out">اشترك الان</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor


            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Services Start -->
        <div class="rs-services rs-services-style1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item rs-animation-hover">
                            <div class="services-icon">
                                <i class="fa fa-american-sign-language-interpreting rs-animation-scale-up"></i>
                            </div>
                            <div class="services-desc text-center">
                                <h4 class="services-title">اختبارات و تقيم</h4>
                                <p>الاختبار و عرض النتائج بعد الانتهاء و عرض نقاط ضعفك في الاختبار واكثر قسم يجب مراجعته</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item rs-animation-hover">
                            <div class="services-icon">
                                <i class="fa fa-book rs-animation-scale-up"></i>
                            </div>
                            <div class="services-desc">
                                <h4 class="services-title">بنك اسئلة</h4>
                                <p>بنك اسئله لاختبار مستواك يحتوي علي العديد من الاسئلة و يمكن اعداته و عرض الاسئلة بطريقة عشوائية و معرفة الاخطاء</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item rs-animation-hover">
                            <div class="services-icon">
                                <i class="fa fa-user rs-animation-scale-up"></i>
                            </div>
                            <div class="services-desc">
                                <h4 class="services-title">المقالات</h4>
                                <p>الكثير من المقالات لزيادة المعرفة و الخبره و الثقافة العلمية</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item rs-animation-hover">
                            <div class="services-icon">
                                <i class="fa fa-graduation-cap rs-animation-scale-up"></i>
                            </div>
                            <div class="services-desc">
                                <h4 class="services-title">المتابعة و التقيم</h4>
                                <p>تستطيع متابعة مستواك و نقاط ضعفك في الاختبارات من خلال عرض نتائج كل الامتحانات السابقة و اخطائك بهما</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Courses Start -->
        <div id="rs-courses-3" class="rs-courses-3 sec-spacer" dir="rtl">
            <div class="container">
                <div class="abt-title text-right">
                    <h2>المواد</h2>
                </div> 
                <div class="row  text-right" dir="rtl">
                @foreach ($subjects as $subject)
                    <div class="col-lg-4 col-md-6 grid-item ">
                        <div class="course-item">
                            <div class="course-img">
                                <img src="{{ asset('assets/images/subjects/'.$subject->media->file) }}" alt="" style="height: 250px !important;"/>
                                <span class="course-value">{{$subject->rate}} <i class="fa fa-star"></i> </span>
                                <div class="course-toolbar"> 
                                </div>
                            </div>
                            <div class="course-body" style="height: 150px !important;">
                                <div class="course-desc">
                                    <h4 class="course-title"><a href="courses-details.html">{{$subject->title_ar}}</a></h4>
                                    <p>
                                        {{$subject->description_ar}}
                                    </p>
                                </div>
                            </div>
                            <div class="course-footer">
                                <div class="course-seats">
                                    {{-- <i class="fa fa-users"></i> 70 SEATS --}}
                                </div>
                                <div class="course-button">
                                    <a href="#">دخول الان</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                @endforeach
                </div>
                
            </div>
        </div>
        <!-- Courses End -->
        <!-- Courses End -->

        <!-- About Us Start -->
        <div id="rs-about" class="rs-about sec-spacer">
            <div class="container">
                <div class="sec-title mb-50 text-center">
                    <h2>ABOUT US</h2>
                    <p>Fusce sem dolor, interdum in fficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
                </div>
                <div class="row" dir="rtl">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img rs-animation-hover">
                            <img src="{{ asset('assets/site/images/about/about.jpg') }}" alt="img02" />
                            <a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=tzMpWiGL8D8"
                                title="Video Icon">
                            </a>
                            <div class="overly-border"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 text-right">
                        <div class="about-desc">
                            <h3>WELCOME TO EDULEARN</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua</p>
                        </div>
                        <div id="accordion" class="rs-accordion-style1">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Our History
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Our Mission
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header mb-0" id="headingThree">
                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Our Vision
                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us End -->

        <!-- Team Start -->
        <div id="rs-team" class="rs-team sec-color sec-spacer">
            <div class="container">
                <div class="sec-title mb-50 text-center">
                    <h2>أساتذاتنا</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                    data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true"
                    data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
                    data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
                    data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                    @foreach ($instructors as $instructor)
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/instructors/'.$instructor->media->file) }}" style="height: 370px !important;"/>
                                <div class="normal-text">
                                    <h3 class="team-name">{{$instructor->name}}</h3>
                                    <span class="subtitle">{{$instructor->degree}}</span>
                                </div>
                            </div>
                            <div class="team-content">
                                <div class="overly-border"></div>
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <h3 class="team-name"><a href="teachers-single.html">{{$instructor->name}}</a></h3>
                                        <span class="team-title">{{$instructor->degree}}</span> 
                                    </div>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Latest News Start -->
        <div id="rs-latest-news" class="rs-latest-news sec-spacer">
            <div class="container">
                <div class="sec-title mb-50 text-center">
                    <h2>OUR LASTEST Blogs</h2>
                    <p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
                </div>
                <div class="row text-right" dir="rtl">
                    <div class="col-md-6">
                        <div class="news-normal-block">
                            <div class="news-img">
                                <a href="#">
                                    <img src="{{ asset('assets/site/images/blog/1.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="news-date">
                                <i class="fa fa-calendar-check-o"></i>
                                <span>June 28, 2017</span>
                            </div>
                            <h4 class="news-title"><a href="blog-details.html">Those Other College Expenses You Aren't
                                    Thinking About</a></h4>
                            <div class="news-desc">
                                <p>
                                    Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem
                                    the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
                                </p>
                            </div>
                            <div class="news-btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-list-block">
                            <div class="news-list-item">
                                <div class="news-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/site/images/blog/2.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="news-content">
                                    <h5 class="news-title"><a href="blog-details.html">While the lovely valley team
                                            work</a></h5>
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>June 28, 2017</span>
                                    </div>
                                    <div class="news-desc">
                                        <p>
                                            Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="news-list-item">
                                <div class="news-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/site/images/blog/3.jpg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="news-content">
                                    <h5 class="news-title"><a href="blog-details.html">I must explain to you how all
                                            this idea</a></h5>
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>June 28, 2017</span>
                                    </div>
                                    <div class="news-desc">
                                        <p>
                                            Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="news-list-item">
                                <div class="news-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/site/images/blog/4pg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="news-content">
                                    <h5 class="news-title"><a href="blog-details.html">I should be incapable of drawing
                                            a stroke</a></h5>
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>June 28, 2017</span>
                                    </div>
                                    <div class="news-desc">
                                        <p>
                                            Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
