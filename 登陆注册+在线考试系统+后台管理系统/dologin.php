<?php

		header("Content-type: text/html; charset=utf-8");

		$stid			=$_REQUEST['si'];
		$password		=$_REQUEST['ps'];

		$con = mysql_connect("localhost","root","root");
		// if ($con)
		// 	echo "debug*** mysql数据库服务器连接成功！***debug<br/>";
		// else
		// 	echo "debug*** mysql数据库服务器连接失败！***debug<br/>";
		mysql_select_db("exam", $con);
		mysql_query("set names 'utf8'");

		
		$result = mysql_query("SELECT * FROM users");
		$sign = 0;
		$ifname = 0;
		$name = "";
		while($row = mysql_fetch_array($result))
		{
			if($row['stid']==$stid && $row['password']==$password)
				$sign=1;
			if($row['stid']==$stid)
				$ifname=1;
			$name = $row['name'];
		}
		if($ifname==0)
		{
			echo "<script>alert('用户不存在，请先注册！')</script>";
			echo "<meta http-equiv='Refresh' content='1;URL=signup.html'>"; 
		}
		else
		{
			if($sign==1)
			{
				echo "<script>alert('登录成功！')</script>";
				session_start();
				$_SESSION['user'] = 'lamp';
				echo "<meta http-equiv='Refresh' content='1;URL=exam.php?stid=".$stid."&name=".$name."'>"; 
			}	
			else
			{
				echo "<script>alert('登录失败，请重新登录！')</script>";
				echo "<meta http-equiv='Refresh' content='1;URL=login.html'>"; 
			}	
		}
	
	?>