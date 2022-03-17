<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileSummaryStoreRequest;
use App\Http\Requests\ProfileSummaryUpdateRequest;
use App\Models\ProfileSummary;
use Illuminate\Http\Request;

class ProfileSummaryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $profileSummaries = ProfileSummary::all();

        return view('profileSummary.index', compact('profileSummaries'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('profileSummary.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProfileSummary $profileSummary
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProfileSummary $profileSummary)
    {
        return view('profileSummary.show', compact('profileSummary'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProfileSummary $profileSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ProfileSummary $profileSummary)
    {
        return view('profileSummary.edit', compact('profileSummary'));
    }

    /**
     * @param \App\Http\Requests\ProfileSummaryUpdateRequest $request
     * @param \App\Models\ProfileSummary $profileSummary
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileSummaryUpdateRequest $request, ProfileSummary $profileSummary)
    {
        $profileSummary->update($request->validated());

        $request->session()->flash('profileSummary.id', $profileSummary->id);

        return redirect()->route('profileSummary.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProfileSummary $profileSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProfileSummary $profileSummary)
    {
        $profileSummary->delete();

        return redirect()->route('profileSummary.index');
    }

    /**
     * @param \App\Http\Requests\ProfileSummaryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileSummaryStoreRequest $request)
    {
        $profileSummary = ProfileSummary::create($request->validated());

        $request->session()->flash('profileSummary.created-successfully', $profileSummary->created-successfully);

        return redirect()->route('ResumeBuild.index');
    }
}
