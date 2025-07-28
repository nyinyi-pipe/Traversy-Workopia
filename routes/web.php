<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);

Route::resource('jobs', JobController::class);



// Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
// Route::get('/jobs/create', [JobController::class, 'create'])->name('#createjob');
// Route::get('/jobs/{id}', [JobController::class, 'show'])->name('#showjob');
// Route::post('/jobs', [JobController::class, 'store']);


