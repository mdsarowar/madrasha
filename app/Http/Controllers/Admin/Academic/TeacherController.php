<?php

namespace App\Http\Controllers\Admin\Academic;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\TeacherCertificate;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.academic.teacher.manage',[
            'teachers'=>Teacher::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.academic.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|Unique:users,email',
            'password' => 'required|min:8',
            'user_name' => 'required|Unique:teachers,user_name',
            'phone' => 'required',

        ]);

//        return $request->status;
        Teacher::saveData($request);
        return redirect()->route('teacher.index')->with('success','Teacher create successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('backend.academic.teacher.details',[
            'teacher'=>Teacher::where('slug',$slug)->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('backend.academic.teacher.create',[
            'teacher'=>Teacher::where('slug',$slug)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Teacher::updateData($request,$id);
        return redirect()->route('teacher.index')->with('success','Teacher update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $teacher=Teacher::where('slug',$slug)->first();
        $certificate=TeacherCertificate::where('teacher_id',$teacher->id)->get();
        foreach ($certificate as $cer){

            if (file_exists($cer->file_path)){
                unlink($cer->file_path);
            }
            $cer->delete();
        }

        if (file_exists($teacher->photo)){
            unlink($teacher->photo);
        }
        $teacher->delete();

    return redirect()->route('teacher.index')->with('success','Teacher delete successfully');
    }


}
