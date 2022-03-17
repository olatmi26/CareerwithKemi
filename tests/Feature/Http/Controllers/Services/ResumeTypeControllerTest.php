<?php

namespace Tests\Feature\Http\Controllers\Services;

use App\Models\ResumeType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Services\ResumeTypeController
 */
class ResumeTypeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $resumeTypes = ResumeType::factory()->count(3)->create();

        $response = $this->get(route('resume-type.index'));

        $response->assertOk();
        $response->assertViewIs('resumeType.index');
        $response->assertViewHas('resumeTypes');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('resume-type.create'));

        $response->assertOk();
        $response->assertViewIs('resumeType.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $resumeType = ResumeType::factory()->create();

        $response = $this->get(route('resume-type.show', $resumeType));

        $response->assertOk();
        $response->assertViewIs('resumeType.show');
        $response->assertViewHas('resumeType');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $resumeType = ResumeType::factory()->create();

        $response = $this->get(route('resume-type.edit', $resumeType));

        $response->assertOk();
        $response->assertViewIs('resumeType.edit');
        $response->assertViewHas('resumeType');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Services\ResumeTypeController::class,
            'update',
            \App\Http\Requests\Services\ResumeTypeUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $resumeType = ResumeType::factory()->create();

        $response = $this->put(route('resume-type.update', $resumeType));

        $resumeType->refresh();

        $response->assertRedirect(route('resumeType.index'));
        $response->assertSessionHas('resumeType.id', $resumeType->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $resumeType = ResumeType::factory()->create();

        $response = $this->delete(route('resume-type.destroy', $resumeType));

        $response->assertRedirect(route('resumeType.index'));

        $this->assertDeleted($resumeType);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Services\ResumeTypeController::class,
            'store',
            \App\Http\Requests\Services\ResumeTypeStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $type = $this->faker->word;
        $cost = $this->faker->numberBetween(-10000, 10000);

        $response = $this->post(route('resume-type.store'), [
            'type' => $type,
            'cost' => $cost,
        ]);

        $resumeTypes = ResumeType::query()
            ->where('type', $type)
            ->where('cost', $cost)
            ->get();
        $this->assertCount(1, $resumeTypes);
        $resumeType = $resumeTypes->first();

        $response->assertRedirect(route('Services\ResumeType.index'));
        $response->assertSessionHas('resumeType.created-successfully', $resumeType->created-successfully);
    }
}
