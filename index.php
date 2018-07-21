<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php 
include "info.php";

?>

<table width="200" border="1">
  <tr>
    <th>学号</th>
    <th>姓名</th>
    <th>操作</th>
  </tr>
  <?php 
  for($i=0;$i<count($user);$i++){
	  echo "<tr>";
      printf("<td>%s</td><td>%s</td>",$user[$i]["学号"],$user[$i]["姓名"],$user[$i]["学号"]);
	  if($c)
	  printf("<td><a href='detail.php?no=%s'>查看详细信息</a></td>",$user[$i]["学号"]);
	  else printf("<td>查看详细信息</td>");
	  echo "</tr>";	
	  
	  
	  }
  ?>
</table>

<body>
</body>
</html>