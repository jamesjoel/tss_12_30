<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>File Upload Example</h1>
<form action="<?php echo site_url("file_upload/photo_upload") ?>" method="post" enctype="multipart/form-data">
	Select File <input type="file" name="image"/>
	<br />
	<br />
	<input type="submit" value="Upload">
	<?php echo $this->session->flashdata("msg"); ?>
</form>
</body>
</html>