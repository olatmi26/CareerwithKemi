<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Recognition;
use App\Models\RecognitionList;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\RecognitionController
 */
class RecognitionControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $recognitions = Recognition::factory()->count(3)->create();

        $response = $this->get(route('recognition.index'));

        $response->assertOk();
        $response->assertViewIs('recognition.index');
        $response->assertViewHas('recognitions');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('recognition.create'));

        $response->assertOk();
        $response->assertViewIs('recognition.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $recognition = Recognition::factory()->create();

        $response = $this->get(route('recognition.show', $recognition));

        $response->assertOk();
        $response->assertViewIs('recognition.show');
        $response->assertViewHas('recognition');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $recognition = Recognition::factory()->create();

        $response = $this->get(route('recognition.edit', $recognition));

        $response->assertOk();
        $response->assertViewIs('recognition.edit');
        $response->assertViewHas('recognition');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\RecognitionController::class,
            'update',
            \App\Http\Requests\RecognitionUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $recognition = Recognition::factory()->create();
        $user = User::factory()->create();

        $response = $this->put(route('recognition.update', $recognition), [
            'user_id' => $user->id,
        ]);

        $recognition->refresh();

        $response->assertRedirect(route('recognition.index'));
        $response->assertSessionHas('recognition.id', $recognition->id);

        $this->assertEquals($user->id, $recognition->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $recognition = Recognition::factory()->create();

        $response = $this->delete(route('recognition.destroy', $recognition));

        $response->assertRedirect(route('recognition.index'));

        $this->assertDeleted($recognition);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\RecognitionController::class,
            'store',
            \App\Http\Requests\RecognitionStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $recognitionList = $this->faker->word;

        $response = $this->post(route('recognition.store'), [
            'user_id' => $user->id,
            'recognitionList' => $recognitionList,
        ]);

        $recognitions = RecognitionList::query()
            ->where('user_id', $user->id)
            ->where('recognitionList', $recognitionList)
            ->get();
        $this->assertCount(1, $recognitions);
        $recognition = $recognitions->first();

        $response->assertRedirect(route('ResumeBuild.create'));
        $response->assertSessionHas('recognitionList.saved', $recognitionList->saved);
    }
}
