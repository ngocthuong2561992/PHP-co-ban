<?php
 include('../PHP-co-ban/connect.php');
 include('./inc/function.php');

 if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT, array('min_array'=>1)))
 {
     $id = $_GET['id'];
     $query_a = "select anh FROM tblslider WHERE id={$id}";
     $result1 = mysqli_query($dbc,$query_a);
     $anhInfo = mysql_fetch_assoc($result1);
     unlink('../'.$anhInfo['anh']);
     $query_b = "delete FROM tblslider WHERE id={$id}";
     $result2 =mysqli_query($dba,$query_b);
     kt_query($result2,$query_b);
     header('Location: listslider.php');
 } 
 else 
 {
    header('Location: listslider.php');
 }
?>