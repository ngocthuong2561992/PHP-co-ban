<html>
	<head>
	 <meta charset="UTF-8"/>
	</head>
	<body>
		<?php
		   $a = "Vu Van Tung";
		   $b = "Cong nghe thong tin";
		   // In chuoi
		   echo "<p>Toi ten la <strong>${a}</strong>${b}</p>";
		   //Su dung chuoi bang dau nhay don
		   echo "<p>Ten toi la '.$a.' hoc '.$b.'</p>";
		   
		   $string1 = "nhan sac co han";
		   $string2 = "thu doan vo han";
		   $string3 =$string1;
		   $string3.=$string2;
		   echo $string3;
		   //Do dai chuoi
		   $c = "Pham Ngoc Thuong";
		   echo strlen($c);
		   //In hoa dau chuoi
		   $d = "Pham Ngoc Thuong";
		   echo ucfirst($d);
		   
		   //In hoa tat ca chu dau trong chuoi
		   $e = "Pham Ngoc Thuong";
		   echo ucwords($e);
		   
		   //
		   $f = "Pham Ngoc Thuong A";
		   $m = "Pham Ngoc Thuong B";

		   $chuoi = $f.' '.$m;
		   echo $chuoi;
		   
		    //In hoa dau chuoi
		   $d = "Pham Ngoc Thuong";
		   echo strtoupper($d);
		   
		     //In hoa dau chuoi
		   $d = "Pham Ngoc Thuong";
		   echo strtolower($d);
		   
		   
		   //Ham tra ve ma ASCII
		   define("USERNAME",'tungvu90');
		   echo USERNAME;
		   
		   define("TODAY",'Ngat 24/9/2017');
		   echo "<p>Hom nay la ngay : ".TODAY."  dang su dung phien ban".PHP_VERSION.".Tren he dieu hanh .".PHP_OS."</p>";
		?>
	</body>
</html>