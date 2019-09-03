<html>
	<head>
	 <meta charset="UTF-8"/>
	</head>
	<body>
	<?php
	 function kiem_tra_so($so,$a,$b)
	 {
	  if ($so%$a==0 && $so%$b==0) 
		 return 1;
	  else 
	     return 0;
	 }

	 if (isset($_POST['submit'])) {
		if (isset($_POST['a'])  && isset($_POST['b']) && isset($_POST['n']))
		{
			$n = $_POST['n'];
			$a = $_POST['a'];
			$b = $_POST['b'];
			for ($i=1 ;$i<=$n ; $i++)
			{
				 if(kiem_tra_so($n,$a,$b)===1)
				 $chuoi=$chuoi.$i.'';
			}
		}
	 }

	?>
	 <form name= "frmthongtinkhachhang" method= "POST">
	    <table>
		  <tr>
			 <td colspan = "2">Form</td>
		  </tr>
		  <tr>
		     <td>Nhap N:</td>
			 <td><input type="text" name="n" value="<?php echo $_POST['n']?>" /></td>
		  </tr>
		  <tr>
		     <td>Nhap A :</td>
			 <td><input type="text" name="a" value="<?php echo $_POST['a']?>" /></td>
		  </tr>
		   <tr>
		     <td>Nhap B :</td>
			 <td><input type="text" name="b" value="<?php $_POST['b']?>" /></td>
		  </tr>
		   <tr>
			 <td colspan="2"><input type="submit" name="submit" value="Thuc hien" /></td>
		  </tr>

		</table>
	  </form>
	</body>
</html>