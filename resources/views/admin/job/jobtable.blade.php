@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
                List of applicant

    <a href="{{ route('jobs.index') }}"> Add Job </a>
    
    </div>
<div class="card-body">
  <div class="table-responsive">
  <table class="table table-striped">
      <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Role</th>
          <th>Action</th>
      </tr>
      
      <tr>
          @foreach($applications as $application)
            <td> {{ $application->id }} </td>
            <td> {{ $application->first_name }} </td>
            <td> {{ $application->last_name }} </td>
            <td> {{ $application->email }} </td>
            <td> {{ $application->phone }} </td>
            <td> {{ $application->job->role }} </td>
            <td> 
            <a class="btn btn-primary" href="{{ route('resume.download', $application->id) }}"> Download </a>
                                                </td>


      </tr>                                                
      @endforeach
    </table>
  </div>
</div>
</div>
