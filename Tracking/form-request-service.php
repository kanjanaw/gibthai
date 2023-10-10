<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>@include('layouts.inc_header')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>
<body>
@include('layouts.inc_topmenu')

<?php 
 $province = App\Models\dataset_provinces::select('name_th', 'id', 'name_en')
 ->orderByRaw("CONVERT(name_th USING tis620) ASC")
 ->get();

 ?>
  <?php $search = App\Models\form_data::select('1name_company', DB::raw('MAX(id) as max_id'))
    ->groupBy('1name_company')
    ->orderByRaw("CONVERT(1name_company USING tis620) ASC")
    ->get(); ?>

    <div class="container">
    <h4 class="font-weight-700 pt-5 text-center">แจ้งขอรับบริการสอบเทียบเครื่องมือ</h4>
       
        <!-- MultiStep Form -->
        <div class="row">
            <div class="col-12">
                <form id="msform" >
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">ข้อมูลลูกค้า</li>
                        <li>ข้อมูลเครื่องมือสอบเทียบ</li>
                        <li>ส่งข้อมูล</li>
                    </ul>

                    <!-- form ข้อมูลลูกค้า -->
                    <fieldset id="T1" >
                        <!-- form ข้อมูลลูกค้า -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลลูกค้า (บริษัทเจ้าของเครื่องมือ)</h6>
                        <div id="a1" class="row py-2">
                            <label for="companyNo">รหัสบริษัท*</label>
                            <small >*ค้นหาและเลือกข้อมูลลูกค้าเก่าจากฐานข้อมูล ส่วนลูกค้าใหม่ข้ามช่องนี้ได้เลย</small>
                            <div class="col-md-6 col-12">
                                <!-- <input type="text" name="companyNo1" class="form-or-style js-example-basic-single"/> -->
                                <select class="form-or-style js-example-basic-single" name="companyNo1">
                                <option value="">ค้นหา</option>
                                @foreach($search as $item)
                                <option value="{{$item['1name_company']}}">{{$item['1name_company']}}</option>
                                @endforeach
                                </select>
                            </div>
                             <div class="col-md-6 col-12">
                                <div class="d-grid d-md-inline">
                                    <button type="button" onclick="search1()" class="btn-black mb-4 mb-md-0"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="companyName">ชื่อบริษัท*</label>
                                <input type="text" name="companyName1" class="form-or-style" required/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="department">แผนก/หน่วยงาน</label>
                                <input type="text" name="department1" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="companyAddress">ที่อยู่*</label>
                                <textarea id="companyAddress" name="companyAddress1" rows="3" class="form-or-style" required></textarea>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="province">จังหวัด*</label>
                                <select name="province1" class="form-or-style" required>
                                    @foreach($province as $ps)
                                    <option value="{{$ps->name_th}}">{{$ps->name_th}}</option>
                                    @endforeach
                                    <!-- <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                    <option value="กาญจนบุรี">กาญจนบุรี</option>
                                    <option value="กาฬสินธุ์">กาฬสินธุ์</option> -->
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="zipcode">รหัสไปรษณีย์*</label>
                                <input type="text" name="zipcode1" class="form-or-style" required/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="tel">โทรศัพท์</label>
                                <input type="text" name="tel1" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="fax">แฟกซ์</label>
                                <input type="text" name="fax1" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="taxpayerNo">เลขผู้เสียภาษีอากร*</label>
                                <input type="text" name="taxpayerNo1" class="form-or-style" required/>
                            </div>
                            <div class="col-12 py-2">
                                <label for="companyType">ประเภทบริษัท</label>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-3 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="companyTypeInfo1" id="companyType1" value="สำนักงานใหญ่" checked>
                                            <label class="form-check-label" for="companyType1">สำนักงานใหญ่</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="companyTypeInfo1" id="companyType2" value="สาขาที่">
                                            <label class="form-check-label" for="companyType2">สาขาที่</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <input type="text" name="companyTypeName1" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="contactName">ชื่อผู้ติดต่อ*</label>
                                <input type="text" name="contactName1" class="form-or-style" required/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="email">อีเมล*</label>
                                <input type="email" name="email1" class="form-or-style" required/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="contactTel">โทรศัพท์ผู้ติดต่อ*</label>
                                <input type="text" name="contactTel1" class="form-or-style" required/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="lineId">Line ID</label>
                                <input type="text" name="lineId1" class="form-or-style"/>
                            </div>
                        </div>
                        <!-- end: form ข้อมูลลูกค้า -->

                        <!-- form ข้อมูลลูกค้า สำหรับออกเอกสารทางบัญชี -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลลูกค้า สำหรับออกเอกสารทางบัญชี (ใบเสนอราคา, ใบแจ้งหนี้/ใบกำกับภาษี/ใบเสร็จ)</h6>
                        <div id="a2" class="row py-2">
                            <div class="col-md-6 col-12 order-md-0 order-first">
                                <div class="d-grid d-md-inline">
                                    <button type="button" onclick="copyAddress()" class="btn-black mb-4 mb-md-0">สำเนาที่อยู่ด้านบน</button>
                                </div>
                            </div>
                             <div class="col-md-12 col-12">
                                 <br>
                            </div>
                            <label for="companyNo">รหัสบริษัท*</label>
                            <small >*ค้นหาและเลือกข้อมูลลูกค้าเก่าจากฐานข้อมูล ส่วนลูกค้าใหม่ข้ามช่องนี้ได้เลย</small>
                            <div class="col-md-6 col-12">
                                <!-- <input type="text" name="companyNo2" class="form-or-style js-example-basic-single" /> -->

                                <select class="form-or-style js-example-basic-single" name="companyNo2">
                                <option value="">ค้นหา</option>
                                @foreach($search as $item)
                                <option value="{{$item['1name_company']}}">{{$item['1name_company']}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="d-grid d-md-inline">
                                    <button type="button" onclick="search2()" class="btn-black mb-4 mb-md-0"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="companyName">ชื่อบริษัท*</label>
                                <input type="text" name="companyName2" class="form-or-style" required/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="department">แผนก/หน่วยงาน</label>
                                <input type="text" name="department2" class="form-or-style"/>
                            </div>
                            <div class="col-12">
                                <label for="companyAddress">ที่อยู่*</label>
                                <textarea id="companyAddress" name="companyAddress2" rows="3" class="form-or-style" required></textarea>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="province">จังหวัด*</label>
                                <select name="province2" class="form-or-style" required>
                                @foreach($province as $ps)
                                    <option value="{{$ps->name_th}}">{{$ps->name_th}}</option>
                                    @endforeach
                                    <!-- <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                    <option value="กาญจนบุรี">กาญจนบุรี</option>
                                    <option value="กาฬสินธุ์">กาฬสินธุ์</option> -->
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="zipcode">รหัสไปรษณีย์*</label>
                                <input type="text" name="zipcode2" class="form-or-style" required/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="tel">โทรศัพท์</label>
                                <input type="text" name="tel2" class="form-or-style"/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="fax">แฟกซ์</label>
                                <input type="text" name="fax2" class="form-or-style"/>
                            </div>
                            <div class="col-12">
                                <label for="taxpayerNo">เลขผู้เสียภาษีอากร*</label>
                                <input type="text" name="taxpayerNo2" class="form-or-style" required/>
                            </div>
                            <div class="col-12 py-2">
                                <label for="companyType">ประเภทบริษัท</label>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-3 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="companyType2" id="companyType1" value="สำนักงานใหญ่" checked>
                                            <label class="form-check-label" for="companyType1">สำนักงานใหญ่</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="companyType2" id="companyType2" value="สาขาที่">
                                            <label class="form-check-label" for="companyType2">สาขาที่</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <input type="text" name="companyTypeName2" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: form ข้อมูลลูกค้าสำหรับออกเอกสารทางบัญชี -->

                        <!-- form ข้อมูลลูกค้า ในใบรับรองสอบเทียบ -->
                    <div id="a3">
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลลูกค้า ระบุในใบรับรองผลการสอบเทียบ (กรอกเป็นภาษาอังกฤษเท่านั้น)</h6>
                        <div class="row py-2">
                            <div class="col-md-6 col-12">
                                <label for="companyName">ชื่อบริษัท (ภาษาอังกฤษ)*</label>
                                <input type="text" name="companyName3" class="form-or-style" required/>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="department">แผนก/หน่วยงาน</label>
                                <input type="text" name="department3" class="form-or-style"/>
                            </div>
                            <div class="col-12">
                                <label for="companyAddress">ที่อยู่*</label>
                                <textarea id="companyAddress" name="companyAddress3" rows="3" class="form-or-style" required></textarea>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="province">จังหวัด*</label>
                                <select name="province3" class="form-or-style" required>
                                @foreach($province as $ps)
                                    <option value="{{$ps->name_th}}">{{$ps->name_th}}</option>
                                    @endforeach
                                    <!-- <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                    <option value="กาญจนบุรี">กาญจนบุรี</option>
                                    <option value="กาฬสินธุ์">กาฬสินธุ์</option> -->
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="zipcode">รหัสไปรษณีย์*</label>
                                <input type="text" name="zipcode3" class="form-or-style" required/>
                            </div>
                        </div>
                        <!-- end: form ข้อมูลลูกค้า ในใบรับรองสอบเทียบ -->

                        <!-- form ข้อมูลลูกค้า ใบเสนอราคา -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลใบเสนอราคา (ถ้ามี)</h6>
                        <div class="row py-2">
                            <div class="col-12">
                                <label for="quotationNo">เลขที่ใบเสนอราคา</label>
                                <input type="text" name="quotationNo" class="form-or-style"/>
                            </div>
                        </div>
                        <!-- end: form ข้อมูลลูกค้า ใบเสนอราคา -->

                        <!-- form ข้อมูลลูกค้า ข้อมูลสอบเทียบ -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลสอบเทียบ</h6>
                        <div class="row py-2">
                            <div class="col-12 py-2">
                                <label for="serviceType">ประเภทรับบริการ*</label>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="serviceType" id="serviceType1" value="สอบเทียบห้องปฏิบัติการบริษัทฯ" checked>
                                            <label class="form-check-label" for="serviceType1">สอบเทียบห้องปฏิบัติการบริษัทฯ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="serviceType" id="serviceType2" value="สอบเทียบนอกสถานที่">
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
                                            <input class="form-check-input" type="radio" name="calibrationType" id="calibration1" value="ตามมาตรฐานห้องปฏิบัติการ" checked>
                                            <label class="form-check-label" for="calibration1">ตามมาตรฐานห้องปฏิบัติการ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="calibrationType" id="calibration2" value="ตามความต้องการของลูกค้า">
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
                                            <input class="form-check-input" type="radio" name="dueDate" id="dueDate1" value="7 วัน" checked>
                                            <label class="form-check-label" for="dueDate1">7 วัน</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dueDate" id="dueDate2" value="14 วัน">
                                            <label class="form-check-label" for="dueDate2">14 วัน</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="dueDate" id="dueDate3" value="อื่น ๆ ระบุ">
                                            <label class="form-check-label" for="dueDate3">อื่น ๆ ระบุ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <input class="form-or-style" type="date" name="dueDateSelect" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 py-2">
                                <label for="report">รายงานผลการสอบเทียบ*</label>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="report" id="report1" value="รายงานผลแบบไม่ปรับ" checked>
                                            <label class="form-check-label" for="report1">รายงานผลแบบไม่ปรับ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="report" id="report2" value="รายงานผลแบบปรับ">
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
                                            <input class="form-check-input" type="radio" name="nextSchedule" id="nextSchedule1" value="3 เดือน" checked>
                                            <label class="form-check-label" for="nextSchedule1">3 เดือน</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nextSchedule" id="nextSchedule2" value="6 เดือน">
                                            <label class="form-check-label" for="nextSchedule2">6 เดือน</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nextSchedule" id="nextSchedule3" value="1 ปี">
                                            <label class="form-check-label" for="nextSchedule3">1 ปี</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nextSchedule" id="nextSchedule4" value="อื่น ๆ ระบุ">
                                            <label class="form-check-label" for="nextSchedule4">อื่น ๆ ระบุ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <input class="form-or-style" type="date" name="nextScheduleSelect" >
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                        <!-- end: form ข้อมูลลูกค้า ข้อมูลสอบเทียบ -->
                        
                        <button type="button" name="next" class="next action-button my-4 mb-5 mx-auto d-block btn-25-50">ต่อไป</button>
                    </fieldset>
                    <!-- end: form ข้อมูลติดต่อ -->

                    <!-- form ข้อมูลเครื่องมือสอบเทียบ -->
                    <fieldset class="text-center mx-0 w-100" id="T2" >
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold text-start">รายการเครื่องมือสอบเทียบ</h6>
                        <!-- Add button -->
                        <button type="button" name="add" id="coppy"  class="btn-add d-block btn-25-50">Add</button>
                        <!-- Form เครื่องมือสอบเทียบ (ฟอร์มกรอบขาว) -->

                        <div id="a4">
                        <div id="container" class="w-100 bg-white p-3 my-3 text-end border tech">
                            <div class="row rowcopy text-start">
                                <div class="col-md-1 col-12">
                                    <div class="row">
                                        <label for="no" class="col-md-12 col-auto">No.</label>
                                        <p class="col-md-12 col-auto number">1</p>
                                    </div> 
                                </div>

                                <div class="col-md-11 col-12">
                                    <div class="row">
                                        <h6 class="fw-bold">ค้นหาจากฐานข้อมูล</h6>
                                        <div class="col-md-4 col-12">
                                            <label for="pipetteType">ประเภทเครื่องมือสอบเทียบ</label>
                                            <select name="pipetteType" class="form-or-style pipetteType js-example-basic-single">
                                            <option value="">เลือก</option>
                                                <option value="เครื่องมือสอบเทียบ 1">เครื่องมือสอบเทียบ 1</option>
                                                <option value="เครื่องมือสอบเทียบ 2">เครื่องมือสอบเทียบ 2</option>
                                                <option value="เครื่องมือสอบเทียบ 3">เครื่องมือสอบเทียบ 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="manufacture">ยี่ห้อ</label>
                                            <select name="manufacture" class="form-or-style manufacture js-example-basic-single">
                                            <option value="">เลือก</option>
                                                <option value="ยี่ห้อ 1">ยี่ห้อ 1</option>
                                                <option value="ยี่ห้อ 2">ยี่ห้อ 2</option>
                                                <option value="ยี่ห้อ 3">ยี่ห้อ 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="model">รุ่น</label>
                                            <select name="model" class="form-or-style model js-example-basic-single">
                                            <option value="">เลือก</option>
                                                <option value="รุ่น 1">รุ่น 1</option>
                                                <option value="รุ่น 2">รุ่น 2</option>
                                                <option value="รุ่น 3">รุ่น 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <h6 class="mt-4 fw-bold">กรอกข้อมูลใหม่</h6>
                                        <div class="col-md-4 col-12">
                                            <label for="pipetteType">ประเภทเครื่องมือสอบเทียบ*</label>
                                            <input type="text" name="pipetteType1[]" class="form-or-style pipetteType1" readonly required/>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="manufacture">ยี่ห้อ*</label>
                                            <input type="text" name="manufacture1[]" class="form-or-style manufacture1"  required/>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="model">รุ่น*</label>
                                            <input type="text" name="model1[]" class="form-or-style model1"  required/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-12">
                                            <label for="volumn">ขนาด</label>
                                            <input type="text" name="volumn[]" class="form-or-style volumn"/>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <label for="serialNumber">หมายเลขเครื่อง(*กรอกอันใดอันหนึ่ง)</label>
                                            <input type="text" name="serialNumber[]" class="form-or-style serialNumber" />
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <label for="identifyNumber">รหัสเครื่องมือ(*กรอกอันใดอันหนึ่ง)</label>
                                            <input type="text" name="IdentifyNumber[]" class="form-or-style IdentifyNumber"/>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <label for="calibration">จุดสอบเทียบ*</label>
                                            <input type="text" name="calibration[]" class="form-or-style calibration" required/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-12">
                                            <label for="">เกณฑ์ยอมรับ</label>
                                            <input type="text" name="gain[]" class="form-or-style gain"/>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <label for="condition">สภาพเครื่องมือ</label>
                                            <input class="form-or-style file" type="file" id="condition" name="file[]" >
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="otherPipette">อุปกรณ์อื่น ๆ</label>
                                            <input type="text" name="otherPipette[]" class="form-or-style otherPipette"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" id=""  class="btn-icon copyButton" title="สำเนา" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-copy"></i></button>
                            <button type="button" id="deleteButton" class="btn-icon deleteButton" title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa-regular fa-trash-can"></i></button>

                            
                        </div >
                        </div>

                        <div id="show_tech" class="text-end show_tech">
                        </div >

                        <!-- end: Form เครื่องมือสอบเทียบ (ฟอร์มกรอบขาว) -->

                        <div id="" class=" mt-4 mb-3 ddd">
                        </div>

                        <!-- Google Recaptcha v2 -->

                        <div  class="d-flex justify-content-center mt-4 mb-3">
                            <div id="html_element" class="g-recaptcha" data-sitekey="6LcWelAoAAAAAFXOJHaRi8JIYG2PE5STp0El7bvN"></div>
                        </div>


                        <!-- end: Google Recaptcha v2 -->

                        <!-- Consent form -->
                        <div class="row text-start d-flex justify-content-center">
                            <div id="consent-checkbox">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="consentaccept" >
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
                        <button type="button" name="next" class="next-2 action-button my-4 mb-5 mx-2 btn-25-50">ส่งข้อมูล</button>
                    
                    </fieldset  >
                    <!-- end: form ข้อมูลเครื่องมือสอบเทียบ -->

                    <!-- form ส่งข้อมูล -->
                    <fieldset id="T3">
                        <img class="p-5 img-fluid mx-auto d-block mt-3" src="images/sent-form.png" alt="" id="img-sent-form">
                        <h3 class="text-center">ส่งฟอร์มขอใช้บริการสอบเทียบเรียบร้อย</h3>
                        <a href="{{url('index')}}"><button type="button" class="btn-black my-4 mb-5 d-block mx-auto btn-25-50">กลับสู่หนัาหลัก</button></a>
                    </fieldset>
                    <!-- end: form ส่งข้อมูล -->

                </form>
            </div>
        </div>
        <!-- end: MultiStep Form -->
            
    </div>


@include('layouts.inc_footer')
</body>
</html>

<!--ส่วนจัดการเครื่องมือช่าง--------->
<script>
    $(document).ready(function () {
        let divCount = 1;

        // Add a new tech div when the "Add" button is clicked
        $(document).on('click', '#coppy', function () {
            const newDiv = $('.tech:first').clone();
            newDiv.find('.number').text(++divCount);
            newDiv.find('input, select').val('');
            // $('#container').append(newDiv);
            $('#show_tech').append(newDiv);
        });

        // Handle copying a tech div
        $(document).on('click', '.copyButton', function () {
            const parentDiv = $(this).closest('.tech');
            const newDiv = parentDiv.clone();

            newDiv.find('input[type="file"]').val('');

            newDiv.find('input').each(function () {
                const inputValue = $(this).val();
                $(this).val(inputValue);
            });
            newDiv.find('.number').text(++divCount);
            $('#show_tech').append(newDiv);
        });

        // Handle deleting a tech div
        $(document).on('click', '.deleteButton', function () {
            if (divCount > 1) {
                $(this).closest('#container').remove();

                divCount--;
                $('.tech').each(function (index) {
                    $(this).find('.number').text(index + 1);
                });
            }
        });

    });
</script>
<!--ส่วนจัดการเครื่องมือช่าง--------->
<script>
    $(document).on('change', '.pipetteType', function () {
        const parentDiv = $(this).closest('.tech');
        var selectedValue = $(this).val();
        parentDiv.find('.pipetteType1').val(selectedValue);
    });

    $(document).on('change', '.manufacture', function () {
        const parentDiv = $(this).closest('.tech');
        var selectedValue = $(this).val();
        parentDiv.find('.manufacture1').val(selectedValue);
    });

    $(document).on('change', '.model', function () {
        const parentDiv = $(this).closest('.tech');
        var selectedValue = $(this).val();
        parentDiv.find('.model1').val(selectedValue);
    });
</script>




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
// check-validate-----

// var fieldsetT1 = document.getElementById('T1');
// var requiredElements = fieldsetT1.querySelectorAll('select[required], input[required], textarea[required]');

// var isValid = true;

// for (var i = 0; i < requiredElements.length; i++) {
//     var element = requiredElements[i];
//     if (element.value.trim() === '') {
//         alert('Please complete the required field.');
//         isValid = false;
//         break; // Exit the loop early if a field is not valid
//     }
// }

// if (!isValid) {
//     return false; // Prevent further action if any field is not valid
// }

// check-validate-----


// alert(1);

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







$(".next-2").click(function(){

alert('test');



//save data------------------------------

// FormA4-Tool-----------------formData
var formData = [];

$('.tech').each(function () {
        var pipetteType1 = $(this).find('input[name="pipetteType1[]"]').val();
        var manufacture1 = $(this).find('input[name="manufacture1[]"]').val();
        var model1 = $(this).find('input[name="model1[]"]').val();
        var volumn = $(this).find('input[name="volumn[]"]').val();
        var serialNumber = $(this).find('input[name="serialNumber[]"]').val();
        var IdentifyNumber = $(this).find('input[name="IdentifyNumber[]"]').val();
        var calibration = $(this).find('input[name="calibration[]"]').val();
        var gain = $(this).find('input[name="gain[]"]').val();
        var otherPipette = $(this).find('input[name="otherPipette[]"]').val();

        var file = $(this).find('input[name="file[]"]')[0].files[0]; // Get the first file input's file

        // Create a FormData object to handle file uploads
        var item = new FormData();
        item.append('pipetteType1', pipetteType1);
        item.append('manufacture1', manufacture1);
        item.append('model1', model1);
        item.append('volumn', volumn);
        item.append('serialNumber', serialNumber);
        item.append('IdentifyNumber', IdentifyNumber);
        item.append('calibration', calibration);
        item.append('gain', gain);
        item.append('otherPipette', otherPipette);
        item.append('file', file);

        // Push the FormData object into the dataToSend array
        formData.push(item);

    });
    // FormA4-Tool-----------------formData

    // Make an AJAX POST request to submit the form data
    $.ajax({
        url: '{{url('form-request-service-send-data')}}', 
        type: 'POST',
        data: {
        "_token": "{{ csrf_token() }}",
        "formData": formData,
        },
        // data: formData, // Send the form data
        success: function(item) {
                    if(item.status=='success'){
                        alert('success');
                    }else{
                        alert('fail');
                    }
                },
    });
//save data---------------------------------


alert('check');
return false;

// check-validate-----

var fieldsetT2 = document.getElementById('T2');
var requiredElements = fieldsetT2.querySelectorAll('select[required], input[required], textarea[required]');

var isValid = true;

for (var i = 0; i < requiredElements.length; i++) {
    var element = requiredElements[i];
    if (element.value.trim() === '') {
        alert('Please complete the required field.');
        isValid = false;
        break; // Exit the loop early if a field is not valid
    }
}

if (!isValid) {
    return false; // Prevent further action if any field is not valid
}
   
var serialNumber = $("input[name='serialNumber[]']");
var IdentifyNumber = $("input[name='IdentifyNumber[]']");
if (serialNumber.val() === '' && IdentifyNumber.val() === '') {
    alert('PLease Check serialNumber or IdentifyNumber.');
    return false;
}

var recaptchaResponse = $("#html_element textarea[name='g-recaptcha-response']");
// Check if the reCAPTCHA response is empty
if (recaptchaResponse.val() === '') {
    alert('PLease Check reCAPTCHA.');
    return false;
}

var consentCheckbox = $("#consentaccept");
// Check if the checkbox is not checked
if (!consentCheckbox.is(":checked")) {
    alert('You must accept the consent checkbox.');
    return false;
}


// check-validate-----

alert(2);

// save---data---

// save---data---

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

// $(".submit").click(function(){
// 	return false;
// })
</script>

<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LcWelAoAAAAAFXOJHaRi8JIYG2PE5STp0El7bvN'
        });
      };
    </script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>


