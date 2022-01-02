<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="DOB_Code.php" method="post" >
  <table width="50%" border="0">
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
 
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><select name="day" id="select">
     <option>Day</option>
    <?php
	$day=1;
	while($day<=31)
	{
		echo("<option>".$day."</option>");
		$day++;
	}
	?>
    </select></td>
    <td><select name="month" id="select2">
      <option>Month</option>
      <?php
	$month=1;
	while($month<=12)
	{
		echo("<option>".$month."</option>");
		$month++;
	}
	?>
    </select></td>
    <td><select name="year" id="select3">
      <option>Year</option>
      <?php
	$year=1950;
	while($year<=date("Y"))
	{
		echo("<option>".$year."</option>");
		$year++;
	}
	?>
    </select></td>
    
    
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>

  </tr>

  <tr>
   <td>&nbsp;</td>
    <td>&nbsp;</td>
   
    <td><input align="center" type="submit" name="button" id="button" value="   Age   "></td>
   
  </tr>
</table>

</form>
</body>
</html>