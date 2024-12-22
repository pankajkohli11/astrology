@extends('admin.layouts.app')
@section('title', 'Add Slider')
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
          <form id="addSlider"  method="POST">
            @csrf
          <div class="card-body">
            <!-- Repeater Content -->
            <div class="item-content">
              <div class="mb-3">
                <label for="inputName1" class="form-label">Name</label>
                <input type="text" class="form-control" id="title" name="title">
                <span class="error text-danger" id="firstNameError"></span>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" id="imageInput" >
                    <!-- Preview Section -->
                  <div class="mt-3">
                    <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 200px; display: none;" />
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1">Description</label>
                    <textarea  name="description" class="form-control" id="description" ></textarea>
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

        $('#addSlider').on('submit', function(e) {
            e.preventDefault();
            alert('ok');
        let isValid = true;
           // Add more client-side validation as needed

        if (!isValid) {
            e.preventDefault(); // Prevent form submission
            return;
        }
        url = "{{ route('slider.store') }}"
        // alert(url);
        $("#addData").text('Saving...')
            $.ajax({
                url: url,
                type: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (response) {
                    // Reset the form
                    $('#addSlider')[0].reset();

                    // Show Toastr success message
                    toastr.success(response.success, 'Success!');
                    $("#imagePreview").hide();
                    // window.location.href = '/admin/all/sliders';
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
        $('#imageInput').on('change', function () {
    const input = this;

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            $('#imagePreview').attr('src', e.target.result).show();
        };

        reader.readAsDataURL(input.files[0]); // Read the image file
    }
});
    });
</script>
@endsection