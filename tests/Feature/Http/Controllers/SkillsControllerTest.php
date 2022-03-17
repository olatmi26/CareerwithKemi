<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Skill;
use App\Models\SkillBank;
use App\Models\Skills;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SkillsController
 */
class SkillsControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $skills = Skills::factory()->count(3)->create();

        $response = $this->get(route('skill.index'));

        $response->assertOk();
        $response->assertViewIs('skill.index');
        $response->assertViewHas('skills');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('skill.create'));

        $response->assertOk();
        $response->assertViewIs('skill.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $skill = Skills::factory()->create();

        $response = $this->get(route('skill.show', $skill));

        $response->assertOk();
        $response->assertViewIs('skill.show');
        $response->assertViewHas('skill');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $skill = Skills::factory()->create();

        $response = $this->get(route('skill.edit', $skill));

        $response->assertOk();
        $response->assertViewIs('skill.edit');
        $response->assertViewHas('skill');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SkillsController::class,
            'update',
            \App\Http\Requests\SkillsUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $skill = Skills::factory()->create();
        $user = User::factory()->create();

        $response = $this->put(route('skill.update', $skill), [
            'user_id' => $user->id,
        ]);

        $skill->refresh();

        $response->assertRedirect(route('skill.index'));
        $response->assertSessionHas('skill.id', $skill->id);

        $this->assertEquals($user->id, $skill->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $skill = Skills::factory()->create();
        $skill = Skill::factory()->create();

        $response = $this->delete(route('skill.destroy', $skill));

        $response->assertRedirect(route('skill.index'));

        $this->assertDeleted($skill);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SkillsController::class,
            'store',
            \App\Http\Requests\SkillsStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $skill_bank = SkillBank::factory()->create();

        $response = $this->post(route('skill.store'), [
            'user_id' => $user->id,
            'skill_bank_id' => $skill_bank->id,
        ]);

        $skills = Skills::query()
            ->where('user_id', $user->id)
            ->where('skill_bank_id', $skill_bank->id)
            ->get();
        $this->assertCount(1, $skills);
        $skill = $skills->first();

        $response->assertRedirect(route('ResumeBuild.index'));
        $response->assertSessionHas('skills.created-successfully', $skills->created-successfully);
    }
}
