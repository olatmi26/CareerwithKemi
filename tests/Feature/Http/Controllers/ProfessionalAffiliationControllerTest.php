<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\ProfessionalAffiliation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ProfessionalAffiliationController
 */
class ProfessionalAffiliationControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $professionalAffiliations = ProfessionalAffiliation::factory()->count(3)->create();

        $response = $this->get(route('professional-affiliation.index'));

        $response->assertOk();
        $response->assertViewIs('professionalAffiliation.index');
        $response->assertViewHas('professionalAffiliations');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('professional-affiliation.create'));

        $response->assertOk();
        $response->assertViewIs('professionalAffiliation.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $professionalAffiliation = ProfessionalAffiliation::factory()->create();

        $response = $this->get(route('professional-affiliation.show', $professionalAffiliation));

        $response->assertOk();
        $response->assertViewIs('professionalAffiliation.show');
        $response->assertViewHas('professionalAffiliation');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $professionalAffiliation = ProfessionalAffiliation::factory()->create();

        $response = $this->get(route('professional-affiliation.edit', $professionalAffiliation));

        $response->assertOk();
        $response->assertViewIs('professionalAffiliation.edit');
        $response->assertViewHas('professionalAffiliation');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProfessionalAffiliationController::class,
            'update',
            \App\Http\Requests\ProfessionalAffiliationUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $professionalAffiliation = ProfessionalAffiliation::factory()->create();
        $user = User::factory()->create();

        $response = $this->put(route('professional-affiliation.update', $professionalAffiliation), [
            'user_id' => $user->id,
        ]);

        $professionalAffiliation->refresh();

        $response->assertRedirect(route('professionalAffiliation.index'));
        $response->assertSessionHas('professionalAffiliation.id', $professionalAffiliation->id);

        $this->assertEquals($user->id, $professionalAffiliation->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $professionalAffiliation = ProfessionalAffiliation::factory()->create();

        $response = $this->delete(route('professional-affiliation.destroy', $professionalAffiliation));

        $response->assertRedirect(route('professionalAffiliation.index'));

        $this->assertDeleted($professionalAffiliation);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProfessionalAffiliationController::class,
            'store',
            \App\Http\Requests\ProfessionalAffiliationStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $body = $this->faker->word;
        $bodyFullName = $this->faker->word;
        $dateObtained = $this->faker->date();

        $response = $this->post(route('professional-affiliation.store'), [
            'user_id' => $user->id,
            'body' => $body,
            'bodyFullName' => $bodyFullName,
            'dateObtained' => $dateObtained,
        ]);

        $professionalAffiliations = ProfessionalAffiliation::query()
            ->where('user_id', $user->id)
            ->where('body', $body)
            ->where('bodyFullName', $bodyFullName)
            ->where('dateObtained', $dateObtained)
            ->get();
        $this->assertCount(1, $professionalAffiliations);
        $professionalAffiliation = $professionalAffiliations->first();

        $response->assertRedirect(route('ResumeBuild.create'));
        $response->assertSessionHas('professionalAffiliation.addedSuccessfully', $professionalAffiliation->addedSuccessfully);
    }
}
