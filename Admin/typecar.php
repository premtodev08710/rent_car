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
        <a href="#" class="d-block">Alexander Pierce</a>
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
            </p>
          </a>

        </li>

        <li class="nav-item">
          <a href="typecar.php" class="nav-link active">
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
          <a href="rent.php" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              รายการเช่ารถยนต์
              <span class="right badge badge-danger"><?php include 'new.php';?></span>
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
                  <td>
                    <a href="forminsert_typecar.php" class="btn btn-block btn-primary btn-flat btn-sm">เพิ่ม</a>
                  </td>
                </tr>
              </table>
            </div>

            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10%">#</th>
                    <th style="width: 50%">ยี่ห้อรถยนต์</th>
                    <th style="width: 20%">สถาณะ</th>
                    <th style="width: 10%">แก้ไข</th>
                    <th style="width: 10%">ลบ</th>
                  </tr>
                </thead>
                <?php include 'connectdb.php';
                $sql = "SELECT * FROM type_car";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                ?>


                    <tbody>
                      <tr>
                        <td><?= $num += 1 ?></td>
                        <td><?= $row['typecar_name'] ?></td>
                        <td> <?php if ($row['status'] == 0) {
                                echo 'ปิดการใช้งาน';
                              } else {
                                echo 'เปิดการใช้งาน';
                              } ?></td>
                        <td>
                          <a href="formedit_typecar.php?typecar_id=<?= $row["typecar_id"] ?>" class="btn btn-sm btn-warning" href="">แก้ไข</a>
                        </td>
                        <td>
                          <a class="btn btn-sm btn-danger" onClick="return confirm('ยืนยันการลบ?')" href="delete_typecar.php?typecar_id=<?php echo $row["typecar_id"]; ?>">ลบ</a>

                        </td>
                      </tr>

                    </tbody>
                <?php
                  }
                } else {
                  echo "0 results";
                }
                ?>
              </table>
            </div>
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
<?php include 'footer.php'; ?>