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
                <li class="breadcrumb-item active" aria-current="page">ประเภทที่อยู่</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>ประเภทที่อยู่</h4>
        </div>

        <form action="">
            <div class="row py-3">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ประเภทที่อยู่*</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- add new -->
                    <a class="btn-black bg-green-00 border-green-00 py-1 px-5" type="button" href="add-new-customer.php">เพิ่ม/บันทึก</a>
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


        <!-- customer address table -->
        <div class="table-responsive">
            <table class="table table-hover" id="pipettesTypeTable">
            <thead>
                <tr>
                <th scope="col" data-field="pipetttesType">ประเภทเครื่องมือสอบเทียบ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ที่อยู่หลัก</td>
                </tr>
                <tr>
                    <td>ใบกำกับภาษี</td>
                </tr>
                <tr>
                    <td>ใบรับรองผลการสอบเทียบ (อังกฤษ)</td>
                </tr>
                <tr>
                    <td>ติดตั้งเครื่องมือ</td>
                </tr>
            </tbody>
            </table>
        </div>
        <!-- end: customer address table -->

    </div>
</div>

</body>
</html>
