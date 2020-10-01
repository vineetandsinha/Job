@extends('layouts.app')

@section('content')

<div class="card" >
    <div class="card-header">
      <h5 class="card-title">Welcome, Start your new carrer ! </h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <table class="table table-striped">
        <tr>
            <th>ID </th>
            <th>Role</th>
            <th>Salary</th>
            <th>Experience</th>
            <th>Position No</th>
            <th>Job Description</th>
            <th>Actions</th>
        </tr>

        <tr>
            dd('Hii');
            @foreach($jobs as $job)
                     <td> {{ $job->id }} </td>
                     <td> {{ $job->role }} </td>
                     <td> {{ $job->salary }} </td>
                     <td> {{ $job->experience }} </td>
                     <td> {{ $job->position_no }} </td>
                     <td> {{ $job->job_description }} </td>
                     <td>
                        <a class="btn btn-info" href="{{ route('job-applications.show',$job->id) }}">Apply</a>
                    @csrf
                    </td>
                </tr>
                @endforeach
                </table>
        
              </div>
        </div>
        </div>
        
        
        
        
          @endsection