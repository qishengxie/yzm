<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>米粉读书会</title>
</head>
<style type="text/css"> 
body{ font-family:Verdana, Geneva, sans-serif;
       font-size:12px;
	   line-height:1.5;
	   background-color:#444;
	   margin:0;
}
#header{ width:756px;
         margin:0 auto;
         color:#bbb;
         position:relative;
	}
h1{
	 margin:10px 0 0 0;
     height:63px;
	 background-image:url(logo.gif);/* 无图片*/
     background-repeat:no-repeat;
	}
h1 span{ display:none; }
#topMenu{
	margin: 0;
	padding: 0;
	position: absolute;
	list-style-type: none;
	right: 1px;
	top: 43px;
	width: 247px;
	height: 48px;
	}
#topMenu li{ 
    float:left;
    border-left:1px white solid;
}
#topMenu li a{ 
 padding:0 10px;
 color:white;
 text-decoration:none;
  }
#topMenu li a:hover{
	background-color:#000;
}
#topMenu li.first{
	border:none;
	}
ul#mainMenu{
	color:#000;
	width:500px;
	}
ul#mainMenu li{
	float:left;
	list-style-type:none;
	border-left:1px #aaa solid;
	border-right:1px #eee solid;
	background-color:#ccc;}
#mainMenu li.first{ border-left: none;}
#mainMenu li.last{ border-right:none;}
#mainMenu li a{ display:block;
 padding:5px 10px;
 color:#333;
 text-decoration:none;}
#mainMenu li a:hover{ background-color:#eee;}
#searchBox{float:right;
		   background-color:#ccc;}
#searchBox #submit{  background:transparent;
                     border:0;
                     margin:0;
                     padding:0;
}
form#searchBox input.textfield ,
form#searchBox button{
	padding:0;
	margin:0;}
#mainMenu-outer-wraper{
	background-color:#ccc;
	padding-top:3px;
	margin-top:10px;
	}
mainMenu-inner-wraper{
	background-position:bottom;
	padding-bottom:7px;
	
	}
.clearBoth{ clear:both;}
</style>

<body>
<div id="header">
  <h1>米粉读书会</h1>
  <ul id="topMenu">
  <li class="first"><a href="#">mifeng.com</a></li>
  <li><a href="#">交流中心</a></li>
  <li><a href="#">技术支持</a></li>
  </ul>
    <div id="mainMenu-outer-wraper">
    <div id="mainMenu-inner-wraper">
   <ul id="mainMenu">
     <li class="first"><a href="zhuye.php">首页</a></li>
     <li><a href="#">APP下载</a></li>
     <li><a href="#">账户重置</a></li>
     <li><a href="login.php">注册</a></li>
     <li><a href="login.php">登录</a></li>
     <li class="last"><a href="#">联系我们</a></li>
   </ul>
    <form id="searchBox name="labs-serach  action="" method="get">
      <input type="text" class="textfield" name="term" >
      <button type='submit'>查询读者信息</button>
   </form>
  <div class="clearBoth"></div>
 </div>
 </div>
</div>
</body>
</html>