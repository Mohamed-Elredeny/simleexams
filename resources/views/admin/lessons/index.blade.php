@extends("layouts.admin")
@section("pageTitle", "Ejada")
@section("style")
    <link href="{{asset("assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <style>
        .star-fill{
            color:gold
        }
    </style>
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
                        <center>
                            <a href="{{route('admin.subjects.create')}}" class="col-sm-2 col-form-label btn  btn-dark">اضافة درس جديد </a>
                        </center>

                        <hr>

                        <h4 class="">الدروس الحالية</h4>

                        <hr>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                            <tr>
                                <th>الصورة</th>
                                <th>الاسم بالعربيه</th>
                                <th>الاسم بالانجليزية</th>
                                <th>التفاصيل بالعربية</th>
                                <th>التفاصيل بالانجليزية</th>
                                <th>القسم</th>
                                <th>اسئلة</th>
                                <th>امتحانات</th>
                                <th>التحكم</th>
                            </tr>
                            </thead>
                            <?php $counter =1; ?>
                            <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/subjects/'.$admin->media->file)}}" alt="" style="height:100px;width:100px">

                                    </td>
                                    <td>
                                        {{$admin->title_ar}}
                                    </td>
                                    <td>
                                        {{$admin->title_en}}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenterarAr{{$admin->id}}">
                                            عرض
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenterarEn{{$admin->id}}">
                                            عرض
                                        </button>
                                    </td>

                                    <td>
                                        <center>
                                            <div class="ratings">
                                                <?php   $remind = 5 - intval($admin->rate); ?>
                                                @for($i=0;$i<intval($admin->rate);$i++)
                                                    <i class="fa fa-star star-fill"></i>
                                                @endfor
                                                @for($i=0;$i<$remind;$i++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                            </div>
                                        </center>
                                    </td>

                                    <td>
                                        {{$admin->price}}
                                    </td>
                                    <td>
                                        <a href="{{route('admin.lessons.index',['id'=>$admin->id]) }}" class="btn btn-dark">عرض</a>
                                    </td>
                                    <td>
                                        <center>
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        التحكم
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <a class="btn btn-dark col-sm-12"  href="{{route('admin.subjects.edit',['subject'=>$admin->id])}}">تعديل</a>
                                                        <form method="post" action="{{route('admin.subjects.destroy',['subject'=>$admin->id])}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-dark col-sm-12" >حذف</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                </div>
            </div>
        </div> <!-- end col -->
    </div>

@endsection
<!-- Modal -->
@foreach($admins as $admin)
    <div class="modal fade" id="exampleModalCenterarAr{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{$admin->description_ar}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenterarEn{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="direction: ltr;text-align:left">
                    {{$admin->description_en}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endforeach
@section("script")
    <script src="{{asset("assets/admin/libs/datatables.net/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/jszip/jszip.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/pdfmake/build/pdfmake.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/pdfmake/build/vfs_fonts.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.j")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/admin/js/pages/datatables.init.js")}}"></script>
@endsection
