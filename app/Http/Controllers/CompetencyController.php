<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompetencyStoreRequest;
use App\Http\Requests\CompetencyUpdateRequest;
use App\Models\Competency;
use Illuminate\Http\Request;

class CompetencyController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $competencies = Competency::all();

        return view('competency.index', compact('competencies'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('competency.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Competency $competency
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Competency $competency)
    {
        return view('competency.show', compact('competency'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Competency $competency
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Competency $competency)
    {
        return view('competency.edit', compact('competency'));
    }

    /**
     * @param \App\Http\Requests\CompetencyUpdateRequest $request
     * @param \App\Models\Competency $competency
     * @return \Illuminate\Http\Response
     */
    public function update(CompetencyUpdateRequest $request, Competency $competency)
    {
        $competency->update($request->validated());

        $request->session()->flash('competency.id', $competency->id);

        return redirect()->route('competency.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Competency $competency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Competency $competency)
    {
        $competency->delete();

        return redirect()->route('competency.index');
    }

    /**
     * @param \App\Http\Requests\CompetencyStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompetencyStoreRequest $request)
    {
        $competency = Competency::create($request->validated());

        $request->session()->flash('competency.added', $competency->added);

        return redirect()->route('ResumeBuild.create');
    }
}
