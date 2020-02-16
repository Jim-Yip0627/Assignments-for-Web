<?php
  session_start();
  		if($_SESSION['logined'] != 'yes')
		{
			echo "<script>window.location='Login.html'</script>";
		}
		else{
			echo "<span>欢迎回来！</span>"."<span id='author'>".$_SESSION['userName']."</span>";
		}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Welcome to YipChat!</title>
<style type="text/css">
body{
   margin:0;
   padding:0;
   font-size:12px;
}
#messagewindow {
	height: 250px;
	border: 1px solid;
	padding: 5px;
	overflow: auto;
}
#wrapper {
	margin: auto;
	width: 438px;
}
span{
	color:#666;
	font-size:36px;
}
</style>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
		$(function(){
		    //定义时间点
			timestamp = 0;
			//调用更新信息函数
			updateMsg();
			//表单提交
			$("#chatform").submit(function(){
				$.post("backend.php",{
							message: $("#msg").val(),
							name: $("#author").text(),
							action: "postmsg",
							time: timestamp
						}, function(xml) {
					//清空信息文本框内容
					$("#msg").val("");
					//调用解析xml的函数
					addMessages(xml);
				});
				return false; //阻止表单提交
			});
		});
        //更新信息函数，每隔一定时间去服务端读取数据
		function updateMsg(){
			$.post("backend.php",{ time: timestamp }, function(xml) {
				//移除掉等待提示
				$("#loading").remove();
				//调用解析xml的函数
				addMessages(xml);
			});
			 //每隔4秒，读取一次.
			setTimeout('updateMsg()', 4000);
		}
        //解析xml文档函数，把数据显示到页面上
		function addMessages(xml) {
		    //如果状态为2，则终止
			if($("status",xml).text() == "2") return;
			//更新时间戳
			timestamp = $("time",xml).text();
			$("message",xml).each(function() {
			    var author = $("author",this).text(); //发布者
				var content = $("text",this).text();  //内容
				var htmlcode = "<strong>"+author+"</strong>: "+content+"<br />";
				$("#messagewindow").append( htmlcode ); //添加到文档中
			});
		}
	</script>
	
</head>
<body>

	<div id="wrapper">
		<p id="messagewindow"><span id="loading">加载中...</span></p>
		<form id="chatform" action="#">
			内容： <input type="text" id="msg"  size="50"/>   <br /> 
			<input type="submit" value="发送" /><br />
		</form>
	</div>

</body>
</html>