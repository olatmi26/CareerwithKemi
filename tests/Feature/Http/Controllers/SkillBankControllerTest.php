<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Career;
use App\Models\SkillBank;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SkillBankController
 */
class SkillBankControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $skillBanks = SkillBank::factory()->count(3)->create();

        $response = $this->get(route('skill-bank.index'));

        $response->assertOk();
        $response->assertViewIs('skillBank.index');
        $response->assertViewHas('skillBanks');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('skill-bank.create'));

        $response->assertOk();
        $response->assertViewIs('skillBank.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $skillBank = SkillBank::factory()->create();

        $response = $this->get(route('skill-bank.show', $skillBank));

        $response->assertOk();
        $response->assertViewIs('skillBank.show');
        $response->assertViewHas('skillBank');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $skillBank = SkillBank::factory()->create();

        $response = $this->get(route('skill-bank.edit', $skillBank));

        $response->assertOk();
        $response->assertViewIs('skillBank.edit');
        $response->assertViewHas('skillBank');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SkillBankController::class,
            'update',
            \App\Http\Requests\SkillBankUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $skillBank = SkillBank::factory()->create();

        $response = $this->put(route('skill-bank.update', $skillBank));

        $skillBank->refresh();

        $response->assertRedirect(route('skillBank.index'));
        $response->assertSessionHas('skillBank.id', $skillBank->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $skillBank = SkillBank::factory()->create();

        $response = $this->delete(route('skill-bank.destroy', $skillBank));

        $response->assertRedirect(route('skillBank.index'));

        $this->assertDeleted($skillBank);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SkillBankController::class,
            'store',
            \App\Http\Requests\SkillBankStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $career = Career::factory()->create();
        $skill = $this->faker->word;

        $response = $this->post(route('skill-bank.store'), [
            'career_id' => $career->id,
            'skill' => $skill,
        ]);

        $skillBanks = SkillBank::query()
            ->where('career_id', $career->id)
            ->where('skill', $skill)
            ->get();
        $this->assertCount(1, $skillBanks);
        $skillBank = $skillBanks->first();

        $response->assertRedirect(route('SkillBank.index'));
        $response->assertSessionHas('skillBank.created-successfully', $skillBank->created-successfully);
    }
}
