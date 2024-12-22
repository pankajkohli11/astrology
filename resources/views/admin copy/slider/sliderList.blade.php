@extends('admin.layouts.app')

@section('title', 'All Slider List')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Slider Tables
        {{-- <small>advanced tables</small> --}}
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
               @foreach ($slider as $val )
               <tr>
                <td>{{$val->title}}</td>
                <td>{{$val->image}}</td>
                <td>{{$val->description}}</td>
                <td>{{$val->status}}</td>
                <td>
                    <a href="javascript:void(0)" class="viewBtn"  ><i class="fa fa-eye"></i></a>
                    <a href="{{route('edit.user',encrypt($val->id))}}"  ><i class="fa fa-edit"></i></a>
                    <a href="javascript:void(0)" class="deleteUser" data-id="{{$val->id}}" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
               @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        // Handle navigation click
        $('.deleteUser').on('click', function (e) {
    const id = $(this).data('id');
    alert(id);
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '/admin/user/delete/' + id,
                method: 'DELETE',
                success: function(response) {
                    Swal.fire(
                        'Deleted!',
                        response.success,
                        'success'
                    ).then(() => {
                        // Redirect after a successful deletion
                        window.location.href = '/admin/all/users';
                    });
                    // window.location.href = '/admin/employees';
                    // Remove the employee row from the table
                    // $('#employee-' + goalType).remove();
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'An unexpected error occurred.',
                    });
                }
            });
        }
    });
});
    });
</script>
@endsection
@section('script')
<script>
    
    

</script>
@endsection