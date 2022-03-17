<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Career;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CareerController
 */
class CareerControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $careers = Career::factory()->count(3)->create();

        $response = $this->get(route('career.index'));

        $response->assertOk();
        $response->assertViewIs('career.index');
        $response->assertViewHas('careers');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('career.create'));

        $response->assertOk();
        $response->assertViewIs('career.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $career = Career::factory()->create();

        $response = $this->get(route('career.show', $career));

        $response->assertOk();
        $response->assertViewIs('career.show');
        $response->assertViewHas('career');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $career = Career::factory()->create();

        $response = $this->get(route('career.edit', $career));

        $response->assertOk();
        $response->assertViewIs('career.edit');
        $response->assertViewHas('career');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CareerController::class,
            'update',
            \App\Http\Requests\CareerUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $career = Career::factory()->create();

        $response = $this->put(route('career.update', $career));

        $career->refresh();

        $response->assertRedirect(route('career.index'));
        $response->assertSessionHas('career.id', $career->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $career = Career::factory()->create();

        $response = $this->delete(route('career.destroy', $career));

        $response->assertRedirect(route('career.index'));

        $this->assertDeleted($career);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CareerController::class,
            'store',
            \App\Http\Requests\CareerStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('career.store'), [
            'name' => $name,
        ]);

        $careers = Career::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $careers);
        $career = $careers->first();

        $response->assertRedirect(route('Career.index'));
        $response->assertSessionHas('career.created-successfully', $career->created-successfully);
    }
}
