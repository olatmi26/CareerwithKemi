<?php

namespace Tests\Feature\Http\Controllers\Services;

use App\Models\ResumeBuild;
use App\Models\ResumeType;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Services\ResumeBuildController
 */
class ResumeBuildControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $resumeBuilds = ResumeBuild::factory()->count(3)->create();

        $response = $this->get(route('resume-build.index'));

        $response->assertOk();
        $response->assertViewIs('resumeBuild.index');
        $response->assertViewHas('resumeBuilds');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('resume-build.create'));

        $response->assertOk();
        $response->assertViewIs('resumeBuild.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $resumeBuild = ResumeBuild::factory()->create();

        $response = $this->get(route('resume-build.show', $resumeBuild));

        $response->assertOk();
        $response->assertViewIs('resumeBuild.show');
        $response->assertViewHas('resumeBuild');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $resumeBuild = ResumeBuild::factory()->create();

        $response = $this->get(route('resume-build.edit', $resumeBuild));

        $response->assertOk();
        $response->assertViewIs('resumeBuild.edit');
        $response->assertViewHas('resumeBuild');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Services\ResumeBuildController::class,
            'update',
            \App\Http\Requests\Services\ResumeBuildUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $resumeBuild = ResumeBuild::factory()->create();
        $resume_type = ResumeType::factory()->create();
        $user = User::factory()->create();

        $response = $this->put(route('resume-build.update', $resumeBuild), [
            'resume_type_id' => $resume_type->id,
            'user_id' => $user->id,
        ]);

        $resumeBuild->refresh();

        $response->assertRedirect(route('resumeBuild.index'));
        $response->assertSessionHas('resumeBuild.id', $resumeBuild->id);

        $this->assertEquals($resume_type->id, $resumeBuild->resume_type_id);
        $this->assertEquals($user->id, $resumeBuild->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $resumeBuild = ResumeBuild::factory()->create();

        $response = $this->delete(route('resume-build.destroy', $resumeBuild));

        $response->assertRedirect(route('resumeBuild.index'));

        $this->assertDeleted($resumeBuild);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Services\ResumeBuildController::class,
            'store',
            \App\Http\Requests\Services\ResumeBuildStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $resume_type = ResumeType::factory()->create();
        $user = User::factory()->create();

        $response = $this->post(route('resume-build.store'), [
            'resume_type_id' => $resume_type->id,
            'user_id' => $user->id,
        ]);

        $resumeBuilds = ResumeBuild::query()
            ->where('resume_type_id', $resume_type->id)
            ->where('user_id', $user->id)
            ->get();
        $this->assertCount(1, $resumeBuilds);
        $resumeBuild = $resumeBuilds->first();

        $response->assertRedirect(route('ResumeBuild.index'));
        $response->assertSessionHas('resumeBuild.created-successfully', $resumeBuild->created-successfully);
    }
}
