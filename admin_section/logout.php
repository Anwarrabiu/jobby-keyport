<?php session_start();
ob_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
         $_SESSION = [];
    session_destroy();
    header("Location: admnlogin.php");
    exit;

	?>

</body>
</html>