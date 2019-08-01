<div class="row">
	<div class="col-md-3">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
	<div class="col-md-9">
		<h4>Upload Your Image</h4>
		<form action="<?php echo site_url("user/upload"); ?>" method="post" enctype="multipart/form-data">
			Select Image <input type="file" name="userfile" />
			<br />
			<Br />
			<input type="submit" class="btn btn-primary" value="Upload">
		</form>
		<p class="text-danger">
			<?php echo $this->session->flashdata("msg"); ?>
		</p>
	</div>
</div>