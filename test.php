<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录验证</title>
</head>

<body>
<?php
 include "info.php";
 session_start();
 $name=$_GET["username"];
 $pwd=$_GET["pwd"];
 $uservcode=strtolower($_GET["vcode"]);
 $vcode=strtolower($_SESSION["vcode"]);
 $flag=false;
 for($i=0;$i<count($manage);$i++){
	 if($name==$manage[$i]["用户名"]&&$pwd==$manage[$i]["密码"]){
		 if($_GET["auto"]){
		$expire=time()+$_GET["expire"];
		setcookie("u",$name,$expire);
		 }else{
			setcookie("u",$name);
			 }
		 $flag=true;
		 break;
		 }
	 }
	if($flag&&$uservcode==$vcode)
		header("Location:index.php");
    else{
		if($flag&&$uservcode!=$vcode){
			header("Location:login.php?msg=no");
			}else{
?>
<script type="text/javascript" language="javascript">
  alert("用户名或密码错误，请重新输入！");
  location.href="login.php";
</script>
<?php } }?>
</body>
</html>