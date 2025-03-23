
@extends('layout')
@section('content')
<div class="container">
    <h2>Edit School Information</h2>
    <form action="/admin/school/update/{{$school->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">School Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $school->name }}" required>
            @if ($errors->has('name'))  
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="logo">Current Logo</label>
            <div>
            <img src="{{ asset('storage/' . $school->logo) }}" alt="School Logo" style="max-height: 150px;">
            </div>
        </div>

        <div class="form-group">
            <label for="logo">Upload New Logo</label>
            <input type="file" class="form-control" id="logo" name="logo">
            @if ($errors->has('logo'))
                <span class="text-danger">{{ $errors->first('logo') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ $school->description }}</textarea>
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>
    
        <div class="form-group">
            <label for="motto">Motto</label>
            <input type="text" class="form-control" id="motto" name="motto" value="{{ $school->motto }}">
            @if ($errors->has('motto'))
                <span class="text-danger">{{ $errors->first('motto') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $school->type }}" required>
            @if ($errors->has('type'))
                <span class="text-danger">{{ $errors->first('type') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" id="size" name="size" value="{{ $school->size }}" required>
            @if ($errors->has('size'))
                <span class="text-danger">{{ $errors->first('size') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $school->address }}" required>
            @if ($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="lga">LGA</label>
            <input type="text" class="form-control" id="lga" name="lga" value="{{ $school->lga }}">
            @if ($errors->has('lga'))
                <span class="text-danger">{{ $errors->first('lga') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" id="state" name="state" value="{{ $school->state }}">
            @if ($errors->has('state'))
                <span class="text-danger">{{ $errors->first('state') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ $school->city }}">
            @if ($errors->has('city'))
                <span class="text-danger">{{ $errors->first('city') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="contact_number">Contact Number</label>
            <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ $school->contact_number }}" required>
            @if ($errors->has('contact_number'))
                <span class="text-danger">{{ $errors->first('contact_number') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $school->email }}">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" class="form-control" id="website" name="website" value="{{ $school->website }}">
            @if ($errors->has('website'))
                <span class="text-danger">{{ $errors->first('website') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="established_date">Established Date</label>
            <input type="date" class="form-control" id="established_date" name="established_date" value="{{ $school->established_date }}">
            @if ($errors->has('established_date'))
                <span class="text-danger">{{ $errors->first('established_date') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="registration_date">Registration Date</label>
            <input type="date" class="form-control" id="registration_date" name="registration_date" value="{{ $school->registration_date }}">
            @if ($errors->has('registration_date'))
                <span class="text-danger">{{ $errors->first('registration_date') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="registration_number">Registration Number</label>
            <input type="text" class="form-control" id="registration_number" name="registration_number" value="{{ $school->registration_number }}">
            @if ($errors->has('registration_number'))
                <span class="text-danger">{{ $errors->first('registration_number') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="registration_document">Registration Document</label>
            <input type="file" class="form-control" id="registration_document" name="registration_document">
            @if ($errors->has('registration_document'))
                <span class="text-danger">{{ $errors->first('registration_document') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="student_population">Student Population</label>
            <input type="number" class="form-control" id="student_population" name="student_population" value="{{ $school->student_population }}">
            @if ($errors->has('student_population'))
                <span class="text-danger">{{ $errors->first('student_population') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="teacher_population">Teacher Population</label>
            <input type="number" class="form-control" id="teacher_population" name="teacher_population" value="{{ $school->teacher_population }}">
            @if ($errors->has('teacher_population'))
                <span class="text-danger">{{ $errors->first('teacher_population') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="student_teacher_ratio">Student-Teacher Ratio</label>
            <input type="text" class="form-control" id="student_teacher_ratio" name="student_teacher_ratio" value="{{ $school->student_teacher_ratio }}">
            @if ($errors->has('student_teacher_ratio'))
                <span class="text-danger">{{ $errors->first('student_teacher_ratio') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="adm_start">Admission Start Date</label>
            <input type="date" class="form-control" id="adm_start" name="adm_start" value="{{ $school->adm_start }}">
            @if ($errors->has('adm_start'))
                <span class="text-danger">{{ $errors->first('adm_start') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="adm_end">Admission End Date</label>
            <input type="date" class="form-control" id="adm_end" name="adm_end" value="{{ $school->adm_end }}">
            @if ($errors->has('adm_end'))
                <span class="text-danger">{{ $errors->first('adm_end') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="school_open">School Open Time</label>
            <input type="time" class="form-control" id="school_open" name="school_open" value="{{ $school->school_open }}">
            @if ($errors->has('school_open'))
                <span class="text-danger">{{ $errors->first('school_open') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="school_close">School Close Time</label>
            <input type="time" class="form-control" id="school_close" name="school_close" value="{{ $school->school_close }}">
            @if ($errors->has('school_close'))
                <span class="text-danger">{{ $errors->first('school_close') }}</span>
            @endif
        </div>

        <div class="form-row d-flex my-4">
            <div class="form-group col-md-4 mx-2">
                <label for="fee_jss">Fee JSS</label>
                <input type="number" class="form-control" id="fee_jss" name="fee_jss" value="{{ $school->fee_jss }}">
                @if ($errors->has('fee_jss'))
                    <span class="text-danger">{{ $errors->first('fee_jss') }}</span>
                @endif
            </div>

            <div class="form-group col-md-4 mx-2">
                <label for="fee_sss">Fee SSS</label>
                <input type="number" class="form-control" id="fee_sss" name="fee_sss" value="{{ $school->fee_sss }}">
                @if ($errors->has('fee_sss'))
                    <span class="text-danger">{{ $errors->first('fee_sss') }}</span>
                @endif
            </div>

            <div class="form-group col-md-4 mx-2">
                <label for="fee_primary">Fee Primary</label>
                <input type="number" class="form-control" id="fee_primary" name="fee_primary" value="{{ $school->fee_primary }}">
                @if ($errors->has('fee_primary'))
                    <span class="text-danger">{{ $errors->first('fee_primary') }}</span>
                @endif
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update School</button>
    </form>
</div>
@endsection