@extends('admin.layouts.app')
@section('title', 'Add Users')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Add User</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form id="addUser"  method="POST">
            @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="firstName" class="form-control" id="name" >
                <span class="error text-danger" id="firstNameError"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="text" name="username" class="form-control" id="username" >
                <span class="error text-danger" id="usernameError"></span>
              </div>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Description
                    {{-- <small>Simple and fast</small> --}}
                  </h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                      <i class="fa fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                  <form>
                    <textarea class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </form>
                </div>
              </div>    
            </div>
            <!-- /.box-body -->
            

            <div class="box-footer">
              <button type="submit" id="addData" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->

        

      </div>
      <!--/.col (left) -->
      
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-12">
          
          
          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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