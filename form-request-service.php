<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
</head>
<body>
<?php require('inc_topmenu.php'); ?>


    <div class="container">
    <h4 class="font-weight-700 pt-5 text-center">แจ้งขอรับบริการสอบเทียบเครื่องมือ</h4>

        <!-- MultiStep Form -->
        <div class="row">
            <div class="col-12">
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">ข้อมูลลูกค้า</li>
                        <li>ข้อมูลเครื่องมือสอบเทียบ</li>
                        <li>ส่งข้อมูล</li>
                    </ul>

                    <!-- form ข้อมูลลูกค้า -->
                    <fieldset>
                        <!-- form ข้อมูลลูกค้า -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลลูกค้า (บริษัทเจ้าของเครื่องมือ)</h6>
                        <div class="row py-2">
                            <label for="companyNo">รหัสบริษัท*</label>
                            <small >*ค้นหาและเลือกข้อมูลลูกค้าเก่าจากฐานข้อมูล ส่วนลูกค้าใหม่ข้ามช่องนี้ได้เลย</small>
                            <div class="col-md-6 col-12">
                                <input type="text" name="companyNo" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="companyName">ชื่อบริษัท*</label>
                                <input type="text" name="companyName" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="department">แผนก/หน่วยงาน</label>
                                <input type="text" name="department" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="companyAddress">ที่อยู่*</label>
                                <textarea id="companyAddress" name="companyAddress" rows="3" class="form-or-style"></textarea>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="province">จังหวัด*</label>
                                <select name="province" class="form-or-style">
                                    <option value="">กรุงเทพมหานคร</option>
                                    <option value="">กาญจนบุรี</option>
                                    <option value="">กาฬสินธุ์</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="district">เขต/อำเภอ*</label>
                                <select name="district" class="form-or-style">
                                    <option value="">พระนคร</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="subdistrict">แขวง/ตำบล*</label>
                                <select name="subdistrict" class="form-or-style">
                                    <option value="">ดุสิต</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="zipcode">รหัสไปรษณีย์*</label>
                                <select name="zipcode" class="form-or-style">
                                    <option value="">10300</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="tel">โทรศัพท์</label>
                                <input type="text" name="tel" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="fax">แฟกซ์</label>
                                <input type="text" name="fax" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="taxpayerNo">เลขผู้เสียภาษีอากร*</label>
                                <input type="text" name="taxpayerNo" class="form-or-style"/>
                            </div>
                            <div class="col-12 py-2">
                                <label for="companyType">ประเภทบริษัท</label>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-3 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="companyTypeInfo" id="companyType1" value="" checked>
                                            <label class="form-check-label" for="companyType1">สำนักงานใหญ่</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="companyTypeInfo" id="companyType2" value="">
                                            <label class="form-check-label" for="companyType2">สาขาที่</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <input type="text" name="companyTypeName" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="contactName">ชื่อผู้ติดต่อ*</label>
                                <input type="text" name="contactName" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="email">อีเมล*</label>
                                <input type="email" name="email" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="contactTel">โทรศัพท์ผู้ติดต่อ*</label>
                                <input type="text" name="contactTel" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="lineId">Line ID</label>
                                <input type="text" name="lineId" class="form-or-style"/>
                            </div>
                        </div>
                        <!-- end: form ข้อมูลลูกค้า -->

                        <!-- form ข้อมูลลูกค้า - สำหรับออกเอกสารทางบัญชี -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลลูกค้า สำหรับออกเอกสารทางบัญชี (ใบเสนอราคา, ใบแจ้งหนี้/ใบกำกับภาษี/ใบเสร็จ)</h6>
                        <div class="row py-2">
                            <!-- mobile button -->
                            <div class="col-md-6 col-12 d-block d-md-none mb-3">
                                <button type="button" class="btn-black w-100">สำเนาที่อยู่ด้านบน</button>
                            </div>
                            <label for="companyNo">รหัสบริษัท*</label>
                            <small >*ค้นหาและเลือกข้อมูลลูกค้าเก่าจากฐานข้อมูล ส่วนลูกค้าใหม่ข้ามช่องนี้ได้เลย</small>
                            <div class="col-md-6 col-12">
                                <input type="text" name="companyNo" class="form-or-style"/>
                            </div>
                            <!-- pc button -->
                            <div class="col-md-6 col-12 d-none d-md-block d-lg-block d-xl-block d-xxl-block">
                                <button type="button" class="btn-black">สำเนาที่อยู่ด้านบน</button>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="companyName">ชื่อบริษัท*</label>
                                <input type="text" name="companyName" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="department">แผนก/หน่วยงาน</label>
                                <input type="text" name="department" class="form-or-style"/>
                            </div>
                            <div class="col-12">
                                <label for="companyAddress">ที่อยู่*</label>
                                <textarea id="companyAddress" name="companyAddress" rows="3" class="form-or-style"></textarea>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="province">จังหวัด*</label>
                                <select name="province" class="form-or-style">
                                    <option value="">กรุงเทพมหานคร</option>
                                    <option value="">กาญจนบุรี</option>
                                    <option value="">กาฬสินธุ์</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="district">เขต/อำเภอ*</label>
                                <select name="district" class="form-or-style">
                                    <option value="">พระนคร</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="subdistrict">แขวง/ตำบล*</label>
                                <select name="subdistrict" class="form-or-style">
                                    <option value="">ดุสิต</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="zipcode">รหัสไปรษณีย์*</label>
                                <select name="zipcode" class="form-or-style">
                                    <option value="">10300</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="tel">โทรศัพท์</label>
                                <input type="text" name="tel" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="fax">แฟกซ์</label>
                                <input type="text" name="fax" class="form-or-style"/>
                            </div>
                            <div class="col-12">
                                <label for="taxpayerNo">เลขผู้เสียภาษีอากร*</label>
                                <input type="text" name="taxpayerNo" class="form-or-style"/>
                            </div>
                            <div class="col-12 py-2">
                                <label for="companyType">ประเภทบริษัท</label>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-3 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="companyType" id="companyType1" value="" checked>
                                            <label class="form-check-label" for="companyType1">สำนักงานใหญ่</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="companyType" id="companyType2" value="">
                                            <label class="form-check-label" for="companyType2">สาขาที่</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <input type="text" name="companyTypeName" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: form ข้อมูลลูกค้า - สำหรับออกเอกสารทางบัญชี -->

                        <!-- form ข้อมูลลูกค้า - ในใบรับรองสอบเทียบ -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลลูกค้า ระบุในใบรับรองผลการสอบเทียบ (กรอกเป็นภาษาอังกฤษเท่านั้น)</h6>
                        <div class="row py-2">
                            <div class="col-md-6 col-12">
                                <label for="companyName">ชื่อบริษัท (ภาษาอังกฤษ)*</label>
                                <input type="text" name="companyName" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="department">แผนก/หน่วยงาน</label>
                                <input type="text" name="department" class="form-or-style"/>
                            </div>
                            <div class="col-12">
                                <label for="companyAddress">ที่อยู่*</label>
                                <textarea id="companyAddress" name="companyAddress" rows="3" class="form-or-style"></textarea>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="province">จังหวัด*</label>
                                <select name="province" class="form-or-style">
                                    <option value="">กรุงเทพมหานคร</option>
                                    <option value="">กาญจนบุรี</option>
                                    <option value="">กาฬสินธุ์</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="district">เขต/อำเภอ*</label>
                                <select name="district" class="form-or-style">
                                    <option value="">พระนคร</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="subdistrict">แขวง/ตำบล*</label>
                                <select name="subdistrict" class="form-or-style">
                                    <option value="">ดุสิต</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="zipcode">รหัสไปรษณีย์*</label>
                                <select name="zipcode" class="form-or-style">
                                    <option value="">10300</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </select>
                            </div>
                        </div>
                        <!-- end: form ข้อมูลลูกค้า - ในใบรับรองสอบเทียบ -->

                        <!-- form ข้อมูลลูกค้า - ใบเสนอราคา -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลใบเสนอราคา (ถ้ามี)</h6>
                        <div class="row py-2">
                            <div class="col-12">
                                <label for="quotationNo">เลขที่ใบเสนอราคา</label>
                                <input type="text" name="quotationNo" class="form-or-style"/>
                            </div>
                        </div>
                        <!-- end: form ข้อมูลลูกค้า - ใบเสนอราคา -->

                        <!-- form ข้อมูลลูกค้า - ข้อมูลสอบเทียบ -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลสอบเทียบ</h6>
                        <div class="row py-2">
                            <div class="col-12 py-2">
                                <label for="serviceType">ประเภทรับบริการ*</label>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="serviceType" id="serviceType1" value="" checked>
                                            <label class="form-check-label" for="serviceType1">สอบเทียบห้องปฏิบัติการบริษัทฯ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="serviceType" id="serviceType2" value="">
                                            <label class="form-check-label" for="serviceType2">สอบเทียบนอกสถานที่</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 py-2">
                                <label for="calibrationType">วิธีการสอบเทียบ*</label>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="calibrationType" id="calibration1" value="" checked>
                                            <label class="form-check-label" for="calibration1">ตามมาตรฐานห้องปฏิบัติการ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="calibrationType" id="calibration2" value="">
                                            <label class="form-check-label" for="calibration2">ตามความต้องการของลูกค้า</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 py-4">
                                <label for="dueDate">กำหนดแล้วเสร็จ*</label>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dueDate" id="dueDate1" value="" checked>
                                            <label class="form-check-label" for="dueDate1">7 วัน</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dueDate" id="dueDate2" value="">
                                            <label class="form-check-label" for="dueDate2">14 วัน</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dueDate" id="dueDate3" value="">
                                            <label class="form-check-label" for="dueDate3">อื่น ๆ ระบุ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <input class="form-or-style" type="date" name="dueDateSelect" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 py-2">
                                <label for="report">รายงานผลการสอบเทียบ*</label>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="report" id="report1" value="" checked>
                                            <label class="form-check-label" for="report1">รายงานผลแบบไม่ปรับ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="report" id="report2" value="">
                                            <label class="form-check-label" for="report2">รายงานผลแบบปรับ</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 py-4">
                                <label for="nextSchedule">กำหนดสอบเทียบครั้งต่อไป*</label>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nextSchedule" id="nextSchedule1" value="" checked>
                                            <label class="form-check-label" for="nextSchedule1">3 เดือน</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nextSchedule" id="nextSchedule2" value="">
                                            <label class="form-check-label" for="nextSchedule2">6 เดือน</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nextSchedule" id="nextSchedule3" value="">
                                            <label class="form-check-label" for="nextSchedule3">1 ปี</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nextSchedule" id="nextSchedule4" value="">
                                            <label class="form-check-label" for="nextSchedule4">อื่น ๆ ระบุ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <input class="form-or-style" type="date" name="nextScheduleSelect" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: form ข้อมูลลูกค้า - ข้อมูลสอบเทียบ -->

                        <button type="button" name="next" class="next action-button my-4 mb-5 mx-auto d-block btn-25-50">ต่อไป</button>
                    </fieldset>
                    <!-- end: form ข้อมูลติดต่อ -->

                    <!-- form ข้อมูลเครื่องมือสอบเทียบ -->
                    <fieldset class="text-center mx-0 w-100">
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold text-start">รายการเครื่องมือสอบเทียบ</h6>
                        <!-- Add button -->
                        <button type="button" name="add" class="btn-add d-block btn-25-50">Add</button>

                        <!-- Form เครื่องมือสอบเทียบ (ฟอร์มกรอบขาว) -->
                        <div class="w-100 bg-white p-3 my-3 text-end border">
                            <div class="row text-start">
                                <div class="col-md-1 col-12">
                                    <div class="row">
                                        <label for="no" class="col-md-12 col-auto">No.</label>
                                        <p class="col-md-12 col-auto">1</p>
                                    </div>
                                </div>

                                <div class="col-md-11 col-12">
                                    <div class="row">
                                        <h6 class="fw-bold">ค้นหาจากฐานข้อมูล</h6>
                                        <div class="col-md-4 col-12">
                                            <label for="pipetteType">ประเภทเครื่องมือสอบเทียบ*</label>
                                            <select name="pipetteType" class="form-or-style">
                                                <option value="">เครื่องมือสอบเทียบ 1</option>
                                                <option value="">เครื่องมือสอบเทียบ 2</option>
                                                <option value="">เครื่องมือสอบเทียบ 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="manufacture">ยี่ห้อ*</label>
                                            <select name="manufacture" class="form-or-style">
                                                <option value="">ยี่ห้อ 1</option>
                                                <option value="">ยี่ห้อ 2</option>
                                                <option value="">ยี่ห้อ 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="model">รุ่น*</label>
                                            <select name="model" class="form-or-style">
                                                <option value="">รุ่น 1</option>
                                                <option value="">รุ่น 2</option>
                                                <option value="">รุ่น 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="serialNumber">หมายเลขเครื่อง*</label>
                                            <select name="serialNumber" class="form-or-style">
                                                <option value="">หมายเลขเครื่อง 1</option>
                                                <option value="">หมายเลขเครื่อง 2</option>
                                                <option value="">หมายเลขเครื่อง 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="identifyNumber">รหัสเครื่องมือ</label>
                                            <select name="identifyNumber" class="form-or-style">
                                                <option value="">รหัสเครื่องมือ 1</option>
                                                <option value="">รหัสเครื่องมือ 2</option>
                                                <option value="">รหัสเครื่องมือ 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <h6 class="mt-4 fw-bold">กรอกข้อมูลใหม่</h6>
                                        <div class="col-md-4 col-12">
                                            <label for="pipetteType">ประเภทเครื่องมือสอบเทียบ*</label>
                                            <input type="text" name="pipetteType" class="form-or-style"/>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="manufacture">ยี่ห้อ*</label>
                                            <input type="text" name="manufacture" class="form-or-style"/>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="model">รุ่น*</label>
                                            <input type="text" name="model" class="form-or-style"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-12">
                                            <label for="volumn">ขนาด</label>
                                            <input type="text" name="volumn" class="form-or-style"/>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <label for="serialNumber">หมายเลขเครื่อง*</label>
                                            <input type="text" name="serialNumber" class="form-or-style"/>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <label for="identifyNumber">รหัสเครื่องมือ</label>
                                            <input type="text" name="IdentifyNumber" class="form-or-style"/>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <label for="calibration">จุดสอบเทียบ*</label>
                                            <input type="text" name="calibration" class="form-or-style"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-12">
                                            <label for="">เกณฑ์ยอมรับ</label>
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <label for="condition">สภาพเครื่องมือ</label>
                                            <input class="form-or-style" type="file" id="condition" multiple>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="otherPipette">อุปกรณ์อื่น ๆ</label>
                                            <input type="text" name="otherPipette" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn-icon" title="สำเนา" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-copy"></i></button>
                            <button class="btn-icon" title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                        <!-- end: Form เครื่องมือสอบเทียบ (ฟอร์มกรอบขาว) -->

                        <!-- Google Recaptcha v2 -->
                        <div class="d-flex justify-content-center mt-4 mb-3">
                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                        </div>
                        <!-- end: Google Recaptcha v2 -->

                        <!-- Consent form -->
                        <div class="row text-start d-flex justify-content-center">
                            <div id="consent-checkbox">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="consentaccept">
                                    <label class="form-check-label" for="consentaccept">
                                        ข้าพเจ้ายินยอมให้ผู้ให้บริการเก็บรวบรวม ใช้ และเปิดเผยข้อมูลส่วนบุคคล ของข้าพเจ้า เพื่อวัตถุประสงค์ในการให้บริการตาม <strong><a href="http://" class="text-green" data-bs-toggle="modal" data-bs-target="#exampleModal">นโยบายคุ้มครองข้อมูลส่วนบุคคลของบริษัทฯ</a></strong> การวิเคราะห์ข้อมูล เพื่อวางแผนทางการตลาด รวมถึงวัตถุประสงค์อื่น ๆ ตามที่ผู้ให้บริการเห็นสมควร
                                    </label>
                                </div>
                            </div>
                        </div>
                            <!-- Modal -->
                            <div  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                    <div class="modal-header px-5 pr-0">
                                        <h5 class="modal-title text-center" id="exampleModalScrollableTitle">นโยบายคุ้มครองข้อมูลส่วนบุคคลของบริษัทฯ</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-start p-3 px-5">
                                        <p>ตรงกันข้ามกับความเชื่อที่นิยมกัน Lorem Ipsum ไม่ได้เป็นเพียงแค่ชุดตัวอักษรที่สุ่มขึ้นมามั่วๆ แต่หากมีที่มาจากวรรณกรรมละตินคลาสสิกชิ้นหนึ่งในยุค 45 ปีก่อนคริสตศักราช ทำให้มันมีอายุถึงกว่า 2000 ปีเลยทีเดียว ริชาร์ด แมคคลินท็อค ศาสตราจารย์ชาวละติน จากวิทยาลัยแฮมพ์เด็น-ซิดนีย์ ในรัฐเวอร์จิเนียร์ นำคำภาษาละตินคำว่า consectetur ซึ่งหาคำแปลไม่ได้จาก Lorem Ipsum ตอนหนึ่งมาค้นเพิ่มเติม โดยตรวจเทียบกับแหล่งอ้างอิงต่างๆ ในวรรณกรรมคลาสสิก และค้นพบแหล่งข้อมูลที่ไร้ข้อกังขาว่า Lorem Ipsum นั้นมาจากตอนที่ 1.10.32 และ 1.10.33 ของเรื่อง "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) ของ ซิเซโร ที่แต่งไว้เมื่อ 45 ปีก่อนคริสตศักราช หนังสือเล่มนี้เป็นเรื่องราวที่ว่าด้วยทฤษฎีแห่งจริยศาสตร์ ซึ่งเป็นที่นิยมมากในยุคเรเนสซองส์ บรรทัดแรกของ Lorem Ipsum "Lorem ipsum dolor sit amet.." ก็มาจากบรรทัดหนึ่งในตอนที่ 1.10.32 นั่นเอง
                                        ด้านล่างของหน้านี้คือท่อนมาตรฐานของ Lorem Ipsum ที่ใช้กันมาตั้งแต่คริสตศตวรรษที่ 16ที่ได้รับการสร้างขึ้นใหม่สำหรับผู้ที่สนใจ ประกอบไปด้วย ตอนที่ 1.10.32 และ 1.10.33 จากเรื่อง "de Finibus Bonorum et Malorum" โดยซิเซโร ก็ได้รับการผลิตขึ้นใหม่ด้วยเช่นกันในรูปแบบที่ตรงกับต้นฉบับ ตามมาด้วยเวอร์ชั่นภาษาอังกฤษจากการแปลของ เอช แร็คแคม เมื่อปี ค.ศ. 1914 มีท่อนต่างๆ ของ Lorem Ipsum ให้หยิบมาใช้งานได้มากมาย แต่ส่วนใหญ่แล้วจะถูกนำไปปรับให้เป็นรูปแบบอื่นๆ อาจจะด้วยการสอดแทรกมุกตลก หรือด้วยคำที่มั่วขึ้นมาซึ่งถึงอย่างไรก็ไม่มีทางเป็นเรื่องจริงได้เลยแม้แต่น้อย ถ้าคุณกำลังคิดจะใช้ Lorem Ipsum สักท่อนหนึ่ง คุณจำเป็นจะต้องตรวจให้แน่ใจว่าไม่มีอะไรน่าอับอายซ่อนอยู่ภายในท่อนนั้นๆ ตัวสร้าง Lorem Ipsum บนอินเทอร์เน็ตทุกตัวมักจะเอาท่อนที่แน่ใจแล้วมาใช้ซ้ำๆ ทำให้กลายเป็นที่มาของตัวสร้างที่แท้จริงบนอินเทอร์เน็ต ในการสร้าง Lorem Ipsum ที่ดูเข้าท่า ต้องใช้คำจากพจนานุกรมภาษาละตินถึงกว่า 200 คำ ผสมกับรูปแบบโครงสร้างประโยคอีกจำนวนหนึ่ง เพราะฉะนั้น Lorem Ipsum ที่ถูกสร้างขึ้นใหม่นี้ก็จะไม่ซ้ำไปซ้ำมา ไม่มีมุกตลกซุกแฝงไว้ภายใน หรือไม่มีคำใดๆ ที่ไม่บ่งบอกความหมาย มีหลักฐานที่เป็นข้อเท็จจริงยืนยันมานานแล้ว ว่าเนื้อหาที่อ่านรู้เรื่องนั้นจะไปกวนสมาธิของคนอ่านให้เขวไปจากส่วนที้เป็น Layout เรานำ Lorem Ipsum มาใช้เพราะความที่มันมีการกระจายของตัวอักษรธรรมดาๆ แบบพอประมาณ ซึ่งเอามาใช้แทนการเขียนว่า ‘ตรงนี้เป็นเนื้อหา, ตรงนี้เป็นเนื้อหา' ได้ และยังทำให้มองดูเหมือนกับภาษาอังกฤษที่อ่านได้ปกติ ปัจจุบันมีแพ็กเกจของซอฟท์แวร์การทำสื่อสิ่งพิมพ์ และซอฟท์แวร์การสร้างเว็บเพจ (Web Page Editor) หลายตัวที่ใช้ Lorem Ipsum เป็นแบบจำลองเนื้อหาที่เป็นค่าตั้งต้น และเวลาที่เสิร์ชด้วยคำว่า 'lorem ipsum' ผลการเสิร์ชที่ได้ก็จะไม่พบบรรดาเว็บไซต์ที่ยังคงอยู่ในช่วงเริ่มสร้างด้วย โดยหลายปีที่ผ่านมาก็มีการคิดค้นเวอร์ชั่นต่างๆ ของ Lorem Ipsum ขึ้นมาใช้ บ้างก็เป็นความบังเอิญ บ้างก็เป็นความตั้งใจ (เช่น การแอบแทรกมุกตลก) "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                        <p>This content should appear at the bottom after you scroll.</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Modal -->
                        <!-- end: Consent form -->

                        <button type="button" name="previous" class="previous action-button-previous my-4 mb-5 mx-2 btn-25-50">ย้อนกลับ</button>
                        <button type="button" name="next" class="next action-button my-4 mb-5 mx-2 btn-25-50">ส่งข้อมูล</button>

                    </fieldset>
                    <!-- end: form ข้อมูลเครื่องมือสอบเทียบ -->

                    <!-- form ส่งข้อมูล -->
                    <fieldset>
                        <img class="p-5 img-fluid mx-auto d-block mt-3" src="images/sent-form.png" alt="" id="img-sent-form">
                        <h3 class="text-center">ส่งฟอร์มขอใช้บริการสอบเทียบเรียบร้อย</h3>
                        <a href="index.php"><button type="button" class="btn-black my-4 mb-5 d-block mx-auto btn-25-50">กลับสู่หนัาหลัก</button></a>
                    </fieldset>
                    <!-- end: form ส่งข้อมูล -->

                </form>
            </div>
        </div>
        <!-- end: MultiStep Form -->

    </div>



<?php require('inc_footer.php'); ?>
</body>
</html>

<script>

// Initialize tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

	//show the next fieldset
	next_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

	//show the previous fieldset
	previous_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})
</script>