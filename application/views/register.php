<?php $this->load->view('layouts/top-header'); ?>

<?php $this->load->view('layouts/main-header'); ?>

<?php $this->load->view('layouts/top-nav'); ?>


<!-- Main Container Starts -->
	<div id="main-container" class="container">

	<!-- Main Heading Starts -->
		<h2 class="main-heading text-center">
			Register <br />
			<span>Create New Account</span>
		</h2>
	<!-- Main Heading Ends -->
	<!-- Registration Section Starts -->
		<section class="registration-area">
			<div class="row">
				<div class="col-sm-6 col-md-offset-3">
				<!-- Registration Block Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">Personal Information</h3>
						</div>
						<div class="panel-body">
						<!-- Registration Form Starts -->
							<form id="form-general" class="form-horizontal" role="form" method="post" action="<?php echo base_url() ?>auth/register/3">
							<!-- Personal Information Starts -->
								<div class="form-group">
									<label for="inputFname" class="col-sm-3 control-label">First Name :</label>
									<div class="col-sm-9">
										<input type="text" name="first_name" class="form-control validate[required]" id="inputFname" placeholder="First Name" value="<?php echo set_value('first_name'); ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputLname" class="col-sm-3 control-label">Last Name :</label>
									<div class="col-sm-9">
										<input type="text" name="last_name" class="form-control validate[required]" id="inputLname" placeholder="Last Name" value="<?php echo set_value('last_name'); ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail"  class="col-sm-3 control-label">Email :</label>
									<div class="col-sm-9">
										<input type="text" name="email" class="form-control validate[required, ajax[ajaxEmailValidate], custom[email]]" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
									<div class="col-sm-9">
										<input type="text" name="phone" class="form-control validate[required, custom[integer]]" id="inputPhone" placeholder="Phone" value="<?php echo set_value('phone'); ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputAddress1" class="col-sm-3 control-label">Address :</label>
									<div class="col-sm-9">
										<input type="text" name="address" class="form-control validate[required]" id="inputAddress1" placeholder="Address" value="<?php echo set_value('address'); ?>">
									</div>
								</div>
						
							<!-- Delivery Information Ends -->
								<h3 class="panel-heading inner">
									Password
								</h3>
							<!-- Password Area Starts -->
								<div class="form-group">
									<label for="inputPassword" class="col-sm-3 control-label">Password :</label>
									<div class="col-sm-9">
										<input type="password" name="password" class="form-control validate[required, minSize[6]]" id="new_password" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="inputRePassword" class="col-sm-3 control-label">Re-Password :</label>
									<div class="col-sm-9">
										<input type="password" class="form-control validate[required, equals[new_password]]" id="inputRePassword" placeholder="Re-Password">
									</div>
								</div>
							
								
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<button type="submit" name="submit" class="btn btn-black">
											Register
										</button>
									</div>
								</div>
							<!-- Password Area Ends -->
							</form>
						<!-- Registration Form Starts -->
						</div>							
					</div>
				<!-- Registration Block Ends -->
				</div>
				<div class="col-sm-6">
				
				
				</div>
			</div>
		</section>
	<!-- Registration Section Ends -->
	</div>
<!-- Main Container Ends -->


<?php $this->load->view('layouts/footer') ?>