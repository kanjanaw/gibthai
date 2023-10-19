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
                <li class="breadcrumb-item"><a href="user-management.php">พนักงานและผู้ใช้งาน</a></li>
                <li class="breadcrumb-item active" aria-current="page">เพิ่มพนักงานใหม่</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>เพิ่มพนักงานใหม่</h4>
        </div>

        <!-- table menu -->
        <div class="my-md-4 my-2">
                        <!-- ข้อมูลพนักงานและผู้ใช้งาน -->
                        <h6 class="p-2 bg-e5e5e5 fw-bold">ข้อมูลพนักงานและผู้ใช้งาน</h6>
                            <div class="row py-3">
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">รหัสพนักงาน* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">แผนก* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ชื่อ-นามสกุล* :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <select name="" id="" class="form-or-style w-25">
                                                    <option value="">นาย</option>
                                                    <option value="">นาง</option>
                                                    <option value="">นางสาว</option>
                                                </select>
                                                <input type="text" name="" class="form-or-style w-75"/>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ชื่อ-นามสกุล (อังกฤษ)* :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <select name="" id="" class="form-or-style w-25">
                                                    <option value="">Mr.</option>
                                                    <option value="">Mrs.</option>
                                                    <option value="">Miss</option>
                                                </select>
                                                <input type="text" name="" class="form-or-style w-75"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ตำแหน่ง* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ระดับตำแหน่ง* :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">กรรมการผู้จัดการ</option>
                                                <option value="">ผู้จัดการ-หัวหน้าแผนก</option>
                                                <option value="">พนักงานขาย</option>
                                                <option value="">พนักงาน</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">อีเมล* :</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">โทรศัพท์ :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">Username* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">Password* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">User Role* :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">Select</option>
                                                <option value="">option 1</option>
                                                <option value="">option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ลายเซ็น :</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">สถานะ* :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">ทำงาน</option>
                                                <option value="">ลาออก</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">หมายเหตุ :</label>
                                        <div class="col-sm-8">
                                            <textarea name="" id="" rows="4" class="form-or-style"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="button" class="btn-grey mx-2" data-bs-dismiss="modal">ยกเลิก</button>
                                    <button type="button" class="btn-green">บันทึกข้อมูล</button>
                                </div>
                        </div>
                        <!-- end: ข้อมูลพนักงานและผู้ใช้งาน -->
        </div>
        <!-- end: table menu -->




    </div>
</div>
</div>

</body>
</html>
