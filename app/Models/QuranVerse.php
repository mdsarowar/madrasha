<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuranVerse extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'quran_chapter_id',
        'verse_arabic',
        'verse_bangla',
        'verse_english',
        'audio',
        'slug',
        'status',
    ];


    protected static $varse;

    public static function updateData($request,$id){
        self::$varse=QuranVerse::find($id);
        self::insertData($request,self::$varse);

    }

    public static function saveData($request){
        self::$varse=new QuranVerse();
        self::insertData($request);
    }
    public static function insertData($request,$varse=null){

        self::$varse->quran_chapter_id                      =$request->quran_chapter_id;
        self::$varse->verse_arabic                          =$request->verse_arabic;
        self::$varse->verse_bangla                          =$request->verse_bangla;
        self::$varse->verse_english                         =$request->verse_english;
        self::$varse->audio                                 =saveImage($request->file('audio'),'backend/admin/quran/audio/',isset($varse)? $varse->audio:'','quranAudio');
        self::$varse->status                                =$request->status;
        $slugtyp=ltrim($request->verse_arabic,'<p>');
        $slugg=rtrim($slugtyp, '</p>');
        self::$varse->slug                                  =str_replace(' ', '-',$slugg);
        self::$varse->save();
    }

    protected $searchableFields = ['*'];

    protected $table = 'quran_verses';

    public function quranChapter()
    {
        return $this->belongsTo(QuranChapter::class);
    }

    public function quranTranslations()
    {
        return $this->hasMany(QuranTranslation::class);
    }
}
