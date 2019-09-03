<html>
	<head>
	 <meta charset="UTF-8"/>
      
	</head>
	<body>
	<?php
	   echo "Ho ten : " .$_GET['hoten'].'<br/>';
	   echo "Email : " .$_GET['email'].'<br/>';
	   echo "Dien thoai : " .$_GET['dienthoai'].'<br/>';
	?>
	 	 <form name= "frmthongtinkhachhang" method= "GET">
	    <table>
		  <tr>
			 <td colspan = "2">Thong tin khach hang</td>
		  </tr>
		  <tr>
		     <td>Ho va ten :</td>
			 <td><input type="text" name="hoten" value="" /></td>
		  </tr>
		  <tr>
		     <td>Email :</td>
			 <td><input type="text" name="email" value="" /></td>
		  </tr>
		   <tr>
		     <td>Dien thoai :</td>
			 <td><input type="text" name="dienthoai" value="" /></td>
		  </tr>
		   <tr>
			 <td colspan="2"><input type="submit" name="submit" value="Thuc hien" /></td>
		  </tr>
		</table>
	  </form>
	  <?php
	     include('toantu.php');
	  ?>
	</body>
</html>