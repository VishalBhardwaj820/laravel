@extends('layout')

@section('heading')
List Of All Available Quiz
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

</style>

@section('right-div')

                    <table id="show" CELLSPACING=0  >
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
