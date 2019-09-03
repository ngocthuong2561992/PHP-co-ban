<html>
	<head>
	 <meta charset="UTF-8"/>
	</head>
	<body>
	<?php
	  $a = 5;
	 // is_double(5);
	  if (is_int($a)) {
		  echo 'Day la kieu nguyen <br>';
	  } else {
		  echo 'Day khong phai la kieu nguyen';
	  }
	  
	  $a= 2.4;
	  echo round($a);
	  echo rand(1,30);
	  
	  $gia = 50000;
	  echo number_format($gia,2);
	  
	?>
	</body>
</html>