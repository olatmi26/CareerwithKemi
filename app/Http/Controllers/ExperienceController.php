<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienceStoreRequest;
use App\Http\Requests\ExperienceUpdateRequest;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $experiences = Experience::all();

        return view('experience.index', compact('experiences'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('experience.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Experience $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Experience $experience)
    {
        return view('experience.show', compact('experience'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Experience $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Experience $experience)
    {
        return view('experience.edit', compact('experience'));
    }

    /**
     * @param \App\Http\Requests\ExperienceUpdateRequest $request
     * @param \App\Models\Experience $experience
     * @return \Illuminate\Http\Response
     */
    public function update(ExperienceUpdateRequest $request, Experience $experience)
    {
        $experience->update($request->validated());

        $request->session()->flash('experience.id', $experience->id);

        return redirect()->route('experience.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Experience $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Experience $experience)
    {
        $experience->delete();

        return redirect()->route('experience.index');
    }

    /**
     * @param \App\Http\Requests\ExperienceStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExperienceStoreRequest $request)
    {
        $experience = Experience::create($request->validated());

        $request->session()->flash('experience.added', $experience->added);

        return redirect()->route('JobResponsibility.create');
    }
}
