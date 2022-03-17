<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Education;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\EducationController
 */
class EducationControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $education = Education::factory()->count(3)->create();

        $response = $this->get(route('education.index'));

        $response->assertOk();
        $response->assertViewIs('education.index');
        $response->assertViewHas('education');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('education.create'));

        $response->assertOk();
        $response->assertViewIs('education.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $education = Education::factory()->create();

        $response = $this->get(route('education.show', $education));

        $response->assertOk();
        $response->assertViewIs('education.show');
        $response->assertViewHas('education');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $education = Education::factory()->create();

        $response = $this->get(route('education.edit', $education));

        $response->assertOk();
        $response->assertViewIs('education.edit');
        $response->assertViewHas('education');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EducationController::class,
            'update',
            \App\Http\Requests\EducationUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $education = Education::factory()->create();
        $user = User::factory()->create();

        $response = $this->put(route('education.update', $education), [
            'user_id' => $user->id,
        ]);

        $education->refresh();

        $response->assertRedirect(route('education.index'));
        $response->assertSessionHas('education.id', $education->id);

        $this->assertEquals($user->id, $education->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $education = Education::factory()->create();

        $response = $this->delete(route('education.destroy', $education));

        $response->assertRedirect(route('education.index'));

        $this->assertDeleted($education);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EducationController::class,
            'store',
            \App\Http\Requests\EducationStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $degreeObtainWithCourse = $this->faker->word;
        $schoolAttended = $this->faker->word;
        $YearGraduated = $this->faker->date();
        $gradeObtain = $this->faker->word;

        $response = $this->post(route('education.store'), [
            'user_id' => $user->id,
            'degreeObtainWithCourse' => $degreeObtainWithCourse,
            'schoolAttended' => $schoolAttended,
            'YearGraduated' => $YearGraduated,
            'gradeObtain' => $gradeObtain,
        ]);

        $education = Education::query()
            ->where('user_id', $user->id)
            ->where('degreeObtainWithCourse', $degreeObtainWithCourse)
            ->where('schoolAttended', $schoolAttended)
            ->where('YearGraduated', $YearGraduated)
            ->where('gradeObtain', $gradeObtain)
            ->get();
        $this->assertCount(1, $education);
        $education = $education->first();

        $response->assertRedirect(route('ResumeBuild.create'));
        $response->assertSessionHas('education.addedSuccessfully', $education->addedSuccessfully);
    }
}
