<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
include "info.php";
$n=$_GET["no"];
for($i=0;$i<count($user);$i++){
	if($n==$user[$i]["学号"]){
		break;
		}
	}
?>
<table width="200" border="1">
  <tr>
    <td>学号</td>
    <td><?php echo $user[$i]["学号"]?></td>
  </tr>
  <tr>
    <td>姓名</td>
    <td><?php echo $user[$i]["姓名"]?></td>
  </tr>
  <tr>
    <td>年龄</td>
    <td><?php echo $user[$i]["年龄"]?></td>
  </tr>
  <td>班级</td>
    <td><?php echo $user[$i]["班级"]?></td>
  </tr>
</table>

</body>
</html>
