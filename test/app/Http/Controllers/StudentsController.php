<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function all(Request $request){
        $students = Student::all();
        return view("list-student",[
        "students"=>$students
        ]);
    }
    public function form(){
        return view("add-student");

    }
//    public  function create(Request $request){
//        Classes::create([
//            "cid"=>$request->get("cid"),
//            "name"=>$request->get("name"),
//            "room"=>$request->get("room"),
//        ]);
//        return redirect()->to("/class/list");
//    }
    public function create(Request $request){
        Student::create([
            "name"=>$request->get("name"),
            "address"=>$request->get("address"),
            "age"=>$request->get("age"),
            "telephone"=>$request->get("telephone"),
        ]);
                return redirect()->to("/student/list");
    }
}
