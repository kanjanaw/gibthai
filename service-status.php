<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
<?php   $pageName = "pipettes-subtype";  ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>

<div class="px-4">
    <div class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="service.php">งานบริการสอบเทียบ</a></li>
                <li class="breadcrumb-item active" aria-current="page">สถานะงานบริการสอบเทียบ</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>สถานะงานบริการสอบเทียบ</h4>
        </div>

        <form action="">
            <div class="row py-md-3">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ลำดับขั้นตอนงาน*</label>
                        <div class="col-sm-8">
                            <input type="number" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ขั้นตอนงาน*</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style mt-0">
                                <option value="">option 1</option>
                                <option value="">option 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ลำดับขั้นตอนงานหลัก*</label>
                        <div class="col-sm-8">
                            <input type="number" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">สถานะงานหลัก*</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ลำดับขั้นตอนงานย่อย*</label>
                        <div class="col-sm-8">
                            <input type="number" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">สถานะงานย่อย*</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3">
                    <div class="row">
                        <label for="" class="col-sm-2 col-12 col-form-label">ประเภทรับบริการ :</label>
                        <div class="col-sm-10 col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    สอบเทียบห้องปฏิบัติการบริษัทฯ
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    สอบเทียบนอกสถานที่
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">แผนก/ส่วนของผู้ใช้งาน*</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style mt-0">
                                <option value="">option 1</option>
                                <option value="">option 2</option>
                            </select>
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


        <!-- service status table -->
        <div class="table-responsive">
            <table class="table table-hover text-nowrap" id="serviceStatusTable">
            <thead>
                <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">ขั้นตอนงาน</th>
                <th scope="col">สถานะงานหลัก</th>
                <th scope="col">สถานะงานย่อย</th>
                <th scope="col">ประเภทรับบริการ</th>
                <th scope="col">แผนก</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            </table>
        </div>
        <!-- end: service status table -->

    </div>
</div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>