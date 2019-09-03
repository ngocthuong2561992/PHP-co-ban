<html>
	<head>
	 <meta charset="UTF-8"/>
      
	</head>
	<body>
	<?php
	//    echo "Ho ten : " .$_GET['hoten'].'<br/>';
	//    echo "Email : " .$_GET['email'].'<br/>';
	//    echo "Dien thoai : " .$_GET['dienthoai'].'<br/>';
	if (isset($_POST['submit']))
	{
		if (isset($_POST['hoten']) && isset($_POST['email'])) {
			$so = $_POST['hoten'];
			$chuoi = '';
			for($i=1;$i<=10;$i++)
			{
				$check = $so*$i;
				$chuoi =$chuoi.$so."x".$i."=".$check."\n";
			}

		}
	}
	?>
	 	 <form name= "frmthongtinkhachhang" method= "POST">
	    <table>
		  <tr>
			 <td colspan = "2">Thong tin khach hang</td>
		  </tr>
		  <tr>
		     <td>Ho va ten :</td>
			 <td><input type="text" name="hoten" value="<?php echo $_POST['hoten']?>" /></td>
		  </tr>
		  <tr>
		     <td>Email :</td>
			 <td><input type="text" name="email" value="<?php echo $_POST['email']?>" /></td>
		  </tr>
		   <tr>
		     <td>Dien thoai :</td>
			 <td><input type="text" name="dienthoai" value="<?php $_POST['dienthoai']?>" /></td>
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