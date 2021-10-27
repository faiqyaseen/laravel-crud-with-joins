<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
class TeacherController extends Controller
{
    //
    function add(Request $req){
        $teacher = new teacher();
        $teacher->name = $req->name;
        $teacher->save();
        return redirect('/');
    }

    function tlist(){
        $teachers = teacher::all();
        return view('teachers',['teachers'=>$teachers]);
    }

    function for_update($id){
        $teacher =  teacher::find($id);
        return view('update-teacher',['teacher'=>$teacher]);
    }
    function update(Request $req){
        $teacher = teacher::find($req->id);
        $teacher->name = $req->name;
        $teacher->save();
        return redirect('/teachers');
    }
    function delete($id){
        $teacher = teacher::find($id);
        $teacher->delete();
        return redirect('teachers');
    }
}
