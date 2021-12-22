<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student=Student::latest()->get();
        return view('admin.master',compact('student'));
    }

    public function showTable(Request $request)
    {
        $student=Student::latest()->get();
        return view('backend.student.index',compact('student'));
    }

    public function addList(Request $request){
        return view('backend.student.create');
    }

    public function studentStore(Request $request){
        $store = Student::create([
            'name' => $request->name,
            'subject' => $request->subject,
        ]);
        return redirect()->route('show.table');
    }
    public function studentEdit($id){
        $edit = Student::where('id',$id)->first();
        return view('backend.student.edit',compact('edit'));
    }

    public function studentUpdate(Request $request){
        $id = $request->id;
        Student::where('id',$id)->update([
            'name' => $request->name,
            'subject' => $request->subject
        ]);
        return redirect()->route('show.table');
    }

    public function studentDelete($id){
        Student::where('id',$id)->delete();
        return redirect()->route('show.table');
    }
}
