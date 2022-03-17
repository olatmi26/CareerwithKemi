<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\MediaHandle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\MediaHandleController
 */
class MediaHandleControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $mediaHandles = MediaHandle::factory()->count(3)->create();

        $response = $this->get(route('media-handle.index'));

        $response->assertOk();
        $response->assertViewIs('mediaHandle.index');
        $response->assertViewHas('mediaHandles');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('media-handle.create'));

        $response->assertOk();
        $response->assertViewIs('mediaHandle.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $mediaHandle = MediaHandle::factory()->create();

        $response = $this->get(route('media-handle.show', $mediaHandle));

        $response->assertOk();
        $response->assertViewIs('mediaHandle.show');
        $response->assertViewHas('mediaHandle');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $mediaHandle = MediaHandle::factory()->create();

        $response = $this->get(route('media-handle.edit', $mediaHandle));

        $response->assertOk();
        $response->assertViewIs('mediaHandle.edit');
        $response->assertViewHas('mediaHandle');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\MediaHandleController::class,
            'update',
            \App\Http\Requests\MediaHandleUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $mediaHandle = MediaHandle::factory()->create();

        $response = $this->put(route('media-handle.update', $mediaHandle));

        $mediaHandle->refresh();

        $response->assertRedirect(route('mediaHandle.index'));
        $response->assertSessionHas('mediaHandle.id', $mediaHandle->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $mediaHandle = MediaHandle::factory()->create();

        $response = $this->delete(route('media-handle.destroy', $mediaHandle));

        $response->assertRedirect(route('mediaHandle.index'));

        $this->assertDeleted($mediaHandle);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\MediaHandleController::class,
            'store',
            \App\Http\Requests\MediaHandleStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('media-handle.store'), [
            'name' => $name,
        ]);

        $mediaHandles = MediaHandle::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $mediaHandles);
        $mediaHandle = $mediaHandles->first();

        $response->assertRedirect(route('MediaHandle.index'));
        $response->assertSessionHas('mediaHandle.addedSuccessfully', $mediaHandle->addedSuccessfully);
    }
}
