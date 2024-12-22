@extends('admin.layouts.app')

@section('title', 'Dashboard - HRMS Admin')

@section('content')

<div class="content-wrapper">
			
    <!-- Page Content -->
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Company Settings</h3>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <form id="settingForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$settings->id}}">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Company Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="company_name" value="{{$settings->company_name}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Contact Person</label>
                                <input class="form-control" name="contact_person"value="{{$settings->contact_person}}" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address" value="{{$settings->address}}" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>Country</label>
                                <input class="form-control" name="country" value="{{$settings->country}}" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control" name="city" value="{{$settings->city}}" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>State/Province</label>
                                <input class="form-control" name="state" value="{{$settings->state}}" type="text">
                               
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input class="form-control" name="pin_code" value="{{$settings->pin_code}}" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" value="{{$settings->email}}" type="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input class="form-control" name="phone" value="{{$settings->phone}}" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input class="form-control" name="mobile" value="{{$settings->mobile}}" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Fax</label>
                                <input class="form-control" name="fax" value="{{$settings->fax}}" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Website Url</label>
                                <input class="form-control" name="url" value="{{$settings->url}}" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label class="col-form-label">Favicon</label>
                               <input class="form-control" id="image_add" value="{{$settings->favicon}}" name="favicon" type="file" >
                               <span class="error text-danger" id="pictureError"></span>
                               @if (!empty($settings->favicon))
                               <img id="previewImage2" src="{{asset('logo/img/'.$settings->favicon)}}" alt="User Image" class="img-fluid"  height="80px" width="100px">
                               <div id="preview">
                                <img id="previewImageAdd"  src="" alt="Image Preview" style="display:none; width: 200px; height: auto;">
                            </div>
                               @endif
                            </div>
                         </div>

                         <div class="col-md-6">
                            <div class="form-group">
                               <label class="col-form-label">Logo</label>
                               <input class="form-control"  name="logo" id="image_edit" value="{{$settings->logo}}"  type="file" >
                               <span class="error text-danger" id="pictureError"></span>
                               @if (!empty($settings->logo))
                               <img id="previewImage" src="{{asset('logo/img/'.$settings->logo)}}" alt="User Image" class="img-fluid"  height="80px" width="100px">
                               <div id="preview">
                                <img id="previewImageEdit"  src="" alt="Image Preview" style="display:none; width: 200px; height: auto;">
                                </div>  
                               @endif
                            </div>
                         </div>
                    </div>
                    
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn save_btn" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
    
</div>

@endsection
@section('script')
<script>
   $(document).ready(function() {
    // Set up CSRF token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Image preview for Add
    $(document).on('change', '#image_add', function() {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#previewImageAdd').attr('src', e.target.result).show();
            $('#previewImage2').hide();
        };
        reader.readAsDataURL(this.files[0]);
    });

    // Image preview for Edit
    $(document).on('change', '#image_edit', function() {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#previewImageEdit').attr('src', e.target.result).show();
            $('#previewImage').hide();
        };
        reader.readAsDataURL(this.files[0]);
    });

    // Form submission
    // $(document).on('submit', '#settingForm', function() {
    $('#settingForm').on('submit', function(e) {
        e.preventDefault();
        alert('ok');    
        $(".save_btn").text('Saving...').prop('disabled', true);

        $.ajax({
            url: '{{ route("setting.web") }}',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Inserted Successfully',
                });

                setTimeout(function() {
                    window.location.href = '/admin/web/setting'; // Redirect
                }, 1000);

                $('#settingForm')[0].reset(); // Reset form
                $(".save_btn").text('Save').prop('disabled', false);
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        $(`.error-${key}`).text(value[0]); // Display errors
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'An error occurred!',
                        text: 'Please try again later.',
                    });
                }
                $(".save_btn").text('Save').prop('disabled', false);
            }
        });
    });
});
</script>
@endsection

         
      