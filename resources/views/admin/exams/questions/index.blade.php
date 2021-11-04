@extends("layouts.adminexam")
@section("pageTitle", "Koala Web Libraries")
@section('style2')

	<meta content="initial-scale=1,
		maximum-scale=1, user-scalable=0"
		name="viewport" />

	<meta name="viewport"
		content="width=device-width" />

	<!--Datatable plugin CSS file -->
	<link rel="stylesheet" href=
"https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

	<!--jQuery library file -->
	<script type="text/javascript"
		src="https://code.jquery.com/jquery-3.5.1.js">
	</script>

	<!--Datatable plugin JS library file -->
	<script type="text/javascript"
src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
	</script>
@endsection

@section('content')

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
                <form action="{{route('admin.examQuestions.store')}}" method="post">
                    @csrf
                    <div id="accordion">
                        <center>
                            <input type="submit" class="btn btn-dark" value="حفظ التعديلات"  style="width:120px">
                            <hr>
                        </center>
                        <div class="card">
                            <div class="card-header row" id="headingOne">
                                <div class="col-sm-10">

                                    <h5 class="mb-0">
                                        <a class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h4 class="">الاسئلة الحالية</h4>
                                        </a>

                                    </h5>
                                </div>
                                <div class="col-sm-1  h5 mt-2">
                                    تحديد الكل
                                </div>
                                <div class="col-sm-1">
                                    <input type="checkbox" class="form-control" name="examQuestions">
                                </div>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <table class="display table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                        <thead>
                                        <tr>
                                            <th>الترتيب</th>
                                            <th> السوال</th>
                                            <th>عرض تفاصيل السوال</th>
                                            <th>تحديد</th>
                                        </tr>
                                        </thead>
                                        <?php $counter =1; ?>
                                        <tbody>
                                        @foreach($exams as $admin)
                                            <tr>
                                                <td>
                                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenterarEn{{$admin->id}}">
                                                        عرض
                                                    </button>
                                                </td>

                                                <td>
                                                    {{$admin->name_ar}}
                                                </td>
                                                <td>
                                                    {{$admin->name_en}}
                                                </td>
                                                <td>
                                                    {{$admin->price}} ريال
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-dark">
                                                        عرض
                                                    </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenterarEn{{$admin->id}}">
                                                        عرض
                                                    </button>
                                                </td>
                                                <td>
                                                    <center>
                                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    التحكم
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                    <a class="btn btn-dark col-sm-12"  href="{{route('admin.exams.edit',['exam'=>$admin->id])}}">تعديل</a>
                                                                    <form method="post" action="{{route('admin.exams.destroy',['exam'=>$admin->id])}}">
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
                            
                        </div>
                        <?php $counter =0; ?>
                        <input type="hidden"  name="exam_id" value="{{$id}}">
                        @foreach($sections as $section)
                            <div class="card">
                                <div class="card-header row" id="headingTwo{{$section->id}}">
                                    <div class="col-sm-10">
                                        <h5 class="mb-0">
                                            <a class="btn  collapsed" data-toggle="collapse" data-target="#collapseTwo{{$section->id}}" aria-expanded="false" aria-controls="collapseTwo{{$section->id}}">
                                                {{$section->name_ar}}
                                            </a>
                                        </h5>
                                    </div>

                                    <div class="col-sm-1  h5 mt-2">
                                        تحديد الكل
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="checkbox" class="form-control"  name="examQuestions{{$section->id}}">
                                    </div>
                                </div>
                                <div id="collapseTwo{{$section->id}}" class="collapse" aria-labelledby="headingTwo{{$section->id}}" data-parent="#accordion">
                                    <div class="card-body">
                                        <table  class="display table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>الترتيب</th>
                                                <th> السوال</th>
                                                <th>عرض تفاصيل السوال</th>
                                                <th>تحديد</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($section->questions as $admin)
                                                <tr>
                                                    <td>
                                                        {{$counter}}
                                                    </td>

                                                    <td>
                                                        {{$admin->body}}
                                                    </td>

                                                    <td>
                                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenterarEn{{$admin->id}}">
                                                            عرض
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" class="form-control" name="exam{{$admin->id}}">

                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </form>


            </div>
        </div>
    </div> <!-- end col -->
</div>

<!-- Modal -->
@foreach($exams as $admin)

<div class="modal fade" id="exampleModalCenterarEn{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"> Image </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="{{asset('assets/images/exams/'.$admin->media->file)}}" alt="" style="height:400px;width:400px">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
	<script>
		/* Initialization of datatables */
		$(document).ready(function () {
			$('table.display').DataTable();
		});
	</script>
@endsection
