<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\CareerFocu;
use App\Models\CareerFocus;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CareerFocusController
 */
class CareerFocusControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $careerFocus = CareerFocus::factory()->count(3)->create();

        $response = $this->get(route('career-focu.index'));

        $response->assertOk();
        $response->assertViewIs('careerFocu.index');
        $response->assertViewHas('careerFocus');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('career-focu.create'));

        $response->assertOk();
        $response->assertViewIs('careerFocu.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $careerFocu = CareerFocus::factory()->create();

        $response = $this->get(route('career-focu.show', $careerFocu));

        $response->assertOk();
        $response->assertViewIs('careerFocu.show');
        $response->assertViewHas('careerFocu');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $careerFocu = CareerFocus::factory()->create();

        $response = $this->get(route('career-focu.edit', $careerFocu));

        $response->assertOk();
        $response->assertViewIs('careerFocu.edit');
        $response->assertViewHas('careerFocu');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CareerFocusController::class,
            'update',
            \App\Http\Requests\CareerFocusUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $careerFocu = CareerFocus::factory()->create();
        $user = User::factory()->create();

        $response = $this->put(route('career-focu.update', $careerFocu), [
            'user_id' => $user->id,
        ]);

        $careerFocu->refresh();

        $response->assertRedirect(route('careerFocu.index'));
        $response->assertSessionHas('careerFocu.id', $careerFocu->id);

        $this->assertEquals($user->id, $careerFocu->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $careerFocu = CareerFocus::factory()->create();
        $careerFocu = CareerFocu::factory()->create();

        $response = $this->delete(route('career-focu.destroy', $careerFocu));

        $response->assertRedirect(route('careerFocu.index'));

        $this->assertDeleted($careerFocu);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CareerFocusController::class,
            'store',
            \App\Http\Requests\CareerFocusStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $careerKeyArea = $this->faker->word;

        $response = $this->post(route('career-focu.store'), [
            'user_id' => $user->id,
            'careerKeyArea' => $careerKeyArea,
        ]);

        $careerFocus = CareerFocus::query()
            ->where('user_id', $user->id)
            ->where('careerKeyArea', $careerKeyArea)
            ->get();
        $this->assertCount(1, $careerFocus);
        $careerFocu = $careerFocus->first();

        $response->assertRedirect(route('ResumeBuild.create'));
        $response->assertSessionHas('careerFocus.added', $careerFocus->added);
    }
}
