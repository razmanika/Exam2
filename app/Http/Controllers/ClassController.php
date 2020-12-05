<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\User;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        return view('index');
    }


    public function students(){
        $students = User::with('is_student');

        return view('students')->with('students', $students);
    }

    public function getStudent(User $user){

        return view('student')->with('student', $user);
    }

    public function studentview(User $user, Classe $classe){
        return view('student')->with(['class','student'],[$classe,$user]);
    }

    public function classes(){
        $classes = Classe::all();

        return view('classes')->with('classes', $classes);
    }

    public function getClass(Classe $classe){

        return view('class')->with('class', $classe);
    }

    public function classview(Classe $classe, User $user){

        return view('class')->with(['class','students'],[$classe,$user]);
    }

    public function myclass(){

    }

}
