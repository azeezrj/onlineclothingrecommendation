<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Task</title>
	<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
	<?php

	if (!isset($_GET['p'])) {
		return require_once('./view/home.php');
	}

	switch ($_GET['p']) {
		case 'home':

			require_once('./view/home.php');
			break;

		case 'final':

			require_once('./view/final.php');
			break;

		default:

			require_once('./view/home.php');
			break;
	}

	?>
</body>

</html>