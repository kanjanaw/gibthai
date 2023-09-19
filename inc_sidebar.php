<!DOCTYPE html>
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
        <a class="menu-sidebar" href="">ใบรับ - ส่งเครื่อง</a>
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
</html>