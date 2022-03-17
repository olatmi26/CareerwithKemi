<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\KeyAchievement;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\KeyAchievementController
 */
class KeyAchievementControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $keyAchievements = KeyAchievement::factory()->count(3)->create();

        $response = $this->get(route('key-achievement.index'));

        $response->assertOk();
        $response->assertViewIs('keyAchievement.index');
        $response->assertViewHas('keyAchievements');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('key-achievement.create'));

        $response->assertOk();
        $response->assertViewIs('keyAchievement.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $keyAchievement = KeyAchievement::factory()->create();

        $response = $this->get(route('key-achievement.show', $keyAchievement));

        $response->assertOk();
        $response->assertViewIs('keyAchievement.show');
        $response->assertViewHas('keyAchievement');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $keyAchievement = KeyAchievement::factory()->create();

        $response = $this->get(route('key-achievement.edit', $keyAchievement));

        $response->assertOk();
        $response->assertViewIs('keyAchievement.edit');
        $response->assertViewHas('keyAchievement');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\KeyAchievementController::class,
            'update',
            \App\Http\Requests\KeyAchievementUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $keyAchievement = KeyAchievement::factory()->create();
        $user = User::factory()->create();

        $response = $this->put(route('key-achievement.update', $keyAchievement), [
            'user_id' => $user->id,
        ]);

        $keyAchievement->refresh();

        $response->assertRedirect(route('keyAchievement.index'));
        $response->assertSessionHas('keyAchievement.id', $keyAchievement->id);

        $this->assertEquals($user->id, $keyAchievement->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $keyAchievement = KeyAchievement::factory()->create();

        $response = $this->delete(route('key-achievement.destroy', $keyAchievement));

        $response->assertRedirect(route('keyAchievement.index'));

        $this->assertDeleted($keyAchievement);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\KeyAchievementController::class,
            'store',
            \App\Http\Requests\KeyAchievementStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $achievementList = $this->faker->word;

        $response = $this->post(route('key-achievement.store'), [
            'user_id' => $user->id,
            'achievementList' => $achievementList,
        ]);

        $keyAchievements = KeyAchievement::query()
            ->where('user_id', $user->id)
            ->where('achievementList', $achievementList)
            ->get();
        $this->assertCount(1, $keyAchievements);
        $keyAchievement = $keyAchievements->first();

        $response->assertRedirect(route('ResumeBuild.create'));
        $response->assertSessionHas('keyAchievement', $keyAchievement);
    }
}
