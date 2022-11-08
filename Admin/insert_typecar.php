<?php

include 'connectdb.php';
$name = $_POST['typecar_name'];
$sql = "INSERT INTO `type_car` (`typecar_name`,`status`) VALUES ('$name','1');";
// echo $sql;
if ($conn->query($sql) === TRUE) {
  // echo 1;
  echo "<script type='text/javascript'>";
  echo"alert('บันทึกสำเร็จ');";
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