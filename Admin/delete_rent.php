<?php

include 'connectdb.php';

//  $id = $_GET['id'];
 $rent_id = $_GET['rent_id'];


$sql1 = "DELETE FROM `rent` WHERE `rent_id` = '$rent_id';";

if ($conn->query($sql1) === TRUE) {
  // echo 1;
  
  echo "<script type='text/javascript'>";
  echo "alert('บันทึกสำเร็จ');";
  echo "window.location = 'rent.php';";
  echo "</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('error เกิดข้อผิดพลาด !');";
  echo "window.location = 'rent.php'; ";
  echo "</script>";
  echo $sql1;
}

$conn->close();

?>