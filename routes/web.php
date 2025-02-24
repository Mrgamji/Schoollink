<?php

use App\Http\Controllers\KudiSMSCallbackController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\User;
use App\Models\category;
use App\Models\school;
use App\Models\SchoolImages;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data['categories']= category::get();
    $data['schools']=school::where('status', 'verified')->get();
    return view('welcome', $data);
})->name('dashboard.view');


Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('signin');
})->name('login');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/schools', function () {
    $data['schools']=school::get();
    $data['verified']=school::where('status', 'verified')->get();
    $data['pending']=school::where('status', 'pending')->get();
    $data['rejected']=school::where('status', 'rejected')->get();
    return view('admin.schools', $data);
})->name('admin.schools');

Route::get('/admin/school/{id}', function ($id) {
    $data['school'] = school::find($id);
    $data['school_images']= SchoolImages::where('school_id', $id)->get();
    return view('admin.viewschool', $data);
})->name('admin.viewschool');



Route::get('/admin/school/pending/{id}', function ($id) {
    $school = school::find($id);
    $school->status = 'pending';
    $school->save();
    $data['school'] = $school;
    $data['school_images'] = SchoolImages::where('school_id', $id)->get();
    return view('admin.viewschool', $data)->with('success', 'School is now pending verification');
})->name('admin.setpending');

Route::get('/admin/school/verified/{id}', function ($id) {
    $school = school::find($id);
    $school->status = 'verified';
    $school->save();
    $data['school'] = $school;
    $data['school_images'] = SchoolImages::where('school_id', $id)->get();
    return view('admin.viewschool', $data)->with('success', 'School is now verified');
})->name('admin.setverified');

Route::get('/admin/school/rejected/{id}', function ($id) {
    $school = school::find($id);
    $school->status = 'rejected';
    $school->save();
    $data['school'] = $school;
    $data['school_images'] = SchoolImages::where('school_id', $id)->get();
    return view('admin.viewschool', $data)->with('success', 'School is now rejected');
})->name('admin.setrejected');




Route::get('/createcat', function () {
    $data=['private', 'public', 'islamiyya', 'tsangaya', 'day', 'boarding'];
    $faker = \Faker\Factory::create();
    foreach($data as $dat)
    {
    category::create(
        [
        'name'=> $dat,
        'description'=> $faker->sentence,
        'thumbnail'=>"dist/assets/media/stock/food/img-2.jpg",
        ]
    );
}
    dd('done');
})->name('catcreate');

Route::post('/signup', [SchoolController::class, 'store'])->name('school.store');
Route::post('/signin', [User::class, 'authenticate'])->name('user.authenticate');
Route::get('/logout', [User::class, 'logout'])->name('user.logout');
Route::get('/search', [SchoolController::class, 'search'])->name('school.search');

Route::post('/uploadpic', [ProfileController::class, 'storeupload'])->name('profile.upload');
Route::get('/upload', [ProfileController::class, 'upload'])->name('profile.view');
Route::get('/show', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/view/{id}', [SchoolController::class, 'view'])->name('school.view');

Route::get('/filter/islamiyya', [SchoolController::class, 'filter'])->name('islamiyya.filter');
Route::get('/filter/private', [SchoolController::class, 'filter'])->name('private.filter');
Route::get('/filter/public', [SchoolController::class, 'filter'])->name('public.filter');
Route::get('/filter/tsangaya', [SchoolController::class, 'filter'])->name('tsangaya.filter');
Route::get('/filter/day', [SchoolController::class, 'filter'])->name('day.filter');
Route::get('/filter/boarding', [SchoolController::class, 'filter'])->name('boarding.filter');
