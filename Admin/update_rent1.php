<?php

include 'connectdb.php';

 $id = $_GET['id'];
 $rent_id = $_GET['rent_id'];
//  $fine = $_GET['fine'];


$sql1 = "UPDATE `car` SET `status` = '1' WHERE `id` = '$id';";

if ($conn->query($sql1) === TRUE) {
  // echo 1;
  // echo $sql1;
  echo "<script type='text/javascript'>";
  // echo "alert('บันทึกสำเร็จ');";
  // echo "window.location = 'rent.php';";
  echo "</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('error เกิดข้อผิดพลาด !');";
  // echo "window.location = 'rent.php'; ";
  echo "</script>";
  
}

$sqlselect = "SELECT * FROM `rent` where `rent_id` = '$rent_id' ";
$resultselect = $conn->query($sqlselect);

if ($resultselect->num_rows > 0) {
  // output data of each row
  while($row = $resultselect->fetch_assoc()) {
    $en_date = $row['en_date'];
  }
} else {
  echo "0 results";
}

$finedate  = date('Y-m-d');
$calculate = strtotime("$finedate") - strtotime("$en_date");
$summary = floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.)
echo $summary * 5000;
echo $finedate .'ppp'.$en_date ;

if($summary <0){
  $sql = "UPDATE `rent` SET `statusour` = '1' , fine = '0' WHERE `rent_id` = '$rent_id';";
  $conn->query($sql);
  echo "<script type='text/javascript'>";
  echo "alert('ยังไม่ถึงกำหนดรับคืน!');";
  echo "window.location = 'rent.php'; ";
  echo "</script>";
}else{
  $sql = "UPDATE `rent` SET `statusour` = '1' , fine = '$summary' WHERE `rent_id` = '$rent_id';";

if ($conn->query($sql) === TRUE) {
  // echo 1;
  echo $sql;
  echo "<script type='text/javascript'>";
  echo "alert('บันทึกสำเร็จ".$summary * 5000 ."');";
  echo "window.location = 'rent.php';";
  echo "</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('error เกิดข้อผิดพลาด !');";
  echo "window.location = 'rent.php'; ";
  echo "</script>";
 
}
}


$conn->close();

?>