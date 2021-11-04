@extends("layouts.admin")
@section("pageTitle", "Koala Web Libraries")
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
                    <h5 class="mb-5 mt-3">تعديل المادة</h5>

                    <form method="post" action="{{route('admin.exams.update',['exam'=>$exam->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم بالعربية</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" value="{{$exam->name_ar}}" name="name_ar">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم الانجليزية</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" value="{{$exam->name_en}}" name="name_en">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">السعر</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" value="{{$exam->price}}" name="price">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الصورة</label>
                            <div class="col-sm-10">
                                <img src="{{asset('assets/images/exams/'.$exam->media->file)}}" alt="" style="width:400px;height:400px">
                                <input class="form-control" type="file" id="example-text-input" value="{{$exam->image}}" name="media_id">
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
    <script src="{{asset("assets/admin/libs/tinymce/tinymce.min.js")}}"></script>
    <script src="{{asset("assets/admin/js/pages/form-editor.init.js")}}"></script>
@endsection
