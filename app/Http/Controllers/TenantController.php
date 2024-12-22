<?php
namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\Room;
use App\Models\PaymentHistory;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::with('room')->get();
        return view('tenants.index', compact('tenants'));
    }

    public function create()
    {
        $rooms = Room::all();
        return view('tenants.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:tenants',
            'phone' => 'required',
            'address' => 'required',
            'last_paid_date' => 'required',
            'room_id' => 'nullable|exists:rooms,id'
        ]);
        $room = Room::findOrFail($request->room_id);
        // dd($room->tenants()->count());
        $room->update(['is_available' => 0]);
        if ($room->tenants()->count() >= $room->capacity) {
            return back()->with('error', 'This room is already full.');
        }
        $tenant = Tenant::create($request->all());
        // PaymentHistory::create($request->all());

        PaymentHistory::create([
            'tenant_id' => $tenant->id, // Associate the tenant ID last_paid_date
            'room_id' => $tenant->room_id , // Default amount (update as needed)
            'payment_date' => $tenant->last_paid_date, // Set the payment date (or provide a date field in the request)
            // 'status' => 'Pending' // Default status (update as needed)
        ]);
        return redirect()->route('tenants.index')->with('success', 'Tenant created successfully.');
    }

    public function show(Tenant $tenant)
    {
        return view('tenants.show', compact('tenant'));
    }

    public function edit(Tenant $tenant)
    {
        $rooms = Room::all();
        return view('tenants.edit', compact('tenant', 'rooms'));
    }

    public function update(Request $request, Tenant $tenant)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:tenants,email,' . $tenant->id,
            'phone' => 'required',
            'address' => 'required',
            'room_id' => 'nullable|exists:rooms,id'
        ]);

        $tenant->update($request->all());
        return redirect()->route('tenants.index')->with('success', 'Tenant updated successfully.');
    }

    public function destroy(Tenant $tenant)
    {
        // dd($tenant->room_id);
        $room = Room::findOrFail($tenant->room_id);
        $room->update(['is_available' => 1]);
        $tenant->delete();
        return redirect()->route('tenants.index')->with('success', 'Tenant deleted successfully.');
    }
}
