@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
    <h2> Fill your details</h2>
    </div>
    <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('job-applications.index') }}"> Back</a>
            </div>
            </div>
    </div>

    <form action="{{ route('job-applications.store') }}" method="POST" enctype="multipart/form-data">
        
        @csrf
        
    <input type="hidden" name="job_id" value="{{ $id }}">
        
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            
            <div class="col-md-12">
                <div class="form-group">
                <label for="validationCustom03">First Name</label>
                <input type="text" class="form-control" id="validationCustom03" name="first_name">
                @error('first_name')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
              </div>
            <div class="col-md-12">
                <div class="form-group">
                <label for="validationCustom03">Last Name</label>
                <input type="text" class="form-control" id="validationCustom03" name="last_name">
                @error('last_name')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
              </div>
            <div class="col-md-12">
                <div class="form-group">
                <label for="validationCustom03">Email</label>
                <input type="text" class="form-control" id="validationCustom03" name="email">
                @error('email')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
              </div>
            <div class="col-md-12">
                <div class="form-group">
                <label for="validationCustom03">Phone</label>
                <input type="text" class="form-control" id="validationCustom03" name="phone">
                @error('phone')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
              </div>
            <div class="col-md-12">
                <div class="form-group">
                <label for="validationCustom03">Resume</label>
                <input type="file" class="form-control" id="validationCustom03" name="resume">
                @error('resume')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
              </div>

              <input type="submit" class="btn btn-info">

              @endsection