<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
<?php   $pageName = "pipettes-configure-toolkit";  ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>

<div class="px-4">
    <div class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="pipettes.php">เครื่องมือสอบเทียบ</a></li>
                <li class="breadcrumb-item active" aria-current="page">กำหนดค่าชุดเครื่องมือ</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>กำหนดค่าชุดเครื่องมือ</h4>
        </div>

        <form action="">
            <div class="row py-md-3">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ประเภทเครื่องมือสอบเทียบ*</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ประเภทย่อยเครื่องมือสอบเทียบ</label>
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
                        <label for="" class="col-sm-4 col-form-label">รุ่นเครื่องมือสอบเทียบ*</label>
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
                        <label for="" class="col-sm-4 col-form-label">ยี่ห้อเครื่องมือสอบเทียบ*</label>
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
                        <label for="" class="col-sm-4 col-form-label">ขนาดเครื่องมือสอบเทียบ*</label>
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
                <div class="col-12 d-md-flex justify-content-center justify-content-md-end mt-md-0 mt-2">
                    <!-- add new -->
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


        <!-- pipettes configure toolkit table -->
        <div class="table-responsive">
            <table class="table table-hover text-nowrap" id="pipettesTypeTable">
            <thead>
                <tr>
                <th scope="col" data-field="pipetttesType">ประเภทเครื่องมือสอบเทียบ</th>
                <th scope="col" data-field="">ประเภทย่อยเครื่องมือสอบเทียบ</th>
                <th scope="col" data-field="">ยี่ห้อ</th>
                <th scope="col" data-field="">รุ่น</th>
                <th scope="col" data-field="">ขนาด</th>
                <th scope="col" data-field="">สถานะ</th>
                <th scope="col" data-field="">Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            </table>
        </div>
        <!-- end: pipettes configure toolkit table -->

    </div>
</div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>