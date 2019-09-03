<html>
	<head>
	 <meta charset="UTF-8"/>
	 <style type="text/css">
	   table {
		   background : #ffcccc;
		   width : 500px;
		   margin : auto;
	   }
	   .title {
		   background: #3838cc;
		   line-height: 38px;
	   }
	   
	   .a {
		   background: #3838cc;
		   line-height: 38px;
	   }
	   
	   .b {
		   background: #3838cc;
		   line-height: 38px;
	   }
	   
	 </style>
	</head>
	<body>
	<?php
         if(isset($_POST['submit'])) {
			  if(isset($_POST['chuoi']) && isset($_POST['tugoc']) && isset($_POST['tuthay'])){
				  $chuoi = $_POST('chuoi');
				  $tugoc = $_POST('tugoc');
				  $tuthay = $_POST('tuthay');
				  $chuoi_kq =str_replace($tugoc,$tuthay,$chuoi);
			  }
		 }

	?>
	  <form name= "frmthaythe" method= "POST">
	    <table>
		  <tr>
		     <td>Chuoi :</td>
			 <td><input type="text"  name="chuoi" value="<?php echo $_POST('chuoi') ?>" /></td>
		  </tr>
		  <tr>
		     <td>Tu goc :</td>
			 <td><input type="text" name="tugoc" value="<?php echo $_POST('tugoc') ?>" /></td>
		  </tr>
		  <tr>
		     <td>Tu thay the :</td>
			 <td><input type="text" name="tuthay" value="<?php echo $_POST('tuthay') ?>" /></td>
		  </tr>
		  <tr>
			 <td colspan="2"><input type="text" name="submit" value="Thay The>" /></td>
		  </tr>
		   <tr>
			 <td colspan="2"><input type="kq" name="kq" value="Ket qua" /></td>
		  </tr>
		
		</table>
	  </form>
	</body>
</html>