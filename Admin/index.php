<?php session_start(); ?>
<?php

if (!$_SESSION["UserID"]) {  //check session

  Header("Location: formlogin.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

} else { ?>
  <?php include 'head.php'; ?>

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
                                          echo $row['Firstname'].' '.$row['Lastname'];
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!--  -->
              </p>
            </a>

          </li>

          <li class="nav-item">
            <a href="typecar.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                รายการยี่ห้อรถยนต์
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
            <a href="#" class="nav-link">
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


    <!-- Main content-->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                include 'connectdb.php';
                $sqlcar = "SELECT * FROM car ";
                $resultcar = $conn->query($sqlcar);

                $rowcountcar = mysqli_num_rows($resultcar);
                echo '<h3>' . $rowcountcar . '</h3>';
                ?>


                <p>รายการรถยนต์</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="car.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                include 'connectdb.php';
                $sqltypecar = "SELECT * FROM `type_car` ";
                $resulttypecar = $conn->query($sqltypecar);

                $rowcounttypecar = mysqli_num_rows($resulttypecar);
                echo '<h3>' . $rowcounttypecar . '</h3>';
                ?>



                <p>ยี้ห้อรถยนต์</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="typecar.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                include 'connectdb.php';
                $sqlrent = "SELECT * FROM `rent` ";
                $resultrent = $conn->query($sqlrent);

                $rowcountrent = mysqli_num_rows($resultrent);
                echo '<h3>' . $rowcountrent . '</h3>';
                ?>


                <p>ยอดการเช่ารถรวมทั้งหมด</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="rent.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div>
      <!-- ./col -->
  </div>
  <!-- /.row -->


<?php include 'footer.php';
} ?>