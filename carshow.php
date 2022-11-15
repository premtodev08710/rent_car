<?php include 'admin/connectdb.php';?>
               
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// รถยนต์ //</h6>
                <h1 class="mb-5">ที่เปิดให้เช่า</h1>
            </div>
            <div class="row g-4">
           <?php $sql = "SELECT car.id,car.car_id,car.name,car.car_img,car.price,car.status ,type_car.typecar_id ,type_car.typecar_name FROM `car` INNER JOIN type_car on type_car.typecar_id = car.typecar_id;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) { ?>

            
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="Admin/uploads/<?= $row['car_img'] ?>" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn  mx-2" href="booking.php?id=<?php echo $row["id"];?>">เช่ารถ</i></a>
                                
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0"> รุ่นรถยนต์ <?= $row['name'] ?></h5>
                            <small> ยี่ห้อรถยนต์ : <?= $row['typecar_name'] ?></small>
                            <small> ราคาวันละ : <?= $row['price'] ?></small><br>
                            <small> สี : <?= $row['color'] ?></small><br>
                            <small> เกียร์ : <?= $row['gear'] ?></small><br>
                            <small> ประตู : <?= $row['door'] ?></small>
                            <br>
                            <small> สถาณะรถ  : <?php if ($row['status'] == 0) {
                                echo 'มีคนเช่าแล้ว';
                              } if ($row['status'] == 2) {
                                echo 'ติดจอง';
                              } if ($row['status'] == 1) {
                                echo 'ว่าง';
                              } ?></small>
                        </div>
                    </div>
                </div>
                <?php
}
} else {
  echo "0 results";
}
?>
            </div>
        </div>
    </div>
    <!-- Team End -->
