<?php

namespace Tests\Feature\Http\Controllers\Services;

use App\Models\Payment;
use App\Models\ResumeBuild;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Services\PaymentController
 */
class PaymentControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $payments = Payment::factory()->count(3)->create();

        $response = $this->get(route('payment.index'));

        $response->assertOk();
        $response->assertViewIs('payment.index');
        $response->assertViewHas('payments');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('payment.create'));

        $response->assertOk();
        $response->assertViewIs('payment.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $payment = Payment::factory()->create();

        $response = $this->get(route('payment.show', $payment));

        $response->assertOk();
        $response->assertViewIs('payment.show');
        $response->assertViewHas('payment');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $payment = Payment::factory()->create();

        $response = $this->get(route('payment.edit', $payment));

        $response->assertOk();
        $response->assertViewIs('payment.edit');
        $response->assertViewHas('payment');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Services\PaymentController::class,
            'update',
            \App\Http\Requests\Services\PaymentUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $payment = Payment::factory()->create();
        $paymentStatus = $this->faker->boolean;

        $response = $this->put(route('payment.update', $payment), [
            'paymentStatus' => $paymentStatus,
        ]);

        $payment->refresh();

        $response->assertRedirect(route('payment.index'));
        $response->assertSessionHas('payment.id', $payment->id);

        $this->assertEquals($paymentStatus, $payment->paymentStatus);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $payment = Payment::factory()->create();

        $response = $this->delete(route('payment.destroy', $payment));

        $response->assertRedirect(route('payment.index'));

        $this->assertDeleted($payment);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Services\PaymentController::class,
            'store',
            \App\Http\Requests\Services\PaymentStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $user = User::factory()->create();
        $resume_build = ResumeBuild::factory()->create();
        $AmountPaid = $this->faker->numberBetween(-10000, 10000);
        $paymentStatus = $this->faker->boolean;

        $response = $this->post(route('payment.store'), [
            'user_id' => $user->id,
            'resume_build_id' => $resume_build->id,
            'AmountPaid' => $AmountPaid,
            'paymentStatus' => $paymentStatus,
        ]);

        $payments = Payment::query()
            ->where('user_id', $user->id)
            ->where('resume_build_id', $resume_build->id)
            ->where('AmountPaid', $AmountPaid)
            ->where('paymentStatus', $paymentStatus)
            ->get();
        $this->assertCount(1, $payments);
        $payment = $payments->first();

        $response->assertRedirect(route('Payment.index'));
        $response->assertSessionHas('payment.successful', $payment->successful);
    }
}
