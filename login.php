<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form action="test.php" method="get">
<table width="" border="1">
  <tr>
    <td>用户名</td>
    <td><input type="text" name="username"/></td>
  </tr>
  <tr>
    <td>密码</td>
    <td><input type="password" name="pwd"/></td>
  </tr>
  <tr>
  <td>验证码</td>
  <td><input type="text" name="vcode"/>
  <img src="z1.php" onclick="this.src='z1.php?d='+Math.random();">
  <? if(isset($_GET["msg"])&&$_GET["msg"]=="no") echo "验证码错误"?>
  </td>
  </tr>
  <tr>
  <td></td>
  <td><input type="checkbox" name="auto" onClick="this.form.expire.disabled=!this.checked"/>自动登录
  <select name="expire" disabled="false">
  <option value="120">2分</option>
  <option value="300">5分</option>
  </select>
  </td>
  </tr>
  <tr>
    <td><input type="submit" value="提交"/></td>
    <td><input type="reset" value="重置"/></td>
  </tr>
</table>


</form>
</body>
</html>