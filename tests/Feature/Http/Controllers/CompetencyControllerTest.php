<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Competency;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CompetencyController
 */
class CompetencyControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $competencies = Competency::factory()->count(3)->create();

        $response = $this->get(route('competency.index'));

        $response->assertOk();
        $response->assertViewIs('competency.index');
        $response->assertViewHas('competencies');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('competency.create'));

        $response->assertOk();
        $response->assertViewIs('competency.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $competency = Competency::factory()->create();

        $response = $this->get(route('competency.show', $competency));

        $response->assertOk();
        $response->assertViewIs('competency.show');
        $response->assertViewHas('competency');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $competency = Competency::factory()->create();

        $response = $this->get(route('competency.edit', $competency));

        $response->assertOk();
        $response->assertViewIs('competency.edit');
        $response->assertViewHas('competency');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompetencyController::class,
            'update',
            \App\Http\Requests\CompetencyUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $competency = Competency::factory()->create();
        $user = User::factory()->create();

        $response = $this->put(route('competency.update', $competency), [
            'user_id' => $user->id,
        ]);

        $competency->refresh();

        $response->assertRedirect(route('competency.index'));
        $response->assertSessionHas('competency.id', $competency->id);

        $this->assertEquals($user->id, $competency->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $competency = Competency::factory()->create();

        $response = $this->delete(route('competency.destroy', $competency));

        $response->assertRedirect(route('competency.index'));

        $this->assertDeleted($competency);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompetencyController::class,
            'store',
            \App\Http\Requests\CompetencyStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $competenciesList = $this->faker->word;

        $response = $this->post(route('competency.store'), [
            'user_id' => $user->id,
            'competenciesList' => $competenciesList,
        ]);

        $competencies = Competency::query()
            ->where('user_id', $user->id)
            ->where('competenciesList', $competenciesList)
            ->get();
        $this->assertCount(1, $competencies);
        $competency = $competencies->first();

        $response->assertRedirect(route('ResumeBuild.create'));
        $response->assertSessionHas('competency.added', $competency->added);
    }
}
