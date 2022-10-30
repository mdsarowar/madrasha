<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Academic\SectionController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\Academic\ClassController;
use App\Http\Controllers\Admin\Academic\SubjectController;
use App\Http\Controllers\Admin\Academic\TeacherController;
use App\Http\Controllers\Admin\Academic\TeacherCertificateController;
use App\Http\Controllers\Admin\Academic\StaffController;
use App\Http\Controllers\Admin\Academic\ParentController;
use App\Http\Controllers\Admin\Quran\VarseController;
use App\Http\Controllers\Admin\Quran\ChapterController;
use App\Http\Controllers\Admin\Quran\TranslationController;
use App\Http\Controllers\Admin\Quran\TranslationProviderController;
use App\Http\Controllers\Admin\Library\LibraryBookCategoryController;
use App\Http\Controllers\Admin\Library\LibraryBookController;
use App\Http\Controllers\Admin\Library\LibraryMemberController;
use App\Http\Controllers\Admin\Library\LibraryEbookController;
use App\Http\Controllers\Admin\Library\LibraryEbookFileController;
use App\Http\Controllers\Admin\Hostel\HostelController;
use App\Http\Controllers\Admin\Hostel\HostelMemberController;
use App\Http\Controllers\Admin\ExamManagement\QuestionController;
use App\Http\Controllers\Admin\ExamManagement\QuestionDificultyLevelController;
use App\Http\Controllers\Admin\ExamManagement\ExamAttendanceController;
use App\Http\Controllers\Admin\ExamManagement\ExamScheduleController;
use App\Http\Controllers\Admin\ExamManagement\ExamMarkDistributionTypeController;
use App\Http\Controllers\Admin\ExamManagement\ExamController;
use App\Http\Controllers\Admin\ExamManagement\ExamGradeController;
use App\Http\Controllers\Admin\Academic;
use App\Http\Controllers\Admin\UserManagement\AcademicStuffController;
use App\Http\Controllers\Admin\UserManagement\AdminController;
use App\Http\Controllers\Admin\UserManagement\UserDesignationController;
use App\Http\Controllers\Admin\UserManagement\UserManagementStudentController;
use App\Http\Controllers\Admin\UserManagement\UserManagementTeacherController;
use App\Http\Controllers\Admin\UserManagement\UserManagementSubmittedCertificateController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.home.dashboard');
    })->name('dashboard');

    Route::prefix('admin')->group(function (){
        //permissions route
        Route::resource('permissions', PermissionController::class);
        //roles route
        Route::resource('roles', RoleController::class);
        //User route
        Route::resource('users', UserController::class);
        // Setting route
        Route::resource('setting',SettingController::class);
//        class route
        Route::resource('class',ClassController::class);
        //Section route
        Route::resource('section',SectionController::class);
        //Subject route
        Route::resource('subject',SubjectController::class);
        //Teacher route
        Route::resource('teacher',TeacherController::class);
//        Route::get('certificate.show/{id}',[TeacherController::class,'certificate_show'])->name('certificate.show');

        //Teacher Certificates
        Route::resource('certificate',TeacherCertificateController::class);
        //Staff
        Route::resource('staff',StaffController::class);
        //Parent
        Route::resource('parent',ParentController::class);
//Quran module
        //varse
        Route::resource('varse',VarseController::class);
        //Chapter
        Route::resource('chapter',ChapterController::class);
        //translation
        Route::resource('translation',TranslationController::class);
        //translationProvider
        Route::resource('translation_provider',TranslationProviderController::class);

        Route::post('/get-verse-data-by-chapter-id', [TranslationController::class, 'getVerse']);


//Library module
        //Library Book Category
        Route::resource('library_book_category',LibraryBookCategoryController::class);
        //Library Book
        Route::resource('library_book',LibraryBookController::class);
        //Library Member
        Route::resource('library_member',LibraryMemberController::class);
        //Library Ebook
        Route::resource('library_ebook',LibraryEbookController::class);
        //Library Ebook File
        Route::resource('library_ebook_file',LibraryEbookFileController::class);

//Hostel module
        //hostel
        Route::resource('hostel',HostelController::class);
        //hostel member
        Route::resource('hostel_member',HostelMemberController::class);
//Exam Management module
        //Exam
        Route::resource('exam',ExamController::class);
        //Exam Mark Distribution Type
        Route::resource('exam_mark_distribution_type',ExamMarkDistributionTypeController::class);
        //Exam Attendance
        Route::resource('exam_attendance',ExamAttendanceController::class);
        //Exam Grade
        Route::resource('exam_grade',ExamGradeController::class);
        //Exam Schedule
        Route::resource('exam_schedule',ExamScheduleController::class);
        //Question
        Route::resource('question',QuestionController::class);
        //Question Difficulty
        Route::resource('question_difficulty_level',QuestionDificultyLevelController::class);

//  User management
        Route::resource('academic_stuff',AcademicStuffController::class);
        Route::resource('user_admin',AdminController::class);
        Route::resource('designation',UserDesignationController::class);
        Route::resource('user_management_student',UserManagementStudentController::class);
        Route::resource('user_management_teacher',UserManagementTeacherController::class);
        Route::resource('user_submitted_certificate',UserManagementSubmittedCertificateController::class);

    });
});


