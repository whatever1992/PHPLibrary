<html>
<head>
	<title><?php
echo $_obj['title'];
?>
</title>
</head>
<body>

<form action="mysearchres.php" method="get">
	
	类别<input type="text" name="leibie" /> <br/>
	书名<input type="text" name="name" />	<br/>
	出版社<input type="text" name="press" />	<br/>
	年份<input type="text" name="lyear" /> -- <input type="text" name="hyear" /> <br/>
	作者<input type="text" name="author" /><br/>
	价格<input type="text" name="lprice" /> -- <input type="text" name="hprice" /><br/>

	order <br />
	<input type="radio" name="order" value="leibie" /> 类别
	
	<input type="radio" name="order" value="name" /> 书名
	
	<input type="radio" name="order" value="press" /> 出版社
	
	<input type="radio" name="order" value="year" /> 年份
	
	<input type="radio" name="order" value="author" /> 作者
	
	<input type="radio" name="order" value="price" /> 价格
	<br />
	<input type="submit" value="搜索" />
</form>

</body>
</html>