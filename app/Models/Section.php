<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable=['section_name','section_capacity','section_note','status'];
    protected static $section;

    public static function saveData($request){

            self::$section=new Section();

        self::$section->section_name            =$request->section_name;
        self::$section->section_capacity        =$request->section_capacity;
        self::$section->section_note            =$request->section_note;
        self::$section->status                  =$request->status;
        self::$section->slug                    =str_replace('','-',$request->section_name.time());
        self::$section->save();
    }
    public static function updateData($request,$id){

            self::$section=Section::find($id);

        self::$section->section_name            =$request->section_name;
        self::$section->section_capacity        =$request->section_capacity;
        self::$section->section_note            =$request->section_note;
        self::$section->status                  =$request->status;
        self::$section->slug                    =str_replace('','-',$request->section_name.time());
        self::$section->save();
    }
}
