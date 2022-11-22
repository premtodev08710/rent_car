<?php

include 'Admin/connectdb.php';

//  $id = $_GET['id'];
 $rent_id = $_GET['rent'];
 $car_id = $_GET['id'];


 $sql = "DELETE FROM `rent` WHERE `rent_id` = '$rent_id';";

if ($conn->query($sql) === TRUE) {
  // echo 1;
  
 
} else {
  
}
 $sql1 = "UPDATE `car` SET `status` = '1' WHERE `car_id` = '$car_id';";

if ($conn->query($sql1) === TRUE) {
  // echo 1;
  
  echo "<script type='text/javascript'>";
  echo "alert('ยกเลืกสำเร็จ');";
  echo "window.location = 'index.php';";
  echo "</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('error เกิดข้อผิดพลาด !');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  echo $sql1;
}

$conn->close();

?>