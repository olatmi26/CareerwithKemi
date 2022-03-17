<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\ResumeTypeStoreRequest;
use App\Http\Requests\Services\ResumeTypeUpdateRequest;
use App\Models\Services\ResumeType;
use Illuminate\Http\Request;

class ResumeTypeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resumeTypes = ResumeType::all();

        return view('resumeType.index', compact('resumeTypes'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('resumeType.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Services\ResumeType $resumeType
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ResumeType $resumeType)
    {
        return view('resumeType.show', compact('resumeType'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Services\ResumeType $resumeType
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ResumeType $resumeType)
    {
        return view('resumeType.edit', compact('resumeType'));
    }

    /**
     * @param \App\Http\Requests\Services\ResumeTypeUpdateRequest $request
     * @param \App\Models\Services\ResumeType $resumeType
     * @return \Illuminate\Http\Response
     */
    public function update(ResumeTypeUpdateRequest $request, ResumeType $resumeType)
    {
        $resumeType->update($request->validated());

        $request->session()->flash('resumeType.id', $resumeType->id);

        return redirect()->route('resumeType.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Services\ResumeType $resumeType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ResumeType $resumeType)
    {
        $resumeType->delete();

        return redirect()->route('resumeType.index');
    }

    /**
     * @param \App\Http\Requests\Services\ResumeTypeStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResumeTypeStoreRequest $request)
    {
        $resumeType = ResumeType::create($request->validated());

        $request->session()->flash('resumeType.created-successfully', $resumeType->created-successfully);

        return redirect()->route('Services\ResumeType.index');
    }
}
