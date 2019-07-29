<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 style="text-align: center;">User Registration</h3><hr>
				<div class="row">
					<div class="col-md-8 offset-md-2">

		              <?php

                          //echo validation_errors();
						?>  
						
						<form  action="" method="post">

							<div class="card shadow">
								<div class="card-header">
									<h2 style="text-align: center;">Signup</h2>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label>Full name</label>

										<input type="text" name="full_name" placeholder="Full name" class="form-control" value="<?php echo set_value("full_name")?>">
										 <small class="text-danger"><?php echo form_error("full_name");?></small>
										 
									</div>
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="username"  placeholder="Username" class="form-control" value="<?php echo set_value("username")?>">
										<small class="text-danger"><?php echo form_error("username");?></small>
								
									</div>
							
									<div class="form-group">
										<label>Password</label>

										<input type="Password" name="pass" placeholder="Password" class="form-control" value="<?php echo set_value("pass")?>">
										<small class="text-danger"><?php echo form_error("pass")?></small>

										

										
									</div>
										<div class="form-group">
						               <label>Re-Password</label>

						               <input name="re_pass" type="password" placeholder="Re-Password" class="form-control" value="<?php echo set_value("re_pass")?>">
						               <small class="text-danger"><?php echo form_error("re_pass")?></small>

						               
						          
					                   </div>
									   <div class="form-group">
										<label>Contact</label>

										<input type="text" name="contact"  placeholder="Contact" class="form-control" value="<?php echo set_value("contact")?>">
										<small class="text-danger"><?php echo form_error("contact")?></small>

		

											
								</div>
									
									<div class="form-group">

										<label>Gender</label><br>
										Male <input value="male" type="radio" name="gender"<?php echo set_radio("gender" ,"male")?>  > Female <input value="female" type="radio"  name="gender" <?php echo set_radio("gender" ,"female")?>>
										<small class="text-danger"><?php echo form_error("gender")?></small>
										
									</div>
									<div class="form-group">
										<label>City</label>
										<select class="form-control" name="city" >
											<option value="">Select</option>
											<option<?php echo set_select("city" , "Indore")?> value="Indore">Indore</option>
											<option <?php echo set_select("city" , "Pune")?> value="Pune">Pune</option>
											<option <?php echo set_select("city","Delhi")?> value="Delhi">Delhi</option>
											<option <?php echo set_select("city","Dewas")?> value="Dewas">Dewas</option>
										</select>
										<small class="text-danger"><?php echo form_error("city")?></small>
										
									</div>
									<div class="form-group">
										<label>Address</label>
										<textarea name="add" placeholder="Address" class="form-control" ><?php echo set_value("add")?></textarea >
										<small class="text-danger"><?php echo form_error("add")?></small>
                                         </div>
	
									<div class="form-group">
										<input type="submit" value="Signup" class="btn btn-primary">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>