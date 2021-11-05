<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Smile Exam</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    @include('includes.style')
</head>

<body class="home1">
    <!--Preloader area start here-->
    <div class="book_preload">
        <div class="book">
            <div class="book__page"></div>
            <div class="book__page"></div>
            <div class="book__page"></div>
        </div>
    </div>
    <!--Preloader area end here-->

    <!--Full width header Start-->
    <div class="full-width-header">

        <!--Header Start-->
        @if (LaravelLocalization::getCurrentLocale() =='en')
        <header id="rs-header" class="rs-header">

            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="main-menu">
                        <div class="row">
                            <div class="col-sm-12"> 
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i></a>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                        <li class="current-menu-item current_page_item "> <a href="{{ route('home') }}" class="home">Home</a></li>
                                        <li> <a href="{{ route('allSubjects') }}">Subjects</a> </li>
                                        <li> <a href="{{ route('allInstructors') }}">Instructors</a> </li> 
                                        <li> <a href="{{ route('blogs') }}">Blogs</a> 
                                        <li> <a href="contact.html">Contact</a></li>
                                        <li> <a href="about.html">About Us</a> </li>
                                        <li> <a href="{{LaravelLocalization::getLocalizedURL('ar') }}">Arabic</a> </li>
                                        <li> <a href="{{LaravelLocalization::getLocalizedURL('en') }}">English</a>  </li>
                                    </ul>
                                </nav>
                                <div class="right-bar-icon rs-offcanvas-link text-right">
                                    <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal"
                                        href="#"><i class="fa fa-search"></i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        @else
        <header id="rs-header" class="rs-header">

            <!-- Menu Start -->
            <div class="menu-area menu-sticky" dir="rtl">
                <div class="container">
                    <div class="main-menu">
                        <div class="row"> 
                            <div class="col-sm-12" > 
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i></a>
                                <nav class="rs-menu " style="float: right">
                                    <ul class="nav-menu text-right">
                                        <li class="current-menu-item current_page_item ">
                                            <div class="right-bar-icon rs-offcanvas-link text-right">
                                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                        
                                                {{-- <a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a> --}}
                                            </div>
                                        
                                        </li>
                                        <!-- Home -->
                                        <li class="current-menu-item current_page_item right-bar-icon"> <a href="{{ route('home') }}" class="home">الرئيسية</a> </li>
                                        <li class="right-bar-icon"> <a href="{{ route('allSubjects') }}">المواد</a> </li>
                                        <li class="right-bar-icon"> <a href="{{ route('allInstructors') }}">الاساتذة</a> </li>
                                        <li class="right-bar-icon"> <a href="{{ route('blogs') }}">مقالات</a> </li>
                                        <li class="right-bar-icon"> <a href="contact.html">تواصل</a></li>
                                        <li class="right-bar-icon"> <a href="about.html">من نحن</a> </li>
                                        <li class="right-bar-icon"> <a href="{{LaravelLocalization::getLocalizedURL('ar') }}">عربية</a> </li>
                                        <li class="right-bar-icon"> <a href="{{LaravelLocalization::getLocalizedURL('en') }}">English</a>  </li>
                                        <li></li>
                                    </ul>
                                    
                                </nav>
                                
                            </div> 
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        @endif
        <!--Header End-->

    </div>
    <!--Full width header End-->

    <div class="container">
        @yield('content')
    </div>

    <!-- Footer Start -->
    <footer id="rs-footer" class="bg3 rs-footer" style="background:black">
        <div class="container">
            <!-- Footer Address -->
            <div>
                <div class="row footer-contact-desc">
                    <div class="col-md-4">
                        <div class="contact-inner">
                            <i class="fa fa-map-marker"></i>
                            <h4 class="contact-title">Address</h4>
                            <p class="contact-desc">
                                503 Old Buffalo Street<br>
                                Northwest #205, New York-3087
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-inner">
                            <i class="fa fa-phone"></i>
                            <h4 class="contact-title">Phone Number</h4>
                            <p class="contact-desc">
                                +3453-909-6565<br>
                                +2390-875-2235
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-inner">
                            <i class="fa fa-map-marker"></i>
                            <h4 class="contact-title">Email Address</h4>
                            <p class="contact-desc">
                                infoname@gmail.com<br>
                                www.yourname.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="about-widget">
                            <img src="{{ asset('assets/site/images/logo-footer.png') }}" alt="Footer Logo">
                            <p>We create Premium Html Themes for more than three years. Our team goal is to reunite the
                                elegance of unique.</p>
                            <p class="margin-remove">We create Unique and Easy To Use Flexible Html Themes.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <h5 class="footer-title">RECENT POSTS</h5>
                        <div class="recent-post-widget">
                            <div class="post-item">
                                <div class="post-date">
                                    <span>28</span>
                                    <span>June</span>
                                </div>
                                <div class="post-desc">
                                    <h5 class="post-title"><a href="#">While the lovely valley team work</a></h5>
                                    <span class="post-category">Keyword Analysis</span>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-date">
                                    <span>28</span>
                                    <span>June</span>
                                </div>
                                <div class="post-desc">
                                    <h5 class="post-title"><a href="#">I must explain to you how all this idea</a>
                                    </h5>
                                    <span class="post-category">Spoken English</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <h5 class="footer-title">OUR SITEMAP</h5>
                        <ul class="sitemap-widget">
                            <li class="active"><a href="index.html"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Home</a></li>
                            <li><a href="about.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                            <li><a href="courses.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses</a>
                            </li> 
                            <li><a href="blog.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog</a></li>
                             
                            <li><a href="teachers.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Instructors</a>
                            </li> 
                            <li><a href="contact.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a>
                            </li> 
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <h5 class="footer-title">NEWSLETTER</h5>
                        <p>Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>
                        <div style=" background-color: #ff3115; margin: 5px; padding: 5px; width: 50%;">
                            <a href="#" style="color: white !important" >Join Us</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <p>© 2018 <a href="#">RS Theme</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- Canvas Menu start -->
    <nav class="right_menu_togle">
        <div class="close-btn"><span id="nav-close" class="text-center">x</span></div>
        <div class="canvas-logo">
            <a href="index.html"><img src="{{ asset('assets/site/images/logo-white.png') }}" alt="logo"></a>
        </div> 
        <ul class="sidebarnav_menu list-unstyled main-menu">
            <!--Home Menu Start-->
            <li class="current-menu-item menu-item-has-children"><a href="#">Home</a>
                <ul class="list-unstyled">
                    <li class="sub-nav active"><a href="index.html">Home One<span class="icon"></span></a>
                    </li>
                    <li class="sub-nav"><a href="index2.html">Home Two<span class="icon"></span></a>
                    </li>
                    <li class="sub-nav"><a href="index3.html">Home Three<span
                                class="icon"></span></a></li>
                    <li class="sub-nav"><a href="index4.html">Home Four<span class="icon"></span></a>
                    </li>
                </ul>
            </li>
            <!--Home Menu End-->

            <!--About Menu Start-->
            <li class="menu-item-has-children"><a href="#">About Us</a>
                <ul class="list-unstyled">
                    <li class="sub-nav active"><a href="index.html">About One<span class="icon"></span></a>
                    </li>
                    <li class="sub-nav"><a href="index2.html">About Two<span class="icon"></span></a>
                    </li>
                    <li class="sub-nav"><a href="index3.html">About Three<span
                                class="icon"></span></a></li>
                </ul>
            </li>
            <!--About Menu End-->

            <!--Pages Menu Start-->
            <li class="menu-item-has-children"><a href="#">Pages</a>
                <ul class="list-unstyled">
                    <li class="sub-nav active"><a href="teachers.html">Teachers<span
                                class="icon"></span></a></li>
                    <li class="sub-nav"><a href="teachers-without-filter.html">Teachers Without Filter<span
                                class="icon"></span></a></li>
                    <li class="sub-nav"><a href="teachers-single.html">Teachers Single<span
                                class="icon"></span></a></li>
                    <li class="sub-nav"><a href="gallery.html">Gallery One<span
                                class="icon"></span></a></li>
                    <li class="sub-nav"><a href="gallery2.html">Gallery Two<span
                                class="icon"></span></a></li>
                    <li class="sub-nav"><a href="gallery3.html">Gallery Three<span
                                class="icon"></span></a></li>
                    <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="shop-details.html">Shop Details<span
                                class="icon"></span></a></li>
                    <li class="sub-nav"><a href="cart.html">Cart<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="error-404.html">Error 404<span
                                class="icon"></span></a></li>
                </ul>
            </li>
            <!--Pages Menu End-->

            <!--Courses Menu Star-->
            <li class="menu-item-has-children"><a href="#">Courses</a>
                <ul class="list-unstyled">
                    <li class="sub-nav"><a href="courses.html">Courses<span class="icon"></span></a>
                    </li>
                    <li class="sub-nav"><a href="courses2.html">Courses Two<span
                                class="icon"></span></a></li>
                    <li class="sub-nav"><a href="courses-details.html">Courses Details<span
                                class="icon"></span></a></li>
                </ul>
            </li>
            <!--Courses Menu End-->

            <!--Events Menu Star-->
            <li class="menu-item-has-children"><a href="#">Events</a>
                <ul class="list-unstyled">
                    <li class="sub-nav"><a href="events.html">Events<span class="icon"></span></a>
                    </li>
                    <li class="sub-nav"><a href="events-details.html">Events Details<span
                                class="icon"></span></a></li>
                </ul>
            </li>
            <!--Events Menu End-->

            <!--blog Menu Star-->
            <li class="menu-item-has-children"><a href="#">Blog</a>
                <ul class="list-unstyled">
                    <li class="sub-nav"><a href="blog.html">Blog<span class="icon"></span></a></li>
                    <li class="sub-nav"><a href="blog-details.html">Blog Details<span
                                class="icon"></span></a></li>
                </ul>
            </li>
            <!--blog Menu End-->
            <li><a href="contact.html">Contact<span class="icon"></span></a></li>
        </ul>
        <div class="search-wrap">
            <label class="screen-reader-text">Search for:</label>
            <input type="search" placeholder="Search..." name="s" class="search-input" value="">
            <button type="submit" value="Search"><i class="fa fa-search"></i></button>
        </div>
    </nav>
    <!-- Canvas Menu end -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="fa fa-close"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="eg: Computer Technology" type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->
    @include('includes.scripts')

</body>

</html>
