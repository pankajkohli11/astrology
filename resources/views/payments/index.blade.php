@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Payment History</h2>

        {{-- <form action="{{ route('payments.index') }}" method="GET" class="mb-3">
            <label for="date">Filter by Date:</label>
            <input type="date" id="date" name="date" class="form-control" value="{{ request('date') }}">
            <button type="submit" class="mt-2 btn btn-primary">Filter</button>
        </form> --}}
        <form action="{{ route('payments.index') }}" method="GET" class="mb-3">
            <div class="row">
                <div class="col-md-4">
                    <label for="date">Filter by Date:</label>
                    <input type="date" id="date" name="date" class="form-control" value="{{ request('date') }}">
                </div>
                <div class="col-md-4">
                    <label for="status">Filter by Status:</label>
                    <select id="status" name="status" class="form-control">
                        <option value="">-- Select Status --</option>
                        <option value="paid" {{ request('status') == 'paid' ? 'selected' : '' }}>Paid</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    </select>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-50 me-2">Filter</button>
                    <a href="{{ route('payments.index') }}" class="btn btn-secondary w-50">Reset</a>
                </div>
            </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tenant Name</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Payment Date</th>
                    <th>Payment</th>

                </tr>
            </thead>
            <tbody>
                @forelse($payments as $key => $payment )
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $payment->tenant_name }}</td>
                        <td>Rs. {{ $payment->price }}</td>
                        <td>{{ $payment->status }}</td>
                        <td>{{ \Carbon\Carbon::parse($payment->payment_date)->format('d-F-Y') }}</td>
                        {{-- <td>{{ $payment->payment_date->format('d-m-Y') }}</td> --}}
                        <td>
                            @if($payment->status === 'pending')
                            <a href="javascript:void(0)" data-id="{{ $payment->payment_id }}" class="editStatus" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a>
                            @else
                            <i class="fa fa-check" style="font-size:24px;color:rgb(0, 255, 106)"></i>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">No payments found for the selected date.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @include('payments.edit')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $(document).on('click', '.editStatus', function() {
            const id = $(this).data('id');

            $.get('/admin/payments/'+id+'/edit', function (data) {
                    $('#data_id').val(data.id);
                    $('.payment_status').val(data.status);
                    let status = data.status;
           
                        
                });
        });
    
        $('#paymentEditForm').on('submit', function (e) { 
         e.preventDefault();

         const formData = new FormData(this);
        // const formData = $('#payment_status').val();
        // formData.append('payment_status', $('#payment_status').val());
         const id = $('#data_id').val();
                
         $(".update").text('Updating...');
        $.ajax({
        // url: '/admin/payments/'+data_id+'/', // Adjust the URL as needed
        url: `/admin/payments/${id}/update`, // Adjust the URL as needed
        type: 'POST',
        contentType: false,
        processData: false,
        data: formData,
    
        success: function(response) {
            $('#myModal').modal('hide');
            // alert(response.success);
            Swal.fire({
            icon: 'success',
            title: 'Payment Update Successfully',
            })
            // Redirect after 3 seconds
            setTimeout(function() {
                window.location.href = '/admin/payments'; // Redirect to home page
            }, 3000);
            $('#paymentEditForm')[0].reset();
                        fetchEmployeeId();
        },
        error: function(xhr) {
            console.error(xhr.responseText);
            // Handle errors (display error messages, etc.)
        }
    });
    });
    
        });
    </script>
@endsection
