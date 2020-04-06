<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href=" {{asset('css/studentpage.css')}}">

</head>
<body>
<div id="maindiv">

@if (session('status'))
    <div class="success-failed success">
        {{ session('status') }}
    </div>
@endif


<div id="header">

    <ul>
<a href=""><div style="display:inline-block;color:white;font-size:26px;" ><i class="fas fa-bars"></i></div></a>
        <h3 style="display:inline-block"><l1>Quiz Addda</l1></h3>
        <l1 style="margin-left:40%;"><a href="/student/topper">DashBoard</a> </l1>
        <l1><a href="/student/quiz/dashbord">Result</a> </l1>
        <l1><a href="">Test</a></l1>
        <!-- <l1><a href="">Certificate</a></l1> -->
        <a href="/student/loggedout">
    <span style="display:inline-block;color:white;font-size:28px; margin-left:40px;"><i class="fas fa-sign-out-alt"></i></span>
        </a>
        <li></li>
    </ul>

</div>
<div id="name-div">

<span id="name">
    <div id="DP"><p>V.B</p> </div>
<h1>Hello! {{$username}}</h1>
</span>

<span id="info">

<ul>
    <span class="info" style="margin-left:200px;margin-right:30px;"><h3><li>Enrolled = 4</li></h3></span>
    <span class="info"style="margin-right:30px;"><h3><li>Completed = 1</li><br></h3></span>
    <span class="info"><h3><li>Points = 100</li><br></h3></span>

</ul>

</span>
</div>



<div id="test-head">
    <span>YOUR QUIZ</span>
</div>



<!--             TEST BOX WHIXH SHOW AFTER THE QUIX HEADING -->

<div id="test-box">

    @foreach($quizname as $quiz)
    <div class="test-show-box"><div class="test-img"><i class="fas fa-book-reader"></i></div>
    <span style="color:black;">{{$quiz->TABLE_NAME}} <a style="color:blue;" href="/student/quiz/attemptquiz/{{$quiz->TABLE_NAME}}">Click Here </a><br>Total Marks 100 <br> Negative = -1</span></div>
    <div class="test-show-box"><div class="test-img"><i class="fas fa-book-reader"></i></div>
    <span style="color:black;">Quiz 2<a style="color:blue;" href="/student/quiz/attemptquiz/{{$quiz->TABLE_NAME}}">Click Here </a><br>Total Marks 100 <br> Negative = -1</span></div>
    @endforeach
 </div>


 <div id="bottom-strip"></div>


</div>
</body>
</html>
