
<!-- Main content -->
<section class="content">


	<div class="row page-header">	
		<h2 class="fa fa-users ">Add</h2>

	</div>



	<div class="row ">

		<?php echo form_open('users/update'); ?>	


		<div class="form-group">
			<input type="hidden" name="id_user" value="<?php echo $data->id_user?>">

			<label>First Name:</label>

			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user"></i>
				</div>
				<input type="text" name="first_name" class="form-control" value="<?php echo $data->first_name?> " >

				<!-- <div class="text-danger"><?php //echo form_error('first_name');  ?></div> -->

			</div>
			<!-- /.input group -->
		</div>

		<div class="form-group">
			<label>Last Name:</label>

			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user"></i>
				</div>
				<input type="text" name="last_name" class="form-control" value="<?php echo $data->last_name?>" >
				<!-- <div class="text-danger"><?php //echo form_error('first_name');  ?></div> -->

			</div>
			<!-- /.input group -->
		</div>		


		<div class="form-group">
			<label>Country:</label>

			<div class="input-group">
				<div class="input-group-addon">					
					<i class="fa fa-map"></i>
				</div>

				<select class="form-control" name="country" id="country">
					<option value="0">Select Country</option>				
				</select>


			</div>

		</div>

		<div class="form-group">
			<label>State:</label>

			<div class="input-group">
				<div class="input-group-addon">					
					<i class="fa fa-map-signs"></i>
				</div>

				<select class="form-control" name="state" id="state">
					<option value="0">Select State</option>				
				</select>


			</div>

		</div>


		<div class="form-group">
			<label>Role:</label>

			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-eye"></i>
				</div>

				<select class="form-control" name="role" id="role">
					<option value="0">Select Role</option>				
				</select>


			</div>

		</div>




		<div class="form-group">
			<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Registrar</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>
		</div>

		<div class="form-group">
			<a href="<?php echo base_url();?>users/view"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Back</span></a>
		</div>	

		<?php echo form_close(); ?>	


	</div>


	<!-- Main content -->
</section>
