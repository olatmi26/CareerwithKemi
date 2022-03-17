<?php

namespace App\Http\Controllers;

use App\Http\Requests\CareerFocusStoreRequest;
use App\Http\Requests\CareerFocusUpdateRequest;
use App\Models\CareerFocus;
use Illuminate\Http\Request;

class CareerFocusController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $careerFocus = CareerFocu::all();

        return view('careerFocu.index', compact('careerFocus'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('careerFocu.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CareerFocus $careerFocu
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CareerFocu $careerFocu)
    {
        return view('careerFocu.show', compact('careerFocu'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CareerFocus $careerFocu
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, CareerFocu $careerFocu)
    {
        return view('careerFocu.edit', compact('careerFocu'));
    }

    /**
     * @param \App\Http\Requests\CareerFocusUpdateRequest $request
     * @param \App\Models\CareerFocus $careerFocu
     * @return \Illuminate\Http\Response
     */
    public function update(CareerFocusUpdateRequest $request, CareerFocu $careerFocu)
    {
        $careerFocu->update($request->validated());

        $request->session()->flash('careerFocu.id', $careerFocu->id);

        return redirect()->route('careerFocu.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CareerFocus $careerFocu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CareerFocu $careerFocu)
    {
        $careerFocu->delete();

        return redirect()->route('careerFocu.index');
    }

    /**
     * @param \App\Http\Requests\CareerFocusStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CareerFocusStoreRequest $request)
    {
        $careerFocus = CareerFocus::create($request->validated());

        $request->session()->flash('careerFocus.added', $careerFocus->added);

        return redirect()->route('ResumeBuild.create');
    }
}
