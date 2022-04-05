<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Referee;
use App\Models\SaveRef;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\RefereeController
 */
class RefereeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $referees = Referee::factory()->count(3)->create();

        $response = $this->get(route('referee.index'));

        $response->assertOk();
        $response->assertViewIs('referee.index');
        $response->assertViewHas('referees');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('referee.create'));

        $response->assertOk();
        $response->assertViewIs('referee.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $referee = Referee::factory()->create();

        $response = $this->get(route('referee.show', $referee));

        $response->assertOk();
        $response->assertViewIs('referee.show');
        $response->assertViewHas('referee');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $referee = Referee::factory()->create();

        $response = $this->get(route('referee.edit', $referee));

        $response->assertOk();
        $response->assertViewIs('referee.edit');
        $response->assertViewHas('referee');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\RefereeController::class,
            'update',
            \App\Http\Requests\RefereeUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $referee = Referee::factory()->create();
        $onRequest = $this->faker->boolean;

        $response = $this->put(route('referee.update', $referee), [
            'onRequest' => $onRequest,
        ]);

        $referee->refresh();

        $response->assertRedirect(route('referee.index'));
        $response->assertSessionHas('referee.id', $referee->id);

        $this->assertEquals($onRequest, $referee->onRequest);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $referee = Referee::factory()->create();

        $response = $this->delete(route('referee.destroy', $referee));

        $response->assertRedirect(route('referee.index'));

        $this->assertDeleted($referee);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\RefereeController::class,
            'store',
            \App\Http\Requests\RefereeStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $onRequest = $this->faker->boolean;

        $response = $this->post(route('referee.store'), [
            'user_id' => $user->id,
            'onRequest' => $onRequest,
        ]);

        $referees = SaveRef::query()
            ->where('user_id', $user->id)
            ->where('onRequest', $onRequest)
            ->get();
        $this->assertCount(1, $referees);
        $referee = $referees->first();

        $response->assertRedirect(route('ResumeBuild.create'));
        $response->assertSessionHas('saveRef.saved', $saveRef->saved);
    }
}
