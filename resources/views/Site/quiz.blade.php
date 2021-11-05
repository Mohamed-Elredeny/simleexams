@extends('layouts.app')
{{-- @section('style') --}}
<style>
    .question {
        font-size: 30px;
        margin-bottom: 10px;
    }

    .answers {
        margin-bottom: 20px;
        text-align: left;
        display: inline-block;
    }

    .answers label {
        display: block;
        margin-bottom: 10px;
    }

    .slide {
        display: none !important;
        opacity: 0;
        transition: opacity 0.5s;

    }

    .active-slide {
        display: block !important;
        opacity: 1;
        z-index: 2;
    }

    .quiz-container {
        margin-top: 40px;
    }

</style>
{{-- @endsection --}}
@section('content')
    @if (LaravelLocalization::getCurrentLocale() == 'en')
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay"
            style="background-image: url({{ asset('assets/site/images/bg/bg3.jpg') }})">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="page-title">{{ $exam->name_en }}</h1>
                            <ul>
                                <li>
                                    <a class="active" href="{{ route('home') }}">Home</a>
                                </li>
                                <li>{{ $exam->name_en }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Courses Details Start -->
        <div class="rs-courses-details pt-100 pb-70">
            <div class="container mt-5">
                <div class="row mb-30">
                    <div class="col-lg-12 col-md-12">
                        <div class="detail-img ">
                            <button type="button" id="lamb" class="btn" data-toggle="modal" data-target="#exampleModal" style="background-color: white; width:100%;">
                                <i class="fa fa-lightbulb-o" aria-hidden="true" style="font-size: 26px; color: #fcbc46;"></i>
                              </button>
                              <form method="post" action="{{route('student.exam.store', ['id'=>$exam->id])}}" enctype="multipart/form-data">
                                @csrf
                            {{-- <h1>Quiz on Important Facts</h1> --}}
                            <div class="quiz-container">
                                <div id="quiz" class=""></div>
                            </div>

                            <div id="controlbtnn"
                                class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
                                <div id="previous" class="btn btn-primary d-flex align-items-center btn-danger"><i
                                        class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</div>
                                <div id="next"
                                    class="btn btn-primary border-success align-items-center btn-success">Next<i
                                        class="fa fa-angle-right ml-2"></i></div>
                                <button id="submit" type="submit"
                                    class="btn btn-primary border-success align-items-center btn-success">Finsh<i
                                        class="fa fa-angle-right ml-2"></i></button>
                            </div>
                            <div id="results"></div>
                              </form>
                        </div>
                    </div> 
                    
                </div>
            </div>
            <div class="container pt-45">
                
            </div>
        </div>
        <!-- Courses Details End -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Hent</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <h5 id="hentdescribe"></h5>
                    <div id="hentimg">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
    @else
    @endif
@endsection
@section('script')
    <script>
        (function() {
            // Functions
            function buildQuiz() {
                // variable to store the HTML output
                const output = [];
                const outputHint = [];

                // for each question...
                myQuestions.forEach(
                    (currentQuestion, questionNumber) => {

                        // variable to store the list of possible answers
                        const answers = [];

                        // and for each available answer...
                        for (letter in currentQuestion.answers) {

                            // ...add an HTML radio button
                            answers.push(
                                `<label>
                                <input type="radio" name="question${questionNumber}" value="${letter}">
                                ${letter} :
                                ${currentQuestion.answers[letter]}
                                </label>`
                            );
                        }

                        if (currentQuestion.img == "0") {
                            output.push(
                                `<div class="slide">
                                <div class="question"> ${currentQuestion.question} </div>
                                <div class="answers"> ${answers.join("")} </div>
                            </div>`
                            );
                        } else {
                            output.push(
                                `<div class="slide">
                                <div class="question"> ${currentQuestion.question} </div>
                                <img src="{{ asset('assets/images/exams/${currentQuestion.img}') }}" class="mt-3 mb-3" style="width: 100%; height: 300px;">
                                <div class="answers"> ${answers.join("")} </div>
                            </div>`
                            );
                        }

                        if (currentQuestion.hent == "0") {

                        } else {
                            outputHint.push(
                                `
                                `
                            );
                        }


                    }
                );

                // finally combine our output list into one string of HTML and put it on the page
                quizContainer.innerHTML = output.join('');
            }

            function showResults() {

                // gather answer containers from our quiz
                const answerContainers = quizContainer.querySelectorAll('.answers');

                // keep track of user's answers
                let numCorrect = 0;

                // for each question...
                myQuestions.forEach((currentQuestion, questionNumber) => {

                    // find selected answer
                    const answerContainer = answerContainers[questionNumber];
                    const selector = `input[name=question${questionNumber}]:checked`;
                    const userAnswer = (answerContainer.querySelector(selector) || {}).value;

                    // if answer is correct
                    if (userAnswer === currentQuestion.correctAnswer) {
                        // add to the number of correct answers
                        numCorrect++;

                        // color the answers green
                        answerContainers[questionNumber].style.color = 'lightgreen';
                    }
                    // if answer is wrong or blank
                    else {
                        // color the answers red
                        answerContainers[questionNumber].style.color = 'red';
                    }
                });

                // show number of correct answers out of total
                resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
                quizContainer.style.display = 'none';
                controlbtn.style.setProperty("display", "none", "important");
            }

            function showSlide(n) {
                slides[currentSlide].classList.remove('active-slide');
                slides[currentSlide].style.setProperty("display", "none", "important");

                slides[n].classList.add('active-slide');
                slides[n].style.setProperty("display", "block", "important");

                lambbtn.style.setProperty("display", "block", "important");
                hentsdes.innerHTML = myQuestions[n].hentDes;
                if (myQuestions[n].hentImg === "0") {
                } else {
                hentimg.innerHTML = "<img src='{{ asset('assets/images/hints')}}"+"/"+myQuestions[n].hentImg+"' class='mt-3 mb-3' style='width: 100%; height: 300px;'>"
                }
                
                currentSlide = n;
                if (currentSlide === 0) {
                    previousButton.style.display = 'none';
                } else {
                    previousButton.style.display = 'inline-block';
                }
                if (currentSlide === slides.length - 1) {
                    nextButton.style.display = 'none';
                    submitButton.style.display = 'inline-block';
                } else {
                    nextButton.style.display = 'inline-block';
                    submitButton.style.display = 'none';
                }
            }

            function showNextSlide() {
                showSlide(currentSlide + 1);
            }

            function showPreviousSlide() {
                showSlide(currentSlide - 1);
            }

            // Variables
            const quizContainer = document.getElementById('quiz');
            const resultsContainer = document.getElementById('results');
            const submitButton = document.getElementById('submit');
            const controlbtn = document.getElementById('controlbtnn');
            const myQuestions = [
                @foreach ($exam->questions as $question)
                    <?php $answer = explode('|', $question->question->answers);
                    if ($question->question->right_answer == 0) {
                        $correct = 'a';
                    } elseif ($question->question->right_answer == 1) {
                        $correct = 'b';
                    } elseif ($question->question->right_answer == 2) {
                        $correct = 'c';
                    } elseif ($question->question->right_answer == 3) {
                        $correct = 'd';
                    }
                    if (!isset($question->question->media_id)) {
                        $image = '0';
                    } else {
                        $imagevar = $question->question->media->file;
                        $image = "$imagevar";
                    }
                    if (!isset($question->question->hint_id)) {
                        $hent = '0';
                        $hentDescribtion = 'not found';
                        $hentImage = '0';
                    } else {
                        $hentDescribtionVar = $question->question->hint->description;
                        $hentDescribtion = "$hentDescribtionVar";
                        if (!isset($question->question->hint->media_id)) {
                            $hentImage = '0';
                        }
                        else
                        {
                            $hentImageVar = $question->question->hint->media->file;
                            $hentImage = "$hentImageVar";
                        }
                    }
                    ?>
                    {
                    question: "{{ $question->question->body }}",
                    answers: {
                    a: "{{ $answer[0] }}",
                    b: "{{ $answer[1] }}",
                    c: "{{ $answer[2] }}",
                    d: "{{ $answer[3] }}",
                    },
                    correctAnswer: "{{ $correct }}",
                    img : "{{ $image }}",
                    hint : "{{ $hent }}",
                    hentDes : "{{ $hentDescribtion }}",
                    hentImg : "{{ $hentImage }}",
                    },
                @endforeach

            ];

            // Kick things off
            buildQuiz();

            // Pagination
            const previousButton = document.getElementById("previous");
            const nextButton = document.getElementById("next");
            const slides = document.querySelectorAll(".slide");
            const hentsdes = document.getElementById("hentdescribe");
            const hentsimg = document.getElementById("hentimg");
            const lambbtn = document.getElementById("lamb");

            let currentSlide = 0;

            // Show the first slide
            showSlide(currentSlide);

            // Event listeners
            submitButton.addEventListener('click', showResults);
            previousButton.addEventListener("click", showPreviousSlide);
            nextButton.addEventListener("click", showNextSlide);
        })();
    </script>
@endsection
