<html>
	<head>
	 <meta charset="UTF-8"/>
      
	</head>
	<body>
	<?php
    session_start();
     $flag = 0;
     //Cookie
	//  if (!empty($_POST['hoten']) && !empty($_POST['email']) && !empty($_POST['dienthoai'])) {
    //      $thongtin = $_POST['hoten'].'-'.$_POST['email'].'-'.$_POST['diachi'];
    //      setcookie('khachhang', $thongtin,time()+3600,'/',0,0);
    //      $flag = 1 ;
    //  }
    //session 
     if (!empty($_POST['hoten']) && !empty($_POST['email']) && !empty($_POST['dienthoai'])) {
       $_SESSION['hoten'] =  $_POST['hoten'];
       $_SESSION['email'] =  $_POST['email'];
       $_SESSION['dienthoai'] =  $_POST['dienthoai'];
       $flag = 1;
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
			 <td><input type="text" name="dienthoai" value="<?php echo $_POST['dienthoai']?>" /></td>
		  </tr>
		   <tr>
			 <td colspan="2"><input type="submit" name="submit" value="Thuc hien" /></td>
		  </tr>
		</table>
	  </form>
	  <?php
	     if ($flag ==1) {
         ?>
         <table>
          <tr>
            <td>
             Thong tin khach hang <br/>
             Ho ten : <?php echo $_SESSION['hoten'];?>
             Email : <?php echo $_SESSION['email'];?>
             Dia chi : <?php echo $_SESSION['dienthoai'];?>
             <a href="doc_session.php">Click here</a>
            </td>
          </tr>
         </table>
         <?php
         }
	    ?>
	</body>
</html>