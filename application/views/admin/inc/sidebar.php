<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image" id="img">
        <!-- <img src="<?php //echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
      </div>
      <div class="pull-left info">
        <p><?php echo $first_name; ?></p> 
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span><?php echo lang('dashboard'); ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li> <a href="<?php echo base_url();?>dashboard"><i class="fa fa-circle-o"></i> <?php echo lang('area'); ?></a></li>
             <!--  <li ><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i>
              <span id="users"><!-- <?php //echo lang('users'); ?> --></span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>             
              </span>
            </a>
            <ul class="treeview-menu">
              <li> <a href="<?php echo base_url();?>users"><i class="fa fa-circle-o"></i> <?php echo lang('view'); ?></a></li>
              <li> <a href="<?php echo base_url();?>users/add"><i class="fa fa-circle-o"></i> <?php echo lang('add'); ?></a></li>

            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-calculator"></i>            
              <span id="teachers"><!-- <?php //echo lang('users'); ?> --></span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>             
              </span>
            </a>
            <ul class="treeview-menu">
              <li> <a href="<?php echo base_url();?>teachers"><i class="fa fa-circle-o"></i> <?php echo lang('view'); ?></a></li>
              <li> <a href="<?php echo base_url();?>teachers/add"><i class="fa fa-circle-o"></i> <?php echo lang('add'); ?></a></li>

            </ul>
          </li>
          <li class="treeview">
            <a href="#">
             <i class="fa fa-graduation-cap"></i>
             <span id="students"><!-- <?php //echo lang('users'); ?> --></span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>             
            </span>
          </a>
          <ul class="treeview-menu">
            <li> <a href="<?php echo base_url();?>students"><i class="fa fa-circle-o"></i> <?php echo lang('view'); ?></a></li>
            <li> <a href="<?php echo base_url();?>students/add"><i class="fa fa-circle-o"></i> <?php echo lang('add'); ?></a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-archive"></i>
            <span id="projects"><!-- <?php //echo lang('projects'); ?> --></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> <?php echo lang('view'); ?></a></li>           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">        
            <i class="fa fa-database"></i>
            <span id="statistics"><!-- <?php //echo lang('statistics'); ?> --></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> <?php echo lang('view'); ?></a></li>            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">           
            <i class="fa fa-file"></i>
            <span id="reports"><!-- <?php //echo lang('reports'); ?> --></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> <?php echo lang('view'); ?></a></li>            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">           
            <i class="fa fa-map"></i>
            <span id="maps"><!-- <?php //echo lang('maps'); ?> --></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>             
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> <?php echo lang('view'); ?></a></li>            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">           
           <!--  <i class="fa fa-map"></i> -->
           <i class="fa fa-comment"></i>
           <span id="comments"><!-- <?php //echo lang('comments'); ?> --></span>
           <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>             
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> <?php echo lang('view'); ?></a></li>            
        </ul>
      </li>


    </ul>
  </section>
  <!-- /.sidebar -->
</aside>




<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>dashboard"><i class="fa fa-home"></i> Home</a></li>
    <!-- <li class="active"><?php //echo $site ?></li> -->
  </ol>
</section>






<!-- la otra sidebar -->
