<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessionalAffiliationStoreRequest;
use App\Http\Requests\ProfessionalAffiliationUpdateRequest;
use App\Models\ProfessionalAffiliation;
use Illuminate\Http\Request;

class ProfessionalAffiliationController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $professionalAffiliations = ProfessionalAffiliation::all();

        return view('professionalAffiliation.index', compact('professionalAffiliations'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('professionalAffiliation.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProfessionalAffiliation $professionalAffiliation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProfessionalAffiliation $professionalAffiliation)
    {
        return view('professionalAffiliation.show', compact('professionalAffiliation'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProfessionalAffiliation $professionalAffiliation
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ProfessionalAffiliation $professionalAffiliation)
    {
        return view('professionalAffiliation.edit', compact('professionalAffiliation'));
    }

    /**
     * @param \App\Http\Requests\ProfessionalAffiliationUpdateRequest $request
     * @param \App\Models\ProfessionalAffiliation $professionalAffiliation
     * @return \Illuminate\Http\Response
     */
    public function update(ProfessionalAffiliationUpdateRequest $request, ProfessionalAffiliation $professionalAffiliation)
    {
        $professionalAffiliation->update($request->validated());

        $request->session()->flash('professionalAffiliation.id', $professionalAffiliation->id);

        return redirect()->route('professionalAffiliation.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProfessionalAffiliation $professionalAffiliation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProfessionalAffiliation $professionalAffiliation)
    {
        $professionalAffiliation->delete();

        return redirect()->route('professionalAffiliation.index');
    }

    /**
     * @param \App\Http\Requests\ProfessionalAffiliationStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfessionalAffiliationStoreRequest $request)
    {
        $professionalAffiliation = ProfessionalAffiliation::create($request->validated());

        $request->session()->flash('professionalAffiliation.addedSuccessfully', $professionalAffiliation->addedSuccessfully);

        return redirect()->route('ResumeBuild.create');
    }
}
