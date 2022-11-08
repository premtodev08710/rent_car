<?php

include 'connectdb.php';
$id = $_POST['id'];
$car_id = $_POST['car_id'];
$typecar_id = $_POST['typecar_id'];
$name = $_POST['name'];
$status = $_POST['status'];

$sql = "UPDATE `car` SET `car_id`='$car_id',`typecar_id`='$typecar_id',
`name`='$name',`status`='$status' 
WHERE `id` = '$id';";
echo $sql;
if ($conn->query($sql) === TRUE) {
  // echo 1;
  echo "<script type='text/javascript'>";
  echo"alert('แก้ไขสำเร็จ');";
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