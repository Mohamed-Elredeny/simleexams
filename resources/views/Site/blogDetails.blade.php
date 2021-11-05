@extends('layouts.app')
@section('content')
@if (LaravelLocalization::getCurrentLocale() == 'en')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="background-image: url({{ asset('assets/site/images/blog/1.jpg') }})">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">blog details</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('home') }}">Home</a>
                            </li>
                            <li>blog details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Blog Single Start Here -->
    <div class="single-blog-details sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="single-image">
                        <img src="{{ asset('assets/images/blogs/' . $blog->image) }}" style="height: 550px" alt="single">
                    </div><!-- .single-image End -->
                    <div class="share-section">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 life-style">
                                <span class="author">
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> {{ $blog->buplisher }} </a>
                                </span> 
                                <span class="date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> {{ $blog->created_at }}
                                </span> 
                            </div> 
                        </div>
                    </div><!-- .share-section End -->
                    <h5 class="top-title">{{ $blog->title_en }}</h5>
                    <p>
                        <?php $x = html_entity_decode($blog->description_en); echo $x ?>
                    </p>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-area">  
                        <div class="latest-courses">
                            <h3 class="title">Latest Blogs</h3>
                            @foreach ($blogs as $blogg)
                            <div class="post-item">
                                <div class="post-img">
                                    <a href="{{ route('blog.details', ['id' => $blogg->id]) }}"><img src="{{ asset('assets/images/blogs/' . $blogg->image) }}" alt="" title="News image"></a>
                                </div>
                                <div class="post-desc">
                                    <h4><a href="{{ route('blog.details', ['id' => $blogg->id]) }}">{{ $blogg->title_en }}</a></h4>
                                    <span class="duration">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> {{ $blog->created_at }}
                                    </span><br>
                                <span class="price">Buplisher: <span>{{ $blogg->buplisher }}</span></span>
                                </div>
                            </div>
                            @endforeach  
                        </div> 
                         
                    </div><!-- .sidebar-area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Single End  -->
@else

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="background-image: url({{ asset('assets/site/images/blog/1.jpg') }})">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center" dir="rtl">
                        <h1 class="page-title">تفاصيل المقالة</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('home') }}">الرئيسية</a>
                            </li>
                            <li>تفاصيل المقالة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Blog Single Start Here -->
    <div class="single-blog-details sec-spacer text-right" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="single-image">
                        <img src="{{ asset('assets/images/blogs/' . $blog->image) }}" style="height: 550px" alt="single">
                    </div><!-- .single-image End -->
                    <div class="share-section">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 life-style">
                                <span class="author">
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> {{ $blog->buplisher }} </a>
                                </span> 
                                <span class="date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> {{ $blog->created_at }}
                                </span> 
                            </div> 
                        </div>
                    </div><!-- .share-section End -->
                    <h5 class="top-title">{{ $blog->title_ar }}</h5>
                    <p>
                        <?php $x = html_entity_decode($blog->description_ar); echo $x ?>
                    </p>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-area">  
                        <div class="latest-courses">
                            <h3 class="title">اخر المفالات</h3>
                            @foreach ($blogs as $blogg)
                            <div class="post-item">
                                <div class="post-img">
                                    <a href="{{ route('blog.details', ['id' => $blogg->id]) }}"><img src="{{ asset('assets/images/blogs/' . $blogg->image) }}" alt="" title="News image"></a>
                                </div>
                                <div class="post-desc">
                                    <h4><a href="{{ route('blog.details', ['id' => $blogg->id]) }}">{{ $blogg->title_ar }}</a></h4>
                                    <span class="duration">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> {{ $blog->created_at }}
                                    </span><br>
                                <span class="price">الناشر: <span>{{ $blogg->buplisher }}</span></span>
                                </div>
                            </div>
                            @endforeach  
                        </div> 
                         
                    </div><!-- .sidebar-area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Single End  -->

@endif
@endsection



