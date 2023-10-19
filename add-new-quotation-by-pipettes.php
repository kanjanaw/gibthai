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
                <li class="breadcrumb-item"><a href="quotation.php">ใบเสนอราคา</a></li>
                <li class="breadcrumb-item"><a href="quotation-new-quotation-menu.php">เพิ่มใบเสนอราคาใหม่</a></li>
                <li class="breadcrumb-item active" aria-current="page">สร้างใบเสนอราคาใหม่จากใบงานบริการ</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>สร้างใบเสนอราคาใหม่จากใบงานบริการ</h4>
        </div>


                        <!-- ข้อมูลงานบริการสอบเทียบเครื่องมือ -->
                        <h6 class="mt-4 p-2 bg-e5e5e5 fw-bold">ข้อมูลงานบริการสอบเทียบเครื่องมือ</h6>
                        <div class="row py-2">
                            <div class="col-12 mb-3">
                                <button type="button" class="btn-black" data-bs-toggle="modal" data-bs-target="#searchServiceInfoForm"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหาข้อมูลงานบริการ</button>
                            </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วันที่แจ้ง :</label>
                                        <div class="col-sm-8">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เลขที่แจ้งขอรับบริการ :</label>
                                        <div class="col-sm-8">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วันที่งาน :</label>
                                        <div class="col-sm-8">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เลขที่งานบริการ :</label>
                                        <div class="col-sm-8">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ชื่อบริษัท :</label>
                                        <div class="col-sm-8">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน :</label>
                                        <div class="col-sm-8">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ผู้ติดต่อ :</label>
                                        <div class="col-sm-8">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">สถานะ :</label>
                                        <div class="col-sm-8">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-end mt-3">
                                    <button type="button" class="btn-green bg-red text-center">ยกเลิก</button>
                                </div>
                        </div>
                        <!-- end: ข้อมูลงานบริการสอบเทียบเครื่องมือ -->

                            <!-- Modal search service info form  -->
                            <div class="modal fade" id="searchServiceInfoForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="searchCompanyForm" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 bg-e5e5e5 py-2">
                                            <h6 class="py-2 fw-bold mb-0">ข้อมูลงานบริการสอบเทียบเครื่องมือ</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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

                                            <div class="table-responsive mt-4">
                                                <table class="table table-hover text-nowrap" id="contactTable">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">เลือก</th>
                                                    <th scope="col">วันที่แจ้ง</th>
                                                    <th scope="col">เลขที่แจ้งขอรับบริการ</th>
                                                    <th scope="col">วันที่งาน</th>
                                                    <th scope="col">เลขที่ใบงานบริการ</th>
                                                    <th scope="col">ชื่อบริษัท</th>
                                                    <th scope="col">แผนก/หน่วยงาน</th>
                                                    <th scope="col">สถานะ</th>
                                                    </tr>
                                                    </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer pt-0 border-0">
                                            <button type="button" class="btn-grey">ยกเลิก</button>
                                            <button type="button" class="btn-green">เลือก</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Modal search service info form  -->

                        <!-- ข้อมูลใบเสนอราคา -->
                        <h6 class="p-2 bg-e5e5e5 fw-bold mt-5">ข้อมูลใบเสนอราคา</h6>
                        <div class="row py-3">
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เลขที่ใบเสนอราคา :</label>
                                        <div class="col-sm-8">
                                            <!-- *แก้ไขได้ แต่ต้องไม่ซ้ำที่มี เช่น เพิ่มจุด -->
                                            <input type="text" name="" class="form-or-style" value="SOyymm-xxxx"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ประเภทใบเสนอราคา :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">ใบเสนอราคาหลัก</option>
                                                <option value="">ใบเสนอราคาแปลงบิลลูกค้า</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วันที่ใบเสนอราคา :</label>
                                        <div class="col-sm-8">
                                            <!-- *default วันที่ปัจจุบัน แต่แก้ไขเปลี่ยนได้  -->
                                            <input type="date" name="" class="form-or-style" id="quotationDate"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">สถานะใบเสนอราคา :</label>
                                        <div class="col-sm-8">
                                            <!-- *ถ้าเปลี่ยนสถานะ = อนุมัติใบเสนอราคา ให้บังคับกรอกวันที่อนุมัติใบเสนอราคาด้วย -->
                                            <select name="" id="" class="form-or-style">
                                                <option value="">ใบเสนอราคา</option>
                                                <option value="">อนุมัติใบเสนอราคา</option>
                                                <option value="">ไม่อนุมัติยกเลิก</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">พนักงานขาย :</label>
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
                                        <label for="" class="col-sm-4 col-form-label">อีเมล :</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="" class="form-or-style" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ผู้จัดทำใบเสนอราคา :</label>
                                        <div class="col-sm-8">
                                            <!-- *Employee default by login -->
                                            <input type="text" name="" class="form-or-style" placeholder="Employee default by login"disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เลขที่แจ้งขอรับบริการ :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">อ้างอิงใบเสนอราคา :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เลขที่ใบงานบริการ :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">อ้างอิงใบสั่งซื้อ (PO) :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วันที่อนุมัติใบเสนอราคา :</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-2 col-form-label">กำหนดยืนราคา :</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <select name="" id="" class="form-or-style w-25">
                                                    <option value="">30 วัน</option>
                                                    <option value="">45 วัน</option>
                                                    <option value="">60 วัน</option>
                                                </select>
                                                <input type="text" name="" class="form-or-style w-75" value="Default wording กำหนดยืนราคา ภายใน xx xx นับจากวันใบเสนอราคา" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-2 col-form-label">กำหนดงานเสร็จ :</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <select name="" id="" class="form-or-style w-25">
                                                    <option value="">30 วัน</option>
                                                    <option value="">45 วัน</option>
                                                    <option value="">60 วัน</option>
                                                </select>
                                                <input type="text" name="" class="form-or-style w-75" value="Default wording กำหนดงานเสร็จ ภายใน xx xx นับจากวันที่ได้รับใบสั่งซื้อ"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- end: ข้อมูลใบเสนอราคา -->

                        <!-- ข้อมูลรายการเครื่องมือสอบเทียบ -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลรายการเครื่องมือสอบเทียบ</h6>
                            <!-- table menu -->
                            <div class="row d-flex align-items-center mb-2 mt-3" id="datatable_length">
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
                                <div class="col-md-auto text-end ms-auto py-1 py-md-0 order-0 order-md-1">
                                    <a type="button" class="btn-black bg-blue border-blue" href="add-new-quotation-by-pipettes.php" data-bs-toggle="modal" data-bs-target="#addPipettesForm">เพิ่มรายการ</a>
                                </div>
                            </div>
                            <!-- end: table menu -->

                            <!-- Modal add pipettes form -->
                            <div class="modal fade" id="addPipettesForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addPipettesForm" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 bg-e5e5e5 py-2">
                                            <h6 class="py-2 fw-bold mb-0">ข้อมูลเครื่องมือสอบเทียบ</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">Item No. :</label>
                                                    <div class="col-sm-8 d-flex align-items-center">
                                                        <p class="mb-0">2</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">ประเภทเครื่องมือสอบเทียบ* :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style" disabled>
                                                            <option value="">option 1</option>
                                                            <option value="">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">ยี่ห้อ* :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style" disabled>
                                                            <option value="">option 1</option>
                                                            <option value="">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">รุ่น* :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style" disabled>
                                                            <option value="">option 1</option>
                                                            <option value="">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">ขนาด :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">หมายเลขเครื่อง* :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">รหัสเครื่องมือ :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">จุดสอบเทียบ* :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">วิธีการสอบเทียบ* :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style">
                                                            <option value="">option 1</option>
                                                            <option value="">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">รายละเอียดรายการเครื่องมือ :</label>
                                                    <div class="col-sm-8">
                                                        <textarea name="" id="" class="form-or-style" rows="6"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">จำนวน :</label>
                                                    <div class="col-sm-8 d-flex align-items-center">
                                                        <p class="mb-0">1</p>
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
                                                    <label for="" class="col-sm-4 col-form-label">ราคาต่อหน่วย* :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">ส่วนลด* :</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input type="text" name="" class="form-or-style w-75"/>
                                                            <select name="" id="" class="form-or-style w-25">
                                                                <option value="">%</option>
                                                                <option value="">ตัวเลข</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer pt-0 border-0">
                                            <button type="button" class="btn-grey " data-bs-dismiss="modal">ยกเลิก</button>
                                            <button type="button" class="btn-green">บันทึกข้อมูล</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Modal add pipettes form -->

                            <!-- pipettes table -->
                            <div class="table-responsive mt-3">
                                <table class="table table-hover text-nowrap" id="pipettesTypeTable">
                                <thead>
                                    <tr>
                                    <th scope="col" data-field="">No</th>
                                    <th scope="col" data-field="">รายการเครื่องมือ</th>
                                    <th scope="col" data-field="">จำนวน</th>
                                    <th scope="col" data-field="">หน่วยนับ</th>
                                    <th scope="col" data-field="">ราคา/หน่วย</th>
                                    <th scope="col" data-field="">ส่วนลด (จำนวน)</th>
                                    <th scope="col" data-field="">ส่วนลด (%/ตัวเลข)</th>
                                    <th scope="col" data-field="">จำนวนเงิน</th>
                                    <th scope="col" data-field="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>"ประเภทเครื่องมือสอบเทียบ" "ยี่ห้อ" "รุ่น" "ขนาด" "หมายเลขเครื่อง" "รหัสเครื่องมือ" "จุดสอบเทียบ" "วิธีการสอบเทียบ"</td>
                                        <td><input class="form-or-style" type="number" value="4"></td>
                                        <td>
                                            <select name="" id="" class="form-or-style">
                                                <option value="">เครื่อง</option>
                                                <option value="">ชิ้น</option>
                                            </select>
                                        </td>
                                        <td><input class="form-or-style" type="text" value="2,000"></td>
                                        <td><input type="text" name="" class="form-or-style"/></td>
                                        <td>
                                            <select name="" id="" class="form-or-style">
                                                <option value="">%</option>
                                                <option value="">ตัวเลข</option>
                                            </select>
                                        </td>
                                        </td>
                                        <td>7,600</td>
                                        <td>
                                            <a href="#" class="text-dark hover-text-red" title="สำเนา" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-copy"></i></a>
                                            <a href="#" class="text-dark hover-text-red mx-1" title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-trash-can"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            <!-- end: pipettes  table -->
                            <div class="row mt-4">
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">หมายเหตุในใบเสนอราคา :</label>
                                        <div class="col-sm-8">
                                            <textarea name="" id="" rows="8" class="form-or-style"></textarea>
                                        </div>
                                        <label for="" class="col-sm-4 col-form-label">เพิ่มเติม :</label>
                                        <div class="col-sm-8">
                                            <textarea name="" id="" rows="4" class="form-or-style"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">รูปแบบการคำนวณภาษีมูลค่าเพิ่ม :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">option 1</option>
                                                <option value="" selected>option 2</option>
                                            </select>
                                        </div>

                                        <label for="" class="col-sm-4 col-form-label">จำนวนเงินรวม :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" placeholder="xxx,xxx" disabled/>
                                        </div>

                                        <label for="" class="col-sm-4 col-form-label">ส่วนลดรวม :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>

                                        <label for="" class="col-sm-4 col-form-label">จำนวนเงินรวมหักส่วนลด :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" placeholder="xxx,xxx" disabled/>
                                        </div>

                                        <label for="" class="col-sm-4 col-form-label">ภาษีมูลค่าเพิ่ม :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <select name="" id="" class="form-or-style w-25">
                                                    <option value="">0%</option>
                                                    <option value="" selected>7%</option>
                                                    <option value="">10%</option>
                                                </select>
                                                <input type="text" name="" class="form-or-style w-75"/>
                                            </div>
                                        </div>

                                        <label for="" class="col-sm-4 col-form-label">จำนวนเงินรวมทั้งสิ้น :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" placeholder="123,000" disabled/>
                                        </div>

                                        <label for="" class="col-sm-4 col-form-label">จำนวนเงินรวมทั้งสิ้น (คำอ่าน) :</label>
                                        <div class="col-sm-8">
                                            <p class="fst-italic py-2">หนึ่งแสนสองหมื่นสามพันบาท</p>
                                        </div>

                                        <label for="" class="col-sm-4 col-form-label">ลายเซ็น :</label>
                                        <div class="col-sm-8">
                                            <div class="mb-1 form-check">
                                                <input type="checkbox" class="form-check-input" id="signCheck1" checked>
                                                <label class="form-check-label" for="signCheck1">พนักงานขาย</label>
                                            </div>
                                            <div class="mb-1 form-check">
                                                <input type="checkbox" class="form-check-input" id="signCheck2">
                                                <label class="form-check-label" for="signCheck2">ผู้จัดการขาย</label>
                                            </div>
                                            <div class="mb-1 form-check">
                                                <input type="checkbox" class="form-check-input" id="signCheck3">
                                                <label class="form-check-label" for="signCheck3">กรรมการผู้จัดการ</label>
                                            </div>
                                        </div>

                                        <label for="" class="col-sm-4 col-form-label mt-4">รายละเอียด :</label>
                                        <div class="col-sm-8 mt-4">
                                            <div class="mb-1 form-check">
                                                <input type="checkbox" class="form-check-input" id="dateCheck1" checked>
                                                <label class="form-check-label" for="dateCheck1">แสดงวันที่ในใบเสนอราคา</label>
                                            </div>
                                            <div class="mb-1 form-check">
                                                <input type="checkbox" class="form-check-input" id="dateCheck2">
                                                <label class="form-check-label" for="dateCheck2">ไม่แสดงวันที่ในใบเสนอราคา</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <!-- end: ข้อมูลรายการเครื่องมือสอบเทียบ -->

                        <div class="row mt-3 pt-3 text-md-end text-center">
                            <div class="col-12 d-flex justify-content-md-end justify-content-center">
                                <div class="d-md-inline d-grid gap-1">
                                    <a type="button" class="btn-black bg-blue border-blue text-center">ใบเสนอราคา</a>
                                    <a type="button" class="btn-black text-center">ส่งอีเมล PDF</a>
                                    <a type="button" class="btn-black text-center">สำเนาใบเสนอราคา</a>
                                    <button type="button" class="btn-green btn-grey text-center order-last">ยกเลิก</button>
                                    <button type="button" class="btn-green text-center">บันทึกข้อมูล</button>
                                </div>
                            </div>
                        </div>



    </div>
</div>
</div>

</body>
</html>

<?php require('inc_footer.php'); ?>

<script>
    document.getElementById("quotationDate").valueAsDate = new Date();
</script>

