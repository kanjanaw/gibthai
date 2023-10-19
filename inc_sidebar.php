<!-- <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>

<div class=" bg-white z-1 position-fixed sidebar-col" style="width: 270px; min-height: 100vh;">
    <a href="" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none p-4">
        <img src="images/logo.png" width="65%" alt="">
    </a>

    <ul class="list-unstyled ps-0">
      <li>
        <a class="menu-sidebar collapsed" href="" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
        หน้าหลัก &nbsp;<i class="fa-solid fa-chevron-down"></i>
        </a>
        <div class="collapse submenu-sidebar" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Summary Report</a></li>
          </ul>
        </div>
      </li>

      <li>
        <a class="menu-sidebar" href="">Service Calendar</a>
      </li>

      <li>
        <a class="menu-sidebar collapsed" href="customer.php" data-bs-toggle="collapse" data-bs-target="#customers-collapse" aria-expanded="false">
          ลูกค้า &nbsp;<i class="fa-solid fa-chevron-down"></i>
        </a>
        <div class="collapse submenu-sidebar" id="customers-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="customer.php" class="link-dark rounded">ข้อมูลลูกค้า</a></li>
            <li><a href="customer-type-address.php" class="link-dark rounded">ประเภทที่อยู่</a></li>
            <li><a href="customer-payment-due.php" class="link-dark rounded">กำหนดการชำระเงิน</a></li>
          </ul>
        </div>
      </li>

      <li>
        <a class="menu-sidebar collapsed" href=""  data-bs-toggle="collapse" data-bs-target="#pipettes-collapse" aria-expanded="false">
          เครื่องมือสอบเทียบ &nbsp;<i class="fa-solid fa-chevron-down"></i>
        </a>
        <div class="collapse submenu-sidebar" id="pipettes-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="pipettes.php" class="link-dark rounded">เครื่องมือสอบเทียบ</a></li>
            <li><a href="pipettes-list.php" class="link-dark rounded">รายการเครื่องมือ</a></li>
            <li><a href="pipettes-configure-toolkit.php" class="link-dark rounded">กำหนดค่าชุดเครื่องมือ</a></li>
            <li><a href="pipettes-type.php" class="link-dark rounded">ประเภทเครื่องมือ</a></li>
            <li><a href="pipettes-subtype.php" class="link-dark rounded">ประเภทย่อยเครื่องมือ</a></li>
            <li><a href="pipettes-manufacturer.php" class="link-dark rounded">ยี่ห้อ</a></li>
            <li><a href="pipettes-model.php" class="link-dark rounded">รุ่น</a></li>
            <li><a href="pipettes-volumn.php" class="link-dark rounded">ขนาด</a></li>
            <li><a href="pipettes-status.php" class="link-dark rounded">สถานะเครื่องมือ</a></li>
          </ul>
        </div>
      </li>

      <li>
        <a class="menu-sidebar" href="quotation.php">ใบเสนอราคา</a>
      </li>

      <li>
        <a class="menu-sidebar" href="gr-invoice.php">ใบรับ - ส่งเครื่อง</a>
      </li>

      <li>
        <a class="menu-sidebar collapsed" href="" data-bs-toggle="collapse" data-bs-target="#service-collapse" aria-expanded="false">
          งานบริการสอบเทียบ &nbsp;<i class="fa-solid fa-chevron-down"></i>
        </a>
        <div class="collapse submenu-sidebar" id="service-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">งานบริการสอบเทียบ</a></li>
            <li><a href="#" class="link-dark rounded">สถานะงานบริการ</a></li>
          </ul>
        </div>
      </li>

      <li>
        <a class="menu-sidebar" href="">งานบริการภายนอก</a>
      </li>

      <li>
        <a class="menu-sidebar" href="">เครื่องมือช่าง</a>
      </li>

      <li>
        <a class="menu-sidebar" href="">ตารางงานช่างวิศวกร</a>
      </li>

      <li>
        <a class="menu-sidebar" href="car-table.php">ตารางการใช้งานรถยนต์</a>
      </li>

      <li>
        <a class="menu-sidebar collapsed" href="" data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="false">
          พนักงานและผู้ใช้งาน &nbsp;<i class="fa-solid fa-chevron-down"></i>
        </a>
        <div class="collapse submenu-sidebar" id="user-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="user-management.php" class="link-dark rounded">พนักงานและผู้ใช้งาน</a></li>
            <li><a href="user-role.php" class="link-dark rounded">กำหนดสิทธิ์การใช้งาน</a></li>
          </ul>
        </div>
      </li>

    </ul>
  </div>

  </div>
</div>

