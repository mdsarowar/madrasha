<?php

namespace App\Http\Controllers\Admin\Quran;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuranVerseRequest;
use App\Models\QuranChapter;
use App\Models\QuranVerse;
use Illuminate\Http\Request;

class VarseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.quran.varse.manage',[
            'varses'=>QuranVerse::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.quran.varse.create',[
            'chapters'=>QuranChapter::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuranVerseRequest $request)
    {
        QuranVerse::saveData($request);
        return redirect()->route('varse.index')->with('success','varse Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('backend.quran.varse.create',[
            'chapters'=>QuranChapter::all(),
            'varse'=>QuranVerse::where('slug',$slug)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuranVerseRequest $request, $id)
    {
        QuranVerse::updateData($request,$id);
        return redirect()->route('varse.index')->with('success','varse Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $varse=QuranVerse::where('slug',$slug)->first();
        if (file_exists($varse->audio)){
            unlink($varse->audio);
        }
        $varse->delete();
        return redirect()->route('varse.index')->with('success','varse delete successfully');

    }
}
