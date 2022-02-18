<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //

    	public function show(){
       
        $courses = array();
        $course = array(

            "course" => "C programming",
            "Instructor" => "Saif",
            "Duration" => "3 months",
            "Start" => "2 feb 2022",
        );
        $course =  (object)$course;
        $courses[] = $course;

        $course = array(

            "course" => "Java programming",
            "Instructor" => "Prottoy",
            "Duration" => "3 months",
            "Start" => "10 feb 2022",
        );
        $course =  (object)$course;
        $courses[] = $course;

        $course = array(

            "course" => "C# programming",
            "Instructor" => "Abid",
            "Duration" => "3 months",
            "Start" => "4 feb 2022",
        );
        $course =  (object)$course;
        $courses[] = $course;

        return view('homepage')->with('course',$courses);
    }
}