@extends('layouts.app')
@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Computer Science And Engineering</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Computer Science And Engineering</li>
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
                    <img src="{{asset('assets/site/images/courses/courses-details.jpg')}}" alt="Courses Images" />
                    <div class="course-seats">
                        170 <span>SEATS</span>
                    </div>
                </div>

                <div class="course-desc">
                    <div class="course-syllabus">
                        <h3 class="desc-title">Lesson Syllabus</h3>
                        <div id="accordion" class="rs-accordion-style1">
                            <div class="card">
                                <a href="" target="_blank">
                                    <div class="card-header" >
                                        <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <strong>Exams </strong>
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="" target="_blank">
                                    <div class="card-header" >
                                        <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <strong>Questions bank  </strong>
                                        </h3>
                                    </div>
                                </a>
                            </div>

                            <div class="card">
                                <a href="" target="_blank">
                                    <div class="card-header" >
                                        <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <strong>Gallery</strong>
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="" target="_blank">
                                    <div class="card-header" >
                                        <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <strong>Files</strong>
                                        </h3>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <h3 class="desc-title">Lesson Description</h3>
                    <div class="desc-text">
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera tion in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum
                        </p>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera tion in some form, by injected humour
                        </p>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera tion in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsumor randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-area">

                    <div class="cate-box">
                        <h3 class="title">Lesson Content</h3>
                        <ul>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="courses-details2.html">Images <span>(2)</span></a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i> <a  href="courses-details2.html">Videos<span>(7)</span></a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i> <a  href="courses-details2.html">Files<span>(9)</span></a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i> <a  href="courses-details2.html"> Exams<span>(8)</span></a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i> <a  href="courses-details2.html">Questions<span>(4)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="latest-courses">
                        <h3 class="title">Other Lessons</h3>
                        <div class="post-item">
                            <div class="post-img">
                                <a href="courses-details.html"><img src="{{asset('assets/site/images/blog-details/sm1.jpg')}}" alt="" title="News image"></a>
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
                                <a href="courses-details.html"><img src="{{asset('assets/site/images/blog-details/sm2.jpg')}}" alt="" title="News image"></a>
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
                                <a href="courses-details.html"><img src="{{asset('assets/site/images/blog-details/sm3.jpg')}}" alt="" title="News image"></a>
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
</div>

@endsection
