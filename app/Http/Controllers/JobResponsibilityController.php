<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobResponsibilityStoreRequest;
use App\Http\Requests\JobResponsibilityUpdateRequest;
use App\Models\JobResponsibility;
use Illuminate\Http\Request;

class JobResponsibilityController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jobResponsibilities = JobResponsibility::all();

        return view('jobResponsibility.index', compact('jobResponsibilities'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('jobResponsibility.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\JobResponsibility $jobResponsibility
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, JobResponsibility $jobResponsibility)
    {
        return view('jobResponsibility.show', compact('jobResponsibility'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\JobResponsibility $jobResponsibility
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, JobResponsibility $jobResponsibility)
    {
        return view('jobResponsibility.edit', compact('jobResponsibility'));
    }

    /**
     * @param \App\Http\Requests\JobResponsibilityUpdateRequest $request
     * @param \App\Models\JobResponsibility $jobResponsibility
     * @return \Illuminate\Http\Response
     */
    public function update(JobResponsibilityUpdateRequest $request, JobResponsibility $jobResponsibility)
    {
        $jobResponsibility->update($request->validated());

        $request->session()->flash('jobResponsibility.id', $jobResponsibility->id);

        return redirect()->route('jobResponsibility.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\JobResponsibility $jobResponsibility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, JobResponsibility $jobResponsibility)
    {
        $jobResponsibility->delete();

        return redirect()->route('jobResponsibility.index');
    }

    /**
     * @param \App\Http\Requests\JobResponsibilityStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobResponsibilityStoreRequest $request)
    {
        $jobResponsibility = JobResponsibility::create($request->validated());

        $request->session()->flash('jobResponsibility.saved', $jobResponsibility->saved);

        return redirect()->route('ResumeBuild.create');
    }
}
