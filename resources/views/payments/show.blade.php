@extends('admin.layouts.app')

@section('content')
    <h2>Payment Details - #{{ $payment->id }}</h2>
    <ul>
        <li><strong>Tenant:</strong> {{ $payment->tenant->name }}</li>
        <li><strong>Amount:</strong> ${{ $payment->amount }}</li>
        <li><strong>Month:</strong> {{ $payment->month }}</li>
        <li><strong>Payment Date:</strong> {{ $payment->payment_date->format('d-m-Y') }}</li>
    </ul>
    <a href="{{ route('payments.index') }}" class="btn btn-secondary">Back to Payment History</a>
@endsection
