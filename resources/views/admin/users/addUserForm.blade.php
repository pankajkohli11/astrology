@extends('admin.layouts.app')
@section('title', 'Add Users')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!--start page wrapper -->
<div class="page-wrapper">
  <div class="page-content">


    <!-- Repeater Html Start -->
            <div id="repeater">
                <!-- Repeater Heading -->

                 
      
                <!-- Repeater Items -->
                <div class="items" data-group="test">
        <div class="card">
          <form id="addUser"  method="POST">
            @csrf
          <div class="card-body">
            <!-- Repeater Content -->
            <div class="item-content">
              <div class="mb-3">
                <label for="inputName1" class="form-label">Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
                <span class="error text-danger" id="firstNameError"></span>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="username" >
                    <span class="error text-danger" id="usernameError"></span>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="email" >
                    <span class="error text-danger" id="firstNameError"></span>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="password" >
                    <span class="error text-danger" id="firstNameError"></span>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" >
                    <span class="error text-danger" id="firstNameError"></span>
              </div>
            </div>
            <!-- Repeater Remove Btn -->
            <div class="repeater-remove-btn">
              <button type="submit" class="px-4 btn btn-light remove-btn">
                Save
              </button>
            </div>
          </div>
          </form>
        </div>
                </div>


              


                

            </div>
            <!-- Repeater End -->

  </div>
</div>
<!--end page wrapper -->
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        $('#addUser').on('submit', function(e) {
            e.preventDefault();
            // alert('ok');
        let isValid = true;
        $('.error').text(''); // Clear existing errors

        // Client-side validation example
        if ($('input[name="firstName"]').val() === '') {
            $('#firstNameError').text('First Name is required.');
            isValid = false;
        }

        if ($('input[name="username"]').val() === '') {
            $('#usernameError').text('Username is required.');
            isValid = false;
        }

        

        if (!$('input[name="email"]').val()) {
    isValid = false;
    $('input[name="email"]').siblings('.error').text('Email is required');
} else {
    const email = $('input[name="email"]').val();
    // Updated pattern to allow only .com, .org, or .in
    const emailPattern = /^[^ ]+@[^ ]+\.(com|org|in|be)$/;
    if (!email.match(emailPattern)) {
        isValid = false;
        $('input[name="email"]').siblings('.error').text('Invalid email format. Only .com, .org, or .in are allowed');
    }
}
        
if ($('input[name="password"]').val() === '') {
            $('#passwordError').text('Password is required.');
            isValid = false;
        }
        if ($('input[name="password_confirmation"]').val() === '') {
            $('#confirmationError').text('Confirm Password is required.');
            isValid = false;
        }

        

        // Password validation
const password = $('input[name="password"]').val();
const confirmPassword = $('input[name="password_confirmation"]').val();
if (!password || !confirmPassword) {
isValid = false;
$('input[name="password"], input[name="password_confirmation"]').siblings('.error').text('Passwords is required ');
} else if (password !== confirmPassword) {
isValid = false;
$('input[name="password_confirmation"]').siblings('.error').text('Passwords do not match');
}       // Add more client-side validation as needed

        if (!isValid) {
            e.preventDefault(); // Prevent form submission
            return;
        }
        url = "{{ route('register.store') }}"
        alert(url);
        $("#addData").text('Saving...')
            $.ajax({
                url: url,
                type: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    // alert(response.success);
                     Swal.fire({
                        icon: 'success',
                        title: 'Inserted Successfully',
                     })
                     // Redirect after 3 seconds
                     setTimeout(function() {
                            window.location.href = '/admin/all/users'; // Redirect to home page
                        }, 3000);
                  
                    $('#employeeForm')[0].reset();
                    fetchEmployeeId();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            // alert(value[0]);
                        });
                    }
                }
            });
        });
    });
</script>
@endsection