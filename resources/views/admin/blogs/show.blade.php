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
            <h5 class="mb-5 mt-3">{{$blog->title_ar}}</h5>
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">الصورة</label>
                <div class="col-sm-10">
                    <img width="300" height="300" src="{{asset('assets/images/blogs')}}/{{$blog->image}}">
                </div>
            </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">العنوان بالانجليزية</label>
                    <div class="col-sm-10">
                        <div class="KTextCode" >{{$blog->title_en}}</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">العنوان بالعربية</label>
                    <div class="col-sm-10">
                        <div class="KTextCode" >{{$blog->title_ar}}</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">الكاتب</label>
                    <div class="col-sm-10">
                        <div class="KTextCode" >{{$blog->buplisher}}</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">التفاصيل بالانجليزية</label>
                    <div class="col-sm-10">
                        <div id="myDiv" class="KTextCode" ><?php $x = html_entity_decode($blog->description_en); echo $x ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">التفاصيل بالعربية</label>
                    <div class="col-sm-10">
                        <div id="myDiv" class="KTextCode" >
                            <?php
                                $x = html_entity_decode($blog->description_ar); echo $x
                                 ?>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div> <!-- end col -->
</div> <!-- end row -->
@endsection

@section("script")
<script src="{{asset("libs/tinymce/tinymce.min.js")}}"></script>
<script src="{{asset("js/pages/form-editor.init.js")}}"></script>
<script src="{{asset("js/codeColor.js")}}"></script>

@endsection