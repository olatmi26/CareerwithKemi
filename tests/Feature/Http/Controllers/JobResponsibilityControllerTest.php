<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Experience;
use App\Models\JobResponsibility;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\JobResponsibilityController
 */
class JobResponsibilityControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $jobResponsibilities = JobResponsibility::factory()->count(3)->create();

        $response = $this->get(route('job-responsibility.index'));

        $response->assertOk();
        $response->assertViewIs('jobResponsibility.index');
        $response->assertViewHas('jobResponsibilities');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('job-responsibility.create'));

        $response->assertOk();
        $response->assertViewIs('jobResponsibility.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $jobResponsibility = JobResponsibility::factory()->create();

        $response = $this->get(route('job-responsibility.show', $jobResponsibility));

        $response->assertOk();
        $response->assertViewIs('jobResponsibility.show');
        $response->assertViewHas('jobResponsibility');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $jobResponsibility = JobResponsibility::factory()->create();

        $response = $this->get(route('job-responsibility.edit', $jobResponsibility));

        $response->assertOk();
        $response->assertViewIs('jobResponsibility.edit');
        $response->assertViewHas('jobResponsibility');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\JobResponsibilityController::class,
            'update',
            \App\Http\Requests\JobResponsibilityUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $jobResponsibility = JobResponsibility::factory()->create();

        $response = $this->put(route('job-responsibility.update', $jobResponsibility));

        $jobResponsibility->refresh();

        $response->assertRedirect(route('jobResponsibility.index'));
        $response->assertSessionHas('jobResponsibility.id', $jobResponsibility->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $jobResponsibility = JobResponsibility::factory()->create();

        $response = $this->delete(route('job-responsibility.destroy', $jobResponsibility));

        $response->assertRedirect(route('jobResponsibility.index'));

        $this->assertDeleted($jobResponsibility);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\JobResponsibilityController::class,
            'store',
            \App\Http\Requests\JobResponsibilityStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $experience = Experience::factory()->create();
        $responsibility = $this->faker->word;

        $response = $this->post(route('job-responsibility.store'), [
            'experience_id' => $experience->id,
            'responsibility' => $responsibility,
        ]);

        $jobResponsibilities = JobResponsibility::query()
            ->where('experience_id', $experience->id)
            ->where('responsibility', $responsibility)
            ->get();
        $this->assertCount(1, $jobResponsibilities);
        $jobResponsibility = $jobResponsibilities->first();

        $response->assertRedirect(route('ResumeBuild.create'));
        $response->assertSessionHas('jobResponsibility.saved', $jobResponsibility->saved);
    }
}
