@extends('layouts.app')
@section('content')
@if (LaravelLocalization::getCurrentLocale() == 'en')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="background-image: url({{ asset('assets/site/images/blog/1.jpg') }})">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">blog post</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('home') }}">Home</a>
                            </li>
                            <li>blog post</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Blog Section Start Here -->
    <div class="blog-page-area sec-spacer">
        <div class="container">
            @foreach ($blogs as $blog)
            <div class="row mb-50 blog-inner">
                <div class="col-lg-6 col-md-12">
                    <div class="blog-images">
                        <a href="blog-details.html"><i class="fa fa-link" aria-hidden="true"></i> <img src="{{ asset('assets/images/blogs/' . $blog->image) }}" style="height: 300px !important;" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="blog-content">
                        <div class="date">
                            <i class="fa fa-calendar-check-o"></i> {{ $blog->created_at }}
                        </div>
                        <h4><a href="blog-details.html">{{ $blog->title_en }}</a></h4>
                        <ul class="blog-meta">
                            <li class="time"><a href="#"><i class="fa fa-user-o"></i> {{ $blog->buplisher }}</a></li>
                        </ul>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

                        <div class="desciptionn" style="display: none"><?php $x = html_entity_decode($blog->description_en); echo $x ?></div>

                        <div class="" id="dev{{$blog->id}}"></div>
                        <script>
                            var divs = document.getElementsByClassName('desciptionn');
                            if ($(".desciptionn").html().length > 300) {
                            short_text = $(".desciptionn").html().substr(0, 300);
                            $(".desciptionn").html(short_text + "...");
                            }
                            document.getElementById('dev'+{{$blog->id}}).innerHTML= "<p>" + divs[0].textContent + "</p><a class='primary-btn' href='blog-details.html'>Read More</a>";
                            divs[0].classList.remove("desciptionn");
                        </script>

                        {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
                        <a class="primary-btn" href="blog-details.html">Read More</a> --}}
                    </div>
                </div>
            </div><!-- .blog-inner end --> 
            @endforeach 
        </div>
    </div>
    <!-- Blog End  -->
@else
 <!-- Breadcrumbs Start -->
 <div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="background-image: url({{ asset('assets/site/images/blog/1.jpg') }})">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" dir="rtl">
                    <h1 class="page-title">مقالتنا</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">الرئيسية</a>
                        </li>
                        <li>مقالتنا</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Section Start Here -->
<div class="blog-page-area sec-spacer text-right" dir="rtl">
    <div class="container">
        @foreach ($blogs as $blog)
        <div class="row mb-50 blog-inner">
            <div class="col-lg-6 col-md-12">
                <div class="blog-images">
                    <a href="blog-details.html"><i class="fa fa-link" aria-hidden="true"></i> <img src="{{ asset('assets/images/blogs/' . $blog->image) }}" style="height: 300px !important;" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="blog-content">
                    <div class="date">
                        <i class="fa fa-calendar-check-o"></i> {{ $blog->created_at }}
                    </div>
                    <h4><a href="blog-details.html">{{ $blog->title_ar }}</a></h4>
                    <ul class="blog-meta">
                        <li class="time"><a href="#"><i class="fa fa-user-o"></i> {{ $blog->buplisher }}</a></li>
                    </ul>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

                    <div class="desciptionn" style="display: none"><?php $x = html_entity_decode($blog->description_ar); echo $x ?></div>

                    <div class="" id="dev{{$blog->id}}"></div>
                    <script>
                        var divs = document.getElementsByClassName('desciptionn');
                        if ($(".desciptionn").html().length > 300) {
                        short_text = $(".desciptionn").html().substr(0, 300);
                        $(".desciptionn").html(short_text + "...");
                        }
                        document.getElementById('dev'+{{$blog->id}}).innerHTML= "<p>" + divs[0].textContent + "</p><a class='primary-btn' href='blog-details.html'>Read More</a>";
                        divs[0].classList.remove("desciptionn");
                    </script>

                    {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
                    <a class="primary-btn" href="blog-details.html">Read More</a> --}}
                </div>
            </div>
        </div><!-- .blog-inner end --> 
        @endforeach 
    </div>
</div>
<!-- Blog End  -->
@endif
@endsection



