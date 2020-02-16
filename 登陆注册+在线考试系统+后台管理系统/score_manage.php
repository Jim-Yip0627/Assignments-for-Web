<?php
	header("Content-type: text/html; charset=utf-8");
	$con = mysql_connect("localhost","root","root");
	if (!$con){
		die('数据库连接失败，错误信息为: ' . mysql_error());
	}
	mysql_query("set names 'utf8'");
	mysql_select_db("exam", $con);
	
	$condition = '';
	$keyword = empty($_GET['keyword']) ? '' : $_GET['keyword'];
	$_GET['op'] = empty($_GET['op']) ? '' : $_GET['op'];
	if($_GET['op'] == 'search'){
		$condition .= " AND (`stid` LIKE '%{$keyword}%') OR (`name` LIKE '%{$keyword}%')";
	}

	if($_GET['op'] == 'delete'){
		$id = $_GET['id'];
		mysql_query("delete from `users` where `id` = '$id'") or die("Invalid query: " . mysql_error());
		echo '
			<script language="javascript">
				alert("删除成功!");
				location.href="/5/score_manage.php";
			</script>';
	}

	$_GET['page'] = empty($_GET['page']) ? '' : $_GET['page'];
	$pindex = max(1, intval($_GET['page']));
	$psize = 10;	
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>
            网页设计课程测验
        </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/score.css"/>
        <link href="css/flat-ui.css" rel="stylesheet"/>
    </head>
    <body>
	    <div class="container">
	    	<div class="score_tt">考生成绩管理系统</div>
	    	<div class="row">
	                <div class="row demo-navigation">
	                    <div class="col-xs-8">
	                        <div class="btn-toolbar" style="margin-top:6px;">
	                                <button class="btn btn-info" onclick="averRecord">
	                                    <div class="nav_bd">
	                                        <span class="fui-cmd" style="color:#fff;">
	                                        </span>
	                                        更新平均分
	                                    </div>
	                                </button>
	                                <span class="averecord"></span>

	                        </div>
	                    </div>
	                    <div class="col-xs-4">
	                        <form class="navbar-form navbar-right" action="" method="get" role="form" id="form1">
	                            <div class="form-group">
	                            	<input type="hidden" name="op" value="search" />
	                            	
	                                <div class="input-group has-success">
	                                    <input class="form-control" name="keyword" type="text" value="<?php echo $keyword; ?>" placeholder="查找考生成绩" style="color:#3498DB!important;"/>
	                                    <span class="input-group-btn">
	                                        <botton type="submit" class="btn" value="搜索" style="border: 2px solid #3498DB;"><span class="fui-search" style="color:#3498DB; top:4px;"></span>
	                                        </botton>
	                                    </span>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	        </div>
	        <div class="row">
	                <div class="panel panel-default" style="border:none; margin-top:10px;">
	                    <div class="panel-body" style="padding:0!important; border:1px solid #fbfbfb; ">
	                        <ul class="list-group" style="margin-bottom:0;">
	                        	<li class="list-group-item">
	                        		
	                                <span class="info">
	                                    考生姓名
	                                </span>
	                                <span class="info" style="margin-left:80px;">
	                                    考生学号
	                                </span>
	                                <span class="info"  style="margin-left:80px;">
	                                    考试成绩
	                                </span>
	                                <span class="info" style="margin-left:20px;">
	                        			排名
	                        		</span>
	                            </li>
	                            <?php 
	                            	$avg = 0;
	                            	$avg = mysql_query("SELECT AVG(record) FROM `users`");
	                            	
	                            	$avg1 = mysql_fetch_row($avg);
	                            	$avg2 = floor($avg1[0]);
	                            	echo '<script>document.querySelector(".averecord").innerHTML = '.$avg2.';</script>';
									$result = mysql_query("SELECT * FROM `users` WHERE 1 $condition ORDER BY `record` DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);
										$i = 0;
									while($row = mysql_fetch_array($result))
									{
										$i++;
										echo '<li class="list-group-item">
		                                <span style=" font-size:16px;">
		                        			第'.$i.'名
		                        		</span>
		                                <span class="basic_info">
		                                    '.$row['name'].'
		                                </span>
		                                <span class="basic_info">
		                                    '.$row['stid'].'
		                                </span>
		                                <span class="record">
		                                    '.$row['record'].'
		                                </span>
		                                <span>
	                                    <a type="submit" name="delete" class="btn btn-lg btn-warning cancle" href="http://'.$_SERVER['HTTP_HOST'].'/5/score_manage.php?op=delete&id='.$row['id'].'" data-toggle="tooltip" data-placement="top" title="删除">
	                                        删除考生数据
	                                    </a>
	                                	</span>
	                            	</li>';
									}
	                                ?>

	                        </ul>
	                    </div>
	                </div>
	        </div>
	        <div class="row">
	                <div style="float:right">
	                    <ul class="pagination">
	                        <li class="previous">
	                            <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/5/score_manage.php?keyword='.$keyword.'&page='.($pindex-1); ?>" class="fui-arrow-left">
	                            </a>
	                        </li>
	                        <li class="next">
	                            <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/5/score_manage.php?keyword='.$keyword.'&page='.($pindex+1); ?>" class="fui-arrow-right">
	                            </a>
	                        </li>
	                    </ul>
	                </div>				
	        </div>
	    </div>
    </body>
</html>