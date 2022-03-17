<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainingStoreRequest;
use App\Http\Requests\TrainingUpdateRequest;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $trainings = Training::all();

        return view('training.index', compact('trainings'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('training.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Training $training
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Training $training)
    {
        return view('training.show', compact('training'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Training $training
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Training $training)
    {
        return view('training.edit', compact('training'));
    }

    /**
     * @param \App\Http\Requests\TrainingUpdateRequest $request
     * @param \App\Models\Training $training
     * @return \Illuminate\Http\Response
     */
    public function update(TrainingUpdateRequest $request, Training $training)
    {
        $training->update($request->validated());

        $request->session()->flash('training.id', $training->id);

        return redirect()->route('training.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Training $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Training $training)
    {
        $training->delete();

        return redirect()->route('training.index');
    }

    /**
     * @param \App\Http\Requests\TrainingStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingStoreRequest $request)
    {
        $training = Training::create($request->validated());

        $request->session()->flash('training.addedSuccessfully', $training->addedSuccessfully);

        return redirect()->route('ResumeBuild.create');
    }
}
