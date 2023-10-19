<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
<?php   $pageName = "customer-payment-due";  ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>

<div class="px-4">
    <div class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="customer.php">ลูกค้า</a></li>
                <li class="breadcrumb-item active" aria-current="page">กำหนดการชำระเงิน</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>กำหนดการชำระเงิน</h4>
        </div>

        <!-- form payment due -->
        <form action="">
            <div class="row py-md-3">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">กำหนดการชำระเงิน*</label>
                        <div class="col-sm-8">
                            <input type="number" name="" class="form-or-style mt-0" placeholder="ระบุจำนวนวัน"/>
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
        <!-- end: form payment due -->


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


        <!-- customer payment due table -->
        <div class="table-responsive">
            <table class="table table-hover text-nowrap" id="pipettesTypeTable">
            <thead>
                <tr>
                <th scope="col" data-field="">กำหนดการชำระเงิน</th>
                <th scope="col" data-field="">รายละเอียด</th>
                <th scope="col" data-field="">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 0 วัน นับจากวันที่ได้รับสินค้า</td>
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
                    <td>30 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 30 วัน นับจากวันที่ได้รับสินค้า</td>
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
                    <td>60 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 60 วัน นับจากวันที่ได้รับสินค้า</td>
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
                    <td>90 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 90 วัน นับจากวันที่ได้รับสินค้า</td>
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
                    <td>120 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 120 วัน นับจากวันที่ได้รับสินค้า</td>
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
                    <td>150 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 150 วัน นับจากวันที่ได้รับสินค้า</td>
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
                    <td>180 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 180 วัน นับจากวันที่ได้รับสินค้า</td>
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
        <!-- end: customer payment due table -->

        <!-- Modal delete -->
        <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0 justify-content-center">
                        <h4>ยืนยันการลบ?</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row text-center">
                            <div class="d-grid col-6">
                                <button type="button" class="btn-lg btn-grey bg-green-00">ตกลง</button>
                            </div>
                            <div class="d-grid col-6">
                                <button type="button" class="btn-lg btn-grey" data-bs-dismiss="modal">ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Modal delete -->

        <!-- Modal edit customer address -->
        <div class="modal fade" id="editCustomerAddressForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editCustomerAddressForm" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0 bg-e5e5e5 py-2">
                        <h6 class="py-2 fw-bold mb-0">กำหนดการชำระเงิน :</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">
                        <label for="" class="col-sm-2 col-form-label">กำหนดการชำระเงิน :</label>
                        <div class="col-auto">
                            <input type="number" name="" class="form-or-style mt-0" value="0"/>
                        </div>
                        <label for="" class="col-auto col-form-label">วัน</label>
                    </div>
                    <div class="modal-footer pt-0 border-0">
                        <button type="button" class="btn-grey " data-bs-dismiss="modal">ยกเลิก</button>
                        <button type="button" class="btn-green">บันทึกข้อมูล</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Modal edit customer address -->

    </div>
</div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>
