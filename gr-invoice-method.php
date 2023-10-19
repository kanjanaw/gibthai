<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>


<div class="px-4">
    <div class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="gr-invoice2.php">ใบรับ-ส่งเครื่องมือสอบเทียบ</a></li>
                <li class="breadcrumb-item active" aria-current="page">วิธีการรับ - ส่งเครื่องมือสอบเทียบ</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>วิธีการรับ - ส่งเครื่องมือสอบเทียบ</h4>
        </div>

        <form action="">
            <div class="row py-md-3">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">วิธีการรับ - ส่งเครื่องมือ*</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">สถานะ*</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style mt-0">
                                <option value="">Active</option>
                                <option value="">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-flex justify-content-center justify-content-md-end align-items-center mt-md-0 mt-2">
                    <div class="d-grid gap-2">
                        <a class="btn-black bg-green-00 border-green-00 py-1 px-5 text-center" type="button" href="">เพิ่ม/บันทึก</a>
                    </div>
                </div>
            </div>
        </form>


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


        <!-- pipettes model table -->
        <div class="table-responsive">
            <table class="table table-hover text-nowrap" id="pipettesTypeTable">
            <thead>
                <tr>
                <th scope="col">วิธีการรับ - ส่งเครื่องมือ</th>
                <th scope="col">สถานะ</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ลูกค้านำส่งเครื่องมาที่บริษัทเอง</td>
                    <td></td>
                    <td><a href="#" class="text-dark hover-text-red"title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-pen-to-square"></i></a></td>
                </tr>
                <tr>
                    <td>ลูกค้านำส่งเครื่องผ่านขนส่ง</td>
                    <td></td>
                    <td><a href="#" class="text-dark hover-text-red"title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-pen-to-square"></i></a></td>
                </tr>
                <tr>
                    <td>ลูกค้านำส่งเครื่องผ่านบริษัท Dealer</td>
                    <td></td>
                    <td><a href="#" class="text-dark hover-text-red"title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-pen-to-square"></i></a></td>
                </tr>
                <tr>
                    <td>บริษัทฯ เข้ารับเครื่องที่ Site ลูกค้า</td>
                    <td></td>
                    <td><a href="#" class="text-dark hover-text-red"title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-pen-to-square"></i></a></td>
                </tr>
                <tr>
                    <td>บริษัทฯ ส่งเครื่องคืนที่ Site ลูกค้า</td>
                    <td></td>
                    <td><a href="#" class="text-dark hover-text-red"title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-pen-to-square"></i></a></td>
                </tr>
                <tr>
                    <td>บริษัทฯ ส่งเครื่องคืนผ่านขนส่ง</td>
                    <td></td>
                    <td><a href="#" class="text-dark hover-text-red"title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-pen-to-square"></i></a></td>
                </tr>
                <tr>
                    <td>บริษัทฯ ส่งเครื่องคืนผ่านบริษัท Dealer</td>
                    <td></td>
                    <td><a href="#" class="text-dark hover-text-red"title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-pen-to-square"></i></a></td>
                </tr>
            </tbody>
            </table>
        </div>
        <!-- end: pipettes model table -->

    </div>
</div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>
