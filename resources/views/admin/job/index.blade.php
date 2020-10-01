@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        List of jobs

    <a href="{{ route('jobs.create') }}"> Add Job </a>

</div>
<div class="card-body">
  <div class="table-responsive">
  <table class="table table-striped">
    <tr>
    <th>ID</th>
    <th>User</th>
    <th>Role</th>
    <th>Salary</th>
    <th>Experience</th>
    <th>Position No</th>
    <th>Job Description</th>
    <th>Actions</th>
    </tr>

    <tr>   
        @foreach($jobs as $job) 
        <td> {{ $job->id }} </td>
        <td> {{ $job->user->name }} </td>
        <td> {{ $job->role }} </td>
        <td> {{ $job->salary }} </td>
        <td> {{ $job->experience }} </td>
        <td> {{ $job->position_no }} </td>
        <td> {{ $job->job_description }} </td>
        <td>
            <td>
        <form action="{{ route('jobs.destroy', $job->id )}}" method="POST">
            
        <a class="btn btn-info" href="{{ route('jobs.show', $job->id) }}">Show</a>
        
        <a class="btn btn-primary" href="{{ route('jobs.edit', $job->id) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"> Delete </button>
        </form>
            </td>
        </form>
        </td>
    </tr>
        @endforeach
    </table>       
</div>
</div>
</div>

        @endsection
