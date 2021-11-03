@extends("layouts.admin")
@section("pageTitle", "Koala Web Libraries")
@section('styleChart')
    <link href="{{asset("assets/admin/libs/c3/c3.min.css")}}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
@endsection
@section("content")

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat">
                        <span class="mini-stat-icon bg-primary float-left"><i class="fas fa-code-branch"></i></span>
                        <div class="mini-stat-info text-right">
                            <span class="counter text-primary">{{$supjects}}</span>
                            عدد المواد
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon bg-success float-left"><i class=" fas fa-users-cog"></i></span>
                        <div class="mini-stat-info text-right">
                            <span class="counter text-success">{{$instructors}}</span>
                            عدد الاساتذة
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon bg-warning float-left"><i class=" fas fa-users"></i></span>
                        <div class="mini-stat-info text-right">
                            <span class="counter text-warning">{{$students}}</span>
                            عدد الطلاب
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon bg-pink float-left"><i class="ti-pencil-alt"></i></span>
                        <div class="mini-stat-info text-right">
                            <span class="counter text-pink">{{$Questions}}</span>
                            عدد الاسئلة
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
