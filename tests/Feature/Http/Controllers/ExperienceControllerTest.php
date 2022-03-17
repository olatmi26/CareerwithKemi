<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Experience;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ExperienceController
 */
class ExperienceControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $experiences = Experience::factory()->count(3)->create();

        $response = $this->get(route('experience.index'));

        $response->assertOk();
        $response->assertViewIs('experience.index');
        $response->assertViewHas('experiences');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('experience.create'));

        $response->assertOk();
        $response->assertViewIs('experience.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $experience = Experience::factory()->create();

        $response = $this->get(route('experience.show', $experience));

        $response->assertOk();
        $response->assertViewIs('experience.show');
        $response->assertViewHas('experience');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $experience = Experience::factory()->create();

        $response = $this->get(route('experience.edit', $experience));

        $response->assertOk();
        $response->assertViewIs('experience.edit');
        $response->assertViewHas('experience');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ExperienceController::class,
            'update',
            \App\Http\Requests\ExperienceUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $experience = Experience::factory()->create();
        $user = User::factory()->create();
        $isCurrentJob = $this->faker->boolean;

        $response = $this->put(route('experience.update', $experience), [
            'user_id' => $user->id,
            'isCurrentJob' => $isCurrentJob,
        ]);

        $experience->refresh();

        $response->assertRedirect(route('experience.index'));
        $response->assertSessionHas('experience.id', $experience->id);

        $this->assertEquals($user->id, $experience->user_id);
        $this->assertEquals($isCurrentJob, $experience->isCurrentJob);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $experience = Experience::factory()->create();

        $response = $this->delete(route('experience.destroy', $experience));

        $response->assertRedirect(route('experience.index'));

        $this->assertDeleted($experience);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ExperienceController::class,
            'store',
            \App\Http\Requests\ExperienceStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $companyName = $this->faker->word;
        $positionHeld = $this->faker->word;
        $fromYear = $this->faker->date();
        $toYear = $this->faker->date();
        $isCurrentJob = $this->faker->boolean;

        $response = $this->post(route('experience.store'), [
            'user_id' => $user->id,
            'companyName' => $companyName,
            'positionHeld' => $positionHeld,
            'fromYear' => $fromYear,
            'toYear' => $toYear,
            'isCurrentJob' => $isCurrentJob,
        ]);

        $experiences = Experience::query()
            ->where('user_id', $user->id)
            ->where('companyName', $companyName)
            ->where('positionHeld', $positionHeld)
            ->where('fromYear', $fromYear)
            ->where('toYear', $toYear)
            ->where('isCurrentJob', $isCurrentJob)
            ->get();
        $this->assertCount(1, $experiences);
        $experience = $experiences->first();

        $response->assertRedirect(route('JobResponsibility.create'));
        $response->assertSessionHas('experience.added', $experience->added);
    }
}
