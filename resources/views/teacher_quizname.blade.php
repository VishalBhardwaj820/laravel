@extends('layout')

@section('heading')
Quiz Name Panel
@endsection

<style>
#Quiz-Name
{
    border:2px solid #673AB7;
    height:400px;
    width:400px;
    padding-top:70px;
    /* color:pink; */
    font-size:22px;
    /* background-color:red; */
    margin-top:100px;
    margin-left:100px;
    padding-left:50px;
    box-sizing:border-box;

}
#Quiz-Name label
{
    font-size:28px;
}

#Quiz-Name input[type="submit"]
{
    background:none;
    border:none;
    /* border:2px solid yellow; */
    color:white;
    background-color:#341f97;
    font-size:22px;
    height:60px;
    width:200px;
    transition: transform .2s;
    border-radius:30px;
    margin-top:50px;
    margin-left:50px;
    cursor:pointer;
    font-size:26px;
}

#Quiz-Name input[type="submit"]:hover
{
    transform: scale(1.01);  background-color:#ee5253;
}

#Quiz-Name input[type="text"]
{
    height:50px;
    width:300px;
    margin-top:50px;
    font-size:26px;

}

</style>

@section('right-div')

<form action="/teacher/quiz/quizname/quizcreated" method="get">

<div id="Quiz-Name">
        <label for="name"><u>Enter Your Quiz Name</u></label><br>
        <input type="text" name="quizname" placeholder="Name Here"><br>
       <input type="submit" value="Next">
    </div>

</form>


@endsection
