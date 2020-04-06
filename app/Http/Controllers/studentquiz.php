<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class studentquiz extends Controller
{
    public function showquiz(Request $request)
    {
         if($request->session()->get('student'))
         {
             $quiz = DB::select("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='studentquiz'");
            $username=$request->session()->get('student');
            return view('studentpage',["quizname"=>$quiz,'username'=>$username]);

         }
         else
         {
             return redirect('welcomepage');
         }


    }

    public function attemptquiz(Request $req)
    {
        if($req->session()->get('student'))
       {

        $string =url()->current();
        $str_arr = explode ("/", $string);
        $quizques =DB::connection('teacherquiz')->table($str_arr[6])->simplePaginate(1);
        return view('student_activequiz',["quizques"=>$quizques]);
       }
       else{
           return redirect('welcomepage');
       }
    }

    public function signout(Request $req)
    {
        if($req->session()->get('student'))
        {
            $req->session()->forget('student');
            return redirect('/welcomepage');
        }
    }



    public function dashbord(Request $req)
    {
        // print_r($req->all());
            return view('student_dashboard');
    }



    public function loggedout(Request $request)
    {
     if($request->session()->get('student'))
     {
     $request->session()->forget('student');
     }

    return redirect('/welcomepage');
    }


    public function topper()
    {
        return view('student_dashtopper');
    }
}