<script>
function search1() {
    var id = document.querySelector('#a1 select[name="companyNo1"]').value;
    // document.querySelector('#a1 input[name="companyName1"]').value = id;

    $.ajax({
                url: "{!!url('/search_form_customer')!!}",
                method: "POST",
                type: "PUT",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                },
                success: function(item) {
                    if(item.status=='success'){
                        document.querySelector('#a1 input[name="companyName1"]').value = item.name_company;
                        document.querySelector('#a1 input[name="department1"]').value = item.name_agency;
                        document.querySelector('#a1 textarea[name="companyAddress1"]').value = item.address;
                        document.querySelector('#a1 select[name="province1"]').value = item.province;
                        document.querySelector('#a1 input[name="zipcode1"]').value = item.zip_code;
                        document.querySelector('#a1 input[name="tel1"]').value = item.phone;
                        document.querySelector('#a1 input[name="fax1"]').value = item.fax;
                        document.querySelector('#a1 input[name="taxpayerNo1"]').value = item.tax_number;
                        document.querySelector('#a1 input[name="companyTypeName1"]').value = item.company_type_other;

                        var radioButtonsA1 = document.querySelectorAll('#a1 input[name="companyTypeInfo1"]');
                        for (var i = 0; i < radioButtonsA1.length; i++) {
                        if (radioButtonsA1[i].value === item.company_type) {
                        radioButtonsA1[i].checked = true;
                        } else {
                        radioButtonsA1[i].checked = false;
                        }
                         }


                    }else{
                       
                    }
                },
            });
}
</script>

