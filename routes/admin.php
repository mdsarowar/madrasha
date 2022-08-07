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
    });
});


