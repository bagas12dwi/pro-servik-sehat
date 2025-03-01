<?php

use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\FormulirAdminController;
use App\Http\Controllers\Admin\HasilQuizController;
use App\Http\Controllers\Admin\ResultFormController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FormulirUserController;
use App\Http\Controllers\HasilPemeriksaanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizRiskController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth 
Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/finish', function () {
    return view('global.finish-submit');
})->name('finish');

// Print 
Route::get('/print/{booking}', [PrintController::class, 'formulir'])->name('print');

// User 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('quiz/biodata', [QuestionController::class, 'indexBiodata'])->name('quiz.biodata');
Route::get('quiz/{index?}', [QuestionController::class, 'index'])->name('quiz');
Route::get('result', [QuestionController::class, 'result'])->name('quiz.result');
Route::post('quiz/submit/{index}', [QuestionController::class, 'submitAnswer'])->name('quiz.submit');
Route::post('quiz/biodata/store', [QuestionController::class, 'storeBiodata'])->name('quiz.biodata.store');
Route::get('tes-resiko/biodata', [QuizRiskController::class, 'indexBiodata'])->name('tes-resiko.biodata');
Route::post('tes-resiko/biodata/store', [QuizRiskController::class, 'storeBiodata'])->name('tes-resiko.biodata.store');
Route::get('tes-resiko/{index?}', [QuizRiskController::class, 'index'])->name('tes-resiko');
Route::post('/tes-resiko/next/{index}', [QuizRiskController::class, 'next'])->name('tes-resiko.next');
Route::post('/tes-resiko/store', [QuizRiskController::class, 'store'])->name('tes-resiko.store');
Route::get('/tes-resiko-result', [QuizRiskController::class, 'result'])->name('tes-resiko.result');
Route::get('artikel/{artikel}', [ArticleController::class, 'showArticle'])->name('artikel.show');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('booking', BookingController::class)->names('booking');
    Route::get('/list-booking', [BookingController::class, 'listBooking'])->name('booking.list');
    Route::get('/formulir/{booking}', [FormulirUserController::class, 'index'])->name('formulir.user');
    Route::post('/formulir', [FormulirUserController::class, 'store'])->name('formulir.store');
    Route::get('/hasil-pemeriksaan', [HasilPemeriksaanController::class, 'index'])->name('hasil-pemeriksaan');
    Route::get('/hasil-pemeriksaan/{booking}', [HasilPemeriksaanController::class, 'show'])->name('hasil-pemeriksaan.show');
});


// Admin 
Route::prefix('admin')->middleware(['auth', 'cekRole:admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.pages.dashboard');
    })->name('admin.dashboard');

    Route::get('/booking', [AdminBookingController::class, 'index'])->name('admin.booking');
    Route::get('/booking/{booking}', [AdminBookingController::class, 'show'])->name('admin.booking.show');
    Route::get('/form-pasien/{booking}', [AdminBookingController::class, 'showForm'])->name('admin.booking.form');
    Route::get('/formulir/{booking}', [FormulirAdminController::class, 'index'])->name('admin.formulir');
    Route::post('/formulir', [FormulirAdminController::class, 'store'])->name('admin.formulir.store');
    Route::get('/hasil-pemeriksaan', [ResultFormController::class, 'index'])->name('admin.hasil-pemeriksaan');
    Route::get('/hasil-pemeriksaan/{booking}', [ResultFormController::class, 'show'])->name('admin.hasil-pemeriksaan.show');
    Route::put('/hasil-pemeriksaan/update/{booking}', [ResultFormController::class, 'update'])->name('admin.hasil-pemeriksaan.update');
    Route::resource('/testimoni', TestimonialController::class)->names('admin.testimoni');
    Route::resource('/artikel', ArticleController::class)->names('admin.artikel');
    Route::post('/artikel/upload', [ArticleController::class, 'upload']);
    Route::get('/quiz', [HasilQuizController::class, 'index'])->name('admin.quiz');
    Route::get('/quiz-resiko', [HasilQuizController::class, 'indexResiko'])->name('admin.quiz-resiko');
    Route::get('/export', [AdminBookingController::class, 'export'])->name('admin.booking.export');
    Route::get('/export-quiz', [HasilQuizController::class, 'exportQuiz'])->name('admin.quiz.export');
    Route::get('/export-quiz-resiko', [HasilQuizController::class, 'exportQuizResiko'])->name('admin.quiz-resiko.export');
});
