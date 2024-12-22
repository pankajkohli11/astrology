@extends('admin.layouts.app')
@section('title', 'Edit Slider')
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
          <form id="editSlider"  method="POST">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$slider->id}}">
          <div class="card-body">
            <!-- Repeater Content -->
            <div class="item-content">
              <div class="mb-3">
                <label for="inputName1" class="form-label">Name</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$slider->title}}">
                <span class="error text-danger" id="firstNameError"></span>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" id="imageInput" >
                    <!-- Preview Section -->
                  <div class="mt-3">
                    @if ($slider->image)
                    <img src="{{ asset('storage/sliders/img/' . $slider->image) }}" id="preImage" alt="Image Preview" style="max-width: 200px;" />
                    @else  
                    @endif
                    <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 200px; display: none;" />
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1">Description</label>
                    <textarea  name="description" class="form-control" id="description" >{{$slider->description}}</textarea>
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

    $('#imageInput').on('change', function () {
      $("#preImage").hide(); 
    const input = this;
    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            $('#imagePreview').attr('src', e.target.result).show();
        };

        reader.readAsDataURL(input.files[0]); // Read the image file
    }
});

        $('#editSlider').on('submit', function(e) {
            e.preventDefault();
            // alert('ok');
      
        url = "{{route('update.slider')}}"
        // alert(url);
        $("#editData").text('Saving...')
            $.ajax({
                url: url,
                type: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    
                     // Redirect after 3 seconds
                     toastr.success(response.success, 'Success!');
                  
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