<?php

namespace App\Http\Controllers;

use App\Models\PaymentHistory;
use App\Models\Tenant;
use Illuminate\Http\Request;

class PaymentHistoryController extends Controller
{
    public function index()
    {
        $payments = PaymentHistory::with('tenant')->get();
        // dd($payments);
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        $tenants = Tenant::all();
        return view('payments.create', compact('tenants'));
    }

    public function store(Request $request)
    {
        PaymentHistory::create($request->validate([
            'tenant_id' => 'required|exists:tenants,id',
            'amount' => 'required|numeric',
            'payment_date' => 'required|date',
            'payment_method' => 'required|string',
        ]));
        return redirect()->route('payments.index');
    }
}
