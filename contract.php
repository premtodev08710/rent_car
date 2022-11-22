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


            <div align="center" class="col-md-10 offset-md-1">

                <table>
                    <tr  >
                        <td colspan="2" align="center">
                                <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2>
                            หนังสือสัญญาเช่า</td>
                    </tr>
                    <?php
                    function DateThai($strDate)
                    {
                        $strYear = date("Y", strtotime($strDate)) + 543;
                        $strMonth = date("n", strtotime($strDate));
                        $strDay = date("j", strtotime($strDate));
                        $strHour = date("H", strtotime($strDate));
                        $strMinute = date("i", strtotime($strDate));
                        $strSeconds = date("s", strtotime($strDate));
                        $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
                        $strMonthThai = $strMonthCut[$strMonth];
                        return "$strDay $strMonthThai $strYear";
                    }


                    ?>
                    <tr>
                        <td colspan="2" align="right">เขียนที่ ร้านเช่ารถอุบลราชธานี</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><br> เมื่อวันที่ <?= DateThai(date("d-m-Y")); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; โดยหนังสือฉบับนี้ ข้าพเจ้า เอกอลงณ์กร จอมขวัญ
                            อำเภอนาจะหลวย จังหวัดอุบลราชธานี ซึ่งต่อไปในสัญญานี้เรียกว่า “ผู้ให้เช่า” ฝ่ายหนึ่งกับ
                            ข้าพเจ้า <?= $row['name'] ?> ที่อยู่ <?= $row['Address'] ?>
                            ถือบัตรประชาชนเลขที่ <?= $row['id'] ?> ออกให้โดย ………………… เมื่อวันที่ …เดือน ……………
                            พ.ศ. ซึ่งต่อไปในสัญญานี้เรียกว่า “ผู้เช่า” อีกฝ่ายหนึ่ง ทั้งสองฝ่ายตกลงทำสัญญากันดังมีข้อความต่อไปนี้ คือ
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ข้อ 1. ผู้ให้เช่าตกลงให้เช่าและผู้เช่าตกลงเช่ารถ รุ่น <?= $row['carname'] ?> ป้ายทะเบียน <?= $row['car_id'] ?>
                            โดยมีวัตถุประสงค์เพื่อใช้ในการท่องเที่ยว
                            มีกำหนดเวลาเช่า เริ่มตั้งแต่วันที่ <?= DateThai($row['st_date']) ?> ถึงวันที่ <?= DateThai($row['en_date']) ?> ( วัน / เดือน / ปี )
                            โดยผู้เช่าตกลงให้ค่าเช่าแก่ผู้ให้เช่าในราคา <?= $row['rent_price'] ?> บาท <?php function Convert($amount_number)
                                                                                                        {
                                                                                                            $amount_number = number_format($amount_number, 2, ".", "");
                                                                                                            $pt = strpos($amount_number, ".");
                                                                                                            $number = $fraction = "";
                                                                                                            if ($pt === false)
                                                                                                                $number = $amount_number;
                                                                                                            else {
                                                                                                                $number = substr($amount_number, 0, $pt);
                                                                                                                $fraction = substr($amount_number, $pt + 1);
                                                                                                            }

                                                                                                            $ret = "";
                                                                                                            $baht = ReadNumber($number);
                                                                                                            if ($baht != "")
                                                                                                                $ret .= $baht . "บาท";

                                                                                                            $satang = ReadNumber($fraction);
                                                                                                            if ($satang != "")
                                                                                                                $ret .=  $satang . "สตางค์";
                                                                                                            else
                                                                                                                $ret .= "ถ้วน";
                                                                                                            return $ret;
                                                                                                        }

                                                                                                        function ReadNumber($number)
                                                                                                        {
                                                                                                            $position_call = array("แสน", "หมื่น", "พัน", "ร้อย", "สิบ", "");
                                                                                                            $number_call = array("", "หนึ่ง", "สอง", "สาม", "สี่", "ห้า", "หก", "เจ็ด", "แปด", "เก้า");
                                                                                                            $number = $number + 0;
                                                                                                            $ret = "";
                                                                                                            if ($number == 0) return $ret;
                                                                                                            if ($number > 1000000) {
                                                                                                                $ret .= ReadNumber(intval($number / 1000000)) . "ล้าน";
                                                                                                                $number = intval(fmod($number, 1000000));
                                                                                                            }

                                                                                                            $divider = 100000;
                                                                                                            $pos = 0;
                                                                                                            while ($number > 0) {
                                                                                                                $d = intval($number / $divider);
                                                                                                                $ret .= (($divider == 10) && ($d == 2)) ? "ยี่" : ((($divider == 10) && ($d == 1)) ? "" : ((($divider == 1) && ($d == 1) && ($ret != "")) ? "เอ็ด" : $number_call[$d]));
                                                                                                                $ret .= ($d ? $position_call[$pos] : "");
                                                                                                                $number = $number % $divider;
                                                                                                                $divider = $divider / 10;
                                                                                                                $pos++;
                                                                                                            }
                                                                                                            return $ret;
                                                                                                        } ?> (<?= Convert($row['rent_price']) ?>)
                            มีกำหนดชำระในวันรับรถ
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td colspan="2">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อ 2. ผู้เช่าได้ตรวจดูทรัพย์สินที่เช่าแล้วเห็นวาทุกสิ่งอยูในสภาพเรียบร้อยใช้การได้อย่างสมบูรณ์จะดูแลทรัพย์สิน
                            ที่เช่ามิได้ให้สูญหายและบำรุงรักษาให้อยูในสภาพดีอยู่เสมอพร้อมที่จะส่งมอบคืนตามสภาพเดิมทุกประการและตกลงยอมให้
                            ผู้ให้เช่าหรือตัวแทน เข้าตรวจดูทรัพย์สินที่เช่าได้ทุกเวลา ภายหลังที่ได้แจ้งความประสงค์ให้ผู้เช่าทราบแล้ว
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อ 3. ผู้เช่าไม่มีสิทธินำทรัพย์สินที่เช่าออกให้ผู้อื่นเช่าช่วง หรือทำนิติกรรมใด ๆ กับผู้อื่น ในอันที่จะเป็นผล
                           <br> ก่อให้เกิดความผูกพันในทรัพย์สินที่เช่า ไม่วาโดยตรงหรือโดยปริยายและจะไม่ทำการดัดแปลงหรือต่อเติมทรัพย์สินที่เช่าไม่
                            ว่าทั้งหมดหรือบางส่วนเว้นแต่จะได้รับความยินยอมเป็นหนังสือจากผู้ให้เช่าแกละหากผู้เช่าได้ทำการดัดแปลงหรือต่อเติมสิ่ง
                            ใดตามที่ได้รับความยินยอมเมื่อใดแล้ว ผู้เช่ายอมยกกรรมสิทธิ์ในทรัพย์สินสิ่งนั้น ให้ตกเป็นของผู้ให้เช่านับแต่เมื่อนั้นด้วย
                            ทั้งสิ้น
                            <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อ 4. เมื่อผู้เช่ากระทำผิดสัญญาข้อหนึ่งข้อใด ผู้ให้เช่ามีสิทธิบอกเลิกสัญญาได้ทันที และผู้เช่ายอมชดใช้
                            ค่าธรรมเนียมกับค่าทนายความจนค่าพาหนะและค่าใช้จ่ายในการติดตามทวงถามให้แก่ผู้ให้เช่าจนครบถ้วนหากมี
                            ความเสียหายดังกล่าวเกิดขึ้นเพราะผู้เช่าเป็นฝ่ายผิดสัญญาคู่สัญญาได้อ่านและเข้าใจข้อความดีแล้ว จึงลงลายมือชื่อไว้เป็นสำคัญต่อหน้าพยาน
                        </td>
                    </tr>
                    <tr>
                        
                    <tr align="center">
                        
                        <td> <br><br><br><br> ลงชื่อ……………………………………ผู้ให้เช่า </td>
                        <td> <br><br><br><br> ลงชื่อ……………………………………ผู้เช่า</td>
                    </tr>
                    <tr align="center">
                        <td> (เอกอลงณ์กร จอมขวัญ) </td>
                        <td> ( <?= $row['name'] ?> )</td>
                    </tr>
                    <tr align="center">
                        <td> <br><br><br><br>ลงชื่อ……………………………………พยาน </td>
                        <td><br><br><br><br> ลงชื่อ……………………………………พยาน </td>
                    </tr >
                    <tr align="center">
                        <td> (……………………………………) </td>
                        <td> (……………………………………)</td>
                    </tr>
                
                    </tr>
                     </table>
                <!--<p> <label for="">
                        <h3> ข้อมูลการจอง </h3>
                    </label></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ชื่อ</th>
                            <th scope="col"></th>

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
                            <td><?= $row['st_date'] . ' ถึง ' . $row['en_date'] ?></td>

                        </tr>
                        <tr>
                            <th scope="row">ค่าใช้จ่าย </th>
                            <td><?= $row['rent_price'] ?></td>

                        </tr>

                    </tbody>
                </table> -->


            </div>

    <?php
        }
    } ?>
    <!-- Navbar End -->