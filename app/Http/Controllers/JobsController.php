<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequest;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use App\Models\JobList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;


class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $jobs = JobList::where('user_id', $id)->with('user')->get();
        return view('admin.job.index', ['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();
        //dd($data);
        JobList::create($data);
        
        return redirect()->route('jobs.index')
                         ->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobList = JobList::find($id);

        return view('admin.job.edit')->with('jobList', $jobList);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, $id)
    {
        JobList::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect()->route('jobs.index')
                         ->with('success', 'Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = JobList::find($id);
        $del->delete();

        return redirect()->route('jobs.index')
                         ->with('success', 'Deleted successfully');
    }

    public function list()
    {
        $applications = JobApplication::with('job')->get();
        return view('admin.job.jobtable', ['applications' => $applications]);
    }

    public function download($id)
    {
        $application = JobApplication::select('resume')->where('id', $id)->first();

        return Storage::download($application->resume);
    }
}
