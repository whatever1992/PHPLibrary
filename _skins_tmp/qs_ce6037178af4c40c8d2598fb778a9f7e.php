<html>
<head>
	<title><?php
echo $_obj['title'];
?>
</title>
</head>
<body>

<form action="login.php" method="post">
account: 
<input type="text" name="name" />
<br />
password: 
<input type="password" name="pass" />

<input type="submit" name="action" value="login"/>
</form>

</body>
</html>