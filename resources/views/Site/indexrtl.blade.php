@extends('layouts.appRtl')
@section('content')
    <!-- Slider Area Start -->
    <div id="rs-slider" class="slider-overlay-2">
        <div id="home-slider">
            <!-- Item 1 -->
            @for($i=0;$i<10;$i++)
            @if($i == 0)
                <div class="item active">
                <img src="{{asset('assets/site/images/slider/home1/slide1.jpg')}}" alt="Slide1" />
                <div class="slide-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container text-center">
                                <h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">Subject Name</h1>
                                <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">
                                    Subject Description   Subject Description  Subject Description  Subject Description  Subject Description
                                    <br class="hidden-sm-dow">  Subject Description  Subject Description  Subject Description Subject Description.</p>
                                <a href="#" class="sl-readmore-btn mr-30" data-animation-in="lightSpeedIn" data-animation-out="animate-out">View Details</a>
                                <a href="#" class="sl-get-started-btn" data-animation-in="lightSpeedIn" data-animation-out="animate-out">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @else
                    <div class="item ">
                        <img src="{{asset('assets/site/images/slider/home1/slide1.jpg')}}" alt="Slide1" />
                        <div class="slide-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="container text-center">
                                        <h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">Subject Name</h1>
                                        <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">
                                            Subject Description   Subject Description  Subject Description  Subject Description  Subject Description
                                            <br class="hidden-sm-dow">  Subject Description  Subject Description  Subject Description Subject Description.</p>
                                        <a href="#" class="sl-readmore-btn mr-30" data-animation-in="lightSpeedIn" data-animation-out="animate-out">View Details</a>
                                        <a href="#" class="sl-get-started-btn" data-animation-in="lightSpeedIn" data-animation-out="animate-out">Enroll Now</a>
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
                        <div class="services-desc text-right" >
                            <h4 class="services-title">Trending Courses</h4>
                            <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-item rs-animation-hover">
                        <div class="services-icon">
                            <i class="fa fa-book rs-animation-scale-up"></i>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title">Books & Liberary</h4>
                            <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-item rs-animation-hover">
                        <div class="services-icon">
                            <i class="fa fa-user rs-animation-scale-up"></i>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title">Certified Teachers</h4>
                            <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-item rs-animation-hover">
                        <div class="services-icon">
                            <i class="fa fa-graduation-cap rs-animation-scale-up"></i>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title">Certification</h4>
                            <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
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
            <div class="abt-title text-right">
                <h2>OUR Subjects</h2>
            </div>
            <div class="gridFilter" style="text-align: right;
            direction: rtl;">
                <button class="active" data-filter="*">ALL</button>
                <button data-filter=".filter1">SCIENCE</button>
                <button data-filter=".filter2">BUSINESS</button>
                <button data-filter=".filter3">HUMANITIES</button>
                <button data-filter=".filter4">DIPLOMA</button>
            </div>
            <div class="row grid text-right">
                <div class="col-lg-4 col-md-6 grid-item filter1">
                    <div class="course-item">
                        <div class="course-img">
                            <img src="{{asset('assets/site/images/courses/10.jpg')}}" alt="" />
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
                                    Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
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
                <div class="col-lg-4 col-md-6 grid-item filter2">
                    <div class="course-item">
                        <div class="course-img">
                            <img src="{{asset('assets/site/images/courses/11.jpg')}}" alt="" />
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
                                <h3 class="course-title"><a href="courses-details.html">Business Management</a></h3>
                                <p>
                                    Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
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
                <div class="col-lg-4 col-md-6 grid-item filter4">
                    <div class="course-item">
                        <div class="course-img">
                            <img src="{{asset('assets/site/images/courses/12.jpg')}}" alt="" />
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
                                <h3 class="course-title"><a href="courses-details.html">Diploma Electrical</a></h3>
                                <p>
                                    Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
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
                <div class="col-lg-4 col-md-6 grid-item filter1">
                    <div class="course-item">
                        <div class="course-img">
                            <img src="{{asset('assets/site/images/courses/13.jpg')}}" alt="" />
                            <span class="course-value">$450</span>
                            <div class="course-toolbar">
                                <h4 class="course-category"><a href="courses-details.html">Science</a></h4>
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
                                <h4 class="course-title"><a href="courses-details.html">Civil Engineering</a></h4>
                                <p>
                                    Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
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
                <div class="col-lg-4 col-md-6 grid-item filter3">
                    <div class="course-item">
                        <div class="course-img">
                            <img src="{{asset('assets/site/images/courses/14.jpg')}}" alt="" />
                            <span class="course-value">$450</span>
                            <div class="course-toolbar">
                                <h4 class="course-category"><a href="courses-details.html">Humanities</a></h4>
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
                                <h3 class="course-title"><a href="#">Bachelor of Arts</a></h3>
                                <p>
                                    Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
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
                <div class="col-lg-4 col-md-6 grid-item filter2">
                    <div class="course-item">
                        <div class="course-img">
                            <img src="{{asset('assets/site/images/courses/15.jpg')}}" alt="" />
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
                                <h3 class="course-title"><a href="courses-details.html">Master of Business A.</a></h3>
                                <p>
                                    Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
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
                <div class="col-lg-4 col-md-6 grid-item filter4">
                    <div class="course-item">
                        <div class="course-img">
                            <img src="{{asset('assets/site/images/courses/16.jpg')}}" alt="" />
                            <span class="course-value">$350</span>
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
                                <h3 class="course-title"><a href="courses-details.html">Diploma in Computer</a></h3>
                                <p>
                                    Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
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
                <div class="col-lg-4 col-md-6 grid-item filter3 filter4">
                    <div class="course-item">
                        <div class="course-img">
                            <img src="{{asset('assets/site/images/courses/17.jpg')}}" alt="" />
                            <span class="course-value">$450</span>
                            <div class="course-toolbar">
                                <h4 class="course-category"><a href="courses-details.html">Humanities</a></h4>
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
                                <h4 class="course-title"><a href="#">Master of Arts</a></h4>
                                <p>
                                    Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
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
                <div class="col-lg-4 col-md-6 grid-item filter1">
                    <div class="course-item">
                        <div class="course-img">
                            <img src="{{asset('assets/site/images/courses/18.jpg')}}" alt="" />
                            <span class="course-value">$425</span>
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
                                <h3 class="course-title"><a href="courses-details.html">Electronics Engineering</a></h3>
                                <p>
                                    Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
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
            <nav aria-label="Page navigation example" style="float: right;">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a></li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link dotted" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>
                </ul>
            </nav>
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
                        <img src="{{asset('assets/site/images/about/about.jpg')}}" alt="img02"/>
                        <a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=tzMpWiGL8D8" title="Video Icon">
                        </a>
                        <div class="overly-border"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 text-right" >
                    <div class="about-desc">
                        <h3>WELCOME TO EDULEARN</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                    <div id="accordion" class="rs-accordion-style1">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Our History
                                </h3>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Our Mission
                                </h3>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header mb-0" id="headingThree">
                                <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Our Vision
                                </h3>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
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
                <h2>OUR EXPERIENCED STAFFS</h2>
                <p>Considering desire as primary motivation for the generation of narratives is a useful concept.</p>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/site/images/team/1.jpg')}}" alt="team Image" />
                        <div class="normal-text">
                            <h3 class="team-name">ABD Rashid Khan</h3>
                            <span class="subtitle">Vice Chancellor</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="overly-border"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h3 class="team-name"><a href="teachers-single.html">ABD Rashid Khan</a></h3>
                                <span class="team-title">Vice Chancellor</span>
                                <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                                <div class="team-social">
                                    <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/site/images/team/2.jpg')}}" alt="team Image" />
                        <div class="normal-text">
                            <h3 class="team-name">Luyes Figery</h3>
                            <span class="subtitle">A. Professor</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="overly-border"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h3 class="team-name"><a href="teachers-single.html">Luyes Figery</a></h3>
                                <span class="team-title">A. Professor</span>
                                <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                                <div class="team-social">
                                    <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/site/images/team/3.jpg')}}" alt="team Image" />
                        <div class="normal-text">
                            <h3 class="team-name">Mr. Mahabub Alam</h3>
                            <span class="subtitle">Assistant Professor</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="overly-border"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h3 class="team-name"><a href="teachers-single.html">Mr. Mahabub Alam</a></h3>
                                <span class="team-title">Assistant Professor</span>
                                <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                                <div class="team-social">
                                    <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Calltoaction Start -->
    <div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
        <div class="container">
            <div class="rs-cta-inner text-center">
                <div class="sec-title mb-50 text-center">
                    <h2 >WEB DESIGN &amp; DEVLOPMENT COURSE</h2>
                    <p >Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</p>
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
            <div class="row text-right" dir="rtl">
                <div class="col-md-6">
                    <div class="news-normal-block">
                        <div class="news-img">
                            <a href="#">
                                <img src="{{asset('assets/site/images/blog/1.jpg')}}" alt="" />
                            </a>
                        </div>
                        <div class="news-date">
                            <i class="fa fa-calendar-check-o"></i>
                            <span>June  28,  2017</span>
                        </div>
                        <h4 class="news-title"><a href="blog-details.html">Those Other College Expenses You Aren't Thinking About</a></h4>
                        <div class="news-desc">
                            <p>
                                Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
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
                                    <img src="{{asset('assets/site/images/blog/2.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="news-content">
                                <h5 class="news-title"><a href="blog-details.html">While the lovely valley team work</a></h5>
                                <div class="news-date">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <span>June  28,  2017</span>
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
                                    <img src="{{asset('assets/site/images/blog/3.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="news-content">
                                <h5 class="news-title"><a href="blog-details.html">I must explain to you how all this idea</a></h5>
                                <div class="news-date">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <span>June  28,  2017</span>
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
                                    <img src="{{asset('assets/site/images/blog/4pg')}}" alt="" />
                                </a>
                            </div>
                            <div class="news-content">
                                <h5 class="news-title"><a href="blog-details.html">I should be incapable of drawing a stroke</a></h5>
                                <div class="news-date">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <span>June  28,  2017</span>
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

@endsection
