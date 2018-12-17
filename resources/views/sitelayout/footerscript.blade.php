 <!-- jQuery 2.1.4 -->
   <script src="{{URL::asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
     <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
     <!-- Select2 -->
    <script src="{{URL::asset('plugins/select2/select2.full.min.js')}}"></script>
    <!-- InputMask -->
       <script src="{{URL::asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
       <script src="{{URL::asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
       <script src="{{URL::asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{URL::asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
     <!-- FastClick -->
    <script src="{{URL::asset('plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{URL::asset('dist/js/app.min.js')}}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{URL::asset('dist/js/demo.js')}}"></script>
      <!-- Bootstrap WYSIHTML5 -->
    <script src="{{URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- page script -->
  <script type="text/javascript">

      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
           //Initialize Select2 Elements
        $(".select2").select2();
         //Add text editor
        $("#compose-textarea").wysihtml5();

        //Datemask dd/mm/yyyy
               $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});



      });
    </script>

  </body>
</html>
