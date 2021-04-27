<?php

namespace App\Http\Controllers;

use App\Models\{Month, Payment, Spp, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isAdmin() || Auth::user()->isPetugas()) {
            $payments = Payment::latest()->paginate(5);
        } else {
            $payments = Auth::user()->payments()->latest()->paginate(5);
        }
        
        return view('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('payments.create', [
            'spps' => Spp::get(),
            'months'=> Month::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spps = Spp::find($request->spp_id);
        $total = count(request('months')) * $spps->nominal;
        
        $payments = Payment::create([
            'user_id'   => auth()->user()->id,
            'spp_id'    => $request->spp_id,
            'status'    => $request->status,
            'total'     => $total, 
        ]);
        
        $payments->months()->sync(request('months'));

        return redirect('payments');
    }

    public function create2(Payment $payment, $id)
    {
        $payments = Payment::find($id);
        
        return view('payments.create-2', compact('payments'));
    }

    public function store2(Request $request, $id)
    {   
        $payments = Payment::find($id);
        $payments->bukti = $request->file('bukti')->store('images/bukti');
        $payments->save();

        return redirect('payments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        $payment = Payment::find($payment->id);

        return view('payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        $payment = Payment::find($payment->id);

        return view('payments.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $payment = Payment::find($payment->id);
        $payment->admin_id = auth()->user()->id;
        $payment->user_id = $payment->user_id;
        $payment->spp_id = $payment->spp_id;
        $payment->total = $payment->total;
        $payment->status = $request->status;
        
        if ($request->hasFile('bukti')) {
            $payment->bukti = $payment->bukti;
        }

        $payment->save();

        return redirect()->route('payments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment = Payment::find($payment->id);
        Storage::delete($payment->bukti);
        $payment->delete();

        return redirect()->back();
    }
}
