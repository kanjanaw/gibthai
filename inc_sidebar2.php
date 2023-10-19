<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>

        <div class="wrapper d-flex align-items-stretch">
			<nav class="bg-white sidebar-col p-0" id="sidebar">
			<div class="p-0 my-3">
                <a href="" class=" p-4">
                    <img src="images/logo.png" width="50%" alt="">
                </a>
                <ul class="list-unstyled components mb-5 mt-4">
                <li class="active">
                    <a href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle d-flex justify-content-between align-items-center">หน้าหลัก</a>
                    <ul class="list-unstyled collapse" id="homeSubmenu" style="">
                    <li>
                        <a href="#" class="submenu-sidebar">Summary Report</a>
                    </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Service Calendar</a>
                </li>
                <li>
                <a href="#customerSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between align-items-center">ลูกค้าและคู่ค้า</a>
                <ul class="collapse list-unstyled" id="customerSubmenu">
                    <li>
                        <a href="customer.php" class="submenu-sidebar">ลูกค้าและคู่ค้า</a>
                    </li>
                    <li>
                        <a href="customer-type-address.php" class="submenu-sidebar">ประเภทที่อยู่</a>
                    </li>
                    <li>
                        <a href="customer-payment-due.php" class="submenu-sidebar">กำหนดการชำระเงิน</a>
                    </li>
                </ul>
                </li>
                <li>
                <a href="#pipettesSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between align-items-center">เครื่องมือสอบเทียบ</a>
                <ul class="collapse list-unstyled" id="pipettesSubmenu">
                    <li>
                        <a href="pipettes.php" class="submenu-sidebar">เครื่องมือสอบเทียบ</a>
                    </li>
                    <li>
                        <a href="pipettes-list.php" class="submenu-sidebar">รายการเครื่องมือ</a>
                    </li>
                    <li>
                        <a href="pipettes-configure-toolkit.php" class="submenu-sidebar">กำหนดค่าชุดเครื่องมือ</a>
                    </li>
                    <li>
                        <a href="pipettes-type.php" class="submenu-sidebar">ประเภทเครื่องมือ</a>
                    </li>
                    <li>
                        <a href="pipettes-subtype.php" class="submenu-sidebar">ประเภทย่อยเครื่องมือ</a>
                    </li>
                    <li>
                        <a href="pipettes-manufacturer.php" class="submenu-sidebar">ยี่ห้อ</a>
                    </li>
                    <li>
                        <a href="pipettes-model.php" class="submenu-sidebar">รุ่น</a>
                    </li>
                    <li>
                        <a href="pipettes-volumn.php" class="submenu-sidebar">ขนาด</a>
                    </li>
                    <li>
                        <a href="pipettes-status.php" class="submenu-sidebar">สถานะเครื่องมือ</a>
                    </li>
                </ul>
                </li>
                <li>
                <a href="quotation.php">ใบเสนอราคา</a>
                </li>
                <li>
                <a href="gr-invoice.php">ใบรับ - ส่งเครื่อง</a>
                </li>
                <li>
                <a href="#serviceSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between align-items-center">งานบริการสอบเทียบ</a>
                <ul class="collapse list-unstyled submenu-sidebar" id="serviceSubmenu">
                    <li>
                        <a href="#">งานบริการสอบเทียบ</a>
                    </li>
                    <li>
                        <a href="#">สถานะงานบริการ</a>
                    </li>
                </ul>
                </li>
                <li>
                <a href="#">งานบริการภายนอก</a>
                </li>
                <li>
                <a href="#">เครื่องมือช่าง</a>
                </li>
                <li>
                <a href="#">ตารางงานช่างวิศวกร</a>
                </li>
                <li>
                <a href="car-table.php">ตารางการใช้งานรถยนต์</a>
                </li>
                <li>
                <a href="#userSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between align-items-center">พนักงานและผู้ใช้งาน</a>
                <ul class="collapse list-unstyled" id="userSubmenu">
                    <li>
                        <a href="user-management.php" class="submenu-sidebar">พนักงานและผู้ใช้งาน</a>
                    </li>
                    <li>
                        <a href="user-role.php" class="submenu-sidebar">กำหนดสิทธิ์การใช้งาน</a>
                    </li>
                </ul>
                </li>
                </ul>
	        </div>
    	</nav>

    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-angle-down"></i>
                </button>
                <a class="h5 text-dark px-2 mb-0 fw-bold" href="#">ระบบงานบริการสอบเทียบเครื่องมือ</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="px-2 h5 text-dark" href="#">ปุณพจน์ นิกรนนท์</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-green" href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>





</body>
</html>

<script>
    (function($) {

"use strict";

var fullHeight = function() {

    $('.js-fullheight').css('height', $(window).height());
    $(window).resize(function(){
        $('.js-fullheight').css('height', $(window).height());
    });

};
fullHeight();

$('#sidebarCollapse').on('click', function () {
  $('#sidebar').toggleClass('active');
});

})(jQuery);
</script>
