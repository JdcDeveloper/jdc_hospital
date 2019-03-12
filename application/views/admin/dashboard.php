<!-- Content Wrapper. Contains page content -->
<!--  <div class="content-wrapper"> -->
	<!-- Content Header (Page header) -->
 <!--    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section> -->

     <!--   <p class="bg-success">
        <?php //if($this->session->userdata('user')): ?>

            <?php //echo "Welcome User: " . $this->session->userdata('user'); ?>

        <?php //endif; ?>
      </p>     -->




      <!-- Main content -->
      <section class="content">

      <!--  <h4>admin</h4> -->
       <!--  <h2><p><?php //echo $first_name; ?></p> </h2> -->
       <!-- <h2><p><?php //echo $last_access; ?></p> </h2> -->
       <!-- <h2><p><?php //echo $test; ?></p> </h2> -->
       <h4 class="btn bg-teal btn-lg message"><?php echo lang('welcome'); ?>:<?php echo $first_name; ?>
       <i class="fa fa-times two"></i>
     </h4>

     <div>
      <br>
      <br>
       
     </div>


     <!-- Small boxes (Stat box) -->
     <div class="row">      
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
       <!-- small box -->
       <div class="small-box bg-green">
        <div class="inner">
         <h3 id="totalUsers"><sup style="font-size: 20px">%</sup></h3>

         <p><?php echo lang('users'); ?></p>
       </div>
       <div class="icon">
         <!-- <i class="ion ion-stats-bars"></i> -->
         <i class="ion ion-person-add"></i>

       </div>
       <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
     </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-xs-6">
     <!-- small box -->
     <div class="small-box bg-aqua">
      <div class="inner">
       <h3 id="totalAdmins"></h3>

       <p><?php echo lang('admins'); ?></p>
     </div>
     <div class="icon">
       <i class="icon ion-briefcase"></i>
     </div>
     <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
   </div>
 </div>
 <!-- ./col -->
 <div class="col-lg-3 col-xs-6">
   <!-- small box -->
   <div class="small-box bg-yellow">
    <div class="inner">
     <h3 id="totalTeachers"></h3>

     <p><?php echo lang('teachers'); ?></p>
   </div>
   <div class="icon">
     <i class="icon ion-person-stalker"></i>
   </div>
   <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
 </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-xs-6">
 <!-- small box -->
 <div class="small-box bg-red">
  <div class="inner">
   <h3 id="totalStudents"></h3>

   <p><?php echo lang('students'); ?></p>
 </div>
 <div class="icon">
   <!-- <i class="ion ion-pie-graph"></i> -->
   <i class="icon ion-university"></i>
 </div>
 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
</div>
<!-- /.row -->






<div class="box-header">
  <i class="fa fa-th"></i>

  <h3 class="box-title">Users Graph</h3>

  <div class="box-tools pull-right">
    <button type="button" id="mini" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus one"></i>
    </button>
    <button type="button" id="maxi" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-window-restore"></i>
    </button>
    <button type="button" id="closs" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times two"></i>
    </button>
  </div>
</div>
<div class="box-body border-radius-none">
  <!-- <div class="chart" id="line-chart" style="height: 250px;"></div> -->
  <div id="myfirstchart" class="chart" style="height: 250px;"></div>
</div>

<br>
<br>

<!-- <div id="myfirstchart" style="height: 250px;"></div> -->



<!-- Main content -->
</section>







