<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class quiz extends Controller
{
   public function showquiz(Request $req)
   {
    if($req->session()->get('teacher'))
    {
        $quiz = DB::select("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='teacherquiz'");
        $quizsend=array();
        foreach($quiz as $q)
        {
          $quizsend=Arr::collapse([$quizsend,(array)$q->TABLE_NAME]);
        }
        return view('teacher_showquiz',['quiz'=>$quizsend]);
    }
    else
    {
        return redirect('welcomepage');
    }



}






   public function updatequiz()
   {
    $quiz = DB::select("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='teacherquiz'");
    $quizsend=array();
    foreach($quiz as $q)
    {
      $quizsend=Arr::collapse([$quizsend,(array)$q->TABLE_NAME]);
    }
    return view('teacher_updatequiz',['quiz'=>$quizsend]);
   }


   public function editquizques()
   {
    $string =url()->current();
    $str_arr = explode ("/", $string);
    $quizques =DB::connection('teacherquiz')->table($str_arr[6])->get();

    return view('teacher_updatequiz_ques',['quiztablename'=>$str_arr[6],'quizques'=>$quizques]);

   }

   public function editquizques2()
   {
    $string =url()->current();
    $str_arr = explode ("/", $string);

    $quizques =DB::connection('teacherquiz')->table($str_arr[6])->where('id', '=',$str_arr[7])->get();
    return view('teacher_editquesform',['quiztablename'=>$str_arr[6],'quizques'=>$quizques]);

   }


   Public function savechanges(Request $request)
   {
    $string =url()->current();
    $str_arr = explode ("/", $string);
    $quizques =DB::connection('teacherquiz')->table($str_arr[6])->where('id', '=',$str_arr[7])->update(
        array('question'=>$request->input('question'),
        'option1'=>$request->input('option1'),
        'option2'=>$request->input('option2'),
        'option3'=>$request->input('option3'),
        'option4'=>$request->input('option4'),
        'rightoption'=>$request->input('rightoption')
        )
    );


    return redirect('/teacher/quiz/update/'.$str_arr[6])->with('status','Quiz Updated');;
   }






   public function deletequiz()
   {
    $quiz = DB::select("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='teacherquiz'");

    $quizsend=array();
    foreach($quiz as $q)
    {
      $quizsend=Arr::collapse([$quizsend,(array)$q->TABLE_NAME]);
    }
    return view('teacher_deletequiz',['quiz'=>$quizsend]);
   }


   public function deletefinal()
   {
    $string =url()->current();
    $str_arr = explode ("/", $string);
    // print_r($str_arr);
    DB::connection('teacherquiz')->statement('drop table '.$str_arr[6]);
    return redirect('/teacher/quiz/delete')->with('status','Quiz Deleted');;
   }






   Public function quizcreated(Request $req)
   {
    echo $req->input('quizname');
    return redirect('/teacher/quiz/quizname/'.$req->input('quizname').'/insertques');
   }


   public function insertques()
   {
    $string =url()->current();
    $str_arr = explode ("/", $string);
    // DB::connection('teacherquiz')->statement('create table'.$str_arr[6]);
    return view('teacher_quesform');
   }













   Public function generatequiz(Request $req)
   {

    if($req->session()->get('teacher'))
        {
            $quiz = DB::select("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='teacherquiz'");

            $quizsend=array();
            foreach($quiz as $q)
            {
              $quizsend=Arr::collapse([$quizsend,(array)$q->TABLE_NAME]);
            }
               return view('teacher_generatequiz',['quiz'=>$quizsend]);
        }
        else
        {
            return redirect('welcomepage');
        }



   }


   public function generatequiz2(Request $req)
   {
    $c1 = DB::connection("teacherquiz")->select("SELECT * from quiz");
    foreach($c1 as $record){
    DB::connection("studentquiz")->table("quiz")->insert(get_object_vars($record));
    }

    return redirect('/teacher/quiz/generatequiz')->with('status','Quiz Generated');

   }


   public function signout(Request $request)
   {
    if($request->session()->get('teacher'))
    {
    $request->session()->forget('teacher');
    }

    return redirect('/welcomepage')->with('status','Successfully Login');
   }


}
