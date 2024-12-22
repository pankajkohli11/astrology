<?php

namespace App\Http\Controllers;

use App\Models\PaymentHistory;
use App\Models\Tenant;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function index(Request $request)
    {

        // dd($request->all());
        // Filter payments by payment_date if a date is provided
        // $payments = PaymentHistory::with('tenant')
        //     ->when($request->date, function ($query, $date) {
        //         return $query->whereDate('payment_date', Carbon::parse($date));
        //     })
        //     ->get();
            $payments = DB::table('payment_histories')
            ->join('rooms','payment_histories.room_id','=','rooms.id')
            ->join('tenants', 'payment_histories.tenant_id', '=', 'tenants.id')
            // -    >where('payment_histories.status','=','pending')
            ->when($request->date, function ($query, $date) {
                return $query->whereDate('payment_histories.payment_date', Carbon::parse($date));
            })
            ->when($request->status, function ($query, $status) {
                return $query->where('payment_histories.status', $status);
            })
            ->select(
                'payment_histories.id as payment_id',
               
                'payment_histories.payment_date',
                'payment_histories.status',
                'rooms.price as price', // Assuming 'name' is a column in 'rooms'
                'tenants.name as tenant_name' // Assuming 'name' is a column in 'tenants'
            )
            ->get();

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
        $request->validate([
            'tenant_id' => 'required|exists:tenants,id',
            'amount' => 'required|numeric',
            'payment_date' => 'required|date',
            'month' => 'required|string'
        ]);

        PaymentHistory::create($request->all());

        return redirect()->route('payments.index')->with('success', 'Payment recorded successfully.');
    }

    public function show(PaymentHistory $payment)
    {
        return view('payments.show', compact('payment'));
    }

    public function manualCreatePayment(Request $request)
{
    $tenant = Tenant::findOrFail($request->tenant_id);
    $nextDueDate = Carbon::parse($tenant->last_paid_date)->addMonth();

    if (Carbon::now()->greaterThanOrEqualTo($nextDueDate)) {
        $paymentMonth = $nextDueDate->format('F Y');

        PaymentHistory::create([
            'tenant_id' => $tenant->id,
            'amount' => $this->calculateMonthlyRent($tenant),
            'payment_date' => now(),
            'month' => $paymentMonth,
        ]);

        $tenant->update(['last_paid_date' => now()]);

        return redirect()->back()->with('success', "Payment created for month {$paymentMonth}.");
    }

    return redirect()->back()->with('error', "It's not yet time for the next payment.");
}

public function edit($id)
    {
        $data = PaymentHistory::findOrFail($id);
        // dd($data);
        return response()->json($data);
    }
    public function update(Request $request){
        // dd($request->all());
        $data = $request->validate([
            'status' => 'required|string|max:255',
        ]);
        $payment  = PaymentHistory::findOrFail($request->id);
        $payment ->update($data);
        if ($payment) {
        $nextMonthDate = Carbon::parse($payment->payment_date)->addMonth()->toDateString();
        $newPayment = PaymentHistory::create([
            'tenant_id' => $payment->tenant_id,
            'room_id' => $payment->room_id,
            'payment_date' => $nextMonthDate, // Payment date set to the next month
            'payment_method' => $payment->payment_method,
            'month' => Carbon::parse($nextMonthDate)->format('F'), // Example: "January"
            // 'status' => $request->status, // Update with the new status
        ]);

        return response()->json([
            'message' => 'Payment status updated and new record inserted for the next month successfully.',
            'new_payment' => $newPayment,
        ]);
    } else {
        return response()->json([
            'message' => 'Payment record not found.',
        ], 404);
    }
        // dd($nextMonthDate);
        
        // return response()->json(['success'=>'Status updated successfully...']);
    }

}
