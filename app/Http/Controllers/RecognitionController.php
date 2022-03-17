<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecognitionStoreRequest;
use App\Http\Requests\RecognitionUpdateRequest;
use App\Models\Recognition;
use App\RecognitionList;
use Illuminate\Http\Request;

class RecognitionController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $recognitions = Recognition::all();

        return view('recognition.index', compact('recognitions'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('recognition.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Recognition $recognition
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Recognition $recognition)
    {
        return view('recognition.show', compact('recognition'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Recognition $recognition
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Recognition $recognition)
    {
        return view('recognition.edit', compact('recognition'));
    }

    /**
     * @param \App\Http\Requests\RecognitionUpdateRequest $request
     * @param \App\Models\Recognition $recognition
     * @return \Illuminate\Http\Response
     */
    public function update(RecognitionUpdateRequest $request, Recognition $recognition)
    {
        $recognition->update($request->validated());

        $request->session()->flash('recognition.id', $recognition->id);

        return redirect()->route('recognition.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Recognition $recognition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Recognition $recognition)
    {
        $recognition->delete();

        return redirect()->route('recognition.index');
    }

    /**
     * @param \App\Http\Requests\RecognitionStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecognitionStoreRequest $request)
    {
        $recognitionList = RecognitionList::create($request->validated());

        $request->session()->flash('recognitionList.saved', $recognitionList->saved);

        return redirect()->route('ResumeBuild.create');
    }
}
