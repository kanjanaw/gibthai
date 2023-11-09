<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
</head>
<body>
<?php require('inc_topmenu.php'); ?>

<!-- <div class="bg-black-333-50"></div> -->
<!-- <div class="bg-white-faf-50"></div>
<div class="bg-white-faf-50"></div>
<div class="bg-green"></div> -->

    <div class="container-fluid h-100">
        <div class="row" style="height: 92vh;">
            <div class="col-xl-6 col-12 g-0">
                <div class="p-5 bg-black-333 text-light" id="bgColorBlack">
                    <h3 class="font-weight-700 pt-3">บริการสอบเทียบเครื่องมือวัด</h3>
                    <p>ได้รับการรับรองมาตรฐานห้องปฎิบัติการสอบเทียบ ISO/IEC 17025 ของเครื่องมือ ไมโครไปเปต ขอบข่ายที่ได้รับการรับรอง 0.1 ul. - 10 ml.</p>
                    <p>ห้องปฎิบัติการเป็นห้องที่สมบูรณ์แบบ ทั้งเครื่องมือ อุปกรณ์ที่ทันสมัย ตลอดจนบุคลากรที่มีคุณภาพ มีความรู้และประสบการณ์ พร้อมให้บริการสอบเทียบอย่างเต็มประสิทธิภาพ และบริการหลังการสอบเทียบ รวมทั้งการการันตีคุณภาพงานสอบสอบเทียบ</p>
                    <a href="form-request-service.php"><button type="button" class="btn-green-00">ฟอร์มขอใช้บริการสอบเทียบ</button></a>
                </div>
                <div class="d-flex justify-content-center align-items-center py-3" style="min-height: 45%">
                    <img src="images/cer1.jpg" alt="" class="img-fluid" width="30%">
                    <img src="images/nc.jpg" alt=""  class="img-fluid" width="30%">
                </div>
            </div>

            <div class="col-xl-6 col-12 g-0">
                <div style="min-height: 30%;" class="py-3">
                    <h3 class="font-weight-700 px-5 pt-5">ติดตามสถานะการบริการสอบเทียบ</h3>
                    <form class="d-flex px-5 py-3">
                        <input class="form-control form-tracking w-100" type="search" placeholder="กรอก Request ID หรือ Service ID " aria-label="Tracking">
                        <button class="btn-green-00 px-5" type="button" id="btnTracking" onclick="showServiceStatus()">ติดตาม</button>
                    </form>

                    <!-- Service Status -->
                    <div class="container d-none" id="serviceStatus" style="padding: 3rem 4rem; padding-top: 0;">
                                <ul class="timeline">
                                    <!--status item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon active"></div>
                                        <p class="active">รับเข้าระบบ</p>
                                    </li>
                                    <!--end: status item-->
                                    <!--status item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon active"></div>
                                        <p class="active">บริษัทตรวจเช็ครายละเอียด</p>
                                    </li>
                                    <!--end: status item-->
                                    <!--status item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon active"></div>
                                        <p class="active">ออกใบเสนอราคา</p>
                                    </li>
                                    <!--end: status item-->
                                    <!--status item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon"></div>
                                        <p>ได้รับการอนุมัติสอบเทียบ</p>
                                    </li>
                                    <!--end: status item-->
                                    <!--status item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon"></div>
                                        <p>ทำการนัดหมายรับส่งเครื่อง / Onsite</p>
                                    </li>
                                    <!--end: status item-->
                                    <!--status item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon"></div>
                                        <p>เครื่องมืออยู่ระหว่างการสอบเทียบ</p>
                                    </li>
                                    <!--end: status item-->
                                    <!--status item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon"></div>
                                        <p>เครื่องของท่านสอบเทียบเสร็จเรียบร้อยแล้ว</p>
                                    </li>
                                    <!--end: status item-->
                                    <!--status item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon"></div>
                                        <p>บิลเปิดเรียบร้อยแล้วพร้อมส่งงานคืน</p>
                                    </li>
                                    <!--end: status item-->
                                    <!--status item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon"></div>
                                        <p>ส่งงานสอบเทียบลูกค้า</p>
                                    </li>
                                    <!--end: status item-->
                                </ul>
                            </div>
                            <!-- end: Service Status -->
                </div>

                <div class="d-flex align-items-start flex-column p-5" id="bgImgGreen">
                    <h4 class="font-weight-700 text-light">All Makes,</h4>
                    <h4 class="font-weight-700 text-light">All Models,</h4>
                    <h4 class="font-weight-700 text-light">All Volume,</h4>
                    <h3 class="font-weight-700 text-light mx-auto mt-auto">One Company</h3>
                </div>
            </div>

        </div>
    </div>



<?php require('inc_footer.php'); ?>
</body>
</html>

<script>
    function showServiceStatus() {
        document.getElementById("serviceStatus").classList.remove("d-none");
        document.getElementById("serviceStatus").classList.add("show");

        document.getElementById("bgImgGreen").classList.add("d-none");
    }
</script>