
<!-- Main content -->
<section class="content" ng-controller="users">


	<div class="row ">

	<!-- <div class="page-header">

		<p class="bg-danger" id="msgProjectDeleted">

			<?php //if($this->session->flashdata('projectsDeleted')): ?>

				<?php //echo $this->session->flashdata('projectsDeleted'); ?>

			<?php //endif; ?>

		</p>

		<p class="bg-warning" id="msgProjectRejected">

			<?php //if($this->session->flashdata('projectRejected')): ?>

				<?php //echo $this->session->flashdata('projectRejected'); ?>

			<?php //endif; ?>

		</p>

		<p class="bg-primary" id="msgProjectAproved">

			<?php //if($this->session->flashdata('projectAproved')): ?>

				<?php //echo $this->session->flashdata('projectAproved'); ?>

			<?php //endif; ?>

		</p>
		
		
		
		<h1>Projects <small>JDC Customers</small></h1>
	</div> -->

	<div>			

		<a id="pdf"><span class="btn-danger  btn-xs glyphicon glyphicon-file">PDF</span></a>

		<a id="excel"><span class="btn-warning  btn-xs glyphicon glyphicon-download-alt">XLS</span></a>

	</div>

	<br>


	<table id="tableUsers"class="table table-responsive table-hover table-striped" >    
		
		<thead>
			<tr>
				<th >#</th>
				<th >Img</th>
				<th >First_name</th>
				<th >Last_name</th>
				<th >Country</th>
				<th >State</th>
				<th >Role</th>
				<th >Created_date</th>
				<th >Actions</th>					
			</tr>
		</thead>

		<tbody>
			<tr ng-repeat="x in users">
				<td>{{ x.id_user }}</td>
				<td>{{ x.img }}</td>
				<td>{{ x.first_name }}</td>
				<td>{{ x.last_name }}</td>
				<td>{{ x.country }}</td>
				<td>{{ x.state }}</td>
				<td>{{ x.role }}</td>
				<td>{{ x.created_date }}</td>
				<td><a class="approved"  ><span class="btn-success btn-xs glyphicon glyphicon-pencil" data-toggle="Edit" title="Edit" ng-click="edit()"></span></a>
					<a id="delete"   ><span class="btn-danger btn-xs glyphicon glyphicon-trash" data-toggle="Delete" title="Delete" ng-click="delete()"></span></a></td>
				</tr>			
			</tbody>

		</table>



		<br>
		<br>
		<br>
	</div>


	<!-- end content -->
</section>


