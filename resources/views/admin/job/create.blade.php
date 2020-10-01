@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
    <h2> Post new Job</h2>
    </div>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('jobs.index') }}"> Back</a>
    </div>
    </div>
</div>

<form action="{{ route('jobs.store') }}" method="POST">
    @csrf

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">

        <div class="col-md-12">
            <div class="form-group">
            <label for="validationCustom03">Role</label>
            <input type="text" class="form-control" id="validationCustom03" name="role">
            @error('role')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
          </div>
        <div class="col-md-12">
            <div class="form-group">
            <label for="validationCustom03">Salary</label>
            <input type="text" class="form-control" id="validationCustom03" name="salary">
            @error('salary')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
          </div>    
        <div class="col-md-12">
            <div class="form-group">
            <label for="validationCustom03">Experience</label>
            <input type="text" class="form-control" id="validationCustom03" name="experience">
            @error('experience')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
          </div>    
        <div class="col-md-12">
            <div class="form-group">
            <label for="validationCustom03">Job Description</label>
            <input type="text" class="form-control" id="validationCustom03" name="job_description">
            @error('job_description')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
          </div>  
        <div class="col-md-12">
            <div class="form-group">
            <label for="validationCustom03">Position Number</label>
            <input type="text" class="form-control" id="validationCustom03" name="position_no">
            @error('position_no')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
          </div>

          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    </form>

@endsection