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
<?php
    include('../PHP-co-ban/connect.php');
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
        //Upload anh
        if(($_FILES['img']['type']!="image/gif") 
                  && ($_FILES['img']['type']!="image/png")
                  && ($_FILES['img']['type']!="image/jpeg")
                  && ($_FILES['img']['type']!="image/jpg")
                  ){

        }
        if (empty($errors)) 
        {
            $query = "INSERT INTO tblVideo(title,link,ordernum,status) VALUES('{$title}','{$link}',$ordernum,$status)";
            $result = mysqli_query($dbc,$query);
            kt_query($result,$query);
            if (mysqli_affected_rows($dbc)===1) {
                echo "<p style='color:green'>Them moi thanh cong</p>";
            } else {
                echo "<p style='color:red'>Them moi khong thanh cong</p>";
            }
        } else {
            $message = "<p class='required'>Ban hay nhap thong tin day du</p>";
        }
    }
?>
<div class="container">
  <h2>Them moi video</h2>
  <?php
    if (isset($message))
    {
        echo $message;
    }
  ?>
  <form name="frmadd_video" method = "POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" value="<?php if(isset($_POST['title'])){echo $_POST['title'];}?>"  name="title">
      <?php
        if(isset($errors) && in_array('title',$errors))
        {
            echo "<p class='required'>Ban chua nhap tieu de</p>";
        }
      ?>
    </div>
    <div class="form-group">
      <label for="link">Anh dai dien:</label>
      <input type="file" class="form-control" value="<?php if(isset($_POST['link'])){echo $_POST['link'];}?> " name="img">
    </div>
    <div class="form-group">
      <label for="link">Link:</label>
      <input type="link" class="form-control" value="<?php if(isset($_POST['link'])){echo $_POST['link'];}?> " name="link">
      <?php
        if(isset($errors) && in_array('link',$errors))
        {
            echo "<p class='required'>Ban chua nhap link</p>";
        }
      ?>
    </div>
    <div class="form-group">
      <label for="link">Thu tu:</label>
      <input type="text" class="form-control" value="<?php if(isset($_POST['ordernum'])){echo $_POST['ordernum'];}?> " name="ordernum">
    </div>
    <div class="form-group">
      <label for="link">Thu tu:</label>
      <input checked="checked" type="radio" class="form-control" id="status" placeholder="Enter status" name="status" value= "1">Hien thi
      <input type="radio" class="form-control" id="status" placeholder="Enter status" name="status" value= "1">Khong Hien thi
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
