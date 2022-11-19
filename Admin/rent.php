<?php session_start(); ?>
<?php

if (!$_SESSION["UserID"]) {  //check session

  Header("Location: formlogin.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

} else { ?>
  <?php include 'head.php'; ?>

  <!-- /.navbar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php include 'connectdb.php';
                                      $sql = "SELECT * FROM user";
                                      $result = $conn->query($sql);

                                      if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                          echo $row['Firstname'] . ' ' . $row['Lastname'];
                                        }
                                      }
                                      ?>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>

          </li>

          <li class="nav-item">
            <a href="typecar.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                รายการประเภทรถยนต์
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="car.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                รายการรถยนต์
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="rent.php" class="nav-link active">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                รายการเช่ารถยนต์
                <span class="right badge badge-danger"><?php include 'new.php'; ?></span>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                ออกจากระบบ
              </p>
            </a>

          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">รายการยี่ห้อรถยนต์</h3>
              </div>
              <div class="col-12" align="right">
                <table>
                  <tr>
                    <td width="80%"></td>
                    <!-- <td><button type="button" class="btn btn-block btn-primary btn-flat btn-sm">Primary </td> -->
                  </tr>
                </table>
              </div>

              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 5%">#</th>
                      <th style="width: 25%">ข้อมูลผู้เช่า</th>
                      <th style="width: 25%">ข้อมูลรถยนต์</th>
                      <th style="width: 10%">ค่าปรับ</th>
                      <th style="width: 15%">รับคำขอ/รับรถคืน</th>
                      <th style="width: 15%">พิมพิ์สัญญา</th>
                      <th style="width: 10%">ลบ</th>
                    </tr>
                  </thead>
                  <?php include 'connectdb.php';
                  $sql  =  "SELECT rent.rent_id,rent.fine,rent.name,rent.Address,rent.Tel ,rent.Email ,rent.st_date ,
                rent.en_date,car.car_id,car.id ,car.price ,rent.day,rent.rent_price ,car.name 
                AS carname, car.car_img ,rent.statusin,rent.statusour FROM `rent` INNER JOIN car on rent.car_id = car.id;";

                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                      $en_date = $row['en_date'];
                  ?>
                      <tbody>
                        <tr>
                          <td><?= $num += 1 ?></td>
                          <td><?= $row['name'] . '<br/> ที่อยู่ : ' . $row['Address'] . ' เบอร์ : ' . $row['Tel'] . ' อีเมล : ' . $row['Email']; ?></td>
                          <td>
                            <?= $row['carname'] . '<br/> ทะเบียนรถ : ' . $row['car_id'] . '  ค่าบริการ : ' . $row['rent_price'] . ' บาท  '; ?>
                          </td>
                          <td>

                            <?php if ($row['fine'] == 0) {
                              $finedate  = date('Y-m-d');
                              $calculate = strtotime("$finedate") - strtotime("$en_date");
                              $summary = floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.)
                              echo $summary * 5000;
                              // echo $en_date;

                            } else {
                              echo $row['fine'] * 5000;
                            } ?>
                          </td>

                          <td><?php
                              if ($row['statusin'] == 0) {
                              ?> <a href="update_rent.php?id=<?= $row['id'] ?>&rent_id=<?= $row['rent_id'] ?>"><button type="button" class="btn btn-outline-success">ตอบคำขอ </button></a>
                              <?php   } else {
                                if ($row['statusour'] == 0) {
                                  $finedate  = date('Y-m-d');
                                  $calculate = strtotime("$finedate") - strtotime("$en_date");
                                  $summary = floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.)
                                  // echo $summary . "<br>";
                                  // echo $$en_date;
                                  if ($summary < 1) { ?>
                                  <a href="update_rent1.php?id=<?= $row['id'] ?>&rent_id=<?= $row['rent_id'] ?>"> <button type="button" onClick="return confirm('ยืนยันการรับรถคืน?')" class="btn btn-outline-primary">รับรถคืน </button></a>
                                <?php
                                  } else {



                                ?>
                                  <a href="update_rent1.php?id=<?= $row['id'] ?>&rent_id=<?= $row['rent_id'] ?>"> <button type="button" class="btn btn-outline-primary">รับรถคืน </button></a>
                            <?php }
                                }
                                if ($row['statusour'] == 1) {
                                  echo 'รับรถคืนแล้ว';
                                }
                              } ?>




                          </td>
                          <td>
                            <a href="rent_detall.php?rent_id=<?= $row['rent_id'] ?>"> <button type="button" class="btn btn-outline-warning">พิมพิ์สัญญา</button></a>
                          </td>
                          <td>
                            <a href="delete_rent.php?rent_id=<?= $row['rent_id'] ?>"> <button type="button" class="btn btn-outline-danger">ลบ</button></a>
                          </td>
                        </tr>

                      </tbody>
                  <?php }
                  } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php include 'footer.php';
} ?>