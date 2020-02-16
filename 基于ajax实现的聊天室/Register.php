<?php
	header("Content-Type:text/html;charset=utf-8");
	$con = mysql_connect("localhost","root","root");

	mysql_query("set character set 'utf8'");
	mysql_select_db("yzy", $con);

	//获取用户输入的用户名、用户密码;
	$userName=$_REQUEST['userName'];
	$psw=$_REQUEST['psw'];
	
	
	$result = mysql_query("SELECT * FROM register");
	$sign=0;
	while($row = mysql_fetch_array($result))
	{	
		//判断是否有重复的用户名;
		if($row['userName']==$userName)
		    $sign=1;
	}
	if($sign==1)
	{	
		//注册失败
		echo "<?xml version='1.0' encoding='utf-8'?>".
			 "<regMsg>".
			 "用户名已存在，请更换用户名后重新注册！".
			 "</regMsg>";
	}
	else
	{	
		//注册成功
		mysql_query(
		"INSERT INTO `register` VALUES ("
		."'"
		.$userName      ."','"
		.$psw
		."'"
		.");"
		);

		echo "<?xml version='1.0' encoding='utf-8'?>".
		 "<regMsg>".
		 "注册成功！".
		 "</regMsg>";
	}
?>