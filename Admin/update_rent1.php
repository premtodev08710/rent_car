<?php

include 'connectdb.php';

 $id = $_GET['id'];
 $rent_id = $_GET['rent_id'];


$sql1 = "UPDATE `car` SET `status` = '1' WHERE `id` = '$id';";

if ($conn->query($sql1) === TRUE) {
  // echo 1;
  echo $sql1;
  echo "<script type='text/javascript'>";
  echo "alert('บันทึกสำเร็จ');";
  // echo "window.location = 'rent.php';";
  echo "</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('error เกิดข้อผิดพลาด !');";
  // echo "window.location = 'rent.php'; ";
  echo "</script>";
  
}


$sql = "UPDATE `rent` SET `statusour` = '1' WHERE `rent_id` = '$rent_id';";

if ($conn->query($sql) === TRUE) {
  // echo 1;
  echo $sql;
  echo "<script type='text/javascript'>";
  echo "alert('บันทึกสำเร็จ');";
  echo "window.location = 'rent.php';";
  echo "</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('error เกิดข้อผิดพลาด !');";
  echo "window.location = 'rent.php'; ";
  echo "</script>";
 
}

$conn->close();

?>