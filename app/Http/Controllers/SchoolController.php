<?php

namespace App\Http\Controllers;

use App\Mail\SignupCompleted;
use App\Models\AssignCategoryToSchools;
use App\Models\AssignSchoolToUser;
use App\Models\category;
use App\Models\school;
use App\Models\SchoolImages;
use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

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
            $school_details = school::whereIn('id', $school_ids)->get();
            return view('welcome', ['schools' => $school_details, 'categories' => category::get()]);
        } elseif (Str::endsWith($url, '/boarding')) {
            $category_id = category::where('name', 'boarding')->pluck('id');
            $schools = AssignCategoryToSchools::where('category_id', $category_id)->get();
            $school_ids = $schools->pluck('school_id');
            $school_details = school::whereIn('id', $school_ids)->get();
            return view('welcome', ['schools' => $school_details, 'categories' => category::get()]);
        } elseif (Str::endsWith($url, '/private')) {
            $school_details = school::where('type', 'privatee')->get();
            return view('welcome', ['schools' => $school_details, 'categories' => \App\Models\category::get()]);
        } elseif (Str::endsWith($url, '/public')) {
            $school_details = school::where('type', 'public')->get();
            return view('welcome', ['schools' => $school_details, 'categories' => category::get()]);
        } elseif (Str::endsWith($url, '/day')) {
            $category_id = category::where('name', 'day')->pluck('id');
            $schools = AssignCategoryToSchools::where('category_id', $category_id)->get();
            $school_ids = $schools->pluck('school_id');
            $school_details = school::whereIn('id', $school_ids)->get();
            return view('welcome', ['schools' => $school_details, 'categories' => category::get()]);
        } elseif (Str::endsWith($url, '/tsangaya')) {
            $category_id = category::where('name', 'tsangaya')->pluck('id');
            $schools = AssignCategoryToSchools::where('category_id', $category_id)->get();
            $school_ids = $schools->pluck('school_id');
            $school_details = school::whereIn('id', $school_ids)->get();
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
        if($request->has('search'))
        {
            $search->where('name', 'LIKE', "%$request->search%");
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
            "email", "phone", "registration_number", "registration_date", 
            "address", "country", "state", "lga", "logo", "document", "images"
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
                            'country'=>$request->country,
                            'contact_number'=>$request->phone,
                            'registration_date'=>$request->registration_date,
                            'registration_number'=>$request->registration_number,
                            'registration_document'=>$document,
                            'logo'=>$logo,
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
       $data['school_images']= SchoolImages::where('school_id', $id)->get();
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
    public function update(Request $request, school $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(school $school)
    {
        //
    }
}
