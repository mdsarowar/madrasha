<?php

namespace App\Http\Controllers\Admin\Academic;

use App\Http\Controllers\Controller;
use App\Models\TeacherCertificate;
use Illuminate\Http\Request;

class TeacherCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.academic.teacherCertificate.manage',[
            'certificates'=>TeacherCertificate::where('teacher_id',$id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        return $id;
        return view('backend.academic.teacherCertificate.edit',[
            'certificate'=>TeacherCertificate::where('teacher_id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        TeacherCertificate::saveCertificate($request,$id);
        return redirect()->route('certificate.show',$id)->with('success','Certificate Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $certificate=TeacherCertificate::find($id);
        $teacherId=$certificate->teacher_id;
        if (file_exists($certificate->file_path)){
            unlink($certificate->file_path);
        }
        $certificate->delete();
        return redirect()->route('certificate.show',$teacherId)->with('success','Certificate delete successfully');
    }
}
