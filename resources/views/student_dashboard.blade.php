<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    span{
        display:inline-block;
    }
    #header{
        width:100%;
        height:60px;
        background-color:#00a8ff;
    }
    #main-div{
        height:400px;
        width:900px;
        background-color:white;
        margin-top:80px;
        margin-left:225px;
    }
    .data
    {
        background-color:#f5f6fa;
        height:50px;
        width:90%;
        /* border:.1px solid black; */
        margin-left:50px;
        margin-top:20px;
        display:flex;
        justify-content:space-around;
        font-size:22px;
        padding-top:10px;
        box-sizing:border-box;
    }
    #hhh
    {
        display:inline-block;
        margin-left:40%;

    }
    #header2
    {
        width:100%; margin-left:0px;
        height:50px;
        background-color:black;
        display:flex;
        justify-content:space-around;
        color :white;
        font-size:22px;
        font-weight:700;
        box-sizing:border-box;
        padding-top:10px;

    }

    #classroom
    {
        border:none;
        background:none;
        font-size:27px;
        color :white;
        margin-top:20px;
        /* border:2px solid black; */
        margin-left:500px;
        padding:10px;
        border-radius:25px;
        background-color:#00BCD4;
    }

    </style>
</head>
<body bgcolor="#f5f6fa">
<span id="header"><span id="#hhh" style="
 font-size:40px; margin-left:40%;
 margin-top:10px;font-weight:800;
">Result Time</span></<span><span></span></span>
    <span id="main-div">

      @foreach($userreport as $user)


              <span id="header2" ><span>Name</span><span>{{$user->name}}</span></span>
              <span class="data"><span>{{$user->total marks}}</span><span></span></span>
              <span class="data"><span>{{$user->attempt}}</span><span></span></span>
              <span class="data"><span>{{$user->unattempt}}</span><span></span></span>
              <span class="data"><span>{{$user->marks}}</span><span></span></span>
      @endforeach
    </span>
    <br><br>
<a href="/student/quiz/showquiz">
<input id="classroom" type="button" value="Back To Classroom >>>">
</a>
</body>
</html>
