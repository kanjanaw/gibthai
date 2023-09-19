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
                <li class="breadcrumb-item"><a href="pipettes.php">เครื่องมือสอบเทียบ</a></li>
                <li class="breadcrumb-item active" aria-current="page">สถานะเครื่องมือ</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>สถานะเครื่องมือสอบเทียบ</h4>
        </div>

        <form action="">
            <div class="row py-3">
                <div class="col-md-5 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">สถานะเครื่องมือสอบเทียบ*</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12">
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
                <div class="col-md-2 col-12">
                    <!-- add new -->
                    <a class="btn-black bg-green-00 border-green-00 py-1 px-5 float-end" type="button" href="">เพิ่ม/บันทึก</a>
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


        <!-- pipettes status table -->
        <div class="table-responsive">
            <table class="table table-hover" id="pipettesTypeTable">
            <thead>
                <tr>
                <th scope="col" data-field="pipetttesManufacturer">สถานะเครื่องมือสอบเทียบ</th>
                <th scope="col" data-field="">สถานะ</th>
                <th scope="col" data-field="">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ปกติ</td>
                    <td>Active</td>
                    <td></td>
                </tr>
                <tr>
                    <td>ไม่ปกติ-สอบเทียบได้</td>
                    <td>Active</td>
                    <td></td>
                </tr>
                <tr>
                    <td>ไม่ปกติ-สอบเทียบไม่ได้</td>
                    <td>Active</td>
                    <td></td>
                </tr>
                <tr>
                    <td>เสีย-อยู่ระหว่างส่งซ่อม</td>
                    <td>Active</td>
                    <td></td>
                </tr>
                <tr>
                    <td>เสีย-ซ่อมไม่ได้</td>
                    <td>Active</td>
                    <td></td>
                </tr>
                <tr>
                    <td>เสีย-ลูกค้าไม่อนุมัติซ่อม</td>
                    <td>Active</td>
                    <td></td>
                </tr>
                <tr>
                    <td>เสีย-ลูกค้ายกเลิกการใช้งาน</td>
                    <td>Active</td>
                    <td></td>
                </tr>
            </tbody>
            </table>
        </div>
        <!-- end: pipettes status table -->

    </div>
</div>

</body>
</html>
