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
	$ifname=0;
	
	while($row = mysql_fetch_array($result))
	{
		if($row['userName']==$userName && $row['psw']==$psw)
		    $sign=1;
		if($row['userName']==$userName)
		    $ifname=1;
	}
	if($ifname==0)
	{	
		//用户不存在，请先注册
		echo "<?xml version='1.0' encoding='utf-8'?>".
			 "<regMsg>".
			 "用户不存在，请先注册！".
			 "</regMsg>";
	}
	else
	{ 
	     if($sign==1)
	     {
			 //登录成功
			 session_start();
			 $_SESSION['logined'] = 'yes';
			 $_SESSION['userName'] = $userName;
			 echo "<?xml version='1.0' encoding='utf-8'?>".
				  "<regMsg>".
				  "登录成功！跳转中...".
				  "</regMsg>";
		 }
		 else
		 {
			 //登陆失败
			 echo "<?xml version='1.0' encoding='utf-8'?>".
				  "<regMsg>".
				  "登录失败，请重新登录！".
				  "</regMsg>";
		 }
	}
?>