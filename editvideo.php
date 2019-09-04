<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thiet ke WEB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  .required {
    color :red;
  }
  </style>
</head>
<body>
<?php ob_start();?>
<?php
    include('../PHP-co-ban/connect.php');
    include('./inc/function.php');
    //Kiem tra ID co phai la kieu so khong
    if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT, array('min_array'=>1))) 
    {
      $id=$_GET["id"];
    } else {
      header('Location: listvideo.php');
      exit();
    }
    if ($_SERVER['REQUEST_METHOD']==='POST')
    {
        $errors = array();
        if (empty($_POST['title']))
        {
            $errors[] = 'title';
        } else {
            $title = $_POST['title'];
        }
        if (empty($_POST['link'])) {
            $errors[] = 'link';
        } else {
            $errors = $_POST['link'];
        }
        if (empty($_POST['ordernum'])) {
            $ordernum = 0;
        } else {
            $ordernum = $_POST['ordernum'];
        }
        $status = $_POST['status'];

        if (empty($errors)) 
        {
            $query = "UPDATE tblVideo SET title ='${title}', 
                                  link= '${link}', 
                                  ordernum='${ordernum}',
                                  status= '${status}'
                                  WHERE id = '${id}' ";
            $result = mysqli_query($dbc,$query);
            kt_query($result,$query);
            //Kiem tra xem ID co ton tai khong
            if (mysqli_affected_rows($dbc)==1) {
                echo "<p style='color:green'>Sua thanh cong</p>";
            } else {
                echo "<p style='color:red'>Sua khong thanh cong</p>";
            }
        } else {
            $message = "<p class='required'>Ban hay nhap thong tin day du</p>";
        }
        $_POST['title'] ='';
        $_POST['link'] ='';
        $_POST['ordernum'] ='';
    }

  $query_id ="SELECT title,link,ordernum,status FROM tblvideo WHERE id = {$id}";
  echo $id;
  $result_id = mysqli_query($dbc,$query_id);
  kt_query($result_id,$query_id);
  //Kiem tra xem co ID ton tai khong
  if (mysql_num_rows($result_id)==1){
    list($title,$link,$ordernum,$status) = mysqli_affected_rows($result_id, MySQLI_NUM);
  } 
  else 
  {
    $message = "<p class='required'>ID video khong ton tai</p>";
  }
?>
<div class="container"> 
  <form name="frmadd_video" method = "POST">
  <?php
    if (isset($message))
    {
        echo $message;
    }
  ?>
   <h3>Sua video <?php if(isset($title)) { echo $title;}?></h3>
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" value="<?php if(isset($title)){echo $title;}?>"  name="title">
      <?php
        if(isset($errors) && in_array('title',$errors))
        {
            echo "<p class='required'>Ban chua nhap tieu de</p>";
        }
      ?>
    </div>
    <div class="form-group">
      <label for="link">Link:</label>
      <input type="link" class="form-control" value="<?php if(isset($link)){echo $link;}?>" name="link">
      <?php
        if(isset($errors) && in_array('link',$errors))
        {
            echo "<p class='required'>Ban chua nhap link</p>";
        }
      ?>
    </div>
    <div class="form-group">
      <label for="link">Thu tu:</label>
      <input type="text" class="form-control" value="<?php if(isset($ordernum)){echo $ordernum;}?>" name="ordernum">
    </div>
    <div class="form-group">
      <label for="link">Trang thai:</label>
       <?php
        if(isset($status)===1) 
        { 
        ?>
      <input checked="checked" type="radio" class="form-control" id="status" placeholder="Enter status" name="status" value= "1">Hien thi
      <input type="radio" class="form-control" id="status" placeholder="Enter status" name="status" value= "1">Khong Hien thi
       <?php
         } else
      {

      }
       ?>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php ob_flush();?>
</body>
</html>
