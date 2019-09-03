<html>
	<head>
	 <meta charset="UTF-8"/>
	</head>
	<body>
	<?php
    if (isset($_POST['submit']))
	{
		if (isset($_POST['tenfile'])) {
            $tenfile = $_POST['tenfile'];
            if (!file_exists($tenfile)) 
            {
                echo "khong the mo duoc file nay";
            }
		} else {
            echo "Hay nhap du ten file va noi dung"
        }
	}
	?>
	 <form name= "frmthongtinkhachhang" method= "POST">
	    <table>
		  <tr>
			 <td colspan = "2">Kiem tra file</td>
		  </tr>
		  <tr>
		     <td>Ten file :</td>
			 <td><input type="text" name="tenfile" value="<?php if(isset($_POST['tenfile'])){ echo $_POST['tenfile'] ;}?>" /></td>
		  </tr>
          <tr>
			 <td colspan="2"><input type="submit" name="submit" value="Thuc hien" /></td>
		  </tr>
		</table>
	  </form>
	</body>
</html>