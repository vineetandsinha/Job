@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Update Job</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('jobs.index') }}"> Back</a>
        </div>
    </div>
</div>


<form action="{{ route('jobs.update', $jobList->id) }}" method="POST">
    
    @method('PATCH')
    @csrf
 
    <div class="col-md-12">
        <div class="form-group">
            <label for="validationCustom03">Role</label>
            <input type="text" name="role" value="{{old('role',$jobList->role)}}" class="form-control" id="validationCustom03">
            @error('role')
<div class="text-danger">{{ $message }}</div>
@enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="validationCustom03">Salary</label>
            <input type="text" name="salary" value="{{old('salary',$jobList->salary)}}" class="form-control" id="validationCustom03">
            @error('salary')
<div class="text-danger">{{ $message }}</div>
@enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="validationCustom03">Experience</label>
            <input type="text" name="experience" value="{{old('experience',$jobList->experience)}}" class="form-control" id="validationCustom03">
            @error('experience')
<div class="text-danger">{{ $message }}</div>
@enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="validationCustom03">Job Description</label>
            <input type="text" name="job_description" value="{{old('job_description',$jobList->job_description)}}" class="form-control" id="validationCustom03">
            @error('job_description')
<div class="text-danger">{{ $message }}</div>
@enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="validationCustom03">Position Number</label>
            <input type="text" name="position_no" value="{{old('position_no',$jobList->position_no)}}" class="form-control" id="validationCustom03">
            @error('position_no')
<div class="text-danger">{{ $message }}</div>
@enderror
        </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
  </div>

</form>
@endsection