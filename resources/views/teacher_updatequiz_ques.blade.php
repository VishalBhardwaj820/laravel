@extends('layout')

@section('heading')
Quiz Updatation Panel
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
     margin-top:40px;
    margin-left:10px;
    margin-right:10px;

    border:1px solid black;
  }

</style>

@section('right-div')
                    <table id="show" cellspacing=0  border=2px solid black >
<thead >
    <tr>
      <th scope="col">S.rno</th>
      <th scope="col">Question</th>
      <th scope="col">Option1</th>
      <th scope="col">Option2</th>
      <th scope="col">Option3</th>
      <th scope="col">Option4</th>
      <th scope="col">Right</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
     @foreach ($quizques as $quesobj)
  <tr>
      <td  align="center"  scope="row">{{$quesobj->id}}</td>
      <td  align="center">{{$quesobj->question}}</td>
      <td  align="center">{{$quesobj->option1}}</td>
      <td  align="center">{{$quesobj->option2}}</td>
      <td  align="center">{{$quesobj->option3}}</td>
      <td  align="center">{{$quesobj->option4}}</td>
      <td  align="center">{{$quesobj->rightoption}}</td>
      <td  align="center"><a href="/teacher/quiz/update/{{$quiztablename}}/{{$quesobj->id}}"><i class="fas fa-edit"></i></td>

    </tr>

  @endforeach
  </tbody>
</table>
@endsection
