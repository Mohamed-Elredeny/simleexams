@extends('layouts.app')
@section('content')
    @if (LaravelLocalization::getCurrentLocale() == 'en')
        <div class="contact-page-section sec-spacer">
    <div class="container">

        <div class="contact-comment-section">
            <h3>Register</h3>
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

            <form method="post" action="{{route('student.register.submit')}}" enctype="multipart/form-data">
                @csrf

                <fieldset>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="fname" id="fname" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="lname" id="lname" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" id="email" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="phone" id="phone" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" id="password" class="form-control" type="password">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Image</label>
                                <input name="media_id" id="image" class="form-control" type="file">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <input class="btn-send" type="submit" value="Join Now">
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
    @else
        <div class="contact-page-section sec-spacer" style="direction: rtl;text-align:right">
            <div class="container">

                <div class="contact-comment-section">
                    <h3>التسجيل</h3>
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

                    <form method="post" action="{{route('student.register.submit')}}" enctype="multipart/form-data">
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
                                        <label>رقم الهاتف</label>
                                        <input name="phone" id="phone" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>كلمة المرور</label>
                                        <input name="password" id="password" class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>الصوره</label>
                                        <input name="media_id" id="image" class="form-control" type="file">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <input class="btn-send" type="submit" value="تسجيل">
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection
