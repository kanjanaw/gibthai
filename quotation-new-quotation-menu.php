<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>
<?php require('inc_user.php'); ?>

<div class="container-inner">
    <div class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="quotation.php">ใบเสนอราคา</a></li>
                <li class="breadcrumb-item active" aria-current="page">เพิ่มใบเสนอราคาใหม่</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>เพิ่มใบเสนอราคาใหม่</h4>
        </div>

        <div class="my-4">
            <h6 class="p-2 bg-e5e5e5 fw-bold mb-3">สร้างใบเสนอราคาใหม่</h6>
            <div class="col-12 mb-3">
                <a class="btn-black bg-green-00 border-green-00" type="button" href="add-new-quotation.php">สร้างใบเสนอราคาใหม่</a>
            </div>

            <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold mb-3">สร้างใบเสนอราคาใหม่ โดย Generate ข้อมูลจากเลขใบแจ้งรับบริการ หรือเลขที่งานบริการสอบเทียบ</h6>
                <!-- table menu -->
                <div class="row d-flex align-items-center">
                    <div class="col-6">
                        <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                    </div>
                    <div class="col-auto g-0">
                        <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                    </div>
                    <div class="col-auto d-inline-block ms-auto">
                        <a type="button" class="btn-black bg-blue border-blue" href="add-new-quotation-by-pipettes.php">สร้างใบเสนอราคาใหม่จากใบงานบริการ</a>
                    </div>
                </div>
                <!-- end: table menu -->

                <!-- report table -->
                <div class="table-responsive mt-3">
                    <table class="table table-striped" id="customerTable">
                    <thead>
                        <tr>
                        <th scope="col" data-field="date">วันที่</th>
                        <th scope="col" data-field="">เลขที่ใบเสนอราคา</th>
                        <th scope="col" data-field="">เลขที่ใบงานบริการ</th>
                        <th scope="col" data-field="">เลขที่แจ้งขอรับบริการ</th>
                        <th scope="col" data-field="">บริษัท</th>
                        <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                        <th scope="col" data-field="">ผู้ติดต่อ</th>
                        <th scope="col" data-field="">สถานะ</th>
                        <th scope="col" data-field="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>August 1, 2023</td>
                            <td>SOyymm-xxxx</td>
                            <td>CSyymm-xxxx</td>
                            <td>RQyymm-xxxx</td>
                            <td>ACES PHIL PRODUCERS CORP</td>
                            <td>-</td>
                            <td>สุเมธี</td>
                            <td class="text-center"><span class="green-badge">Status 1</span></td>
                            <td><button class="btn my-0 py-0 hover-text-red"><i class="fa-regular fa-pen-to-square"></i> แก้ไข</button></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <!-- end: report table -->
        </div>



    </div>
</div>

</body>
</html>
