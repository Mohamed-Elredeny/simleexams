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
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{route('admin.questions.create',['id'=>$id])}}" class="col-sm-6 col-form-label btn  btn-dark">اضافة سوال جديد </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{route('admin.questions.create',['id'=>$id])}}" class="col-sm-6 col-form-label btn  btn-dark">استيراد    من excel </a>
                            </div>

                        </div>
                    </center>

                    <hr>

                    <h4 class="">الاسئلة الحالية</h4>

                    <hr>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                        <tr>
                            <th>رقم السوال</th>
                            <th>محتوي السوال</th>
                            <th>اجابة صحيحه </th>
                            <th>اجابة خطأ</th>
                            <th>اجابة  خطأ</th>
                            <th>اجابة  خطأ</th>
                            <th>متوفر في بنك الاسئله</th>
                            <th>التحكم</th>
                        </tr>
                        </thead>
                        <?php $counter =1; ?>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                               <td>
                                   {{$admin->number}}
                               </td>
                                <td>
                                        {{$admin->body}}

                                </td>
                                <?php
                                 $answers =  explode('|',$admin->answers);
                                ?>
                                <td>
                                    {{$answers[$admin->right_answer]}}
                                </td>
                                @for($i=0;$i<count($answers);$i++)
                                    @if($i != $admin->right_answer)
                                        <td>
                                            {{$answers[$i]}}
                                        </td>
                                    @endif
                                @endfor

                                <td>
                                    @if($admin->question_bank ==1)
                                    متاح
                                    @else
                                        غير متاح
                                    @endif
                                </td>


                                <td>
                                    <center>
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    التحكم
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        @if($admin->media_id)
                                                            <a class="btn btn-dark col-sm-12"  data-toggle="modal" data-target="#attatchments{{$admin->id}}">
                                                                المرفقات
                                                            </a>
                                                        <br>
                                                        @endif
                                                        @if($admin->hint_id)
                                                            <a class="btn btn-dark col-sm-12"  data-toggle="modal" data-target="#hints{{$admin->id}}">
                                                                التلميحات
                                                            </a>
                                                            <br>
                                                        @endif

                                                    <a class="btn btn-dark col-sm-12"  href="{{route('admin.questions.edit',['question'=>$admin->id])}}">تعديل</a>
                                                    <form method="post" action="{{route('admin.questions.destroy',['question'=>$admin->id])}}">
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
    @if($admin->hint_id)
        <div class="modal fade" id="hints{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">التلميحات</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="direction: rtl;text-align:right">
                    {{$admin->hint->description}}

                    <center>
                        @if($admin->hint->media_id)
                            <hr>
                            <br>
                            <img src="{{asset('assets/images/hints/'.$admin->hint->media->file)}}" alt="" style="height:300px;width:100%">
                        @endif
                    </center>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if($admin->media_id)
        <div class="modal fade" id="attatchments{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">المرفقات</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="direction: ltr;text-align:left">
                        <img src="{{asset('assets/images/questions/'.$admin->media->file)}}" alt="" style="height:300px;width:100%">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
@section("script")
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                   'excel', 'print'
                ]
            } );
        } );
    </script>
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
