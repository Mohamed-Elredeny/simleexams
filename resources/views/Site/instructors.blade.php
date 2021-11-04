@extends('layouts.app')
@section('content')
    @if (LaravelLocalization::getCurrentLocale() == 'en')
    <div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="background-image: url({{ asset('assets/site/images/bg/slide2.jpg') }})">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">ALL INSTRUCTORS</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('home') }}">Home</a>
                            </li>
                            <li>All Instructors</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rs-team" class="rs-team sec-color sec-spacer">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <h2>OUR EXPERIENCED Instructors</h2>
            </div>
            <div class="row" >
                @foreach ($instructors as $instructor)
                    <div class="team-item col-lg-4 col-md-6 mb-3">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/instructors/' . $instructor->media->file) }}"
                                style="height: 370px !important;" />
                            <div class="normal-text">
                                <h3 class="team-name">{{ $instructor->name }}</h3>
                                <span class="subtitle">{{ $instructor->degree }}</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a
                                            >{{ $instructor->name }}</a></h3>
                                    <span class="team-title">{{ $instructor->degree }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
    <div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="background-image: url({{ asset('assets/site/images/bg/slide2.jpg') }})">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center" dir="rtl">
                        <h1 class="page-title">كل الأساتذة</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('home') }}">الرئيسية</a>
                            </li>
                            <li>كل الأساتذة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rs-team" class="rs-team sec-color sec-spacer" dir="rtl">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <h2>أستاذتنا</h2>
            </div>
            <div class="row" >
                @foreach ($instructors as $instructor)
                    <div class="team-item col-lg-4 col-md-6 mb-3">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/instructors/' . $instructor->media->file) }}"
                                style="height: 370px !important;" />
                            <div class="normal-text">
                                <h3 class="team-name">{{ $instructor->name }}</h3>
                                <span class="subtitle">{{ $instructor->degree }}</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a
                                            >{{ $instructor->name }}</a></h3>
                                    <span class="team-title">{{ $instructor->degree }}</span>
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