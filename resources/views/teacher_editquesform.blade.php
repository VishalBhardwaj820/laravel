@extends('layout')
<style>
p
{
    font-size:20px;
    font-weight:700;
}
textarea
{
    font-size:18px;
}

</style>
@section('heading')
Question Updation Panel
@endsection
@section('right-div')

    <div id="input-form">



    <form action="/teacher/quiz/update/{{$quiztablename}}/{{$quizques->toArray()[0]->id}}/savechanges" method="get">
    <p>Question</p>
    <textarea name="question" id=""  class="option-decoration" cols="80" rows="1">{{$quizques->toArray()[0]->question}}</textarea><br>

    <p>Option 1</p>
    <textarea name="option1" id="" class="option-decoration" cols="80" rows="1">{{$quizques->toArray()[0]->option1}}</textarea><br>

    <p>Option 2</p>
    <textarea name="option2" id="" class="option-decoration"  cols="80" rows="1">{{$quizques->toArray()[0]->option2}}</textarea><br>

    <p>Option 3</p>
    <textarea name="option3" id="" class="option-decoration" cols="80" rows="1">{{$quizques->toArray()[0]->option3}}</textarea><br>

    <p>Option 4</p>
    <textarea name="option4" id="" class="option-decoration" cols="80" rows="1">{{$quizques->toArray()[0]->option4}}</textarea><br>

    <p>Right Ans</p>
    <textarea name="rightoption" id="" class="option-decoration" cols="80" rows="1">{{$quizques->toArray()[0]->rightoption}}</textarea><br>

    <input type="submit" value="Save Changes">
   <a href="/teacher/quiz/generatequiz"> <input type="button" value="Done"></a>

    </form>

@endsection


