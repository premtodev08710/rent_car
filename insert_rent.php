<?php
include 'Admin/connectdb.php';
$car_id = $_POST['car_id'];
$st_date = $_POST['st_date'];
$en_date = $_POST['en_date'];
$name = $_POST['name'];
$Address = $_POST['Address'];
$Tel = $_POST['Tel'];
$Email = $_POST['Email'];
$rental_terms = $_POST['rental_terms'];



$datestart = $st_date;
$dateend = $en_date;

$calculate = strtotime("$dateend") - strtotime("$datestart");
$summary = floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.)
echo "$summary วัน";



$sql = "SELECT * from car where id = $car_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    if($summary == 0){
      $price = $row['price'] * 1;
    }else{
      $price =  $row['price'] * $summary;
    }
    
    echo $price;
    $rent_id;
  }
} else {
  echo "0 results";
}
$datetime = date("h:i:sa");

$sql = "INSERT INTO `rent`(  `name`, `Address`, 
`Tel`, `Email`, `rental_terms`, `car_id`, `st_date`, `en_date`, `day`, `rent_price`,`statusin`,`statusour`) 
VALUES ('$name','$Address','$Tel','$Email','$rental_terms','$car_id',
'$st_date','$en_date','$summary','$price','0','0')";

if ($conn->query($sql) === TRUE) {


  $sql3 = "UPDATE `car` SET `status` = '2' WHERE id = '$car_id';";

if ($conn->query($sql3) === TRUE) {
  // echo $car_id;

} else {
  echo "Error: " . $sql3 . "<br>" . $conn->error;
} 

  // echo 1;
  $sql = "SELECT * FROM `rent` INNER JOIN car ON car.id = rent.car_id;";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $rent_id =  $row['rent_id'];
      $rent_id;
    }
  } else {
    echo "0 results";
  }
  echo "<script type='text/javascript'>";
  echo "alert('บันทึกสำเร็จ');";
  echo "window.location = 'receipt.php?rent=" . $rent_id . "';";
  echo "</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('error เกิดข้อผิดพลาด !');";
  // echo "window.location = 'index.php'; ";
  echo "</script>";
  echo $sql;
}

