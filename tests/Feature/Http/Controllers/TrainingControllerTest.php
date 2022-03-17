<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Training;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TrainingController
 */
class TrainingControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $trainings = Training::factory()->count(3)->create();

        $response = $this->get(route('training.index'));

        $response->assertOk();
        $response->assertViewIs('training.index');
        $response->assertViewHas('trainings');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('training.create'));

        $response->assertOk();
        $response->assertViewIs('training.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $training = Training::factory()->create();

        $response = $this->get(route('training.show', $training));

        $response->assertOk();
        $response->assertViewIs('training.show');
        $response->assertViewHas('training');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $training = Training::factory()->create();

        $response = $this->get(route('training.edit', $training));

        $response->assertOk();
        $response->assertViewIs('training.edit');
        $response->assertViewHas('training');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TrainingController::class,
            'update',
            \App\Http\Requests\TrainingUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $training = Training::factory()->create();
        $user = User::factory()->create();

        $response = $this->put(route('training.update', $training), [
            'user_id' => $user->id,
        ]);

        $training->refresh();

        $response->assertRedirect(route('training.index'));
        $response->assertSessionHas('training.id', $training->id);

        $this->assertEquals($user->id, $training->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $training = Training::factory()->create();

        $response = $this->delete(route('training.destroy', $training));

        $response->assertRedirect(route('training.index'));

        $this->assertDeleted($training);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TrainingController::class,
            'store',
            \App\Http\Requests\TrainingStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $trainingCoursesList = $this->faker->word;

        $response = $this->post(route('training.store'), [
            'user_id' => $user->id,
            'trainingCoursesList' => $trainingCoursesList,
        ]);

        $trainings = Training::query()
            ->where('user_id', $user->id)
            ->where('trainingCoursesList', $trainingCoursesList)
            ->get();
        $this->assertCount(1, $trainings);
        $training = $trainings->first();

        $response->assertRedirect(route('ResumeBuild.create'));
        $response->assertSessionHas('training.addedSuccessfully', $training->addedSuccessfully);
    }
}
