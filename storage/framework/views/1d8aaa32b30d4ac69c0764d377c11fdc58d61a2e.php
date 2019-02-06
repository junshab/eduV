<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="<?php echo e(route('login')); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		<input type="text" name="email" placeholder="email"><br>
		<input type="password" name="password" placeholder="password"><br>
		<button type="submit">Login</button>
	</form>
</body>
</html>