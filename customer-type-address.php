<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
<?php   $pageName = "customer-type-address";  ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>

<div class="px-4">
    <div class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="customer.php">ลูกค้า</a></li>
                <li class="breadcrumb-item active" aria-current="page">ประเภทที่อยู่</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>ประเภทที่อยู่</h4>
        </div>

        <!-- form type address -->
        <form action="">
            <div class="row py-md-3">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ประเภทที่อยู่*</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto col-12">
                    <!-- add new -->
                    <div class="d-grid gap-2">
                        <a class="btn-black bg-green-00 border-green-00 py-1 px-5 text-center" type="button" href="">เพิ่ม/บันทึก</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- end: form type address -->


        <!-- table menu -->
        <div class="row d-flex align-items-center mb-2 mt-4" id="datatable_length">
            <div class="col-md-8 order-1 order-md-0 mt-2 mt-md-0">
                <div class="row">
                    <div class="col-8">
                        <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                    </div>
                    <div class="col-4">
                        <div class="d-grid d-md-inline">
                            <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-auto col-12 text-center ms-auto py-1 py-md-0 order-0 order-md-1">
                <button class="btn-grey" type="button" >นำเข้า Excel</button>
                <button class="btn-grey" type="button" >นำออก Excel</button>
            </div>
        </div>
        <!-- end: table menu -->


        <!-- customer address table -->
        <div class="table-responsive">
            <table class="table table-hover text-nowrap" id="pipettesTypeTable">
            <thead>
                <tr>
                <th scope="col">ประเภทที่อยู่</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ที่อยู่หลัก</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#editCustomerAddressForm" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>ใบกำกับภาษี</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>ใบรับรองผลการสอบเทียบ (อังกฤษ)</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>ติดตั้งเครื่องมือ</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
        <!-- end: customer address table -->
    </div>
</div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>