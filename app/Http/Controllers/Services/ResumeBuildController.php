<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\ResumeBuildStoreRequest;
use App\Http\Requests\Services\ResumeBuildUpdateRequest;
use App\Models\Services\ResumeBuild;
use Illuminate\Http\Request;

class ResumeBuildController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resumeBuilds = ResumeBuild::all();

        return view('resumeBuild.index', compact('resumeBuilds'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('resumeBuild.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Services\ResumeBuild $resumeBuild
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ResumeBuild $resumeBuild)
    {
        return view('resumeBuild.show', compact('resumeBuild'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Services\ResumeBuild $resumeBuild
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ResumeBuild $resumeBuild)
    {
        return view('resumeBuild.edit', compact('resumeBuild'));
    }

    /**
     * @param \App\Http\Requests\Services\ResumeBuildUpdateRequest $request
     * @param \App\Models\Services\ResumeBuild $resumeBuild
     * @return \Illuminate\Http\Response
     */
    public function update(ResumeBuildUpdateRequest $request, ResumeBuild $resumeBuild)
    {
        $resumeBuild->update($request->validated());

        $request->session()->flash('resumeBuild.id', $resumeBuild->id);

        return redirect()->route('resumeBuild.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Services\ResumeBuild $resumeBuild
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ResumeBuild $resumeBuild)
    {
        $resumeBuild->delete();

        return redirect()->route('resumeBuild.index');
    }

    /**
     * @param \App\Http\Requests\Services\ResumeBuildStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResumeBuildStoreRequest $request)
    {
        $resumeBuild = ResumeBuild::create($request->validated());

        $request->session()->flash('resumeBuild.created-successfully', $resumeBuild->created-successfully);

        return redirect()->route('ResumeBuild.index');
    }
}
