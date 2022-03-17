<?php

namespace App\Http\Controllers;

use App\Http\Requests\RefereeStoreRequest;
use App\Http\Requests\RefereeUpdateRequest;
use App\Models\Referee;
use App\SaveRef;
use Illuminate\Http\Request;

class RefereeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $referees = Referee::all();

        return view('referee.index', compact('referees'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('referee.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Referee $referee
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Referee $referee)
    {
        return view('referee.show', compact('referee'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Referee $referee
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Referee $referee)
    {
        return view('referee.edit', compact('referee'));
    }

    /**
     * @param \App\Http\Requests\RefereeUpdateRequest $request
     * @param \App\Models\Referee $referee
     * @return \Illuminate\Http\Response
     */
    public function update(RefereeUpdateRequest $request, Referee $referee)
    {
        $referee->update($request->validated());

        $request->session()->flash('referee.id', $referee->id);

        return redirect()->route('referee.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Referee $referee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Referee $referee)
    {
        $referee->delete();

        return redirect()->route('referee.index');
    }

    /**
     * @param \App\Http\Requests\RefereeStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RefereeStoreRequest $request)
    {
        $saveRef = SaveRef::create($request->validated());

        $request->session()->flash('saveRef.saved', $saveRef->saved);

        return redirect()->route('ResumeBuild.create');
    }
}
