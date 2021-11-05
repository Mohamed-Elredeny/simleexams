@extends('layouts.app')
@section('content')
    @if (LaravelLocalization::getCurrentLocale() == 'en')


    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs bg7 breadcrumbs-overlay"
         style="background-image: url({{ asset('assets/site/images/bg/bg3.jpg') }})">
        >
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">Contact</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{route('home')}}">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- .breadcrumbs-inner end -->
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="contact-page-section sec-spacer">
        <div class="container">
            <div class="row contact-address-section">
                <div class="col-md-4 pl-0">
                    <div class="contact-info contact-address">
                        <i class="fa fa-map-marker"></i>
                        <h4>Address</h4>
                        <p>503  Old Buffalo Street</p>
                        <p>Northwest #205, New York-3087</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info contact-phone">
                        <i class="fa fa-phone"></i>
                        <h4>Phone Number</h4>
                        <a href="tel:+3453-909-6565">+3453-909-6565</a>
                        <a href="tel:+2390-875-2235">+2390-875-2235</a>
                    </div>
                </div>
                <div class="col-md-4 pr-0">
                    <div class="contact-info contact-email">
                        <i class="fa fa-envelope"></i>
                        <h4>Email Address</h4>
                        <a href="mailto:infoname@gmail.com"><p>infoname@gmail.com</p></a>
                        <a href="#"><p>www.yourname.com</p></a>
                    </div>
                </div>
            </div>

            <div class="contact-comment-section">
                <h3>Leave Comment</h3>
                <div id="form-messages"></div>
                <form id="contact-form" method="post" action="{{route('site.contact')}}" >
                    @csrf
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>First Name*</label>
                                    <input name="fname" id="fname" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Last Name*</label>
                                    <input name="lname" id="lname" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input name="email" id="email" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Subject *</label>
                                    <input name="msubject" id="subject" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Message *</label>
                                    <textarea cols="40" rows="10" id="message" name="mmessage" class="textarea form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <input class="btn-send" type="submit" value="Submit Now">
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->


    @else

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay"
             style="background-image: url({{ asset('assets/site/images/bg/bg3.jpg') }})">
            >
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="page-title">Contact</h1>
                            <ul>

                                <li>تواصل معنا</li>
                                <li>
                                    <a class="active" href="{{route('home')}}">الرئيسية</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- .breadcrumbs-inner end -->
        </div>
        <!-- Breadcrumbs End -->

        <!-- Contact Section Start -->
        <div class="contact-page-section sec-spacer">
            <div class="container">
                <div class="row contact-address-section">
                    <div class="col-md-4 pl-0">
                        <div class="contact-info contact-address">
                            <i class="fa fa-map-marker"></i>
                            <h4>العنوان</h4>
                            <p>503  Old Buffalo Street</p>
                            <p>Northwest #205, New York-3087</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info contact-phone">
                            <i class="fa fa-phone"></i>
                            <h4>رقم الهاتف</h4>
                            <a href="tel:+3453-909-6565">+3453-909-6565</a>
                            <a href="tel:+2390-875-2235">+2390-875-2235</a>
                        </div>
                    </div>
                    <div class="col-md-4 pr-0">
                        <div class="contact-info contact-email">
                            <i class="fa fa-envelope"></i>
                            <h4>البريد الإلكتروني</h4>
                            <a href="mailto:infoname@gmail.com"><p>infoname@gmail.com</p></a>
                            <a href="#"><p>www.yourname.com</p></a>
                        </div>
                    </div>
                </div>

                <div class="contact-comment-section" style="direction:rtl;text-align:right">
                    <h3>تواصل معنا </h3>
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="{{route('site.contact')}}" >
                        @csrf
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>الاسم الاول</label>
                                        <input name="fname" id="fname" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>الاسم الاخير</label>
                                        <input name="lname" id="lname" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>البريد الإلكتروني</label>
                                        <input name="email" id="email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>اسم المادة</label>
                                        <input name="msubject" id="subject" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>الموضوع</label>
                                        <textarea cols="40" rows="10" id="message" name="mmessage" class="textarea form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <input class="btn-send" type="submit" value="تاكيد الان">
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

    @endif

@endsection



