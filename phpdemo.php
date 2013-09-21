<!DOCTYPE HTML>
<html>

<head>

</head>

<body>


<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
	<label for="name"> Name: </label> <input type="text" id="name" name="name"><br>
	<label for="email"> Email: </label> <input type="text" id="email" name="email"><br>
	<label for="website"> Address: </label> <input type="text" id="website" name="website"><br>

	<label> Gender: </label> 
	<input type="radio" name="gender" value="female"> Female
	<input type="radio" name="gender" value="male"> Male <br>

	<input type="submit">
</form>
</body>

</html>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>