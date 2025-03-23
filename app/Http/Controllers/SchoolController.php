<?php

namespace App\Http\Controllers;

use App\Mail\SignupCompleted;
use App\Models\AssignCategoryToSchools;
use App\Models\AssignSchoolToUser;
use App\Models\category;
use App\Models\school;
use App\Models\SchoolImages;
use App\Models\User;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function filter(Request $request)
    {
        $url = $request->url();
        if (Str::endsWith($url, '/islamiyya')) {
            $category_id = category::where('name', 'islamiyya')->pluck('id');
            $schools = AssignCategoryToSchools::where('category_id', $category_id)->get();
            $school_ids = $schools->pluck('school_id');
            $school_details = school::whereIn('id', $school_ids)->where('status', 'verified')->get();
            return view('welcome', ['schools' => $school_details, 'categories' => category::get()]);
        } elseif (Str::endsWith($url, '/boarding')) {
            $category_id = category::where('name', 'boarding')->pluck('id');
            $schools = AssignCategoryToSchools::where('category_id', $category_id)->get();
            $school_ids = $schools->pluck('school_id');
            $school_details = school::whereIn('id', $school_ids)->where('status', 'verified')->get();
            return view('welcome', ['schools' => $school_details, 'categories' => category::get()]);
        } elseif (Str::endsWith($url, '/private')) {
            $school_details = school::where('type', 'privatee')->where('status', 'verified')->get();
            return view('welcome', ['schools' => $school_details, 'categories' => \App\Models\category::get()]);
        } elseif (Str::endsWith($url, '/public')) {
            $school_details = school::where('type', 'public')->where( 'status', 'verified')->get();
            return view('welcome', ['schools' => $school_details, 'categories' => category::get()]);
        } elseif (Str::endsWith($url, '/day')) {
            $category_id = category::where('name', 'day')->pluck('id');
            $schools = AssignCategoryToSchools::where('category_id', $category_id)->get();
            $school_ids = $schools->pluck('school_id');
            $school_details = school::whereIn('id', $school_ids)->where('status', 'verified')->get();
            return view('welcome', ['schools' => $school_details, 'categories' => category::get()]);
        } elseif (Str::endsWith($url, '/tsangaya')) {
            $category_id = category::where('name', 'tsangaya')->pluck('id');
            $schools = AssignCategoryToSchools::where('category_id', $category_id)->get();
            $school_ids = $schools->pluck('school_id');
            $school_details = school::whereIn('id', $school_ids)->where('status', 'verified')->get();
            return view('welcome', ['schools' => $school_details, 'categories' => category::get()]);
        
    }
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function search(Request $request)
    {

        $search = school::query();
        if($request->filled('search'))
        {
          
            $search->where('name', 'LIKE', "%$request->search%");
        }
        if($request->filled('category'))
        {
            $category_id = category::where('name', $request->category)->pluck('id');
            $schools = AssignCategoryToSchools::where('category_id', $category_id)->get();
            $school_ids = $schools->pluck('school_id');
            $search->whereIn('id', $school_ids);
        }
        if($request->filled('type'))
        {
            $search->where('type', $request->type);
        }
        if($request->filled('state'))
        {  
            $search->where('state', 'LIKE', "%$request->state%");
        }
        if($request->filled('lga'))
        {
            $search->where('lga', $request->lga);
        }
        if($request->filled('city'))
        {
            $search->where('city', $request->city);
        }
        $data['categories']= category::get();
        $data['schools']=$search->get();
        return view('welcome', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            
        
        //Store Document and Logo
       

        
        
        $missingFields = [];

        $requiredFields = [
            "type", "size", "name", "description", "school_category", "motto", 
            "email", "phone", "registration_number", "registration_date",  "closing_hours","opening_hours","tuition_fee_primary", "tuition_fee_jss" ,
            "address", "city", "state", "lga", "logo", "document", "images",  "tuition_fee_sss",  "admission_start_date", "admission_end_date"
        ];

        foreach ($requiredFields as $field) {
            if (empty($request->$field)) {
            $missingFields[] = $field;
            }
        }
       

        if (!empty($missingFields)) {
            return redirect()->back()->withErrors(['missing_fields' => $missingFields])->withInput();
        }else{
            $user=User::create(
                [
                    "name" => $request->name,
                    'email'=> $request->email,
                    'password'=>Hash::make('123456')
                ]
                );
                if ($request->hasFile('document') && $request->hasFile('logo')  ) {
                    $file = $request->file('document');
                    $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
                    $document = $file->storeAs('documents', $filename, 'public');
        
                    $file = $request->file('logo');
                    $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
                    $logo = $file->storeAs('logos', $filename, 'public');

                    $school=school::create(
                        [
                            "name" => $request->name,
                            'email'=> $request->email,
                            'description'=>$request->description,
                            'motto'=>$request->motto,
                            'type'=>$request->type,
                            'size'=>$request->size,
                            'address'=>$request->address,
                            'lga'=>$request->lga,
                            'state'=>$request->state,
                            'city'=>$request->city,
                            'contact_number'=>$request->phone,
                            'registration_date'=>$request->registration_date,
                            'registration_number'=>$request->registration_number,
                            'registration_document'=>$document,
                            'logo'=>$logo,
                            'adm_start'=>$request->admission_start_date,
                            'adm_end'=>$request->admission_end_date,
                            'fee_jss'=>$request->tuition_fee_jss,
                            'fee_sss'=>$request->tuition_fee_sss,
                            'fee_primary'=>$request->tuition_fee_primary,
                            'school_open'=>$request->opening_hours,
                            'school_close'=>$request->closing_hours,

                        ]
                        );

                        foreach($request->images as $image)
                        {
                            $filename = Str::uuid() . '.' . $image->getClientOriginalExtension();
                            $storedImage = $image->storeAs('images', $filename, 'public');
                            SchoolImages::create(
                                [
                                    'school_id'=>$school->id,
                                    'image_path'=>$storedImage
                                ]
                                );
                        }
                }
               
            



            $assign= AssignSchoolToUser::create(
            [
                'school_id'=>$school->id,
                'user_id'=>$user->id
            ]
            );

           foreach($request->school_category as $category)
            {
                $category=AssignCategoryToSchools::create(
                    [
                        'category_id'=>\App\Models\category::where('name',$category)->pluck('id')->first(),
                        'school_id'=>$school->id,
                    ]
                );
            }
            Mail::to($user->email)->send(new SignupCompleted($user));
            return view('successful');
            
            Http::post(url('/api/send-signup-sms'), [
                'phone' => [$user->phone] // Ensure it's an array
            ]);
        
        }

            
        // dd($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(school $school)
    {
        //
    }

    public function view($id)
    {
       $data['school']= school::find($id);
       $data['school_images']= SchoolImages::where('school_id', $id) ->get();
       $data['school_alumni']= \App\Models\Alumni::where('school_id', $id)->get();
       $data['school_competition']= \App\Models\competition::where('school_id', $id)->get();
       return view('view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(school $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
       
    {
        $school=school::find($request->id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string',
            'motto' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'lga' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'contact_number' => 'required|string|max:40',
            'registration_date' => 'required|date',
            'registration_number' => 'required|string|max:255',
        ]);

        
        $school->update([
            "name" => $request->name,
            'email'=> $request->email,
            'description'=>$request->description,
            'motto'=>$request->motto,
            'type'=>$request->type,
            'size'=>$request->size,
            'address'=>$request->address,
            'lga'=>$request->lga,
            'state'=>$request->state,
            'city'=>$request->city,
            'contact_number'=>$request->contact_number,
            'registration_date'=>$request->registration_date,
            'registration_number'=>$request->registration_number,
            'adm_start'=>$request->admission_start_date,
            'adm_end'=>$request->admission_end_date,
            'fee_jss'=>$request->tuition_fee_jss,
            'fee_sss'=>$request->tuition_fee_sss,
            'fee_primary'=>$request->tuition_fee_primary,
            'school_open'=>$request->opening_hours,
            'school_close'=>$request->closing_hours,
        ]);

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $document = $file->storeAs('documents', $filename, 'public');
            $school->update(['registration_document' => $document]);
        }

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $logo = $file->storeAs('logos', $filename, 'public');
            $school->update(['logo' => $logo]);
        }

        if ($request->hasFile('images')) {
            SchoolImages::where('school_id', $school->id)->delete();
            foreach($request->images as $image) {
                $filename = Str::uuid() . '.' . $image->getClientOriginalExtension();
                $storedImage = $image->storeAs('images', $filename, 'public');
                SchoolImages::create([
                    'school_id' => $school->id,
                    'image_path' => $storedImage
                ]);
            }
        }

        if ($request->has('school_category')) {
            AssignCategoryToSchools::where('school_id', $school->id)->delete();
            foreach($request->school_category as $category) {
                AssignCategoryToSchools::create([
                    'category_id' => \App\Models\category::where('name', $category)->pluck('id')->first(),
                    'school_id' => $school->id,
                ]);
            }
        }
        return redirect()->route('admin.viewschool', ['id' => $school->id])->with('success', 'School updated successfully.');
    }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $school = school::find($request->id);

        if (!$school) {
            return redirect()->route('admin.schools')->with('error', 'School not found.');
        }

        // Delete associated images
        $images = SchoolImages::where('school_id', $school->id)->get();
        foreach ($images as $image) {
            // Delete the image file from storage
            FacadesStorage::disk('public')->delete($image->image_path);
            // Delete the image record from the database
            $image->delete();
        }
        // Delete associated user
        $user = User::where('email', $school->email)->first();
        if ($user) {
            $user->delete();
        }

        // Delete associated categories
        AssignCategoryToSchools::where('school_id', $school->id)->delete();

        // Delete associated user assignments
        AssignSchoolToUser::where('school_id', $school->id)->delete();

        // Delete the school record
        $school->delete();

        return redirect()->route('admin.schools')->with('success', 'School deleted successfully.');
    }
}
