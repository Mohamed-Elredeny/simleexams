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
                <h5 class="mb-5 mt-3">اضافة مقالة جديدة</h5>

                <form method="post" action="{{route('admin.blogs.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">العنوان باللغة العربية </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="title_ar" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">العنوان باللغة الانجليزية </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="title_en" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">الكاتب</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="writer" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">الموضوع باللغة العربية</label>
                        <div class="col-sm-10">
                            <textarea id="elm1" class="elm1" name="description_ar">اكتب هنا .. </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">الموضوع باللغة الانجليزية</label>
                        <div class="col-sm-10">
                            <textarea id="elm" class="elm1" name="description_en">اكتب هنا .. </textarea>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <label for="example-text-input" class="col-sm-2 col-form-label">الصورة</label>
                        <div class="custom-file col-sm-10">
                            <input name="image" type="file" class="custom-file-input" id="customFileLangHTML" required>
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Upload Image"></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-dark w-25">أضافة</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section("script")
<script src="{{asset("assets/admin/libs/tinymce/tinymce.min.js")}}"></script>
<script src="{{asset("assets/admin/js/pages/form-editor.init.js")}}"></script> 
@endsection 