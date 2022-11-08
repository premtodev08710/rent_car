<?php

include 'connectdb.php';
$id = $_GET['typecar_id'];

$sql = "DELETE FROM `type_car` WHERE `typecar_id` = '$id';";
// echo $sql;
if ($conn->query($sql) === TRUE) {
  // echo 1;
  echo "<script type='text/javascript'>";
  echo"alert('ลบสำเร็จ');";
  echo"window.location = 'typecar.php';";
  echo "</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('error เกิดข้อผิดพลาด !');";
  echo"window.location = 'typecar.php'; ";
  echo"</script>";
  echo $sql ;
}

$conn->close();

?>