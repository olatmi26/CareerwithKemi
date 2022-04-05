<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

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

//

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::resource('career', CareerController::class);

Route::resource('skill-bank', SkillBankController::class);

Route::resource('resume-type', Services\ResumeTypeController::class);

Route::resource('resume-build', Services\ResumeBuildController::class);

Route::resource('profile-summary', ProfileSummaryController::class);

Route::resource('skills', SkillsController::class);

Route::resource('competency', CompetencyController::class);

Route::resource('key-achievement', KeyAchievementController::class);

Route::resource('experience', ExperienceController::class);

Route::resource('job-responsibility', JobResponsibilityController::class);

Route::resource('education', EducationController::class);

Route::resource('professional-affiliation', ProfessionalAffiliationController::class);

Route::resource('training', TrainingController::class);

Route::resource('career-focus', CareerFocusController::class);

Route::resource('media-handle', MediaHandleController::class);

Route::resource('social-handle', SocialHandleController::class);

Route::resource('referee', RefereeController::class);

Route::resource('recognition', RecognitionController::class);

Route::resource('payment', Services\PaymentController::class);

Route::resource('revenue', Services\RevenueController::class);

Route::resource('category', CategoryController::class);

Route::resource('product', ProductController::class);

// Route::get('/', 'PageController@index')->name('index-page');
Route::get('/{page}', 'PageController@gotoPage')->name('page')->where('page', 'about|about-us|contact|contact-us|terms|privacy-policy'); 
Route::get('/', [PageController::class, 'index'])->name('index-page');
Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
