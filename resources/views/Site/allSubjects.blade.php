@extends('layouts.app')
@section('content')
    @if (LaravelLocalization::getCurrentLocale() == 'en')
    <div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="background-image: url({{ asset('assets/site/images/bg/bg3.jpg') }})">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">ALL SUBJECTS</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('home') }}">Home</a>
                            </li>
                            <li>All Subjects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rs-courses-3" class="rs-courses-3 sec-spacer">
        <div class="container">
            <div class="abt-title">
                <h2>OUR Subjects</h2>
            </div>
            <div class="row grid">
                @foreach ($subjects as $subject)
                    <div class="col-lg-4 col-md-6 grid-item">
                        <div class="course-item">
                            <div class="course-img">
                                <img src="{{ asset('assets/images/subjects/' . $subject->media->file) }}" alt=""
                                    style="height: 250px !important;" />
                                <span class="course-value">{{ $subject->rate }} <i class="fa fa-star"></i> </span>
                                <div class="course-toolbar">
                                </div>
                            </div>
                            <div class="course-body" style="height: 150px !important;">
                                <div class="course-desc">
                                    <h4 class="course-title"><a
                                            href="{{ route('subject', ['id' => $subject->id]) }}">{{ $subject->title_en }}</a></h4>
                                    <p>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

                                        <div class="desciptionn" style="display: none"><?php $x = html_entity_decode($subject->description_en); echo $x; ?></div>

                                        <div class="" id="dev{{ $subject->id }}"></div>
                                        <script>
                                            var divs = document.getElementsByClassName('desciptionn');
                                            if ($(".desciptionn").html().length > 300) {
                                                short_text = $(".desciptionn").html().substr(0, 300);
                                                $(".desciptionn").html(short_text + "...");
                                            }
                                            document.getElementById('dev' + {{ $subject->id }}).innerHTML = divs[0].textContent;
                                            divs[0].classList.remove("desciptionn");
                                        </script>
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
    @else
    <div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="background-image: url({{ asset('assets/site/images/bg/bg3.jpg') }})">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center" dir="rtl">
                        <h1 class="page-title">كل المواد</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('home') }}">الرئيسية</a>
                            </li>
                            <li>كل المواد</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <img src="{{ asset('assets/images/subjects/' . $subject->media->file) }}" alt=""
                                    style="height: 250px !important;" />
                                <span class="course-value">{{ $subject->rate }} <i class="fa fa-star"></i>
                                </span>
                                <div class="course-toolbar">
                                </div>
                            </div>
                            <div class="course-body" style="height: 150px !important;">
                                <div class="course-desc">
                                    <h4 class="course-title"><a
                                            href="{{ route('subject', ['id' => $subject->id]) }}">{{ $subject->title_ar }}</a></h4>
                                    <p>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

                                        <div class="desciptionn" style="display: none"><?php $x = html_entity_decode($subject->description_ar); echo $x; ?></div>

                                        <div class="" id="dev{{ $subject->id }}"></div>
                                        <script>
                                            var divs = document.getElementsByClassName('desciptionn');
                                            if ($(".desciptionn").html().length > 300) {
                                                short_text = $(".desciptionn").html().substr(0, 300);
                                                $(".desciptionn").html(short_text + "...");
                                            }
                                            document.getElementById('dev' + {{ $subject->id }}).innerHTML = divs[0].textContent;
                                            divs[0].classList.remove("desciptionn");
                                        </script>
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
    @endif
@endsection