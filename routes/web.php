<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('page1');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('career', App\Http\Controllers\CareerController::class);

Route::resource('skill-bank', App\Http\Controllers\SkillBankController::class);

Route::resource('resume-type', App\Http\Controllers\Services\ResumeTypeController::class);

Route::resource('resume-build', App\Http\Controllers\Services\ResumeBuildController::class);

Route::resource('profile-summary', App\Http\Controllers\ProfileSummaryController::class);

Route::resource('skills', App\Http\Controllers\SkillsController::class);

Route::resource('competency', App\Http\Controllers\CompetencyController::class);

Route::resource('key-achievement', App\Http\Controllers\KeyAchievementController::class);

Route::resource('experience', App\Http\Controllers\ExperienceController::class);

Route::resource('job-responsibility', App\Http\Controllers\JobResponsibilityController::class);

Route::resource('education', App\Http\Controllers\EducationController::class);

Route::resource('professional-affiliation', App\Http\Controllers\ProfessionalAffiliationController::class);

Route::resource('training', App\Http\Controllers\TrainingController::class);

Route::resource('career-focus', App\Http\Controllers\CareerFocusController::class);

Route::resource('media-handle', App\Http\Controllers\MediaHandleController::class);

Route::resource('social-handle', App\Http\Controllers\SocialHandleController::class);

Route::resource('referee', App\Http\Controllers\RefereeController::class);

Route::resource('recognition', App\Http\Controllers\RecognitionController::class);

Route::resource('payment', App\Http\Controllers\Services\PaymentController::class);

Route::resource('revenue', App\Http\Controllers\Services\RevenueController::class);
