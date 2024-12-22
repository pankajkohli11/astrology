@extends('admin.layouts.app')

@section('content')
    <h2>Record Payment</h2>
    <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tenant_id" class="form-label">Tenant</label>
            <select id="tenant_id" name="tenant_id" class="form-control" required>
                <option value="">Select Tenant</option>
                @foreach($tenants as $tenant)
                    <option value="{{ $tenant->id }}">{{ $tenant->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount" required>
        </div>
        <div class="mb-3">
            <label for="payment_date" class="form-label">Payment Date</label>
            <input type="date" class="form-control" id="payment_date" name="payment_date" required>
        </div>
        <div class="mb-3">
            <label for="month" class="form-label">Month</label>
            <input type="text" class="form-control" id="month" name="month" placeholder="e.g., January 2024" required>
        </div>
        <button type="submit" class="btn btn-primary">Record Payment</button>
    </form>
@endsection
