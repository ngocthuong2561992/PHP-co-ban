<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thiet ke WEB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php include('../PHP-co-ban/connect.php');?>
<?php include('../PHP-co-ban/inc/function.php');?>
<div class="container">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Link</th>
      <th scope="col">OrderNum</th>
      <th scope="col">Status</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $query = "Select *from tblvideo order by ordernum DESC";
        $result = mysqli_query($dbc,$query);
        kt_query($result,$query);
        while($video= mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        ?> 
        <tr>
            <td><?php echo $video['id']?></td>
            <td><?php echo $video['title']?></td>
            <td><?php echo $video['link']?></td>
            <td><?php echo $video['ordernum']?></td>
            <td>
                <?php
                if ($video['status'] == 1) {
                    echo "Hien thi";
                } else {
                    echo "Khong Hien thi";
                }
                ?>
            </td>
            <td><a href=""><img src=""/></a></td>
            <td><a href=""><img src=""/></a></td>
        </tr>  
        <?php
        }
?>
  </tbody>
</table>
</div>

</body>
</html>
