<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
<?php   $pageName = "customer";  ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>

<div class="px-4">
    <div class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="customer.php">ลูกค้า</a></li>
                <li class="breadcrumb-item active" aria-current="page">เพิ่มข้อมูลลูกค้าใหม่</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>เพิ่มข้อมูลลูกค้าใหม่</h4>
        </div>

        <!-- ข้อมูลลูกค้า -->
        <h6 class="mt-4 p-2 bg-e5e5e5 fw-bold">ข้อมูลลูกค้า</h6>
            <div class="row py-3">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">รหัสบริษัท* :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">กลุ่มบริษัท :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style">
                                <option value="">ลูกค้า</option>
                                <option value="">Dealer</option>
                                <option value="">Supplier</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ชื่อบริษัท* :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ชื่อบริษัท (ภาษาอังกฤษ)* :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ประเภทบริษัท :</label>
                        <div class="col-sm-8">
                            <div class="row py-2">
                                <div class="col-md-4 col-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="companyTypeInfo" id="companyType1" value="" checked>
                                        <label class="form-check-label" for="companyType1">สำนักงานใหญ่</label>
                                    </div>
                                </div>
                                <div class="col-md-8 col-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="companyTypeInfo" id="companyType2" value="">
                                        <label class="form-check-label" for="companyType2">สาขาที่</label>
                                    </div>
                                    <input type="text" name="companyTypeName" class="form-or-style"/>
                                </div>
                            </div>
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
                        <label for="" class="col-sm-4 col-form-label">เลขผู้เสียภาษีอากร* :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">แฟกซ์ :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">กำหนดชำระเงิน :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style">
                                <option value="">Select</option>
                                <option value="">30 วัน</option>
                                <option value="">option 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">สถานะบริษัท* :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style">
                                <option value="">Active</option>
                                <option value="">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end: ข้อมูลลูกค้า -->

        <!-- ข้อมูลแผนก/หน่วยงาน -->
        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold mb-3">ข้อมูลแผนก/หน่วยงาน</h6>
            <div class="d-flex justify-content-md-end justify-content-center">
                <button type="button" name="add" class="btn-black d-block px-4" data-bs-toggle="modal" data-bs-target="#addDepartmentForm">เพิ่มแผนก/หน่วยงาน</button>
            </div>
            <!-- ตารางรายการแผนก/หน่วยงาน -->
            <div class="table-responsive mt-3">
                <table class="table table-hover text-nowrap" id="departmentTable">
                <thead>
                    <tr>
                    <th scope="col" data-field="department-th">แผนก/หน่วยงาน</th>
                    <th scope="col" data-field="department-en">แผนก/หน่วยงาน (อังกฤษ)</th>
                    <th scope="col" data-field="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>
            <!-- end: ตารางรายการแผนก/หน่วยงาน -->
        <!-- end: ข้อมูลแผนก/หน่วยงาน -->

        <!-- ข้อมูลที่อยู่ลูกค้า -->
        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold mb-3">ข้อมูลที่อยู่ลูกค้า</h6>
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
                <div class="col-md-auto text-md-end text-center ms-auto py-1 py-md-0 order-0 order-md-1">
                    <div class="col-auto">
                        <button type="button" name="add" class="btn-black px-4 mb-2 d-md-none d-inline-block" data-bs-toggle="modal" data-bs-target="#addAddressForm">เพิ่มที่อยู่ใหม่</button>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn-grey">นำออก Excel</button>
                        <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                        <button type="button" name="add" class="btn-black px-4 d-none d-md-inline-block" data-bs-toggle="modal" data-bs-target="#addAddressForm">เพิ่มที่อยู่ใหม่</button>
                    </div>
                </div>
            </div>
            <!-- end: table menu -->
            <!-- ตารางที่อยู่ลูกค้า -->
            <div class="table-responsive mt-3">
                <table class="table table-hover text-nowrap" id="addressTable">
                <thead>
                    <tr>
                    <th scope="col" data-field="address-type">ประเภทที่อยู่</th>
                    <th scope="col" data-field="address">ที่อยู่</th>
                    <th scope="col" data-field="province">จังหวัด</th>
                    <th scope="col" data-field="zipcode">รหัสไปรษณีย์</th>
                    <th scope="col" data-field="department-th">แผนก</th>
                    <th scope="col" data-field="department-en">แผนก (อังกฤษ)</th>
                    <th scope="col" data-field="remark">หมายเหตุ</th>
                    <th scope="col" data-field="status">สถานะ</th>
                    <th scope="col" data-field="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-semibold">ที่อยู่หลัก</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">ใบกำกับภาษี</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">ใบรับรองผลการสอบเทียบ (อังกฤษ)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="fw-semibold">ติดตั้งเครื่องมือ</td>
                        <td></td>
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
            <!-- end: ตารางที่อยู่ลูกค้า -->

            <!-- หมายเหตุ -->
            <div class="row py-2">
                <label for="" class="col-sm-2 col-form-label">หมายเหตุ</label>
                <div class="col-sm-6">
                    <textarea name="" id="" rows="4" class="form-or-style"></textarea>
                </div>
            </div>
            <!-- end: หมายเหตุ -->
        <!-- end: ข้อมูลที่อยู่ลูกค้า -->

        <!-- ข้อมูลผู้ติดต่อ -->
        <h6 class="mt-5 p-2 mb-3 bg-e5e5e5 fw-bold">ข้อมูลผู้ติดต่อ</h6>
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
                <div class="col-md-auto text-md-end text-center ms-auto py-1 py-md-0 order-0 order-md-1">
                    <div class="col-auto">
                        <button type="button" name="add" class="btn-black px-4 mb-2 d-md-none d-inline-block" data-bs-toggle="modal" data-bs-target="#addContactForm">เพิ่มผู้ติดต่อใหม่</button>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn-grey">นำออก Excel</button>
                        <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                        <button type="button" name="add" class="btn-black px-4 d-none d-md-inline-block" data-bs-toggle="modal" data-bs-target="#addContactForm">เพิ่มผู้ติดต่อใหม่</button>
                    </div>
                </div>
            </div>
            <!-- end: table menu -->
            <!-- ตารางผู้ติดต่อ -->
            <div class="table-responsive mt-3">
                <table class="table table-hover text-nowrap" id="contactTable">
                <thead>
                    <tr>
                    <th scope="col" data-field="department-th">แผนก/หน่วยงาน</th>
                    <th scope="col" data-field="name">ชื่อผู้ติดต่อ</th>
                    <th scope="col" data-field="telNumber">โทรศัพท์</th>
                    <th scope="col" data-field="email">อีเมล</th>
                    <th scope="col" data-field="lineId">Line ID</th>
                    <th scope="col" data-field="action">Action</th>
                    </tr>
                    </thead>
                <tbody>
                </tbody>
                </table>
            </div>
            <!-- end: ตารางผู้ติดต่อ -->
        <!-- end: ข้อมูลผู้ติดต่อ -->

        <div class="d-flex justify-content-end">
            <button type="button" class="btn-grey mx-2">ยกเลิก</button>
            <button type="button" class="btn-green">บันทึกข้อมูล</button>
        </div>

    </div>
</div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>