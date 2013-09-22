<!DOCTYPE html>
<html>

<head>
	<?php require_once'logic.php'; ?>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type='text/css'>
       body {
           background-color:<?=$color?>
        }
    
    <title> Weather Update </title>


</style>
</head>


<body>

<!--The below code displays time -->

	<h1> <?=$hour?>:<?=$minute?><?=$time_label?> </h1>
	<h2> <?=$day_name?>, <?=$month?> <?=$day_numeric?>, <?=$year?> </h2>


</body>

</html>