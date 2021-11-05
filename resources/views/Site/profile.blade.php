@extends('layouts.app')
@section('content')
    @if (LaravelLocalization::getCurrentLocale() == 'en')

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="background-image: url({{ asset('assets/site/images/bg/bg3.jpg') }})">

            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="page-title">Profile Page </h1>
                            <ul>
                                <li>
                                    <a class="active" href="{{route('home')}}">Home</a>
                                </li>
                                <li>Profile Page</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumbs End -->

        <!-- Team Single Start -->
        <div class="rs-team-single pt-100">
            <div class="container">
                <div class="row team">
                    <div class="col-lg-4 col-md-12">
                        <div class="team-photo mobile-mb-40">
                            <img src="{{asset('assets/images/users/'. Auth::guard('student')->user()->media->file)}}" alt="Team1">
                            <h3 class="team-name">
                                {{Auth::guard('student')->user()->name}}
                            </h3>

                            <p class="team-contact">
                                <i class="fa fa-mobile"></i> {{Auth::guard('student')->user()->phone}} <i class="ml-15 fa fa-envelope-o"></i>
                                {{Auth::guard('student')->user()->email}}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <!-- Team Start -->
                        <div id="rs-team-2" class="rs-team-2 team-page sec-spacer">
                            <div class="container">
                                <div class="gridFilter">
                                    <button class="active" data-filter="*">ALL</button>
                                    <button data-filter=".filter1">SCIENCE</button>
                                    <button data-filter=".filter2">BUSINESS STUDIES</button>
                                    <button data-filter=".filter3">ARTS</button>
                                    <button data-filter=".filter4">DIPLOMA</button>
                                </div>
                                <div class="row grid">
                                    <div class="col-lg-4  grid-item filter1">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <a href="#"><img src="{{ asset('assets/site/images/bg/bg3.jpg') }}" alt="" style="height: 200px" /></a>
                                                <div class="social-icon">
                                                    <a href="#">View Certificate</a>
                                                    <br>
                                                    <a href="#">ReEnter Exam</a>

                                                </div>
                                            </div>
                                            <div class="team-body">
                                                <a href="teachers-single.html"><h3 class="name">Md. Abdur Rahid</h3></a>
                                                <span class="designation">Science</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4  grid-item filter2">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <a href="#"><img src="{{ asset('assets/site/images/bg/bg3.jpg') }}" alt="" style="height: 200px" /></a>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team-body">
                                                <a href="teachers-single.html"><h3 class="name">Mahabub Alam</h3></a>
                                                <span class="designation">Business Studies</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4  grid-item filter3">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <a href="#"><img src="{{ asset('assets/site/images/bg/bg3.jpg') }}" alt="" style="height: 200px" /></a>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team-body">
                                                <a href="teachers-single.html"><h3 class="name">Jesika Helan</h3></a>
                                                <span class="designation">Arts</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4  grid-item filter4">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <a href="#"><img src="{{ asset('assets/site/images/bg/bg3.jpg') }}" alt="" /></a>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team-body">
                                                <a href="teachers-single.html"><h3 class="name">Deluar Khan</h3></a>
                                                <span class="designation">Diploma</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4  grid-item filter1">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <a href="#"><img src="{{ asset('assets/site/images/bg/bg3.jpg') }}" alt="" /></a>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team-body">
                                                <a href="teachers-single.html"><h3 class="name">Alex Hilfisher</h3></a>
                                                <span class="designation">Science</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4  grid-item filter2">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <a href="#"><img src="images/teachers/6.jpg" alt="" /></a>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team-body">
                                                <a href="teachers-single.html"><h3 class="name">Naila Naime</h3></a>
                                                <span class="designation">Business Studies</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4  grid-item filter3">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <a href="#"><img src="images/teachers/7.jpg" alt="" /></a>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team-body">
                                                <a href="teachers-single.html"><h3 class="name">Shoykot Hassan</h3></a>
                                                <span class="designation">Arts</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4  grid-item filter4">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <a href="#"><img src="images/teachers/8.jpg" alt="" /></a>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team-body">
                                                <a href="teachers-single.html"><h3 class="name">Eyamin Hossain</h3></a>
                                                <span class="designation">Diploma</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4  grid-item filter1">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <a href="#"><img src="images/teachers/9.jpg" alt="" /></a>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team-body">
                                                <a href="teachers-single.html"><h3 class="name">Nuhan Freddy</h3></a>
                                                <span class="designation">Science</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4  grid-item filter2">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <a href="#"><img src="images/teachers/10.jpg" alt="" /></a>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team-body">
                                                <a href="teachers-single.html"><h3 class="name">Istiak Hossain</h3></a>
                                                <span class="designation">Business Studies</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 grid-item filter3">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <a href="#"><img src="images/teachers/11.jpg" alt="" /></a>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team-body">
                                                <a href="teachers-single.html"><h3 class="name">Rhusda D’suza</h3></a>
                                                <span class="designation">Arts</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4  grid-item filter4">
                                        <div class="team-item">
                                            <div class="team-img">
                                                <a href="#"><img src="images/teachers/12.jpg" alt="" /></a>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team-body">
                                                <a href="teachers-single.html"><h3 class="name">Masud Rana</h3></a>
                                                <span class="designation">Diploma</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation example">
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
                        <!-- Team End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Team Single End -->

        <br><br>


    @else


    @endif

@endsection



