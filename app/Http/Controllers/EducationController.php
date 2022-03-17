<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationStoreRequest;
use App\Http\Requests\EducationUpdateRequest;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $education = Education::all();

        return view('education.index', compact('education'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('education.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Education $education
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Education $education)
    {
        return view('education.show', compact('education'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Education $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Education $education)
    {
        return view('education.edit', compact('education'));
    }

    /**
     * @param \App\Http\Requests\EducationUpdateRequest $request
     * @param \App\Models\Education $education
     * @return \Illuminate\Http\Response
     */
    public function update(EducationUpdateRequest $request, Education $education)
    {
        $education->update($request->validated());

        $request->session()->flash('education.id', $education->id);

        return redirect()->route('education.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Education $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Education $education)
    {
        $education->delete();

        return redirect()->route('education.index');
    }

    /**
     * @param \App\Http\Requests\EducationStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EducationStoreRequest $request)
    {
        $education = Education::create($request->validated());

        $request->session()->flash('education.addedSuccessfully', $education->addedSuccessfully);

        return redirect()->route('ResumeBuild.create');
    }
}
