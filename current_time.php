<!DOCTYPE html>
<html>

<head>
	<?php require_once'logic.php'; ?>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type='text/css'>
       body {
           background-color:<?=$color?>
        }

</style>
</head>


<body>
	 
	<h1> <?=$hour?>:<?=$minute?><?=$time_label?> </h1>
	<h2> <?=$day_name?>, <?=$month?> <?=$day_numeric?>, <?=$year?> </h2>


<?=$time?>

</body>

</html>