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
                    <h5 class="mb-5 mt-3">اضافة سوال جديد</h5>

                    <form method="post" action="{{route('admin.questions.update',['question'=>$id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="section" value="{{$question->section}}">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> رقم السوال </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" id="example-text-input" name="number" required value="{{$question->number}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> محتوي السوال </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" type="text" id="example-text-input" name="body" required>{{$question->body}}</textarea>
                            </div>
                        </div>
                        <?php
                        $answersss = $question->answers;
                        $answersss = explode('|', $answersss);
                        ?>
                        @for($i=0;$i<count($answersss);$i++)
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">اضف الاجابة  </label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="example-text-input" name="questions{{$i}}" value="{{$answersss[$i]}}" required>
                                </div>
                                @if($i == $question->right_answer)
                                <div class="col-sm-2">
                                    <input class="form-control" type="radio" id="example-text-input" name="answers" required value="{{$i}}" checked>
                                </div>
                                @else
                                    <div class="col-sm-2">
                                        <input class="form-control" type="radio" id="example-text-input" name="answers" required value="{{$i}}">
                                    </div>
                                @endif
                            </div>
                        @endfor
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> متاح في بنك الاسئلة </label>
                            <div class="col-sm-10">
                                @if($question->question_bank == 1)
                                <input type="checkbox" id="switch10" switch="dark" checked name="question_bank" />
                                <label for="switch10" data-on-label="نعم" data-off-label="لا"></label>
                                @else
                                    <input type="checkbox" id="switch10" switch="dark"  name="question_bank" />
                                    <label for="switch10" data-on-label="نعم" data-off-label="لا"></label>
                                @endif

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">المرفقات</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="example-text-input" name="media_id" >
                                @if($question->media_id)
                                <hr>
                                <center>

                                <img src="{{asset('assets/images/questions/'.$question->media->file)}}" alt="" style="height:300px;width:300px">
                                <br><br>
                                    <a type="button" class="btn btn-danger" href="{{route('admin.question.deleteImage',['id'=>$question->media->id,'model_type'=>'question','model_id'=>$id])}}" >
                                    حذف الصوره
                                    </a>
                                </center>
                                @endif

                            </div>
                        </div>
                        <hr>
                        <h5>التلمحيات</h5>
                        <hr>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> يوجد تلميحات  </label>
                            <div class="col-sm-10">
                                @if($question->hint_id)
                                <input type="checkbox" id="switch11" switch="dark" checked name="is_there_hints" />
                                <label for="switch11" data-on-label="نعم" data-off-label="لا"></label>
                                @else
                                    <input type="checkbox" id="switch11" switch="dark"  name="is_there_hints" />
                                    <label for="switch11" data-on-label="نعم" data-off-label="لا"></label>
                                @endif
                            </div>
                        </div>
                        @if($question->hint_id)
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">التفاصيل</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="hint_details" value="{{$question->hint->description}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">المرفقات</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="example-text-input" name="hint_media_id" >
                                @if($question->hint->media_id)
                                    <hr>
                                    <center>

                                        <img src="{{asset('assets/images/hints/'.$question->hint->media->file)}}" alt="" style="height:300px;width:300px">
                                        <br><br>
                                        <a type="button" class="btn btn-danger" href="{{route('admin.question.deleteImage',['id'=>$id,'model_type'=>'hint','model_id'=>$question->hint->id])}}" >
                                            حذف الصوره
                                        </a>

                                    </center>
                                @endif
                            </div>
                        </div>
                        @endif
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
    <script>
        var flag = 0;
        if(flag === 1){
            var oldVal=0;
        }
        function NumOfFields(){
            usingClassNameToShowDisplayNone();
            var skills = document.getElementById('skills').value;
            //alert(skills);
            if(skills > 0) {

                if (flag !== 1) {
                    var test = document.getElementById('sad');

                    for (var i = 0; i < skills; i++) {
                        var newtest = test.cloneNode(true);
                        newtest.style.display = "block";
                        newtest.id = 'skill_ar' + i;
                        newtest.name = 'skill_ar' + i;

                        newtest.placeholder = 'Type Your Skill Arabic';
                        document.getElementById("container").appendChild(newtest);

                        var newtest3 = test.cloneNode(true);
                        newtest3.style.display = "block";
                        newtest3.id = 'skill_en' + i;
                        newtest3.name = 'skill_en' + i;

                        newtest3.placeholder = 'Type Your Skill English';
                        document.getElementById("container2").appendChild(newtest3);

                        var newtest2 = test.cloneNode(true);
                        newtest2.style.display = "block";
                        newtest2.id = 'percentages' + i;
                        newtest2.name = 'percentages' + i;

                        newtest2.type = 'number';
                        newtest2.placeholder = 'Type Your Percentage % ';
                        document.getElementById("container1").appendChild(newtest2);


                        flag = 1;
                        oldVal = skills;
                    }
                } else if(oldVal !== null) {
                    alert('You have already specify number of skills ');
                    flag =0;
                    resetFields(oldVal);
                    //alert(oldVal + '' + skills);
                }
            }else{
                alert('Enter a valid number');
            }
        }
        function resetFields(oldVal){
            for(var i=0;i<oldVal;i++) {
                var myobj = document.getElementById("skill_ar"+i);
                var myobj2 = document.getElementById("percentages"+i);
                var myobj3 = document.getElementById("skill_en"+i);


                myobj.remove();
                myobj2.remove();
                myobj3.remove();

            }
            NumOfFields();
        }

        function usingClassNameToShowDisplayNone() {
            var myClasses = document.querySelectorAll('.hh'),
                i = 0,
                l = myClasses.length;
            for (i; i < l; i++) {
                myClasses[i].style.display = 'block';
            }
        }
    </script>

@endsection
