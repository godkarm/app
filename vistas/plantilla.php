<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/recursos/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/recursos/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/recursos/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/recursos/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/recursos/dist/css/adminlte.css">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include "modulos/header.php"?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <?php include "modulos/menu.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<?php 

if(isset($_GET["pagina"])){

      if($_GET["pagina"]=="usuarios"||
        $_GET["pagina"]=="roles"){
        include "paginas/".$_GET["pagina"].".php";
      }

}



?>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "modulos/footer.php"?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="vistas/recursos/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/recursos/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="vistas/recursos/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/recursos/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/recursos/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/recursos/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="vistas/recursos/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vistas/recursos/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="vistas/recursos/plugins/jszip/jszip.min.js"></script>
<script src="vistas/recursos/plugins/pdfmake/pdfmake.min.js"></script>
<script src="vistas/recursos/plugins/pdfmake/vfs_fonts.js"></script>
<script src="vistas/recursos/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vistas/recursos/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vistas/recursos/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/recursos/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="vistas/recursos/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({

   
      "language": {
        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',},
    
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
        ],
      "responsive": true, "lengthChange": false, "autoWidth": false,
      
   
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      
    });
    
  });
</script>
</body>
</html>
