<?php

include 'connectdb.php';
$id = $_GET['id'];

$sql = "DELETE FROM `car` WHERE `id` = '$id';";
// echo $sql;
if ($conn->query($sql) === TRUE) {
  // echo 1;
  echo "<script type='text/javascript'>";
  echo"alert('ลบสำเร็จ');";
  echo"window.location = 'car.php';";
  echo "</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('error เกิดข้อผิดพลาด !');";
  echo"window.location = 'car.php'; ";
  echo"</script>";
  echo $sql ;
}

$conn->close();

?>