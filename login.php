<!doctype html>
<html>
<head>
<title>Login</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="#">
<pre>
username: <input type="text" name="username" placeholder="Enter your username" required>
pasword:  <input type="password" name="password" placeholder="Enter your password" required>
<input type="submit" value="Submit">
</pre>
</form>
</body>
</html>
<?php
session_start();
if(isset($_POST["username"]))
{
$user =$_POST["username"];
$pwd=$_POST["password"];
if ($user=="admin" && $pwd=="admin")
{
header("Location:welcome.php");
$_SESSION['END_TIME']=time(10);
}
}
?>