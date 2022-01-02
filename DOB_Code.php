<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$day = $_REQUEST["day"];
$month = $_REQUEST["month"];
$year = $_REQUEST["year"];

$d = date("d");
$m = date("m");
$y = 2000 + date("y");
 

if ( $day == "Day" | $month == "Month" | $year == "Year" )
  {
	  echo("Invaild Data");
  }
  
else {
       if( $d < $day)
	      {
			 $d = $d + 30 ;
			 $m -- ;
		  }

       if( $m < $month)
	      {
			 $m = $m + 12 ;
			 $y -- ;
		  }
   
        $d = $d - $day ;
        $m = $m - $month ;
        $y = $y - $year ;
 
        echo ("Day Is   " . $d . "<br/>" );
        echo ("Month Is " . $m . "<br/>" );
        echo ("Year Is  " . $y . "<br/>" );

    }
?>
</body>
</html>