<script>
function search2() {
    var id = document.querySelector('#a2 select[name="companyNo2"]').value;
    // document.querySelector('#a2 input[name="companyName2"]').value = id;

    $.ajax({
                url: "{!!url('/search_form_customer')!!}",
                method: "POST",
                type: "PUT",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                },
                success: function(item) {
                    if(item.status=='success'){
                        document.querySelector('#a2 input[name="companyName2"]').value = item.name_company;
                        document.querySelector('#a2 input[name="department2"]').value = item.name_agency;
                        document.querySelector('#a2 textarea[name="companyAddress2"]').value = item.address;
                        document.querySelector('#a2 select[name="province2"]').value = item.province;
                        document.querySelector('#a2 input[name="zipcode2"]').value = item.zip_code;
                        document.querySelector('#a2 input[name="tel2"]').value = item.phone;
                        document.querySelector('#a2 input[name="fax2"]').value = item.fax;
                        document.querySelector('#a2 input[name="taxpayerNo2"]').value = item.tax_number;
                        document.querySelector('#a2 input[name="companyTypeName2"]').value = item.company_type_other;

                        var radioButtonsA2 = document.querySelectorAll('#a2 input[name="companyType2"]');
                        for (var i = 0; i < radioButtonsA2.length; i++) {
                        if (radioButtonsA2[i].value === item.company_type) {
                        radioButtonsA2[i].checked = true;
                        } else {
                        radioButtonsA2[i].checked = false;
                        }
                         }


                    }else{
                       
                    }
                },
            });
}
</script>

