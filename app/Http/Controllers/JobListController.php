<?php

namespace App\Http\Controllers;

use App\Models\JobList;
use App\Http\Requests\StoreJobListRequest;
use App\Http\Requests\UpdateJobListRequest;

class JobListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobList  $jobList
     * @return \Illuminate\Http\Response
     */
    public function show(JobList $jobList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobList  $jobList
     * @return \Illuminate\Http\Response
     */
    public function edit(JobList $jobList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobListRequest  $request
     * @param  \App\Models\JobList  $jobList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobListRequest $request, JobList $jobList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobList  $jobList
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobList $jobList)
    {
        //
    }
}
