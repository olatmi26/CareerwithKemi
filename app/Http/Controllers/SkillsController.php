<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillsStoreRequest;
use App\Http\Requests\SkillsUpdateRequest;
use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $skills = Skill::all();

        return view('skill.index', compact('skills'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('skill.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Skills $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Skill $skill)
    {
        return view('skill.show', compact('skill'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Skills $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Skill $skill)
    {
        return view('skill.edit', compact('skill'));
    }

    /**
     * @param \App\Http\Requests\SkillsUpdateRequest $request
     * @param \App\Models\Skills $skill
     * @return \Illuminate\Http\Response
     */
    public function update(SkillsUpdateRequest $request, Skill $skill)
    {
        $skill->update($request->validated());

        $request->session()->flash('skill.id', $skill->id);

        return redirect()->route('skill.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Skills $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Skill $skill)
    {
        $skill->delete();

        return redirect()->route('skill.index');
    }

    /**
     * @param \App\Http\Requests\SkillsStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkillsStoreRequest $request)
    {
        $skills = Skills::create($request->validated());

        $request->session()->flash('skills.created-successfully', $skills->created-successfully);

        return redirect()->route('ResumeBuild.index');
    }
}
