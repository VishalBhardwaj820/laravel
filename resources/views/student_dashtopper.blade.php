<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            margin:0;
            padding:0;
        }
        span
        {
            display:inline-block;
        }
        #header{
            width:100%;
            height:70px;
            color:white;
            font-size:38px;
            font-weight:800;
            padding:10px;
            text-align:center;
            background-color:#17c0eb;
        }
        #dashbord
        {
            min-height:400px;
            width:700px;
            background:white;
            margin-left:25%;
            margin-top:30px;
        }
        thead
        {
            background:black;
            color:white;
        }
        td
        {
            font-size:28px;
            text-align:center;
            width:250px;
        }
        tr:nth-child(even) {
  background: white;
}

        tr:nth-child(odd) {
         background: #b2bec3;
}

thead
        {
            background:black;
            color:white;
        }


input[type="button"]
{
    border:none;
    background:none;
    border-radius:26px;
    background:red;
    height:40px;
    width:300px;
    font-size:28px;
    font-weight:500;
    background-color:blue;
    color:white;
    margin-left:550px;
    cursor:pointer:

}
input[type="button"]:hover
{
    z-index:scale(.2px);

}
    </style>
</head>
<body bgcolor="#dcdde1">
    <span id="header" cellpadding=0 >Topper Ranking Dashboard</span>
    <span id="dashbord">

        <table>
            <thead>
                    <td style="background-color:black">Sr no</td>
                    <td style="background-color:black"> Name</td>
                    <td style="background-color:black">marks</td>
            </thead>
            <tbody>

              @foreach($userdetails as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->marks}}</td>
                </tr>

              @endforeach

            </tbody>
        </table>
    </span>
        <br> <br>
    <span><a href="/student/quiz/showquiz"><input type="button" value="Back To Home"></a></span>
</body>
</html>
