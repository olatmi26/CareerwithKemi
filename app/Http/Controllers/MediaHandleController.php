<?php

namespace App\Http\Controllers;

use App\Http\Requests\MediaHandleStoreRequest;
use App\Http\Requests\MediaHandleUpdateRequest;
use App\Models\MediaHandle;
use Illuminate\Http\Request;

class MediaHandleController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mediaHandles = MediaHandle::all();

        return view('mediaHandle.index', compact('mediaHandles'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('mediaHandle.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\MediaHandle $mediaHandle
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, MediaHandle $mediaHandle)
    {
        return view('mediaHandle.show', compact('mediaHandle'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\MediaHandle $mediaHandle
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, MediaHandle $mediaHandle)
    {
        return view('mediaHandle.edit', compact('mediaHandle'));
    }

    /**
     * @param \App\Http\Requests\MediaHandleUpdateRequest $request
     * @param \App\Models\MediaHandle $mediaHandle
     * @return \Illuminate\Http\Response
     */
    public function update(MediaHandleUpdateRequest $request, MediaHandle $mediaHandle)
    {
        $mediaHandle->update($request->validated());

        $request->session()->flash('mediaHandle.id', $mediaHandle->id);

        return redirect()->route('mediaHandle.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\MediaHandle $mediaHandle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, MediaHandle $mediaHandle)
    {
        $mediaHandle->delete();

        return redirect()->route('mediaHandle.index');
    }

    /**
     * @param \App\Http\Requests\MediaHandleStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MediaHandleStoreRequest $request)
    {
        $mediaHandle = MediaHandle::create($request->validated());

        $request->session()->flash('mediaHandle.addedSuccessfully', $mediaHandle->addedSuccessfully);

        return redirect()->route('MediaHandle.index');
    }
}
