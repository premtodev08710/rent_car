<?php

include 'connectdb.php';
$id = $_POST['typecar_id'];
$name = $_POST['typecar_name'];
$status = $_POST['status'];
$sql = "UPDATE `type_car` SET `typecar_name` = '$name' ,`status` = '$status' WHERE `typecar_id` = '$id';";
// echo $sql;
if ($conn->query($sql) === TRUE) {
  // echo 1;
  echo "<script type='text/javascript'>";
  echo"alert('แก้ไขสำเร็จ');";
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