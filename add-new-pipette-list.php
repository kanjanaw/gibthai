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
                <li class="breadcrumb-item"><a href="pipettes.php">เครื่องมือสอบเทียบ</a></li>
                <li class="breadcrumb-item"><a href="pipettes-list.php">รายการเครื่องมือ</a></li>
                <li class="breadcrumb-item active" aria-current="page">เพิ่มรายการเครื่องมือใหม่</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>เพิ่มรายการเครื่องมือใหม่</h4>
        </div>

        <!-- table menu -->
        <div class="my-md-4 my-2">
                    <!-- เครื่องมือสอบเทียบ tab -->
                        <!-- ข้อมูลเครื่องมือสอบเทียบ -->
                        <h6 class="p-2 bg-e5e5e5 fw-bold">ข้อมูลรายการเครื่องมือ</h6>
                        <div class="row py-3">
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">รหัสรายการเครื่องมือ</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">รายการเครื่องมือ</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ประเภทเครื่องมือ*</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ประเภทย่อยเครื่องมือ*</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">หน่วยนับ</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">สถานะ*</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Active</option>
                                            <option value="">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: ข้อมูลเครื่องมือสอบเทียบ -->

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-grey mx-2" data-bs-dismiss="modal">ยกเลิก</button>
                            <button type="button" class="btn-green">บันทึกข้อมูล</button>
                        </div>
                    <!-- end: เครื่องมือสอบเทียบ tab -->
        </div>
        <!-- end: table menu -->

    </div>
</div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>