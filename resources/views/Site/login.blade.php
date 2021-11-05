@extends('layouts.app')
@section('content')
    @if (LaravelLocalization::getCurrentLocale() == 'en')
        <div class="contact-page-section sec-spacer">
    <div class="container">

        <div class="contact-comment-section" style="width: 60%; margin:auto">
            <h3>Login</h3>
            <div id="form-messages">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
            </div>

            <form method="post" action="{{route('check.auth.login')}}" enctype="multipart/form-data">
                @csrf

                <fieldset>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="student">Student</option>
                                    <option value="instructor">Instructor</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" id="email" class="form-control" type="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" id="password" class="form-control" type="password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <input class="btn-send" type="submit" value="Login">
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
    @else
        <div class="contact-page-section sec-spacer" style="direction:rtl;text-align:right">
            <div class="container">

                <div class="contact-comment-section" style="width: 60%; margin:auto">
                    <h3>تسجيل الدخول</h3>
                    <div id="form-messages">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                    </div>

                    <form method="post" action="{{route('check.auth.login')}}" enctype="multipart/form-data">
                        @csrf

                        <fieldset>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="type">نوع المستخدم</label>
                                        <select class="form-control" id="type" name="type">
                                            <option value="student">طالب</option>
                                            <option value="instructor">أستاذ</option>
                                            <option value="admin">مسئول</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>البريد الإلكتروني</label>
                                        <input name="email" id="email" class="form-control" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>كلمة المرور</label>
                                        <input name="password" id="password" class="form-control" type="password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <input class="btn-send" type="submit" value="تسجيل الدخول">
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection
