<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\ProfileSummary;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ProfileSummaryController
 */
class ProfileSummaryControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $profileSummaries = ProfileSummary::factory()->count(3)->create();

        $response = $this->get(route('profile-summary.index'));

        $response->assertOk();
        $response->assertViewIs('profileSummary.index');
        $response->assertViewHas('profileSummaries');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('profile-summary.create'));

        $response->assertOk();
        $response->assertViewIs('profileSummary.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $profileSummary = ProfileSummary::factory()->create();

        $response = $this->get(route('profile-summary.show', $profileSummary));

        $response->assertOk();
        $response->assertViewIs('profileSummary.show');
        $response->assertViewHas('profileSummary');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $profileSummary = ProfileSummary::factory()->create();

        $response = $this->get(route('profile-summary.edit', $profileSummary));

        $response->assertOk();
        $response->assertViewIs('profileSummary.edit');
        $response->assertViewHas('profileSummary');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProfileSummaryController::class,
            'update',
            \App\Http\Requests\ProfileSummaryUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $profileSummary = ProfileSummary::factory()->create();
        $user = User::factory()->create();

        $response = $this->put(route('profile-summary.update', $profileSummary), [
            'user_id' => $user->id,
        ]);

        $profileSummary->refresh();

        $response->assertRedirect(route('profileSummary.index'));
        $response->assertSessionHas('profileSummary.id', $profileSummary->id);

        $this->assertEquals($user->id, $profileSummary->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $profileSummary = ProfileSummary::factory()->create();

        $response = $this->delete(route('profile-summary.destroy', $profileSummary));

        $response->assertRedirect(route('profileSummary.index'));

        $this->assertDeleted($profileSummary);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProfileSummaryController::class,
            'store',
            \App\Http\Requests\ProfileSummaryStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $summary = $this->faker->text;

        $response = $this->post(route('profile-summary.store'), [
            'user_id' => $user->id,
            'summary' => $summary,
        ]);

        $profileSummaries = ProfileSummary::query()
            ->where('user_id', $user->id)
            ->where('summary', $summary)
            ->get();
        $this->assertCount(1, $profileSummaries);
        $profileSummary = $profileSummaries->first();

        $response->assertRedirect(route('ResumeBuild.index'));
        $response->assertSessionHas('profileSummary.created-successfully', $profileSummary->created-successfully);
    }
}
