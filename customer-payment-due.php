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
                <li class="breadcrumb-item"><a href="customer.php">ลูกค้า</a></li>
                <li class="breadcrumb-item active" aria-current="page">กำหนดการชำระเงิน</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>กำหนดการชำระเงิน</h4>
        </div>

        <form action="">
            <div class="row py-3">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">กำหนดการชำระเงิน*</label>
                        <div class="col-sm-7">
                            <input type="text" name="" class="form-or-style mt-0"/>
                        </div>
                        <label for="" class="col-auto col-form-label"> วัน</label>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- add new -->
                    <a class="btn-black bg-green-00 border-green-00 px-5" type="button" href="add-new-customer.php">เพิ่ม/บันทึก</a>
                </div>
            </div>
        </form>


        <!-- table menu -->
        <div class="row d-flex align-items-center mb-2 mt-4" id="datatable_length">
            <div class="col-6">
                <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
            </div>
            <div class="col-auto g-0">
                <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
            </div>
            <div class="col-auto d-inline-block ms-auto">
                <button type="button" class="btn-grey">นำเข้า Excel</button>
                <button type="button" class="btn-grey">นำออก Excel</button>
            </div>
        </div>
        <!-- end: table menu -->


        <!-- customer payment due table -->
        <div class="table-responsive">
            <table class="table table-hover" id="pipettesTypeTable">
            <thead>
                <tr>
                <th scope="col" data-field="">กำหนดการชำระเงิน</th>
                <th scope="col" data-field="">รายละเอียด</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 0 วัน นับจากวันที่ได้รับสินค้า</td>
                </tr>
                <tr>
                    <td>30 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 30 วัน นับจากวันที่ได้รับสินค้า</td>
                </tr>
                <tr>
                    <td>60 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 60 วัน นับจากวันที่ได้รับสินค้า</td>
                </tr>
                <tr>
                    <td>90 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 90 วัน นับจากวันที่ได้รับสินค้า</td>
                </tr>
                <tr>
                    <td>120 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 120 วัน นับจากวันที่ได้รับสินค้า</td>
                </tr>
                <tr>
                    <td>150 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 150 วัน นับจากวันที่ได้รับสินค้า</td>
                </tr>
                <tr>
                    <td>180 วัน</td>
                    <td>กำหนดการชำระเงิน ภายใน 180 วัน นับจากวันที่ได้รับสินค้า</td>
                </tr>
            </tbody>
            </table>
        </div>
        <!-- end: customer payment due table -->

    </div>
</div>

</body>
</html>
