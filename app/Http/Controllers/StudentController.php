<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
use App\Models\student;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    //
    function for_add(){
        $teacher = teacher::all();
        return view('add-student',['teachers'=>$teacher]);
    }

    function add(Request $req){
        $student = new student();
        $student->name = $req->name;
        $student->teacher_id = $req->teacher_id;
        $student->save();
        $teacher = teacher::find($req->teacher_id);
        $teacher->total_students = $teacher->total_students + 1;
        $teacher->save();
        return redirect('/');
    }

    function slist(){
        $students = teacher::join('students','teachers.id','=','students.teacher_id')
        ->select('teachers.name AS teacher_name','students.*')
        ->get();
        return view('students',['students'=>$students]);
    }

    function for_update($id){
        $student =  student::find($id);
        $teacher = teacher::all();
        return view('update-student',['student'=>$student,'teachers'=>$teacher]);
    }

    function update(Request $req){
        $student = student::find($req->id); 

        if($student->teacher_id != $req->teacher_id){
            
            $teacher = teacher::find($req->teacher_id);
            $teacher->total_students = $teacher->total_students + 1;
            $teacher->save();
            
            $teacher2 = teacher::find($student->teacher_id);
            $teacher2->total_students = $teacher2->total_students - 1;
            $teacher2->save();

            $student->name = $req->name;
            $student->teacher_id = $req->teacher_id;
            $student->save();
        }else{
            $student->name = $req->name;
            $student->teacher_id = $req->teacher_id;
            $student->save();
        }
        // return $student->teacher_id . " " . $req->teacher_id;
        return redirect('/students');
    }

    function delete($id){
        $student = student::find($id);
        $student->delete();

        $teacher = teacher::find($student->teacher_id);
        $teacher->total_students = $teacher->total_students - 1;
        $teacher->save();
        return redirect('students');
    }
}
