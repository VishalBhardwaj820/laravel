<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{asset('css/layout.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
    .success-failed
    {
        position:absolute;
        height:50px;
        margin:10px;
        padding:10px;
        height:30px;
        width:auto;
        top:55px;
        font-size:22px;
        left:83.5%;
        z-index:10;
        -webkit-animation: cssAnimation 0s ease-in 3s forwards;

    }
    @-webkit-keyframes cssAnimation {
    0% {
        width:200px;
        height: 30px;
    }
   100% {
        width:0;
        height:0;
        visibility:hidden;
    }
}
    .success
    {

        background:#DEF1D8;
        color:green;
        border:1px solid green;
    }

    .failed
    {
            color:red;
            background:#f7d794;
            border:1px solid red;

    }


    </style>

</head>
<body >
@if (session('status'))
    <div class="success-failed success">
        {{ session('status') }}
    </div>
@endif

    <div id="main-div">

            <div id="left-div">
                <div id="banner-name">Lara Quiz </div>

                <table style="margin-top:80px" id="side-bar">
                            <thead>
                            <tr   onclick="window.location.href = '/teacher/quiz/generatequiz'" style="cursor:pointer">
                                    <td><span class="sidebaricon1"><i class="fas fa-home"></i></td>
                                    <td class="icon-text">Activate Quiz</td>
                                </tr>
                            </thead>
                            <tbody>

                            <tr style="cursor:pointer" onclick="window.location.href = '/teacher/quiz/quizname'">
                                    <td><span class="sidebaricon1"><i class="fas fa-bell"></i></td>
                                    <td class="icon-text">New Quiz</td>
                                </tr>
                                <tr onclick="window.location.href = '/teacher/quiz/update'" style="cursor:pointer">
                                    <td><span class="sidebaricon1"><i class="fas fa-exclamation-circle"></i></td>
                                    <td class="icon-text">Update Quiz</td>
                                </tr>



                                <tr  onclick="window.location.href = '/teacher/quiz/delete'" style="cursor:pointer">
                                    <td><span class="sidebaricon1"><i class="far fa-calendar-alt"></i></td>
                                    <td class="icon-text">Delete Quiz</td>
                                </tr>

                                <tr  onclick="window.location.href = '/teacher/quiz/showquiz'" style="cursor:pointer">
                                    <td><span class="sidebaricon1"><i class="fas fa-file-export"></i></td>
                                    <td class="icon-text">All Quiz</td>
                                </tr>

                            </tbody>
                        </table>

            </div>

            <div id="header">

                <span id="system-name">@yield('heading')</span>

                <a href="/teacher/logout"><input type="button" class="btn danger" value="Signout"></a>


            </div>

            <div id="right-div">
            @yield('right-div')
            </div>
     </div>
</body>
</html>
