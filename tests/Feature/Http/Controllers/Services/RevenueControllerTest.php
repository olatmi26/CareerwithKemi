<?php

namespace Tests\Feature\Http\Controllers\Services;

use App\Models\Revenue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Services\RevenueController
 */
class RevenueControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $revenues = Revenue::factory()->count(3)->create();

        $response = $this->get(route('revenue.index'));

        $response->assertOk();
        $response->assertViewIs('revenue.index');
        $response->assertViewHas('revenues');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('revenue.create'));

        $response->assertOk();
        $response->assertViewIs('revenue.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $revenue = Revenue::factory()->create();

        $response = $this->get(route('revenue.show', $revenue));

        $response->assertOk();
        $response->assertViewIs('revenue.show');
        $response->assertViewHas('revenue');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $revenue = Revenue::factory()->create();

        $response = $this->get(route('revenue.edit', $revenue));

        $response->assertOk();
        $response->assertViewIs('revenue.edit');
        $response->assertViewHas('revenue');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Services\RevenueController::class,
            'update',
            \App\Http\Requests\Services\RevenueUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $revenue = Revenue::factory()->create();

        $response = $this->put(route('revenue.update', $revenue));

        $revenue->refresh();

        $response->assertRedirect(route('revenue.index'));
        $response->assertSessionHas('revenue.id', $revenue->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $revenue = Revenue::factory()->create();

        $response = $this->delete(route('revenue.destroy', $revenue));

        $response->assertRedirect(route('revenue.index'));

        $this->assertDeleted($revenue);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Services\RevenueController::class,
            'store',
            \App\Http\Requests\Services\RevenueStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $Income = $this->faker->numberBetween(-10000, 10000);
        $Expenses = $this->faker->numberBetween(-10000, 10000);

        $response = $this->post(route('revenue.store'), [
            'Income' => $Income,
            'Expenses' => $Expenses,
        ]);

        $revenues = Revenue::query()
            ->where('Income', $Income)
            ->where('Expenses', $Expenses)
            ->get();
        $this->assertCount(1, $revenues);
        $revenue = $revenues->first();

        $response->assertRedirect(route('Revenue.index'));
        $response->assertSessionHas('revenue.created', $revenue->created);
    }
}
