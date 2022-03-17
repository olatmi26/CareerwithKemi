<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\PaymentStoreRequest;
use App\Http\Requests\Services\PaymentUpdateRequest;
use App\Models\Services\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $payments = Payment::all();

        return view('payment.index', compact('payments'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('payment.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Services\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Payment $payment)
    {
        return view('payment.show', compact('payment'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Services\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Payment $payment)
    {
        return view('payment.edit', compact('payment'));
    }

    /**
     * @param \App\Http\Requests\Services\PaymentUpdateRequest $request
     * @param \App\Models\Services\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentUpdateRequest $request, Payment $payment)
    {
        $payment->update($request->validated());

        $request->session()->flash('payment.id', $payment->id);

        return redirect()->route('payment.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Services\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payment.index');
    }

    /**
     * @param \App\Http\Requests\Services\PaymentStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentStoreRequest $request)
    {
        $payment = Payment::create($request->validated());

        $request->session()->flash('payment.successful', $payment->successful);

        return redirect()->route('Payment.index');
    }
}
