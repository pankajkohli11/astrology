@extends('admin.layouts.app')
@section('title', 'Edit Users')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   

    <!-- Main content -->
     <!-- Main content -->
     <section class="content submit_form">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Edit User</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form id="editUser"  method="PUT">
                @csrf
                <input type="hidden" name="id" id="" value="{{$user->id}}">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="firstName" class="form-control" id="name" value="{{$user->firstName}}" >
                    <span class="error text-danger" id="firstNameError"></span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="username" value="{{$user->username}}">
                    <span class="error text-danger" id="usernameError"></span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}">
                    <span class="error text-danger" id="firstNameError"></span>
                  </div>
                  
                 
                </div>
                <!-- /.box-body -->
  
                <div class="box-footer">
                  <button type="submit" id="editData" class="btn btn-primary">Update</button>
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
      <!-- /.content -->
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

        $('#editUser').on('submit', function(e) {
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


        
    // Add more client-side validation as needed

        if (!isValid) {
            e.preventDefault(); // Prevent form submission
            return;
        }
        url = "{{route('update.user')}}"
        // alert(url);
        $("#editData").text('Saving...')
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
                  
                    $('#editUser')[0].reset();
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