<?php include 'header.php'; ?>

<body>

    <?php include 'Topbar_Start.php'; ?>



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link active">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="booking.php" class="dropdown-item">Booking</a>
                        <a href="team.php" class="dropdown-item">Technicians</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        <a href="404.php" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">คู่มือการใช้งาน</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">เงื่อนไขการเช่ารถยนต์</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0"> วิธีการจอง</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">เงื่อนไขประกัน</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
                            <h4 class="m-0"> นโยบายการบำรุงรักษารถยนต์</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">เงื่อนไขประกัน</h3>
                                    <p class="mb-4">ราคาที่แสดงบนเว็บไซต์ของเรา เป็นราคาสุทธิ<br> รวมประกันภัยชั้น 1 เรียบร้อยแล้ว</p>
                                    <p><i class="fa fa-check text-success me-3"></i> อายุ 25 ปีขึ้นไป</p>
                                    <p><i class="fa fa-check text-success me-3"></i>ครอบครองใบอนุญาติขับขี่รถยนต์ส่วนบุคคล ชนิด 5 ปี หรือ ชนิดตลอดชีพ  (สามารถใช้ใบขับขี่ของต่างประเทศได้) </p>
                                    <p><i class="fa fa-check text-success me-3"></i>นอกเหนือจากนั้น ประกันภัยและบริษัทจะเป็นผู้รับผิดชอบเองทั้งหมด ตามวงเงินที่ระบุใว้ในกรมธรรม์ประกันภัย</p>
                                    <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3"> วิธีการจอง</h3>
                                    <p class="mb-4">ท่านสามารถจองรถยนต์ของท่านผ่านหลากหลายช่องทาง เช่น จองออนไลน์ จองผ่านไลน์ E-mail หรือ ผ่านโทรศัพท์</p>
                                    <p><i class="fa fa-check text-success me-3"></i>หลังจากทางเราได้รับข้อมูลการจองของท่าน ทางเราจะรีบดำเนินยืนยันการจองของท่านภายใน 1 ชม (ในเวลาทำการ) หลังจากได้รับการจอง</p>
                                    <!-- <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">เงื่อนไขประกัน</h3>
                                    <p class="mb-4">ราคาที่แสดงบนเว็บไซต์ของเรา เป็นราคาสุทธิ<br> รวมประกันภัยชั้น 1 เรียบร้อยแล้ว</p>
                                    <p><i class="fa fa-check text-success me-3"></i> ประกันชั้น 1 แบบมี ดีดัก (CDW) ประกันชั้น 1 ชนิด CDW รวมในราคาค่าเช่าเรียบร้อยแล้ว</p>
                                    <p><i class="fa fa-check text-success me-3"></i>ในกรณีที่ท่าน มีอุบัติเหตุ หรือก่อความเสียหายแก่รถยนต์ของเรา ท่านจะต้องรับผิดชอบค่าเสียหายส่วนแรก (ดีดัก / Deductible) จำนวน 3,000 - 10,000 บาท</p>
                                    <p><i class="fa fa-check text-success me-3"></i>นอกเหนือจากนั้น ประกันภัยและบริษัทจะเป็นผู้รับผิดชอบเองทั้งหมด ตามวงเงินที่ระบุใว้ในกรมธรรม์ประกันภัย</p>
                                    <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">นโยบายการบำรุงรักษารถยนต์</h3>
                                    <p class="mb-4">เรามุ่งมั่นที่จะทำให้ทุกการเดินทางของท่านราบรื่น ปราศจากปัญหาที่น่ากวนใจ และให้ท่านสนุก เพลิดเผลินกับทุกการเดินทางของท่าน</p>
                                    <p><i class="fa fa-check text-success me-3"></i>รถของเราทุกคันผ่านการดูแล บำรุงรักษามาอย่างดี ไมล์น้อย สภาพสวย รอยบุบ รอยขีดข่วนแทบไม่มีเลย
                                        ก่อนรถของเราถูกปล่อยเช่า จะมีการตรวจเช็คสภาพเบื้องต้นทุกครั้งโดยช่างผู้ชำนานการทุกครั้ง</p>
                                    <p><i class="fa fa-check text-success me-3"></i>ในกรณีที่ท่าน ไม่ชอบใจ ไม่พอใจ ไม่สบายใจกับรถยนต์ของเรา เรายินดีเปลี่ยนรถให้ท่านฟรีตลอดระยะเวลาการเช่า หรือ คืนเงินเต็มจำนวน หากท่านไม่พอใจในคุณภาพของรถยนต์ของเรา</p>
                                    <!-- <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->





    <?php include 'footer.php'; ?>