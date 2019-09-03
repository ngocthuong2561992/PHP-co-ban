<?php
  session_start();
?>

<html>
	<head>
	 <meta charset="UTF-8"/>
      
	</head>
	<body>
    <?php 
      if(isset($_SESSION['hoten']))
    ?>
      <p>Xin chao : <?php echo $_SESSION['hoten']?><a href="">Exit</a></p>
    <?php 
    ?>
	</body>
</html>