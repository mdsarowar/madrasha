<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject=[
            [
                'id'=>1,
                'class_id'=>1,
                'group_id'=>1,
                'subject_name'=>'bangla',
                'subject_type'=>'english',
                'pass_mark'=>15,
                'full_mark'=>100,
                'subject_author'=>'something',
                'subject_code'=>011,
                'book_image'=>' ',
                'lavel'=>'primary',
                'is_graduation'=>0,
                'is_main'=>0,
                'is_optional'=>0,
                'note'=>'something',
                'status'=>0,
                'slug'=>'ss110',
            ],
            [
                'id'=>2,
                'class_id'=>1,
                'group_id'=>1,
                'subject_name'=>'bangla',
                'subject_type'=>'english',
                'pass_mark'=>15,
                'full_mark'=>100,
                'subject_author'=>'something',
                'subject_code'=>011,
                'book_image'=>'',
                'lavel'=>'primary',
                'is_graduation'=>1,
                'is_main'=>1,
                'is_optional'=>1,
                'note'=>'something',
                'status'=>1,
                'slug'=>'ss1101.',
            ],
        ];
        Subject::insert($subject);
    }
}
