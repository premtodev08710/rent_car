<?php

include 'connectdb.php';
$car_id = $_POST['car_id'];
$typecar_id = $_POST['typecar_id'];
$name = $_POST['name'];

$fileupload = $_REQUEST['fileupload']; //รับค่าไฟล์จากฟอร์ม		
$date = date("d-m-Y"); //กำหนดวันที่และเวลา
//เพิ่มไฟล์
$upload=$_FILES['fileupload'];
if($upload <> '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป 
$path="uploads/";  
 
//เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
	$remove_these = array(' ','`','"','\'','\\','/','_');
	$newname = str_replace($remove_these, '', $_FILES['fileupload']['name']);
 
	//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
	$newname = time().'-'.$newname;
$path_copy=$path.$newname;
$path_link="uploads/".$newname;
 
//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}

$sql = "INSERT INTO `car`( `car_id`, `typecar_id`, `name`, car_img,`status`) 
VALUES ('$car_id','$typecar_id','$name','$newname','1')";
// echo $sql;
if ($conn->query($sql) === TRUE) {
  // echo 1;
  echo "<script type='text/javascript'>";
  echo"alert('บันทึกสำเร็จ');";
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