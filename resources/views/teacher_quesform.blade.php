@extends('layout')

@section('heading')
Question Insertion Panel
@endsection

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
@section('right-div')

            <div id="header1">
            </div>

    <div id="input-form">


    <p>Question</p>
    <textarea name="question" id=""  class="option-decoration" cols="80" rows="1"></textarea><br>

    <p>Option 1</p>
    <textarea name="option1" id="" class="option-decoration" cols="80" rows="1"></textarea><br>

    <p>Option 2</p>
    <textarea name="option2" id="" class="option-decoration"  cols="80" rows="1"></textarea><br>

    <p>Option 3</p>
    <textarea name="option3" id="" class="option-decoration" cols="80" rows="1"></textarea><br>

    <p>Option 4</p>
    <textarea name="option4" id="" class="option-decoration" cols="80" rows="1"></textarea><br>

    <p>Right Ans</p>
    <textarea name="correctoption" id="" class="option-decoration" cols="80" rows="1"></textarea><br>

    <input type="submit" value="Add Question">
    <input type="submit" value="Done">

@endsection


