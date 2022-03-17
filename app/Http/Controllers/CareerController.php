<?php

namespace App\Http\Controllers;

use App\Http\Requests\CareerStoreRequest;
use App\Http\Requests\CareerUpdateRequest;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $careers = Career::all();

        return view('career.index', compact('careers'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('career.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Career $career
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Career $career)
    {
        return view('career.show', compact('career'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Career $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Career $career)
    {
        return view('career.edit', compact('career'));
    }

    /**
     * @param \App\Http\Requests\CareerUpdateRequest $request
     * @param \App\Models\Career $career
     * @return \Illuminate\Http\Response
     */
    public function update(CareerUpdateRequest $request, Career $career)
    {
        $career->update($request->validated());

        $request->session()->flash('career.id', $career->id);

        return redirect()->route('career.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Career $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Career $career)
    {
        $career->delete();

        return redirect()->route('career.index');
    }

    /**
     * @param \App\Http\Requests\CareerStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CareerStoreRequest $request)
    {
        $career = Career::create($request->validated());

        $request->session()->flash('career.created-successfully', $career->created-successfully);

        return redirect()->route('Career.index');
    }
}
