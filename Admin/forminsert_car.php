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
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>

          </li>

          <li class="nav-item">
            <a href="typecar.php" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                รายการประเภทรถยนต์

              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="car.php" class="nav-link active">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                รายการรถยนต์

              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="rent.php" class="nav-link">
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

              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">เพิ่มรุ่นรถยนต์</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="insert_car.php" enctype="multipart/form-data" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ชื่อรุ่นรถยนต์</label>
                      <input type="hidden" name='id' value="<?= $id ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      <input type="text" name='name' value="<?= $row['name']; ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ทะเบียนรถยนต์</label>
                      <input type="text" name='car_id' value="<?= $row['gear']; ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">เกียร์</label>
                      <input type="text" name='gear' value="<?= $row['gear']; ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">สี</label>
                      <input type="text" name='color' value="<?= $row['color']; ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ประตู</label>
                      <input type="text" name='door' value="<?= $row['door']; ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>

                    <div class="form-group">
                      <label>ยี่ห้อรถยนต์</label>
                      <select name="typecar_id" class="form-control">
                        <?php include 'connectdb.php';
                        $id = $_GET['id'];
                        $sql1 = "SELECT * FROM type_car where status = 1 ";
                        $result1 = $conn->query($sql1);

                        if ($result1->num_rows > 0) {
                          // output data of each row
                          while ($row1 = $result1->fetch_assoc()) {
                        ?>
                            <option value="<?= $row1['typecar_id']; ?>" <?php if ($row1['typecar_id'] == $row['typecar_id']) {
                                                                          echo 'selected';
                                                                        } ?>>
                              <?= $row1['typecar_name']; ?>
                            </option><?php }
                                  } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ราคาต่อวัน</label>
                      <input type="text" name='price' value="" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>สถาณะ</label>
                      <select name="status" class="form-control">
                        <option value="0" <?php if ($row['status'] == 0) {
                                            echo 'selected';
                                          } ?>>
                          มีคนเช่าแล้ว
                        </option>
                        <option value="1" <?php if ($row['status'] == 1) {
                                            echo 'selected';
                                          } ?>>
                          ว่าง
                        </option>
                        <option value="2" <?php if ($row['status'] == 2) {
                                            echo 'selected';
                                          } ?>>
                          มีคนเช่าแล้ว
                        </option>

                      </select>
                    </div>
                    <!-- <input type="file" name="fileupload"> -->
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input name="fileupload" type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>


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