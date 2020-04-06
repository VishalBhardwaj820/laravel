<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class welcome extends Controller
{
   public function login(Request $req)
   {

            if($req->input('login')=="teacher")
            {
                    $teacher=DB::connection('teacher')->table('teachers')->where('username', $req->input('username'))->pluck('name');
                    $req->session()->put('teacher',$teacher[0] );
                    return redirect('/teacher/quiz/generatequiz')->with('status','Successfully Login');
            }
            else if($req->input('login')=="student")
            {

                $student=DB::connection('student')->table('students')->where('username', $req->input('username'))->pluck('name');

                      $req->session()->put('student',$student[0] );
                      return  redirect('/student/quiz/showquiz');

            }
            else
            {
                return  redirect('/welcomepage');
            }
   }

   public function register()
   {

   }
}
