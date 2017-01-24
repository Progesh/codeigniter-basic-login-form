<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
	<?php echo form_open('login/check_login'); ?>
		<?php if(isset($msg)){ ?>
		<div class="alert alert-warning">
  		<?php echo $msg; ?>
		</div>
		<?php } ?>
	  <div class="form-group">
	    <label for="username">User Name:</label>
	    <input type="username" class="form-control" name="username" id="username" required>
	  </div>
	  <div class="form-group">
	    <label for="password">Password:</label>
	    <input type="password" class="form-control" name="password" id="password" required>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	<?php echo form_close();?>
</div>
</body>

</html>