<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login </title>
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
        if (empty($_POST['taikhoan']))
        {
            $errors[] = 'taikhoan';
        } else {
            $taikhoan = $_POST['taikhoan'];
        }
        if (empty($_POST['matkhau'])) {
            $errors[] = 'matkhau';
        } else {    
            $matkhau = md5($_POST['matkhau']);
        }
  
        if (empty($errors)) 
        {
            $query = "Select id, taikhoan, matkhau,status from tbluser where taikhoan='${taikhoan}' and matkhau=${password}";
            $result = mysqli_query($dbc,$query);  
            kt_query($result,$query);
            if (mysqli_number_rows($result)===1) {
               list($id,$taikhoan,$matkhau,$status) = mysqli_fetch_array( $result,$query);
            } else {
                echo "<p style='color:red'>Them moi khong thanh cong</p>";
            }
        } else {
            $message = "<p class='required'>Ban hay nhap thong tin day du</p>";
        }
    }
?>
<div class="container">
  <h2>Dang nhap he thong</h2>
  <?php
    if (isset($message))
    {
        echo $message;
    }
  ?>
  <form name="frmadd_video" method = "POST">
    <div class="form-group">
      <label for="taikhoan">Tai khoan:</label>
      <input type="text" class="form-control" value="<?php if(isset($_POST['taikhoan'])){echo $_POST['taikhoan'];}?>"  name="taikhoan">
      <?php
        if(isset($errors) && in_array('taikhoan',$errors))
        {
            echo "<p class='required'>Tai khoan ko de trong</p>";
        }
      ?>
    </div>
    <div class="form-group">
      <label for="matkhau">Mat khau:</label>
      <input type="password" class="form-control" value="<?php if(isset($_POST['matkhau'])){echo $_POST['matkhau'];}?> " name="matkhau">
      <?php
        if(isset($errors) && in_array('matkhau  ',$errors))
        {
            echo "<p class='required'>Ban chua nhap mat khau</p>";
        }
      ?>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
