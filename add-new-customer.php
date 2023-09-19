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
                <li class="breadcrumb-item active" aria-current="page">เพิ่มข้อมูลลูกค้าใหม่</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>เพิ่มข้อมูลลูกค้าใหม่</h4>
        </div>

        <!-- table menu -->
        <div class="row my-4">
            <div class="tabs">
                <ul class="nav tab-green nav-tabs nav-fill" id="customerTabs" role="tablist">
                    <li class="nav-item">
                        <a class="tab-green nav-link active" id="company-tab" data-bs-toggle="tab" href="#company" role="tab"  aria-selected="true">ลูกค้า</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-selected="false">ผู้ติดต่อ</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="pipettes-tab" data-bs-toggle="tab" href="#pipettes" role="tab"  aria-selected="false">เครื่องมือสอบเทียบ</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="quotation-h-tab" data-bs-toggle="tab" href="#quotation-h" role="tab"  aria-selected="false">ประวัติใบเสนอราคา</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="service-h-tab" data-bs-toggle="tab" href="#service-h" role="tab"  aria-selected="false">ประวัติงานบริการสอบเทียบ</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="maintenance-h-tab" data-bs-toggle="tab" href="#maintenance-h" role="tab"  aria-selected="false">ประวัติงานบริการซ่อม</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="onsite-h-tab" data-bs-toggle="tab" href="#onsite-h" role="tab"  aria-selected="false">ประวัติงานบริการภายนอก</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="cert-h-tab" data-bs-toggle="tab" href="#cert-h" role="tab"  aria-selected="false">ประวัติใบรับรอง Cert.</a>
                    </li>
                </ul>


                <div class="tab-content" id="myTabContent">
                    <!-- ลูกค้า tab -->
                    <div class="tab-pane fade active show" id="company" role="tabpanel">
                        <!-- ข้อมูลลูกค้า -->
                        <h6 class="p-2 bg-e5e5e5 fw-bold">ข้อมูลลูกค้า</h6>
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
                            <div class="d-flex justify-content-end">
                                <button type="button" name="add" class="btn-black d-block px-4" data-bs-toggle="modal" data-bs-target="#addDepartmentForm">เพิ่มแผนก/หน่วยงาน</button>
                            </div>

                            <!-- Modal add department form -->
                            <div class="modal fade" id="addDepartmentForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addDepartmentForm" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 bg-e5e5e5 py-2">
                                            <h6 class="py-2 fw-bold mb-0">ข้อมูลแผนก/หน่วยงาน</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน :</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="" class="form-or-style"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน (อังกฤษ) :</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="" class="form-or-style"/>
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
                            <!-- end: Modal add department form -->

                            <!-- ตารางรายการแผนก/หน่วยงาน -->
                            <div class="table-responsive mt-3">
                                <table class="table table-hover" id="departmentTable">
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
                            <div class="row d-flex align-items-center">
                                <div class="col-6">
                                    <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                                </div>
                                <div class="col-auto g-0">
                                    <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                                </div>
                                <div class="col-auto d-inline-block ms-auto">
                                    <button type="button" class="btn-grey">นำออก Excel</button>
                                    <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                                    <button type="button" name="add" class="btn-black px-4" data-bs-toggle="modal" data-bs-target="#addAddressForm">เพิ่มที่อยู่ใหม่</button>
                                </div>
                            </div>
                            <!-- end: table menu -->

                            <!-- Modal add address form -->
                            <div class="modal fade" id="addAddressForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addAddressForm" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 bg-e5e5e5 py-2">
                                            <h6 class="py-2 fw-bold mb-0">ข้อมูลที่อยู่</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">ประเภทที่อยู่* :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style">
                                                            <option value="">ที่อยู่หลัก</option>
                                                            <option value="">ใบกำกับภาษี</option>
                                                            <option value="">ใบรับรองผลการสอบเทียบ (อังกฤษ)</option>
                                                            <option value="">ติดตั้งเครื่องมือ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">สถานะที่อยู่* :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style">
                                                            <option value="">Active</option>
                                                            <option value="">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">ที่อยู่* :</label>
                                                    <div class="col-sm-8">
                                                        <textarea name="" id="" rows="4" class="form-or-style"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">จังหวัด* :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style">
                                                            <option value="">Select</option>
                                                            <option value="">Option 1</option>
                                                            <option value="">Option 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">เขต/อำเภอ* :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style">
                                                            <option value="">Select</option>
                                                            <option value="">Option 1</option>
                                                            <option value="">Option 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">แขวง/ตำบล* :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style">
                                                            <option value="">Select</option>
                                                            <option value="">Option 1</option>
                                                            <option value="">Option 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">รหัสไปรษณีย์* :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style">
                                                            <option value="">Select</option>
                                                            <option value="">Option 1</option>
                                                            <option value="">Option 2</option>
                                                        </select>
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
                                                            <option value="">Option 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน (อังกฤษ) :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style" disabled>
                                                            <option value="">Select</option>
                                                            <option value="">Option 1</option>
                                                            <option value="">Option 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">หมายเหตุ :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
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
                            <!-- end: Modal add address form -->

                            <!-- ตารางที่อยู่ลูกค้า -->
                            <div class="table-responsive mt-3">
                                <table class="table table-hover" id="addressTable">
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
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-grey mx-2" data-bs-dismiss="modal">ยกเลิก</button>
                            <button type="button" class="btn-green">บันทึกข้อมูล</button>
                        </div>
                    </div>
                    <!-- end: ลูกค้า tab -->


                    <!-- ผู้ติดต่อ tab -->
                    <div class="tab-pane fade" id="contact" role="tabpanel">
                        <h6 class="p-2 mb-3 bg-e5e5e5 fw-bold">ข้อมูลผู้ติดต่อ</h6>
                        <!-- table menu -->
                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                            </div>
                            <div class="col-auto g-0">
                                <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                            </div>
                            <div class="col-auto d-inline-block ms-auto">
                                <button type="button" class="btn-grey">นำออก Excel</button>
                                <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                                <button type="button" name="add" class="btn-black px-4" data-bs-toggle="modal" data-bs-target="#addContactForm">เพิ่มผู้ติดต่อใหม่</button>
                            </div>
                        </div>
                        <!-- end: table menu -->

                        <!-- ตารางผู้ติดต่อ -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover" id="contactTable">
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
                        <!-- end: ตารางที่อยู่ลูกค้า -->

                            <!-- Modal add address form -->
                            <div class="modal fade" id="addContactForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addContactForm" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 bg-e5e5e5 py-2">
                                            <h6 class="py-2 fw-bold mb-0">ข้อมูลผู้ติดต่อ</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style">
                                                            <option value="">Select</option>
                                                            <option value="">Option 1</option>
                                                            <option value="">Option 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">ชื่อผู้ติดต่อ* :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">อีเมล* :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">โทรศัพท์* :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">Line ID :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">เพิ่มเติม :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">สถานะ* :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style">
                                                            <option value="">Active</option>
                                                            <option value="">Inactive</option>
                                                        </select>
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
                            <!-- end: Modal add address form -->
                    </div>
                    <!-- end: ผู้ติดต่อ tab -->


                    <!-- เครื่องมือสอบเทียบ tab -->
                    <div class="tab-pane fade" id="pipettes" role="tabpanel">
                        <h6 class="p-2 mb-3 bg-e5e5e5 fw-bold">ข้อมูลเครื่องมือสอบเทียบของลูกค้า</h6>
                        <!-- table menu -->
                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                            </div>
                            <div class="col-auto g-0">
                                <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                            </div>
                            <div class="col-auto d-inline-block ms-auto">
                                <button type="button" class="btn-black bg-blue border-blue" data-bs-toggle="modal" data-bs-target="#selectPipettesForm">เลือกเครื่องมือสอบเทียบ</button>
                                <button type="button" class="btn-black" data-bs-toggle="modal" data-bs-target="#addPipettesForm">เพิ่มเครื่องมือสอบเทียบใหม่</button>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end mt-2">
                            <div class="col-auto">
                                <button type="button" class="btn-grey">นำออก Excel</button>
                                <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                            </div>
                        </div>

                        <!-- end: table menu -->

                            <!-- Modal add pipettes form -->
                            <div class="modal fade" id="addPipettesForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addPipettesForm" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 bg-e5e5e5 py-2">
                                            <h6 class="py-2 fw-bold mb-0">ข้อมูลเครื่องมือสอบเทียบของลูกค้า</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">ประเภทเครื่องมือสอบเทียบ* :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">ยี่ห้อ* :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">รุ่น* :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">ขนาด* :</label>
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
                                                    <label for="" class="col-sm-4 col-form-label">สถานะ :</label>
                                                    <div class="col-sm-8">
                                                        <select name="" id="" class="form-or-style">
                                                            <option value="">Active</option>
                                                            <option value="">Inactive</option>
                                                        </select>
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

                            <!-- Modal select pipettes form -->
                            <div class="modal fade" id="selectPipettesForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="selectPipettesForm" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 bg-e5e5e5 py-2">
                                            <h6 class="py-2 fw-bold mb-0">ข้อมูลเครื่องมือสอบเทียบของลูกค้า</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-12 row">
                                                <div class="col-10">
                                                    <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                                                </div>
                                                <div class="col-auto g-0">
                                                    <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                                                </div>
                                            </div>

                                            <div class="table-responsive mt-4">
                                                <table class="table table-hover" id="contactTable">
                                                <thead>
                                                    <tr>
                                                    <th scope="col" data-field="">เลือก</th>
                                                    <th scope="col" data-field="">ประเภทเครื่องมือสอบเทียบ</th>
                                                    <th scope="col" data-field="">ยี่ห้อ</th>
                                                    <th scope="col" data-field="">รุ่น</th>
                                                    <th scope="col" data-field="">ขนาด</th>
                                                    <th scope="col" data-field="">หมายเลขเครื่อง</th>
                                                    <th scope="col" data-field="">สถานะ</th>
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
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
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
                                            <button type="button" class="btn-grey " data-bs-dismiss="modal">ยกเลิก</button>
                                            <button type="button" class="btn-green">เลือก</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Modal select pipettes form -->

                        <!-- ตารางเครื่องมือสอบเทียบของลูกค้า -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover" id="pipettesTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="pipettesType">ประเภทเครื่องมือสอบเทียบ</th>
                                <th scope="col" data-field="">ยี่ห้อ</th>
                                <th scope="col" data-field="">รุ่น</th>
                                <th scope="col" data-field="serialNumber">หมายเลขเครื่อง</th>
                                <th scope="col" data-field="volumn">ขนาด</th>
                                <th scope="col" data-field="">รหัสเครื่องมือ</th>
                                <th scope="col" data-field="">จุดสอบเทียบ</th>
                                <th scope="col" data-field="">เกณฑ์ยอมรับ</th>
                                <th scope="col" data-field="status">สถานะ</th>
                                <th scope="col" data-field="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>

                            </tbody>
                            </table>
                        </div>
                        <!-- end: ตารางเครื่องมือสอบเทียบของลูกค้า -->

                    </div>
                    <!-- end: เครื่องมือสอบเทียบ tab -->


                    <!-- ประวัติใบเสนอราคา -->
                    <div class="tab-pane fade" id="quotation-h" role="tabpanel">
                        <h6 class="p-2 mb-3 bg-e5e5e5 fw-bold">ประวัติใบเสนอราคา</h6>
                        <!-- table menu -->
                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                            </div>
                            <div class="col-auto g-0">
                                <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                            </div>
                            <div class="col-auto d-inline-block ms-auto">
                                <button type="button" class="btn-grey">นำออก Excel</button>
                                <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                            </div>
                        </div>
                        <!-- end: table menu -->

                        <!-- ตารางประวัติใบเสนอราคา -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover" id="pipettesTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="date">วันที่</th>
                                <th scope="col" data-field="quotationNo">เลขที่ใบเสนอราคา</th>
                                <th scope="col" data-field="type">ประเภท</th>
                                <th scope="col" data-field="status">สถานะ</th>
                                <th scope="col" data-field="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            </table>
                        </div>
                        <!-- end: ตารางประวัติใบเสนอราคา -->

                    </div>
                    <!-- end: ประวัติใบเสนอราคา -->


                    <!-- ประวัติงานบริการสอบเทียบ -->
                    <div class="tab-pane fade" id="service-h" role="tabpanel">
                        <h6 class="p-2 mb-3 bg-e5e5e5 fw-bold">ประวัติงานบริการสอบเทียบ</h6>
                        <!-- table menu -->
                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                            </div>
                            <div class="col-auto g-0">
                                <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                            </div>
                            <div class="col-auto d-inline-block ms-auto">
                                <button type="button" class="btn-grey">นำออก Excel</button>
                                <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                            </div>
                        </div>
                        <!-- end: table menu -->

                        <!-- ตารางประวัติงานบริการสอบเทียบ -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover" id="pipettesTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="date">วันที่</th>
                                <th scope="col" data-field="quotationNo">เลขที่ใบงาน</th>
                                <th scope="col" data-field="type">ประเภท</th>
                                <th scope="col" data-field="">เลขที่ใบขอแจ้งรับบริการ</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="department">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="status">สถานะ</th>
                                <th scope="col" data-field="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            </table>
                        </div>
                        <!-- end: ตารางประวัติงานบริการสอบเทียบ -->

                    </div>
                    <!-- end: ประวัติงานบริการสอบเทียบ -->


                    <!-- ประวัติงานบริการซ่อม -->
                    <div class="tab-pane fade" id="maintenance-h" role="tabpanel">
                        <h6 class="p-2 mb-3 bg-e5e5e5 fw-bold">ประวัติงานบริการซ่อม</h6>
                        <!-- table menu -->
                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                            </div>
                            <div class="col-auto g-0">
                                <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                            </div>
                            <div class="col-auto d-inline-block ms-auto">
                                <button type="button" class="btn-grey">นำออก Excel</button>
                                <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                            </div>
                        </div>
                        <!-- end: table menu -->

                        <!-- ตารางประวัติงานบริการซ่อม -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover" id="pipettesTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="date">วันที่</th>
                                <th scope="col" data-field="">เลขที่ใบงาน</th>
                                <th scope="col" data-field="">xxxx</th>
                                <th scope="col" data-field="">xxxx</th>
                                <th scope="col" data-field="">xxxx</th>
                                <th scope="col" data-field="status">สถานะ</th>
                                <th scope="col" data-field="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            </table>
                        </div>
                        <!-- end: ตารางประวัติงานบริการซ่อม -->

                    </div>
                    <!-- end: ประวัติงานบริการซ่อม -->


                    <!-- ประวัติงานบริการภายนอก -->
                    <div class="tab-pane fade" id="onsite-h" role="tabpanel">
                        <h6 class="p-2 mb-3 bg-e5e5e5 fw-bold">ประวัติงานบริการภายนอก</h6>
                        <!-- table menu -->
                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                            </div>
                            <div class="col-auto g-0">
                                <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                            </div>
                            <div class="col-auto d-inline-block ms-auto">
                                <button type="button" class="btn-grey">นำออก Excel</button>
                                <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                            </div>
                        </div>
                        <!-- end: table menu -->

                        <!-- ตารางประวัติงานบริการภายนอก -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover" id="pipettesTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="date">วันที่</th>
                                <th scope="col" data-field="">เลขที่ใบงาน</th>
                                <th scope="col" data-field="">xxxx</th>
                                <th scope="col" data-field="">xxxx</th>
                                <th scope="col" data-field="">xxxx</th>
                                <th scope="col" data-field="status">สถานะ</th>
                                <th scope="col" data-field="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            </table>
                        </div>
                        <!-- end: ตารางประวัติงานบริการภายนอก -->
                    </div>
                    <!-- end: ประวัติงานบริการภายนอก -->


                    <!-- ประวัติใบรับรอง Cert -->
                    <div class="tab-pane fade" id="cert-h" role="tabpanel">
                        <h6 class="p-2 mb-3 bg-e5e5e5 fw-bold">ประวัติใบรับรอง Certificate</h6>
                        <!-- table menu -->
                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                            </div>
                            <div class="col-auto g-0">
                                <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                            </div>
                            <div class="col-auto d-inline-block ms-auto">
                                <button type="button" class="btn-grey">นำออก Excel</button>
                                <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                            </div>
                        </div>
                        <!-- end: table menu -->

                        <!-- ตารางประวัติใบรับรอง Certificate-->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover" id="certTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="certNo">เลขที่ใบรับรอง</th>
                                <th scope="col" data-field="date">วันที่ออก</th>
                                <th scope="col" data-field="type">ประเภทเครื่องมือ</th>
                                <th scope="col" data-field="">ยี่ห้อ</th>
                                <th scope="col" data-field="">รุ่น</th>
                                <th scope="col" data-field="serialNumber">หมายเลขเครื่อง</th>
                                <th scope="col" data-field="action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            </table>
                        </div>
                        <!-- end: ตารางประวัติใบรับรอง Certificate -->

                    </div>
                    <!-- end: ประวัติใบรับรอง Cert -->
                </div>
            </div>
        </div>
        <!-- end: table menu -->




    </div>
</div>

</body>
</html>