</body>
</html> -->


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
                <li >
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

                <li <?php if(in_array(@$pageName, ["customer", "customer-type-address", "customer-payment-due"])) echo 'class="active"'; ?>>
                <a href="#customerSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between align-items-center">ลูกค้าและคู่ค้า</a>
                <ul class="collapse list-unstyled" id="customerSubmenu">
                    <li <?php if(@$pageName=="customer") echo 'class="active"'; ?>>
                        <a href="customer.php" class="submenu-sidebar">ข้อมูลลูกค้าและคู่ค้า</a>
                    </li>
                    <li <?php if(@$pageName=="customer-type-address") echo 'class="active"'; ?>>
                        <a href="customer-type-address.php" class="submenu-sidebar">ประเภทที่อยู่</a>
                    </li>
                    <li <?php if(@$pageName=="customer-payment-due") echo 'class="active"'; ?>>
                        <a href="customer-payment-due.php" class="submenu-sidebar">กำหนดการชำระเงิน</a>
                    </li>
                </ul>
                </li>

                <li <?php if(in_array(@$pageName, ["pipettes-list", "pipettes", "pipettes-type","pipettes-subtype","pipettes-manufacturer",
                "pipettes-model","pipettes-volumn","pipettes-status",])) 
                echo 'class="active"'; 
                ?>>
                <a href="#pipettesSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between align-items-center">เครื่องมือสอบเทียบ</a>
                <ul class="collapse list-unstyled" id="pipettesSubmenu">
                    <li <?php if(@$pageName=="pipettes-list") echo 'class="active"'; ?>>
                        <a href="pipettes-list.php" class="submenu-sidebar">ข้อมูลรายการเครื่องมือ</a>
                    </li>
                    <li <?php if(@$pageName=="pipettes") echo 'class="active"'; ?>>
                        <a href="pipettes.php" class="submenu-sidebar">ข้อมูลเครื่องมือสอบเทียบ</a>
                    </li>
                    <!-- <li>
                        <a href="pipettes-configure-toolkit.php" class="submenu-sidebar">กำหนดค่าชุดเครื่องมือ</a>
                    </li> -->
                    <li <?php if(@$pageName=="pipettes-type") echo 'class="active"'; ?>>
                        <a href="pipettes-type.php" class="submenu-sidebar">ประเภทเครื่องมือ</a>
                    </li>
                    <li <?php if(@$pageName=="pipettes-subtype") echo 'class="active"'; ?>>
                        <a href="pipettes-subtype.php" class="submenu-sidebar">ประเภทย่อยเครื่องมือ</a>
                    </li>
                    <li <?php if(@$pageName=="pipettes-manufacturer") echo 'class="active"'; ?>>
                        <a href="pipettes-manufacturer.php" class="submenu-sidebar">ยี่ห้อ</a>
                    </li>
                    <li <?php if(@$pageName=="pipettes-model") echo 'class="active"'; ?>>
                        <a href="pipettes-model.php" class="submenu-sidebar">รุ่น</a>
                    </li>
                    <li <?php if(@$pageName=="pipettes-volumn") echo 'class="active"'; ?>>
                        <a href="pipettes-volumn.php" class="submenu-sidebar">ขนาด</a>
                    </li>
                    <li <?php if(@$pageName=="pipettes-status") echo 'class="active"'; ?>>
                        <a href="pipettes-status.php" class="submenu-sidebar">สถานะเครื่องมือ</a>
                    </li>
                </ul>
                </li>
                <li>
                <a href="quotation.php">ใบเสนอราคา</a>
                </li>

                <li <?php if(in_array(@$pageName, ["gr-invoice2", "gr-invoice-status", "gr-invoice-method"])) 
                echo 'class="active"'; 
                ?>>
                <a href="#grInvoiceSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between align-items-center">ใบรับ - ส่งเครื่อง</a>
                <ul class="collapse list-unstyled" id="grInvoiceSubmenu">
                    <li <?php if(@$pageName=="gr-invoice2") echo 'class="active"'; ?>>
                        <a href="gr-invoice2.php" class="submenu-sidebar">ข้อมูลใบรับ - ส่งเครื่อง</a>
                    </li>
                    <li <?php if(@$pageName=="gr-invoice-status") echo 'class="active"'; ?>>
                        <a href="gr-invoice-status.php" class="submenu-sidebar">สถานะใบรับ - ส่งเครื่อง</a>
                    </li>
                    <li <?php if(@$pageName=="gr-invoice-method") echo 'class="active"'; ?>>
                        <a href="gr-invoice-method.php" class="submenu-sidebar">วิธีการรับ - ส่งเครื่อง</a>
                    </li>
                </ul>
                </li>

                <li <?php if(in_array(@$pageName, ["car-table"])) 
                echo 'class="active"'; 
                ?>>
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
                <li <?php if(@$pageName=="car-table") echo 'class="active"'; ?>>
                <a href="car-table.php">ตารางการใช้งานรถยนต์</a>
                </li>

                <li <?php if(in_array(@$pageName, ["user-management","user-role"])) 
                echo 'class="active"'; 
                ?>>
                <a href="#userSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between align-items-center">พนักงานและผู้ใช้งาน</a>
                <ul class="collapse list-unstyled" id="userSubmenu">
                    <li <?php if(@$pageName=="user-management") echo 'class="active"'; ?>>
                        <a href="user-management.php" class="submenu-sidebar">พนักงานและผู้ใช้งาน</a>
                    </li>
                    <li <?php if(@$pageName=="user-role") echo 'class="active"'; ?>>
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

<script>
$(document).ready(function() {
    $('li.active').each(function() {
        $(this).find('.list-unstyled.collapse').addClass('show');
    });
});
</script>
