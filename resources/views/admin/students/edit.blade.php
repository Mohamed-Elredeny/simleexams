@extends("layouts.admin")
@section("pageTitle", "Koala Web Libraries")
@section('styleChart')
    <link href="{{asset("assets/admin/libs/select2/css/select2.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/admin/libs/summernote/summernote-bs4.min.css")}}" rel="stylesheet" type="text/css"/>
@endsection
@section("content")


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
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
                    <h5 class="mb-5 mt-3">تعديل الطالب</h5>

                    <form method="post" action="{{route('admin.students.update',['student'=>$subject->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" value="{{$subject->name}}" name="name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> الاسم </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="phone" value="phone" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">البريد الالكتروني</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" value="{{$subject->email}}" name="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> كلمة المرور</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" id="example-text-input" name="password" required>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> صورة </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="example-text-input" name="media_id" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-dark w-25">تعديل</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection



@section("script")
<script src="{{asset("assets/admin/libs/select2/js/select2.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/summernote/summernote-bs4.min.js")}}"></script>
<script src="{{asset("assets/admin/js/pages/email-summernote.init.js")}}"></script>
<script src="{{asset("assets/admin/js/app.js")}}"></script>
@endsection 
