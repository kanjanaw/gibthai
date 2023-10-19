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
                <li class="breadcrumb-item"><a href="customer.php">ลูกค้า</a></li>
                <li class="breadcrumb-item"><a href="edit-customer.php">แก้ไขข้อมูลลูกค้า</a></li>
                <li class="breadcrumb-item active" aria-current="page">เพิ่มเครื่องมือสอบเทียบใหม่</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>เพิ่มเครื่องมือสอบเทียบใหม่ - มหาวิทยาลัยธรรมศาสตร์ (ศูนย์รังสิต)</h4>
        </div>

        <!-- table menu -->
        <div class="my-md-4 my-2">
                    <!-- เครื่องมือสอบเทียบ tab -->
                        <!-- ข้อมูลเครื่องมือสอบเทียบ -->
                        <h6 class="p-2 bg-e5e5e5 fw-bold">ข้อมูลเครื่องมือสอบเทียบ</h6>
                        <div class="row py-3">
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ประเภทเครื่องมือสอบเทียบ* :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">Select</option>
                                                <option value="">Option 1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">สถานะเครื่องมือสอบเทียบ* :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">status 1</option>
                                                <option value="">status 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ประเภทย่อยเครื่องมือสอบเทียบ :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">Select</option>
                                                <option value="">Option 1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">รหัสรายการเครื่องมือ :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">Select</option>
                                                <option value="">Option 1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">หน่วยนับ :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">เครื่อง</option>
                                                <option value="">ชิ้น</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ยี่ห้อ* :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">Select</option>
                                                <option value="">Option 1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">รุ่น* :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">Select</option>
                                                <option value="">Option 1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ขนาด :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">Select</option>
                                                <option value="">Option 1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">หมายเลขเครื่อง* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">จุดสอบเทียบ* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">รหัสเครื่องมือ :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เกณฑ์ยอมรับ :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ความละเอียดหน้าจอ :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วิธีการสอบเทียบ :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">ตามมาตรฐานของห้องปฏิบัติการ</option>
                                                <option value="">ตามความต้องการของลูกค้า</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">สภาพเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <textarea name="" class="form-or-style" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">สภาพเครื่อง (รูป) :</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="" class="form-or-style" multiple/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">อุปกรณ์อื่น ๆ :</label>
                                        <div class="col-sm-8">
                                            <textarea name="" class="form-or-style" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เพิ่มเติม :</label>
                                        <div class="col-sm-8">
                                            <textarea name="" class="form-or-style" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- end: ข้อมูลเครื่องมือสอบเทียบ -->

                        <!-- ข้อมูลลูกค้า (ผู้ดูแลเครื่องมือสอบเทียบ) -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลลูกค้า (ผู้ดูแลเครื่องมือสอบเทียบ)</h6>
                        <div class="row py-2">
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">รหัสบริษัท* :</label>
                                        <div class="col-sm-8">
                                            <input type="search" name="" class="form-or-style" value="12345" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ชื่อบริษัท :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" value="มหาวิทยาลัยธรรมศาสตร์ (ศูนย์รังสิต)" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">Select</option>
                                                <option value="">Option 1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ชื่อผู้ติดต่อ* :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">Select</option>
                                                <option value="">Option 1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">หมายเหตุ/เพิ่มเติม :</label>
                                        <div class="col-sm-8">
                                            <textarea name="" id="" rows="4" class="form-or-style"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">สถานที่ตั้งเครื่องมือ :</label>
                                        <div class="col-sm-8">
                                            <textarea name="" id="" rows="4" class="form-or-style"></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- end: ข้อมูลลูกค้า (ผู้ดูแลเครื่องมือสอบเทียบ) -->

                        <!-- ข้อมูลสถานที่ตั้งเครื่อง -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลสถานที่ตั้งเครื่อง</h6>
                        <div class="row py-3">
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">อาคาร/ตึก :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ชั้น :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ห้อง :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- end: ข้อมูลสถานที่ตั้งเครื่อง -->

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