<script>
function copyAddress() {
  // ดึงค่าที่กรอกใน input ใน div a1
  var inputFromA1 = document.querySelector('#a1 input[name="companyName1"]').value;
  var inputFromA2 = document.querySelector('#a1 input[name="department1"]').value;
  var inputFromA3 = document.querySelector('#a1 textarea[name="companyAddress1"]').value;
  var inputFromA4 = document.querySelector('#a1 select[name="province1"]').value;
  var inputFromA5 = document.querySelector('#a1 input[name="zipcode1"]').value;
  var inputFromA6 = document.querySelector('#a1 input[name="tel1"]').value;
  var inputFromA7 = document.querySelector('#a1 input[name="fax1"]').value;
  var inputFromA8 = document.querySelector('#a1 input[name="taxpayerNo1"]').value;
  var inputFromA9 = document.querySelector('#a1 input[name="companyTypeInfo1"]:checked').value;
  var inputFromA10 = document.querySelector('#a1 input[name="companyTypeName1"]').value;

  // นำค่าที่ดึงมาแสดงใน input ใน div a2
  document.querySelector('#a2 input[name="companyName2"]').value = inputFromA1;
  document.querySelector('#a2 input[name="department2"]').value = inputFromA2;
  document.querySelector('#a2 textarea[name="companyAddress2"]').value = inputFromA3;
  document.querySelector('#a2 select[name="province2"]').value = inputFromA4;
  document.querySelector('#a2 input[name="zipcode2"]').value = inputFromA5;
  document.querySelector('#a2 input[name="tel2"]').value = inputFromA6;
  document.querySelector('#a2 input[name="fax2"]').value = inputFromA7;
  document.querySelector('#a2 input[name="taxpayerNo2"]').value = inputFromA8;
  
  // Set the radio button in div a2 based on the value from div a1
  var radioButtonsA2 = document.querySelectorAll('#a2 input[name="companyType2"]');
  for (var i = 0; i < radioButtonsA2.length; i++) {
    if (radioButtonsA2[i].value === inputFromA9) {
      radioButtonsA2[i].checked = true;
    } else {
      radioButtonsA2[i].checked = false;
    }
  }
  
  document.querySelector('#a2 input[name="companyTypeName2"]').value = inputFromA10;
}
</script>

<script>
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>


</html>