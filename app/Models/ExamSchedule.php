<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExamSchedule extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'exam_id',
        'section_id',
        'subject_id',
        'academic_year_id',
        'academic_class_id',
        'exam_date',
        'start_time',
        'end_time',
        'room',
        'note',
        'slug',
        'status',
    ];

    protected static $schedule;

    public static function updateData($request,$id){
        self::$schedule=ExamSchedule::find($id);
        self::insertData($request,self::$schedule);
    }

    public static function saveData($request){
        self::$schedule=new ExamSchedule();
        self::insertData($request);
    }

    public static function insertData($request,$schedule=null){
        self::$schedule->exam_id                                   =$request->exam_id;
        self::$schedule->section_id                                =$request->section_id;
        self::$schedule->subject_id                                =$request->subject_id;
        self::$schedule->academic_year_id                          =$request->academic_year_id;
        self::$schedule->academic_class_id                         =$request->academic_class_id;
        self::$schedule->exam_date                                 =$request->exam_date;
        self::$schedule->start_time                                =$request->start_time;
        self::$schedule->end_time                                  =$request->end_time;
        self::$schedule->room                                      =$request->room;
        self::$schedule->note                                      =$request->note;
        self::$schedule->slug                                      =str_replace('','-',$request->exam_id);
        self::$schedule->status                                    =$request->status;
        self::$schedule->save();
    }

    protected $searchableFields = ['*'];

    protected $table = 'exam_schedules';

    protected $casts = [
        'exam_date' => 'date',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function examAttendances()
    {
        return $this->hasMany(ExamAttendance::class);
    }

    public function academicClass()
    {
        return $this->belongsTo(AcademicClass::class);
    }
}
