<?php
$rent_id = $_GET['rent'];
// echo $rent_id;
include 'header.php';
include 'Admin/connectdb.php' ?>

<body>
    <?php
    $sql = "SELECT rent.rent_id,rent.name,rent.Address,rent.Tel ,rent.Email ,rent.st_date ,
    rent.en_date,car.car_id ,car.price ,rent.day,rent.rent_price ,car.name AS carname, car.car_img FROM `rent` INNER JOIN car on rent.car_id = car.id
    where rent_id = '$rent_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) { ?>

            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
                <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                    <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2>
                </a>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"> </span>
                </button><?php $car_id = $row['car_id']  ?>
                <div> <label for="">
                        <h2> เลขคำสั่งจอง <?= $rent_id ?></h2>
                        <h5>เมื่อเสร็จสิ้นแล้วทางทีมงานจะติดต่อกลับภายใน30นาที <a href="delete_rent.php?rent=<?=$rent_id?>&id=<?=$car_id?>"><button class="btn btn-primary"> ยกเลิกจอง </button></a> <a href="contract.php?rent=<?=$rent_id?>"><button  class="btn btn-outline-secondary"> ทำสัญญา </button></a> </h5>
                      
                    </label></div>

            </nav>

            <div align="center" class="col-md-4 offset-md-4">

                <p> <label for="">
                        <h3> ข้อมูลการจอง </h3>
                    </label></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ชื่อ</th>
                            <th scope="col"><?= $row['name'] ?></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">ที่อยู่</th>
                            <td><?= $row['Address'] ?></td>

                        </tr>
                        <tr>
                            <th scope="row">เบอร์โทร</th>
                            <td><?= $row['Tel'] ?></td>

                        </tr>
                        <tr>
                            <th scope="row">อีเมล</th>
                            <td><?= $row['Email'] ?></td>

                        </tr>
                    </tbody>
                </table>

                
                <img src="admin/uploads/<?= $row['car_img'] ?>" width="60%" alt="">
                
                <p> <label for="">
                        <h3>ข้อมูลรถยนต์</h3>
                    </label></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">รุ่นรถยนต์</th>
                            <th scope="col"><?= $row['carname'] ?></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">ทะเบียนรถ</th>
                            <td><?= $row['car_id'] ?></td>

                        </tr>
                        <tr>
                            <th scope="row">วันที่เช่ารถ(ตั้งแต่วันที่ - วันที่) </th>
                            <td><?= $row['st_date'].' ถึง '.$row['en_date'] ?></td>

                        </tr>
                        <tr>
                            <th scope="row">ค่าใช้จ่าย </th>
                            <td><?= $row['rent_price']?></td>

                        </tr>
                        
                    </tbody>
                </table>

               
            </div>

    <?php
        }
    } ?>
    <!-- Navbar End -->