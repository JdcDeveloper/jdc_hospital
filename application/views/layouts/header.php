<!DOCTYPE html>
<html ng-app="Jdc">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title><?php echo $title ?></title>
  <!-- cargar jquery al principio y scripts principales -->

  <!-- jQuery 3 -->
  <script src="<?php echo base_url();?>vendor/almasaeed2010/adminlte/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- angular js -->
  <!-- <script src="<?php //echo base_url();?>vendor/components/angular.js/angular.min.js"></script> -->

  <!-- angular js -->
  <script src="<?php echo base_url();?>assets/lib/js/angular.min.js"></script>



<!--   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">  
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script> -->





  <!-- Datatable js -->
   <script src="<?php echo base_url();?>assets/lib/js/jquery.dataTables.min.js"></script>
 
  
  <!-- sweet alert2 -->
  <!--  <script src="<?php //echo base_url();?>vendor/almasaeed2010/adminlte/lib/js/sweetalert2.min.js"></script>  -->

  <!--  <script src="<?php //echo base_url();?>vendor/almasaeed2010/adminlte/lib/js/sweetalert2.all.min.js"></script>  -->


  <!-- datepicker -->
  <script src="<?php echo base_url();?>vendor/almasaeed2010/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url();?>vendor/almasaeed2010/adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>


  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url();?>vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


  <!-- me funciono con estas cdn el sweet alert -->
 <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/> -->



  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/almasaeed2010/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/almasaeed2010/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css"> 
  
  <!-- probando estilos -->
  <!--  <link rel="stylesheet" href="<?php //echo base_url();?>vendor/almasaeed2010/adminlte/dist/css/AdminLTE.css"> -->


  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo base_url();?>vendor/almasaeed2010/adminlte/dist/css/skins/_all-skins.min.css">
   <!--   probando las skins -->
   <!-- <link rel="stylesheet" href="<?php //echo base_url();?>vendor/almasaeed2010/adminlte/dist/css/skins/_all-skins.css"> -->


   <!-- Morris chart -->
   <!-- <link rel="stylesheet" href="<?php //echo base_url();?>vendor/almasaeed2010/adminlte/bower_components/morris.js/morris.css"> -->
   <!-- jvectormap -->
   <link rel="stylesheet" href="<?php echo base_url();?>vendor/almasaeed2010/adminlte/bower_components/jvectormap/jquery-jvectormap.css">
   <!-- Date Picker -->
   <link rel="stylesheet" href="<?php echo base_url();?>vendor/almasaeed2010/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="<?php echo base_url();?>vendor/almasaeed2010/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="<?php echo base_url();?>vendor/almasaeed2010/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


   <!--  agregando estilos del login -->

   <!-- iCheck -->
   <link rel="stylesheet" href="<?php echo base_url();?>vendor/almasaeed2010/adminlte/plugins/iCheck/square/blue.css">



   <!-- Table styles -->

   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/css/jquery.dataTables.min.css"> 





   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



<!--  variables para poder usarlas en los js -->
<script type="text/javascript">

 var BASE_URL = "<?php echo base_url(); ?>";


</script>


<script type="text/javascript">


 var created_date = "<?php echo $created_date ?>";



</script>





</head>


<body class="hold-transition skin-blue sidebar-mini" >
  <div class="wrapper">


    <div class="content-wrapper">     


     <!-- ************aqui es el color del contenido********************* -->

     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">


       <!--  fin admin menu y sidebar --> 

       <!-- Main content -->
       <section class="content">










