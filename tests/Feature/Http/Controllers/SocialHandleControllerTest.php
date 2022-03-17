<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\MediaHandle;
use App\Models\SocialHandle;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SocialHandleController
 */
class SocialHandleControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $socialHandles = SocialHandle::factory()->count(3)->create();

        $response = $this->get(route('social-handle.index'));

        $response->assertOk();
        $response->assertViewIs('socialHandle.index');
        $response->assertViewHas('socialHandles');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('social-handle.create'));

        $response->assertOk();
        $response->assertViewIs('socialHandle.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $socialHandle = SocialHandle::factory()->create();

        $response = $this->get(route('social-handle.show', $socialHandle));

        $response->assertOk();
        $response->assertViewIs('socialHandle.show');
        $response->assertViewHas('socialHandle');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $socialHandle = SocialHandle::factory()->create();

        $response = $this->get(route('social-handle.edit', $socialHandle));

        $response->assertOk();
        $response->assertViewIs('socialHandle.edit');
        $response->assertViewHas('socialHandle');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SocialHandleController::class,
            'update',
            \App\Http\Requests\SocialHandleUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $socialHandle = SocialHandle::factory()->create();
        $user = User::factory()->create();
        $media_handle = MediaHandle::factory()->create();

        $response = $this->put(route('social-handle.update', $socialHandle), [
            'user_id' => $user->id,
            'media_handle_id' => $media_handle->id,
        ]);

        $socialHandle->refresh();

        $response->assertRedirect(route('socialHandle.index'));
        $response->assertSessionHas('socialHandle.id', $socialHandle->id);

        $this->assertEquals($user->id, $socialHandle->user_id);
        $this->assertEquals($media_handle->id, $socialHandle->media_handle_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $socialHandle = SocialHandle::factory()->create();

        $response = $this->delete(route('social-handle.destroy', $socialHandle));

        $response->assertRedirect(route('socialHandle.index'));

        $this->assertDeleted($socialHandle);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SocialHandleController::class,
            'store',
            \App\Http\Requests\SocialHandleStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $media_handle = MediaHandle::factory()->create();
        $socialLinkUrl = $this->faker->word;

        $response = $this->post(route('social-handle.store'), [
            'user_id' => $user->id,
            'media_handle_id' => $media_handle->id,
            'socialLinkUrl' => $socialLinkUrl,
        ]);

        $socialHandles = SocialHandle::query()
            ->where('user_id', $user->id)
            ->where('media_handle_id', $media_handle->id)
            ->where('socialLinkUrl', $socialLinkUrl)
            ->get();
        $this->assertCount(1, $socialHandles);
        $socialHandle = $socialHandles->first();

        $response->assertRedirect(route('ResumeBuild.create'));
        $response->assertSessionHas('socialHandle.addedSuccessfully', $socialHandle->addedSuccessfully);
    }
}
