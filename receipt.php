<?php
$rent_id = $_GET['rent_id']; include 'header.php'; include 'Admin/connectdb.php' ?>

<body>
<?php  $sql = "SELECT * FROM `rent` INNER JOIN car on rent.car_id = car.id ";
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
        </button>
        <div> <label for="">เลขคำสั่งจอง </label></div>
        
    </nav>
    <?php 
}} ?>
    <!-- Navbar End -->

    
    
    




