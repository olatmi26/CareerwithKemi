<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillBankStoreRequest;
use App\Http\Requests\SkillBankUpdateRequest;
use App\Models\SkillBank;
use Illuminate\Http\Request;

class SkillBankController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $skillBanks = SkillBank::all();

        return view('skillBank.index', compact('skillBanks'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('skillBank.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SkillBank $skillBank
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, SkillBank $skillBank)
    {
        return view('skillBank.show', compact('skillBank'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SkillBank $skillBank
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, SkillBank $skillBank)
    {
        return view('skillBank.edit', compact('skillBank'));
    }

    /**
     * @param \App\Http\Requests\SkillBankUpdateRequest $request
     * @param \App\Models\SkillBank $skillBank
     * @return \Illuminate\Http\Response
     */
    public function update(SkillBankUpdateRequest $request, SkillBank $skillBank)
    {
        $skillBank->update($request->validated());

        $request->session()->flash('skillBank.id', $skillBank->id);

        return redirect()->route('skillBank.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SkillBank $skillBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, SkillBank $skillBank)
    {
        $skillBank->delete();

        return redirect()->route('skillBank.index');
    }

    /**
     * @param \App\Http\Requests\SkillBankStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkillBankStoreRequest $request)
    {
        $skillBank = SkillBank::create($request->validated());

        $request->session()->flash('skillBank.created-successfully', $skillBank->created-successfully);

        return redirect()->route('SkillBank.index');
    }
}
