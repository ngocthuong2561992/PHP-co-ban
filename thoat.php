<?php
  session_start();
?>
<html>
	<head>
	 <meta charset="UTF-8"/>
	</head>
	<body>
    <?php session_unset($_SESSION['hoten']);
    ?>
   <a href="cookie.php">Quay lai trang thong tin khach hang</a>
	</body>
</html>