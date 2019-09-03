<html>
	<head>
	 <meta charset="UTF-8"/>
	</head>
	<body>
	<?php
    if (isset($_POST['submit']))
	{
		if (isset($_POST['tenfile']) && isset($_POST['noidung'])) {
            $tenfile = $_POST['tenfile'];
            $noidung = $_POST['noidung'];
            //Ghi file
            $file =fopen("$tenfile","w");
            echo "Da ghi file thanh cong";
            fclose($file);
            //Xuat file'
            $file =fopen("$tenfile","w");
            echo "Noi dung file";
            while(!feof($file)) {
                $noidung =fgets($file,1000);
                echo nl2br($noidung);
            }

		} else {
            echo "Hay nhap du ten file va noi dung"
        }
	}
	?>
	 <form name= "frmthongtinkhachhang" method= "POST">
	    <table>
		  <tr>
			 <td colspan = "2">Ghi va doc File</td>
		  </tr>
		  <tr>
		     <td>Ten file :</td>
			 <td><input type="text" name="tenfile" value="<?php if(isset($_POST['tenfile'])){ echo $_POST['tenfile'] ;}?>" /></td>
		  </tr>
		  <tr>
		     <td>Noi dung :</td>
			 <td><input type="text" name="noidung" value="<?php if(isset($_POST['noidung'])){ echo $_POST['noidung'] ;}?>" /></td>
		  </tr>
          <tr>
			 <td colspan="2"><input type="submit" name="submit" value="Thuc hien" /></td>
		  </tr>
		</table>
	  </form>
	</body>
</html>