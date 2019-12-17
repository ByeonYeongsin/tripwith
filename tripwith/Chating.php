<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>MATE CHAT</title>
</head>
<style>
#list{
    overflow-y: scroll;
    width: 338px;
    height: 400px;
    margin-left : 0px;
    padding : 5px;
    border : 1px solid #ccc;
    background-color: #9CC4DF;
    font-size:  15px;
    margin-top: 0px;
}

#list dt
{
    float: left;
    width: 75px;
    height: 32px;
    text-align: center;
    font-weight: 700;
    background-color: #ffffff;
    margin-bottom: 0px;
}

#list dd
{
    float: left;
    clear: right;
    width: 225px;
    height: 40px;
    margin-top: 5px;
    margin-left: 8px;
    margin-bottom:  0px;
}

form
{
    width: 338px;
    height: 37px;
    padding : 5px;
    margin-top: -20px;
    margin-left: 0px;
    border : 1px solid #ffdd88;
    background : #F9E130;
    font-size: 0;
}

form input#msg
{
    width           : 265px;
    height: 25px;
    margin-right    : 5px;
    margin-left: 4px;
    margin-top: 6px;
    border          : 1px solid #FFFFFF;
    font-size       : 9pt;
}

form input#btn
{
    width           : 60px;
    height: 28px;
    font-size       : 12pt;
    padding-bottom: 5px;
    background-color: #9CC4DF;
    border : 0;
    outline : 0;
}


#title{
    background-color: lightgray;
    width: 350px;
    height: 50px;
    text-align: center;
    margin-left: 0px;
    margin-top: -15px;
    font-size: 20px;
}

</style>
<script type="text/javascript">

    function _GET(search) {
        var obj = {};
        var uri = decodeURI(search);
            uri = uri.slice(1,uri.length);
 
        var param = uri.split('&');
        
        for (var i = 0; i < param.length; i++) {
            var devide = param[i].split('=');
            obj[devide[0]] = devide[1];
        }
 
        return obj;
    } 


 var chatManager = new function(){

    var idle        = true;
    var interval    = 500;
    var xmlHttp     = new XMLHttpRequest();
    var finalDate   = '';

    xmlHttp.onreadystatechange = function()
    {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
        {
            res = JSON.parse(xmlHttp.responseText);
            finalDate = res.date;
            
            chatManager.show(res.data);
            
            chatManager.proc();
        }
    }

    // 채팅내용 가져오기
    this.proc = function()
    {
        var search = window.location.search;
        var getData =  _GET(search);

        xmlHttp.open("GET", "chating_back.php?date=" + encodeURIComponent(finalDate)+"&no="+encodeURIComponent(getData.val), true);
        xmlHttp.send();
    }

    // 채팅내용 보여주기
    this.show = function(data)
    {
        var o = document.getElementById('list');
        var dt, dd;

        // 채팅내용 추가
        for(var i=0; i<data.length; i++)
        {
            dt = document.createElement('dt');
            dt.appendChild(document.createTextNode(data[i].username));
            o.appendChild(dt);

            dd = document.createElement('dd');
            dd.appendChild(document.createTextNode(data[i].message));
            o.appendChild(dd);
        }

        o.scrollTop = o.scrollHeight;
    }

    // 채팅내용 작성하기
    this.write = function(frm)
    {
        var xmlHttpWrite    = new XMLHttpRequest();
        var msg             = frm.msg.value;
        var param           = [];
        var search = window.location.search;
        var getData =  _GET(search);

        if(msg.length == 0)
        {
            return false;
        }
        

        param.push("no=" + encodeURIComponent(getData.val));
        param.push("msg=" + encodeURIComponent(msg));
                
        xmlHttpWrite.open("POST", "Chating_write.php", true);
        xmlHttpWrite.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlHttpWrite.send(param.join('&'));
        
        frm.msg.value = '';
    }
}

 
    window.onload = function () {
 
        chatManager.proc();

        var search = window.location.search;
        var getData =  _GET(search);
        var sender = document.querySelector('#sender');
 
        sender.value = getData.val;
    }
</script>

<body>
<div id="title">
    <h3 >채팅방</h3>
</div>
<dl id="list"></dl>
<form onsubmit="chatManager.write(this); return false;">
    <input name="msg" id="msg" type="text" />
    <input name="btn" id="btn" type="submit" value="입력" />
</form>
</body>
</html>