<?php
session_start();
if (!isset($_SESSION["user"])) {
    echo "<script>alert('考生清先登录');
    window.location.href = 'login.html';
	</script>";
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>网页设计课程测验</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/test.css" />
</head>

<body>
    <div class="container boxer">
        <div class="row test_title">
            <div class="title_li">
                ———&nbsp;网页设计课程测验&nbsp;———
            </div>
            <div class="title_ct">
                [注意事项]&nbsp;请在30分钟内完成测验，计时器完成后将自动提交。请注意检查右侧进度条，避免遗漏题目。测验成绩将于提交后公布，请勿立即关闭测验页面。
            </div>
        </div>
        <div class="row test_li">
            <div class="col-md-8 test_ct">
                <div class="title">
                    第一部分&nbsp;&nbsp;单选题（共4题，40分）
                </div>
                <div class="test">
                    <div class="control-group" style="margin-top:20px;">
                        <label class="control-label">
                            1&nbsp;&nbsp;下面不属于CSS插入形式的是（）
                        </label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" value="A" name="name0" onclick="getValue(this)"> A&nbsp;索引式
                            </label>
                            <label class="radio">
                                <input type="radio" value="B" name="name0" onclick="getValue(this)"> B&nbsp;内联式
                            </label>
                            <label class="radio">
                                <input type="radio" value="C" name="name0" onclick="getValue(this)"> C&nbsp;嵌入式
                            </label>
                            <label class="radio">
                                <input type="radio" value="D" name="name0" onclick="getValue(this)"> D&nbsp;外部式
                            </label>
                        </div>
                    </div>
                    <div class="fenshu">
                        <div class="yours">你的答案:<span id="Result0"></span><span class="manfen">得分:<span id="Score0"></span>分</span>
                        </div>
                        <div class="right">正确答案:A<span class="defen">满分:10分<span></div>			
						</div>
					</div>
					<div class="test">
							<div class="control-group" style="margin-top:20px;">
								<label class="control-label">
								2&nbsp;&nbsp;在一个网站中，路径的表示方式一般有（）
								</label>
								<div class="controls">
									<label class="radio">
										<input type="radio" value="A" name="name1" onclick="getValue(this)">
										A&nbsp;绝对路径、根目录相对路径
									</label>
									<label class="radio">
										<input type="radio" value="B" name="name1" onclick="getValue(this)">
										B&nbsp;绝对路径、根目录绝对路径
									</label>
									<label class="radio">
										<input type="radio" value="C" name="name1" onclick="getValue(this)">
										C&nbsp;绝对路径、根目录相对路径、文档目录相对路径
									</label>
									<label class="radio">
										<input type="radio" value="D" name="name1" onclick="getValue(this)">
										D&nbsp;绝对路径、根目录绝对路径、文档目录相对路径
									</label>
								</div>
							</div>
						<div class="fenshu">
							<div class="yours">你的答案:<span id="Result1"></span><span class="manfen">得分:<span id="Score1"></span>分</span>
                        </div>
                        <div class="right">正确答案:C<span class="defen">满分:10分<span></div>			
						</div>
					</div>
					<div class="test">
							<div class="control-group" style="margin-top:20px;">
								<label class="control-label">
								3&nbsp;&nbsp;css中ID选择符在定义的前面要有指示符（）
								</label>
								<div class="controls">
									<label class="radio">
										<input type="radio" value="A" name="name2" onclick="getValue(this)">
										A&nbsp;*
									</label>
									<label class="radio">
										<input type="radio" value="B" name="name2" onclick="getValue(this)">
										B&nbsp;!
									</label>
									<label class="radio">
										<input type="radio" value="C" name="name2" onclick="getValue(this)">
										C&nbsp;#
									</label>
									<label class="radio">
										<input type="radio" value="D" name="name2" onclick="getValue(this)">
										D&nbsp;.
									</label>
								</div>
							</div>
						<div class="fenshu">
							<div class="yours">你的答案:<span id="Result2"></span><span class="manfen">得分:<span id="Score2"></span>分</span>
                        </div>
                        <div class="right">正确答案:C<span class="defen">满分:10分<span></div>			
						</div>
					</div>
					<div class="test">
							<div class="control-group" style="margin-top:20px;">
								<label class="control-label">
								4&nbsp;&nbsp;下列哪个样式定义后，内联（非块状）元素可以定义宽度和高度（）
								</label>
								<div class="controls">
									<label class="radio">
										<input type="radio" value="A" name="name3" onclick="getValue(this)">
										A&nbsp;display:inline
									</label>
									<label class="radio">
										<input type="radio" value="B" name="name3" onclick="getValue(this)">
										B&nbsp;display:block
									</label>
									<label class="radio">
										<input type="radio" value="C" name="name3" onclick="getValue(this)">
										C&nbsp;display:none
									</label>
									<label class="radio">
										<input type="radio" value="D" name="name3" onclick="getValue(this)">
										D&nbsp;display:inherit
									</label>
								</div>
							</div>
						<div class="fenshu">
							<div class="yours">你的答案:<span id="Result3"></span><span class="manfen">得分:<span id="Score3"></span>分</span>
                        </div>
                        <div class="right">正确答案:B<span class="defen">满分:10分<span></div>			
						</div>
					</div>
					<div class="title">
						第二部分&nbsp;&nbsp;填空题（共30分）
					</div>
					<div class="test">
						<div class="control-group" style="margin-top:20px;">
							<label class="control-label">
							1&nbsp;&nbsp;若使文字居中，text-align的值应为
							</label>
							<input type="text" class="form-control" name="name4" style="margin-bottom:20px;" onblur="getValue(this)">
						</div>
						<div class="fenshu">
							<div class="yours">你的答案:<span id="Result4"></span><span class="manfen">得分:<span id="Score4"></span>分</span>
                        </div>
                        <div class="right">正确答案:center<span class="defen">满分:10分<span></div>			
						</div>
					</div>
					<div class="test">
						<div class="control-group" style="margin-top:20px;">
							<label class="control-label">
							2&nbsp;&nbsp;要想在新的浏览器窗口中打开链接页面，应将链接对象的“目标（target）”属性设为
							</label>
							<input type="text" class="form-control" name="name5" style="margin-bottom:20px;" onblur="getValue(this)">
						</div>
						<div class="fenshu">
							<div class="yours">你的答案:<span id="Result5"></span><span class="manfen">得分:<span id="Score5"></span>分</span>
                        </div>
                        <div class="right">正确答案:_blank<span class="defen">满分:10分<span></div>			
						</div>		
					</div>
					<div class="test">
						<div class="control-group" style="margin-top:20px;">
							<label class="control-label">
							3&nbsp;&nbsp;在客户端网页脚本语言中最为通用的是
							</label>
							<input type="text" class="form-control" name="name6" style="margin-bottom:20px;" onblur="getValue(this)">
						</div>
						<div class="fenshu">
							<div class="yours">你的答案:<span id="Result6"></span><span class="manfen">得分:<span id="Score6"></span>分</span>
                        </div>
                        <div class="right">正确答案:javascript<span class="defen">满分:10分<span></div>			
						</div>		
					</div>
					<div class="title">
						第三部分&nbsp;&nbsp;判断题（共30分）
					</div>
					<div class="test">
							<div class="control-group" style="margin-top:20px;">
								<label class="control-label">
								1&nbsp;&nbsp;onMouseOver为当访问者将鼠标指针移入指定元素的范围时所触发的事件。
								</label>
								<div class="controls">
									<label class="radio">
										<input type="radio" value="A" name="name7" onclick="getValue(this)">
										正确
									</label>
									<label class="radio">
										<input type="radio" value="B" name="name7" onclick="getValue(this)">
										错误
									</label>
								</div>
							</div>
						<div class="fenshu">
							<div class="yours">你的答案:<span id="Result7"></span><span class="manfen">得分:<span id="Score7"></span>分</span>
                        </div>
                        <div class="right">正确答案:A<span class="defen">满分:10分<span></div>			
						</div>
					</div>
					<div class="test">
							<div class="control-group" style="margin-top:20px;">
								<label class="control-label">
								2&nbsp;&nbsp;网页上所说的重心平衡是指各种元素分布的协调程度。
								</label>
								<div class="controls">
									<label class="radio">
										<input type="radio" value="A" name="name8" onclick="getValue(this)">
										正确
									</label>
									<label class="radio">
										<input type="radio" value="B" name="name8" onclick="getValue(this)">
										错误
									</label>
								</div>
							</div>
						<div class="fenshu">
							<div class="yours">你的答案:<span id="Result8"></span><span class="manfen">得分:<span id="Score8"></span>分</span>
                        </div>
                        <div class="right">正确答案:A<span class="defen">满分:10分<span></div>			
						</div>
					</div>
					<div class="test_last">
							<div class="control-group" style="margin-top:20px;">
								<label class="control-label">
								3&nbsp;&nbsp;index.php属于静态网页。
								</label>
								<div class="controls">
									<label class="radio">
										<input type="radio" value="A" name="name9" onclick="getValue(this)">
										正确
									</label>
									<label class="radio">
										<input type="radio" value="B" name="name9" onclick="getValue(this)">
										错误
									</label>
								</div>
							</div>
						<div class="fenshu">
							<div class="yours">你的答案:<span id="Result9"></span><span class="manfen">得分:<span id="Score9"></span>分</span>
                        </div>
                        <div class="right">正确答案:B<span class="defen">满分:10分<span></div>			
						</div>
					</div>							
				</div>
				<div class="col-md-4 test_jd">
					<div id="rightbar">
					<div class="info">
						<div class="col-md-6">姓名:<?php echo $_REQUEST['name']; ?></div>	
						<div class="col-md-6">学号:<?php echo $_REQUEST['stid']; ?></div>			
					</div>
					<div class="clock">
						<div align="center" id="countdown" class="countdown">
						    距离考试结束还有&nbsp;:&nbsp;<span id="minute">30</span>分钟<span id="second">00</span>秒
                        </div>
                    </div>
                    <div class="fenjie">
                    </div>
                    <div class="jd">
                        <div class="jd_title">
                            <span class="#">当前考试进度</span><span class="scoreTotal" style="color:red;">&nbsp;&nbsp;[考试总分:<span id="scoreTotal"></span>分]</span>
                        </div>
                        <div class="part_1">
                            <div class="p">
                                <span class="p_t">第一部分:单选题</span><span class="p_n">当前得分:<span id="oneScore"></span>分</span>
                            </div>
                            <span class="jdk">1</span>
                            <span class="jdk">2</span>
                            <span class="jdk">3</span>
                            <span class="jdk">4</span>
                        </div>
                        <div class="part_2">
                            <div class="p">
                                <span class="p_t">第二部分:填空题</span><span class="p_n">当前得分:<span id="twoScore"></span>分</span>
                            </div>
                            <span class="jdk">1</span>
                            <span class="jdk">2</span>
                            <span class="jdk">3</span>
                        </div>
                        <div class="part_3">
                            <div class="p">
                                <span class="p_t">第三部分:判断题</span><span class="p_n">当前得分:<span id="threeScore"></span>分</span>
                            </div>
                            <span class="jdk">1</span>
                            <span class="jdk">2</span>
                            <span class="jdk">3</span>
                        </div>
                        <div style="text-align:center;; height:60px;">
                            <button type="button" class="btn btn-lg btn-info" onclick="checkForm();" id="done">交卷</button>
                        </div>
                    </div>
                    <!-- <div class="biaoshi">
							<div style="margin-bottom:10px;"><span class="bs1">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="bs">蓝色表示答对题目</span></div>
							<div style="margin-bottom:10px;"><span class="bs2">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="bs">橙色表示答错题目</span></div>
							<div style="margin-bottom:10px;"><span class="bs3">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="bs">灰色表示未答题目</span></div>
						</div> -->
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
    var name = "<?php echo $_REQUEST['name']; ?>";
    var stid = "<?php echo $_REQUEST['stid']; ?>";
    //定义函数把数据发送给php后台
    function fasong(data) {
        $.post("manage.php", data, function(rs) {
            var status = rs.status;
            if (status == 1) {
                alert("考试成绩上传成功");
                window.location.href = "score_manage.php?stid="+stid+"&name="+name+"&record="+data.scoreTotal;
            }
        }, "json");
    }
    </script>
    <script src="js/test.js"></script>
</body>

</html>
