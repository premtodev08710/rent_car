<?php
include 'connectdb.php';
echo '11111';
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
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
// 		$sql = "INSERT INTO uploadfile (fileupload) 
// 		VALUES('$newname')";
		
// 		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	
// 	mysqli_close($conn);
// 	// javascript แสดงการ upload file
	
// 	if($result){
// 	echo "<script type='text/javascript'>";
// 	echo "alert('Upload File Succesfuly');";
// 	echo "window.location = 'uploadfile.php'; ";
// 	echo "</script>";
// 	}
// 	else{
// 	echo "<script type='text/javascript'>";
// 	echo "alert('Error back to upload again');";
// 	echo "</script>";
// }
?>