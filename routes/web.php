<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\User;
use App\Http\Middleware\Auth;
use App\Models\Alumni;
use App\Models\category;
use App\Models\school;
use App\Models\SchoolImages;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Alumnus;
use App\Models\competition;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
    return view('admin.login');
})->name('admin.login');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/viewdocument/{id}', function ($id) {
    $data['school'] = school::find($id);
    $data['school_images'] = SchoolImages::where('school_id', $id)->get();
    return view('admin.verify', $data);
})->middleware('admin')->name('admin.verifydocument');

Route::get('/admin/school/edit/{id}', function ($id) {
    $data['school'] = school::find($id);
    return view('admin.edit', $data);
})->middleware('admin')->name('admin.editschool');

Route::get('/user/school/edit/{id}', function ($id) {
    $data['school'] = school::find($id);
    return view('editschool', $data);
})->middleware('user')->name('user.editschool');

Route::put('/admin/school/update/{id}', [SchoolController::class, 'update'])->middleware('admin')->name('admin.updateschool');

Route::delete('/admin/school/delete/{id}', [SchoolController::class, 'destroy'])->middleware('admin')->name('admin.deleteschool');

Route::get('/admin/schools', function () {
    $data['schools'] = school::get();
    $data['verified'] = school::where('status', 'verified')->get();
    $data['pending'] = school::where('status', 'pending')->get();
    $data['rejected'] = school::where('status', 'rejected')->get();
    return view('admin.schools', $data);
})->middleware('admin')->name('admin.schools');

Route::get('/admin/school/{id}', function ($id) {
    $school = school::findOrFail($id); // Returns 404 if not found
    $school_images = SchoolImages::where('school_id', $id)->get();

    return view('admin.viewschool', compact('school', 'school_images'));
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


Route::get('/addalumnus', function () {
    return view('addalumnus');

})->name('addalumnus');

    Route::post('/createalumnus', function (Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'current_role' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
        ]);

        $imagePath = $request->file('image')->store('alumni_images', 'public');

       $school = school::where('email', FacadesAuth::user()->email)->first();
        Alumni::create([
            'name' => $request->name,
            'image' => $imagePath,
            'current_role' => $request->current_role,
            'contact' => $request->phone,
            'email' => $request->email,
            'school_id' => $school->id,
        ]);
        
        return redirect()->back()->with('success', 'Alumnus added successfully');
    })->name('createalumnus');

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

Route::get('/addachievement', function () {
    return view('addachievement');
})->name('addachievement');
Route::post('/createachievement', function (Request $request) {
    $request->validate([
        'title' => 'required|string|max:255',
        'organizer' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'position' => 'required|string|max:255',
        'date' => 'required|date',
    ]);

    $imagePath = $request->file('image')->store('achievements', 'public');

    $school = school::where('email', FacadesAuth::user()->email)->first();
    competition::create([
        'title' => $request->title,
        'organizer' => $request->organizer,
        'image' => $imagePath,
        'position' => $request->position,
        'date' => $request->date,
        'school_id' => $school->id,
    ]);

    return redirect()->back()->with('success', 'Achievement added successfully');
})->name('createachievement');

Route::post('/signup', [SchoolController::class, 'store'])->name('school.store');
Route::post('/signin', [User::class, 'userAuthenticate'])->name('user.authenticate');
Route::post('/admin/signin', [User::class, 'adminAuthenticate'])->name('admin.authenticate');
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
