<?php

namespace App\Http\Controllers;

use App\Http\Requests\KeyAchievementStoreRequest;
use App\Http\Requests\KeyAchievementUpdateRequest;
use App\Models\KeyAchievement;
use Illuminate\Http\Request;

class KeyAchievementController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyAchievements = KeyAchievement::all();

        return view('keyAchievement.index', compact('keyAchievements'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('keyAchievement.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\KeyAchievement $keyAchievement
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, KeyAchievement $keyAchievement)
    {
        return view('keyAchievement.show', compact('keyAchievement'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\KeyAchievement $keyAchievement
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, KeyAchievement $keyAchievement)
    {
        return view('keyAchievement.edit', compact('keyAchievement'));
    }

    /**
     * @param \App\Http\Requests\KeyAchievementUpdateRequest $request
     * @param \App\Models\KeyAchievement $keyAchievement
     * @return \Illuminate\Http\Response
     */
    public function update(KeyAchievementUpdateRequest $request, KeyAchievement $keyAchievement)
    {
        $keyAchievement->update($request->validated());

        $request->session()->flash('keyAchievement.id', $keyAchievement->id);

        return redirect()->route('keyAchievement.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\KeyAchievement $keyAchievement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, KeyAchievement $keyAchievement)
    {
        $keyAchievement->delete();

        return redirect()->route('keyAchievement.index');
    }

    /**
     * @param \App\Http\Requests\KeyAchievementStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(KeyAchievementStoreRequest $request)
    {
        $keyAchievement = KeyAchievement::create($request->validated());

        $request->session()->flash('keyAchievement', $keyAchievement);

        return redirect()->route('ResumeBuild.create');
    }
}
