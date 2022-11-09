<?php include 'head.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="wrapper mt-5 ">
    <!-- Content Header (Page header) -->
<p> </p>


    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2">
                
            </div>
            <div class="col-md-auto">
            <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12 mt-5 col align-self-center">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">เข้าสู่ระบบ</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="login.php" method="POST" id="quickForm">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="text" name="Username" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
            </div>
            <div class="col col-lg-2">
              
            </div>
        </div>

    </div>

    <!-- Main content -->
    
    <!-- /.content -->
</div>


<!-- /.content-wrapper -->

<?php include 'footer.php'; ?>