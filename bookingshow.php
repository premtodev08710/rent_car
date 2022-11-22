<?php
include 'admin/connectdb.php';
$id = $_GET['id'];
?>

<!-- Booking Start -->
<div class="container-fluid bg-secondary carousel my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="text-white mb-4">เงื่อนไขการให้บริการ</h1>
                    <p class="text-white mb-0">คุณสมบัติผู้เช่า - ผู้ขับขี่
                        <br>
                        อายุ 25 ปีขึ้นไป
                        ครอบครองใบอนุญาติขับขี่รถยนต์ส่วนบุคคล ชนิด 5 ปี หรือ ชนิดตลอดฉีพ
                        ใบอนุญาติขับรถชนิดชั่วคราว ไม่สามารถเช่ารถยนต์ได้ทุกๆกรณี
                        <br>
                        เงื่อนไขการชำระ
                        <br>
                        ผู้เช่าจะต้องชำระ ค่าเช่า พร้อม วางเงินมัดจำประกันรถยนต์ จำนวน 5,000 บาท ณ วันที่รับรถ
                        ผู้เช่าสามารถเลือกชำระค่าเช่า เป็น เงินสด หรือ บัตรเครดิต
                        เงินมัดจำประกันรถยนต์ จำนวน 5,000 บาท รับเฉพาะเงินสดเท่านั้น
                        ผู้เช่าจะได้รับเงินมัดจำประกันรถยนต์ คืนทันที ณ วันส่งมอบรถยนต์คืน

                        <br>
                        เอกสารประกอบการเช่ารถ
                        <br>
                        นำเอกสารตัวจริงมาแสดง ณ วันรับรถ ไม่จำเป็นต้องถ่ายเอกสาร
                        1. บัตรประจำตัวประชาชน หรือ Passport
                        2. ใบอนุญาติขับขี่รถยนต์ส่วนบุคคล
                        <br>
                        การคำนวนระยะเวลาการเช่ารถยนต์
                        1 วัน = 24 ชม
                        <br>

                        เงื่อนไขประกัน
                        <br>
                        ราคาที่แสดงบนเว็บไซต์ของเรา เป็นราคาสุทธิ รวมประกันภัยชั้น 1 เรียบร้อยแล้ว
                        ประกันภัยของเรามี 2 ชนิด
                        <br>
                        1. ประกันชั้น 1 แบบมี ดีดัก (CDW)
                        ประกันชั้น 1 ชนิด CDW รวมในราคาค่าเช่าเรียบร้อยแล้ว
                        <br>
                        ในกรณีที่ท่าน มีอุบัติเหตุ หรือก่อความเสียหายแก่รถยนต์ของเรา ท่านจะต้องรับผิดชอบค่าเสียหายส่วนแรก (ดีดัก / Deductible) จำนวน 3,000 - 10,000 บาท
                        นอกเหนือจากนั้น ประกันภัยและบริษัทจะเป็นผู้รับผิดชอบเองทั้งหมด ตามวงเงินที่ระบุใว้ในกรมธรรม์ประกันภัย
                        <br>


                        2. ประกันชั้น 1 แบบไม่มี ดีดัก (SCDW)
                        SCDW เป็นประกันเสริมที่ไม่รวมอยู่ในราคาค่าเช่ารถพื้นฐานของเรา
                        สามารถซื้อเพื่มได้ในราคาวันละ 250 บาท ต่อ วัน
                        หากได้ซื้อประกันเพื่ม ในกรณีที่ท่าน มีอุบัตเหตุ หรือก่อความเสียหายแก่รถยนต์ของเรา ท่านไม่ต้องรับผิดชอบค่าเสียหายใดๆทั้งสิ้น
                        <br>
                        ในกรณีที่รถยนต์ของท่านได้รับความเสียหาย / ไม่สามารถใช้งานได้ในสภาพที่ปลอดภัย เนื่องจากอุบัติเหตุ หรืออื่นๆ ทางเรามีบริการรถทดแทนคันใหม่เปลี่ยนให้ท่านฟรีตลอดระยะเวลาการเช่ากับเรา
                        <br>
                        หากท่านประสงค์เช่ารถพร้อมประกัน ชนิด SCDW / No deduct ไม่มีดีดัก ท่านสามารถระบุในการจองของท่านได้ www.carubon.com/จองรถเช่าอุดร หรือสามารถแจ้งกับพนักงานรับจองของเราได้เลย
                        <br>


                        บริการช่วยเหลือฉุกเฉิน
                        <br>
                        ในกรณีที่ท่านประสบอุบัติเหตุิ หรือว่ารถยนต์ที่ได้เช่าไปเกิดการชำรุดระหว่างการเช่า โดยมิใช่ความผิดของท่าน
                        เรามีบริการรถสำรอง เปลี่ยนให้ท่านฟรี ตลอดระยะเวลาระหว่างที่เช่ากับเรา
                        <br>
                        อ่านเพื่มเติม
                        <br>

                        สภาพรถของเรา
                        <br>
                        เรารับประกันว่าสภาพรถยนต์ของเราทุกคันเป็นรถสภาพใหม่ สภาพดี สภาพพร้อมใช้งาน 100% และรถยนต์ของเราทุกคัน จะถูกส่งมอบให้ท่านในสภาพที่สะอาด เหมือนรถใหม่ทุกครั้ง
                        ในกรณีที่ท่านไม่พอใจในสภาพรถยนต์ของเรา เรายินดีคืนเงินค่าเช่า 100% ทุกกรณี
                        <br>

                        วิธีการจอง
                        <br>
                        ท่านสามารถจองรถยนต์ของท่านผ่านหลากหลายช่องทาง เช่น จองออนไลน์ จองผ่านไลน์ E-mail หรือ ผ่านโทรศัพท์
                        <br>
                        หลังจากทางเราได้รับข้อมูลการจองของท่าน ทางเราจะรีบดำเนินยืนยันการจองของท่านภายใน 1 ชม (ในเวลาทำการ) หลังจากได้รับการจอง
                    </p>
                </div>
            </div>
            <?php
            $sql = "SELECT * FROM `car` INNER JOIN type_car 
                on type_car.typecar_id = car.typecar_id where id='$id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) { ?>

                    <div class="col-lg-6">
                        <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                            <h1 class="text-white mb-4">รายละเอียดการเช่ารถ</h1>
                            <form method="POST" action="insert_rent.php">
                                <div class="row g-3">
                                    <div class="col-12 ">
                                        <input type="hidden" name="car_id" value="<?= $id ?>" id="">
                                        <label class="text-white mb-4" for="">ข้อมูลรถ</label>
                                        <br>
                                        <label class="text-white mb-4" for="">รุ่นรถยนต์ : <?= $row['name'] ?></label>
                                        <img src="Admin/uploads/<?= $row['car_img'] ?>" width="200" alt="">

                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <label class="text-white mb-4" for="">เริ่มเช่าวันที่</label>
                                            <input type="date" name="st_date" class="form-control border-0 datetimepicker-input" placeholder="" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <label class="text-white mb-4" for="">สิ้นสุดวันที่</label>

                                            <input type="date" name="en_date" class="form-control border-0 datetimepicker-input" placeholder="" style="height: 55px;">
                                        </div>
                                    </div>
                                    <label class="text-white mb-4" for="">รายละเอียดการเช่า</label>

                                    <div class="col-12 ">
                                        <input type="text" name="name" class="form-control border-0" placeholder="ชื่อ - สกุล" style="height: 55px;">
                                    </div>
                                    <div class="col-12 ">
                                        <input type="text" name="Address" class="form-control border-0" placeholder="ที่อยู่" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="Tel" class="form-control border-0" placeholder="เบอร์โทร์" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" name="Email" class="form-control border-0" placeholder="อีเมล" style="height: 55px;">
                                    </div>

                                    <div class="col-12 col-sm-12">
                                        <input type="text" name="id_card" class="form-control border-0" placeholder="เลขบัตรประชาชน" style="height: 55px;">
                                    </div>

                                    <div class="col-12 col-sm-6"><label class="text-white mb-4" for="">วันออกบัตร</label>
                                        <input type="date" name="st_card" class="form-control border-0" placeholder="" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6"><label class="text-white mb-4" for="">วันหมดอายุบ้ตร</label>
                                        <input type="date" name="ed_card" class="form-control border-0" placeholder="" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div >
                                            <label class="text-white mb-4">อัพโหลดบัตรประชาชน</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input name="fileupload" type="file" class="custom-file-input" id="exampleInputFile">
                                                    <!-- <label class="text-white mb-4" for="exampleInputFile">อัพโหลดบัตรประชาชน</label> -->
                                                </div>
                                                <div class="input-group-append">
                                                    <!-- <span class="input-group-text">Upload</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="checkbox" name="rental_terms" value="1" id=""> <label class="text-white mb-4" for="">ข้าพเจ้ายอมรับข้อกำหนด และเงื่อนไขการให้บริการ</label>
                                        <!-- <textarea class="form-control border-0" placeholder="Special Request"></textarea> -->
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-secondary w-100 py-3" type="submit">เช่ารถ</button>
                                    </div>
                                </div>
                            </form>
                    <?php }
            } ?>
                        </div>
                    </div>
        </div>
    </div>
</div>
<!-- Booking End -->