<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialHandleStoreRequest;
use App\Http\Requests\SocialHandleUpdateRequest;
use App\Models\SocialHandle;
use Illuminate\Http\Request;

class SocialHandleController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $socialHandles = SocialHandle::all();

        return view('socialHandle.index', compact('socialHandles'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('socialHandle.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SocialHandle $socialHandle
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, SocialHandle $socialHandle)
    {
        return view('socialHandle.show', compact('socialHandle'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SocialHandle $socialHandle
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, SocialHandle $socialHandle)
    {
        return view('socialHandle.edit', compact('socialHandle'));
    }

    /**
     * @param \App\Http\Requests\SocialHandleUpdateRequest $request
     * @param \App\Models\SocialHandle $socialHandle
     * @return \Illuminate\Http\Response
     */
    public function update(SocialHandleUpdateRequest $request, SocialHandle $socialHandle)
    {
        $socialHandle->update($request->validated());

        $request->session()->flash('socialHandle.id', $socialHandle->id);

        return redirect()->route('socialHandle.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SocialHandle $socialHandle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, SocialHandle $socialHandle)
    {
        $socialHandle->delete();

        return redirect()->route('socialHandle.index');
    }

    /**
     * @param \App\Http\Requests\SocialHandleStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialHandleStoreRequest $request)
    {
        $socialHandle = SocialHandle::create($request->validated());

        $request->session()->flash('socialHandle.addedSuccessfully', $socialHandle->addedSuccessfully);

        return redirect()->route('ResumeBuild.create');
    }
}
