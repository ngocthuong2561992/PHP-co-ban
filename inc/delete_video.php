<?php
 include('../PHP-co-ban/connect.php');
 include('../function.php');

 if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT, array('min_array'=>1)))
 {
     $id = $_GET['id'];
     $query = "DELETE FROM tblvideo WHERE id={$id}";
     $result = mysqli_query($dbc, $query);
     kt_query($result,$query);

 };
?>