<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $query="select * from notice WHERE cource = '$cource'";
  $sel=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($sel))
  {
    $date=$row['date'];
    ?>

    <p><?php  echo $row['date']; ?></p>

    <?php
  }     
  ?>
</body>
</html>