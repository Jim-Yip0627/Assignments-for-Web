<?php 
	//scoreTotal是之前自己定义的
	$stid = $_POST["stid"];
	$scoreTotal = $_POST["scoreTotal"];
	//连接数据库
		$con = mysql_connect("localhost","root","root");
		mysql_select_db("exam", $con);
		mysql_query("set names 'utf8'");
	//更新数据库成绩数据
		mysql_query("UPDATE `users` SET  `record` = '{$scoreTotal}' where stid = '{$stid}';");
	//
		$return = array(
				'status'=>1,
				'score'=>$scoreTotal,
				'message'=>'数据插入成功'
			);
		exit(json_encode($return));
?>		