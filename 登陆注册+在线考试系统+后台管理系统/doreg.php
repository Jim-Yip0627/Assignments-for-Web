
	<?php
		header("Content-type: text/html; charset=utf-8");

		$name			=$_REQUEST['n'];
		$stid			=$_REQUEST['si'];
		$password		=$_REQUEST['ps'];


		$con = mysql_connect("localhost","root","root");

		mysql_select_db("exam", $con);
		mysql_query("set names 'utf8'");

		
		$result = mysql_query("SELECT * FROM users");
		$sign=0;
		while($row = mysql_fetch_array($result))
		{
			if($row['stid']==$stid)
				$sign=1;
		}
		if($sign==1)
		{
			echo "<script>alert('该用户已经存在！请重新注册。')</script>";
			echo "<meta http-equiv='Refresh' content='1;URL=signup.html'>";
		}	
		else
		{
			mysql_query("INSERT INTO `users` (name, stid, password, record)  VALUES ('{$name}', '{$stid}', '{$password}', '0');");
			echo "<script>alert('注册成功！')</script>";
			echo "<meta http-equiv='Refresh' content='1;URL=login.html'>";
		}	
	?>