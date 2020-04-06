<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{asset('css/css_quiz_page.css')}}">

    <title>Document</title>
    <style>
        header
		{
			height: 60px;
			padding: 0px;
		}
		#timer_div
		{
			font-size: 22px;
			color:teal;
			font-weight: bold;
			width:150px;
			padding:10px;
			text-align: center;
            border:2px solid green;
            margin-top:4px;
            margin-left:40%;

		}

        .options-circle
        {
            height:35px;
            width:35px;
            margin:10px;
            padding-left:10px;
            padding-top:6px;
            background-color:white;
            display:inline-block;
            box-sizing:border-box;
            font-weight:700;
            cursor:pointer;
            border-radius:50%;

        }
        .options-circle:hover
        {
           background:#273c75;
           color:white;
        }
        #option{
            height:300px;
            width:300px;
            position:absolute;
            /* background-color:red; */
            padding:30px;
            box-sizing:border-box;
            margin-top:150px;
        }
    </style>
</head>
<body bgcolor="black"  onload="showTimer()">

    <form action="/student/quiz/dashbord" method="get">
    <span id="main-div">
        <span id="header">Welcome to Lara Quiz       <input  type="submit" value="Submit"></span>
        <span id="main-section">
            <span id="side-section-header"><span id="timer_div"></span></span>
            <span id="questiondiv">
            <span id="question">

            @foreach ($quizques as $quesobj)
<!-- Question which show to the student -->
                    <p>Q.{{$quesobj->id}} {{ $quesobj->question }}</p> <br> <br>

<!-- Option for this question -->
                    <input type="radio" name="ans{{$quesobj->id}}" value="{{$quesobj->option1}}">{{$quesobj->option1}}<br> <br>
                    <input type="radio"  name="ans{{$quesobj->id}}"  value="{{$quesobj->option2}}">{{$quesobj->option2}} <br> <br>
                    <input type="radio" name="ans{{$quesobj->id}}"  value="{{$quesobj->option3}}">{{$quesobj->option3}} <br><br>
                    <input type="radio" name="ans{{$quesobj->id}}"  value="{{$quesobj->option4}}">{{$quesobj->option4}} <br><br>
                    <input type="hidden"name="correctans{{$quesobj->id}}" class="Correctans" value="{{$quesobj->rightoption}}">

             @endforeach



     </span>
            </span>
            <span id="side-section">
                    <span class="abs" id="name">Name ==>> Vishal Bhardwaj </span>
                    <span class="abs" id="Roll NO" style="margin-top:40px">Regno ==>> 11717466</span>

                    <span id="border1">Number Of Question</span>
                    <span id="option">
                    <span class="options-circle">1</span>
                    <span class="options-circle">2</span>
                    <span class="options-circle">3</span>
                    <span class="options-circle">4</span>
                    <span class="options-circle">5</span>
                    <span class="options-circle">6</span>
                    <span class="options-circle">7</span>
                    <span class="options-circle">8</span>
                    <span class="options-circle">9</span>
                    <span class="options-circle">10</span>
                    </span>
                    <span id="border2" style="margin-top:470px;"></span>


            </span>
        </span>
        <span id="footer">
            <!-- <input type="button" value="<< Previous">
            <input type="button" value="Next >>"> -->
            {{ $quizques->links() }}



        </span>
    </span>

    </form>

<script>
function showTimer(time1)
{
	var time="00:01:00";
	timer_div=document.getElementById("timer_div");
	timer_div.innerHTML=time;
	var my_timer=setInterval(function(){
		var hr=0;
		var min=0;
		var sec=0;

		var time_up=false;
		t=time.split(":");
		hr=parseInt(t[0]);
		min=parseInt(t[1]);
		sec=parseInt(t[2]);
		if(sec==0)
		{
			if(min>0)
			{
				sec=59;
				min--;
			}
			else if(hr>0)
			{
				min=59;
				sec=59;
				hr--;
			}
			else
			{
				time_up=true;
			}
		}else
		{
			sec--;
		}
		if(hr<10)
		{
			hr="0"+hr;
		}
		if(min<10)
		{
			min="0"+min;
		}
		if(sec<10)
		{
			sec="0"+sec;
		}

		(time=hr+":"+min+":"+sec);
		timer_div=document.getElementById("timer_div");
			timer_div.innerHTML=time;
		if(time_up)
		{
			time="TIMEUP";
			timer_div=document.getElementById("timer_div");
			timer_div.innerHTML=time;
			if(time_up)
			{
				clearInterval(my_timer);
			}
		}
	},1000);
}

</script>

</body>
</html>
