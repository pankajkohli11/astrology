<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
  <p class="mb-0">Copyright © 2023. All right reserved.</p>
</footer>
</div>
<!--end wrapper-->

<!-- Bootstrap JS -->
<script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
{{-- <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script> --}}
<script src="{{asset('admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('admin/assets/plugins/chartjs/chart.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-knob/excanvas.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script>
  $(function() {
    $(".knob").knob();
  });
</script>
<script>
	  
  $(document).ready(function() {
  $('#example2').DataTable()
});
  
</script>


{{-- <script>
  $(document).ready(function() {
    var table = $('#example2').DataTable( {
      lengthChange: false,
      buttons: [ 'copy', 'excel', 'pdf', 'print']
    } );
   
    table.buttons().container()
      .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
  } );
</script> --}}
<script src="{{asset('admin/assets/js/index.js')}}"></script>
<!--app JS-->
<script src="{{asset('admin/assets/js/app.js')}}"></script>
</body>


<!-- Mirrored from codervent.com/dashtreme/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2024 10:06:27 GMT -->
</html>