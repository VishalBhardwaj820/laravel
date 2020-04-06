@extends('layout')

<link rel="stylesheet" href=" {{asset('css/teacher.css')}}">

@section('heading')
Make Your Quiz Live
@endsection

<style>

#show tr:nth-child(even) {
    background-color: #eee;
  }
  #show tr:nth-child(odd) {
    background-color:#fff;
  }
  #show th {
    color: white;
    background-color: black;
  }

  #show th,#show  td
      {
          padding:5px;
          box-sizing:border-box;
          font-size:22px;
          height:10px;
          width:200px;


      }
  #show td
  {
      border:1px solid black;
  }
  #show
  {
      margin-left:90px;margin-top:40px;
      border:1px solid black;
  }
  #generate-quiz input[type="submit"]
  {
    background:none;
    border:none;
    /* border:2px solid yellow; */
    color:white;
    background-color:#341f97;
    font-size:22px;
    height:50px;
    width:200px;
    transition: transform .2s;
    border-radius:30px;
    /* margin-top:50px; */
    margin-left:10px;
    cursor:pointer;
    font-size:26px;
  }

  #generate-quiz input[type="submit"]:hover
{
    transform: scale(1.01);  background-color:#ee5253;
}

</style>

@section('right-div')


<div id="generate-quiz">
    <form action="/teacher/quiz/generatequiz/generatequiz2" method="get">
    <p>Quiz Name</p><br>
        <input type="text" name="quizname"><br>
    <p>Quiz Time</p><br>
    <input type="number" name="quiztime"><br><br>

    <input type="submit" value="Generate Quiz">


    </form>
</div>







 <table id="show" cellspacing=0 style="margin-left:450px;margin-top:40px;" border=2px solid black >
<thead >
    <tr>
      <th scope="col">S.rno</th>
      <th scope="col">Quiz Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($quiz as $day=>$value)
  <tr>
      <td align="center" scope="row">{{$day+1}}</td>
      <td align="center">{{$value}}</td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
