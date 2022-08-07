<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ClassMadrasha;

class Subject extends Model
{
    use HasFactory;

    protected $fillable=[
        'class_id',
        'group_id',
        'subject_name',
        'subject_type',
        'pass_mark',
        'full_mark',
        'subject_author',
        'subject_code',
        'book_image',
        'lavel',
        'is_graduation',
        'is_main',
        'is_optional',
        'note',
        'status',
        'slug',

    ];

    protected static $clssub;

    public static function saveData($request){

        self::$clssub=new Subject();

        self::$clssub->class_id                =$request->class_id;
        self::$clssub->group_id                =$request->group_id;
        self::$clssub->subject_name            =$request->subject_name;
        self::$clssub->subject_type            =$request->subject_type;
        self::$clssub->pass_mark               =$request->pass_mark;
        self::$clssub->full_mark               =$request->full_mark;
        self::$clssub->subject_author          =$request->subject_author;
        self::$clssub->subject_code            =$request->subject_code;
        self::$clssub->book_image              =saveImage($request->file('book_image'),'backend/admin/img/subject/',' ','bookImage');
        self::$clssub->lavel                   =$request->lavel;
        self::$clssub->is_graduation           =$request->is_graduation;
        self::$clssub->is_main                 =$request->is_main;
        self::$clssub->is_optional             =$request->is_optional;
        self::$clssub->note                    =$request->note;
        self::$clssub->status                  =$request->status;
        self::$clssub->slug                    =str_replace(' ', '-', $request->subject_name);
        self::$clssub->save();
    }
    public static function updateData($request,$id){

            self::$clssub=Subject::find($id);

        self::$clssub->class_id                =$request->class_id;
        self::$clssub->group_id                =$request->group_id;
        self::$clssub->subject_name            =$request->subject_name;
        self::$clssub->subject_type            =$request->subject_type;
        self::$clssub->pass_mark               =$request->pass_mark;
        self::$clssub->full_mark               =$request->full_mark;
        self::$clssub->subject_author          =$request->subject_author;
        self::$clssub->subject_code            =$request->subject_code;
        self::$clssub->book_image              =saveImage($request->file('book_image'),'backend/admin/img/subject/',self::$clssub->book_image,'bookImage');
        self::$clssub->lavel                   =$request->lavel;
        self::$clssub->is_graduation           =$request->is_graduation;
        self::$clssub->is_main                 =$request->is_main;
        self::$clssub->is_optional             =$request->is_optional;
        self::$clssub->note                    =$request->note;
        self::$clssub->status                  =$request->status;
        self::$clssub->slug                    =str_replace(' ', '-', $request->subject_name);
        self::$clssub->save();
    }

    public function classes(){
        return $this->belongsTo(ClassMadrasha::class);
    }
}
