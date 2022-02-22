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


    
    public function contact(){
       
        $contacts = array();
        $contact = array(

            "name" => "Saif",
            "position" => "developer",
            "mail" => "s@gmail.com",
           
        );
        $contact =  (object)$contact;
        $contacts[] = $contact;

        $contact = array(

            "name" => "Tarek",
            "position" => "Engineer",
            "mail" => "t@gmail.com",
           
        );
        $contact =  (object)$contact;
        $contacts[] = $contact;

        $contact = array(
            "name" => "Niloy",
            "position" => "developer",
            "mail" => "n@gmail.com",
           
          
        );
        $contact =  (object)$contact;
        $contacts[] = $contact;

        return view('contact')->with('contact',$contacts);
    }

    public function login(){
        return view('login');
    }

    public function admin(){
        return view('admin.admin');
    }

    public function student(){
        return view('students.student');
}
}