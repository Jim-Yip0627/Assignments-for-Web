    window.onload = function ()
    {

    var lefttime = 30*60;//定义倒计时初始时间

    setInterval(time,1000);//执行循环
    
    function time()
    {
        lefttime = lefttime - 1;
        var minute = parseInt(lefttime / 60);
        var second = lefttime % 60;
        if(lefttime >= 0){
            document.querySelector('#minute').innerHTML = minute;
            document.querySelector('#second').innerHTML = second;
        }
        if( lefttime <= 0)
        {
            donebtn = document.getElementById('done').click();
            document.querySelector('#countdown'),innerHTML = '考试时间到，系统自动交卷';
        }
        
    }
    }

    window.onscroll = function (argument) {
        var width = document.querySelector('#rightbar').offsetWidth;
        console.log(width);
        var lefttop = document.querySelector('.col-md-8').offsetTop;
        var scrolltop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
        if(scrolltop > lefttop){
            document.querySelector('#rightbar').style.position = 'fixed';
            document.querySelector('#rightbar').style.top = '5px';
            document.querySelector('#rightbar').style.width = width + 'px';
        }
        else{
            document.querySelector('#rightbar').style.position = 'relative';
            document.querySelector('#rightbar').style.top = '0px';
        }
    }

    window.result = ['', '', '', '', '', '', '', '', '', ''];
    window.correct = ['A', 'C', 'C', 'B', 'center', '_blank', 'javascript', 'A', 'A' ,'B'];

    function getValue(obj){
        var name =  obj.getAttribute('name');
        var thisName = name.replace('name', '');
        var type = obj.getAttribute('type');
        if(type = "text"){
            var value = obj.value;
        }
        else{
            var value = obj.getAttribute('value');  
        } 
        result[thisName] = value;
        document.querySelectorAll('.jdk')[thisName].setAttribute('class', 'jdk active'); 
        console.log(result);

    }

    function checkForm(){
            var score = 0;
    var oneScore = 0;
    var twoScore = 0;
    var threeScore = 0;
        var flag = true;
            for(var j = 0; j < result.length; j++){
            /*if(result[j] == ''){
                flag = false;
                alert("请回答第" + (j+1) + "题");
                break;
                return false;
            }*/
        }
            if(flag){
            for(var i = 0; i < result.length; i++){

            document.getElementById('Result' + i).innerHTML = result[i];

            if(result[i] == correct[i]){
                document.getElementById('Score' + i).innerHTML = 10;
                score = score + 10;

                if(i < 4){
                    oneScore = oneScore + 10;
                }
                else if(4 <= i  && i< 7){
                    twoScore = twoScore + 10;
                }
                else if(7 <= i && i < 10){
                    threeScore = threeScore + 10;
                }
                console.log(i < 4, 4 <= i && i < 7, 7 <= i && i < 10, i, oneScore, twoScore, threeScore);

            }
            else{
                document.getElementById('Score' + i).innerHTML = 0;
            }
            document.querySelectorAll('.fenshu')[i].style.display = 'block';
        
             
        }
                document.getElementById('scoreTotal').innerHTML = score;
                document.querySelector('.scoreTotal').style.display = 'inline-block'; 
                document.getElementById('oneScore').innerHTML = oneScore;
                document.querySelectorAll('.p_n')[0].style.display = 'block';
                document.getElementById('twoScore').innerHTML = twoScore;
                document.querySelectorAll('.p_n')[1].style.display = 'block';
                document.getElementById('threeScore').innerHTML = threeScore;
                document.querySelectorAll('.p_n')[2].style.display = 'block'; 
                var data = {
                    stid: stid,
                    scoreTotal: score
                }
                fasong(data);




            }
                                 
    }
