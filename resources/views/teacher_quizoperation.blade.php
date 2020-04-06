@extends('layout')

@section('heading')
Quiz Operation Panel
@endsection

@section('right-div')
                        <a href="/teacher/quiz/show"><div  id="create" class="CRUD-OPTION" style="background-color:#EA2027;">Show All Quiz</div>
                        <a href="/teacher/quiz/quizname"><div class="CRUD-OPTION" style="background-color:#009432;">Create Quiz</div>
                        <a href="/teacher/quiz/update"><div id="create" class="CRUD-OPTION"style="background-color:#FFC312;">Update Quiz</div>
                        <a href="/teacher/quiz/delete"><div id="create" class="CRUD-OPTION"style="background-color:#ED4C67;">Delete Quiz</div>
@endsection
