<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
<?php   $pageName = "service";  ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>

<div class="px-4">
    <div class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="service.php">งานบริการสอบเทียบ</a></li>
                <li class="breadcrumb-item active" aria-current="page">เพิ่มงานบริการสอบเทียบใหม่</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>สถานะงานบริการสอบเทียบ</h4>
            <!-- <button type="button" name="add" class="btn-black d-block px-4" data-bs-toggle="modal" data-bs-target="#addStatusForm">เพิ่มสถานะงาน</button> -->
        </div>

        <div class="my-3 d-flex">
            <div class="progress-badge">2</div>
            <div class="mx-2">
                <h4 class="text-green fw-bold">ตรวจเช็ครายละเอียด</h4>
                <h5 class="text-grey fw-light">บริษัทตรวจเช็ครายละเอียด</h5>
            </div>
        </div>

         <!-- progress bar -->
         <div class="d-flex">
            <div class="progress-tab active"></div>
            <div class="progress-tab active"></div>
            <div class="progress-tab"></div>
            <div class="progress-tab"></div>
            <div class="progress-tab"></div>
            <div class="progress-tab"></div>
            <div class="progress-tab"></div>
            <div class="progress-tab"></div>
            <div class="progress-tab"></div>
        </div>
        <!-- end: progress bar -->

    </div>

    <div class="panel">
        <div class="row">
            <div class="tabs">
                <ul class="nav tab-green nav-tabs nav-fill flex-column flex-md-row" id="customerTabs" role="tablist">
                    <li class="nav-item">
                        <a class="tab-green nav-link active" id="calibration-tab" data-bs-toggle="tab" href="#calibration" role="tab"  aria-selected="true">งานบริการสอบเทียบ</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="quotation-tab" data-bs-toggle="tab" href="#quotation" role="tab" aria-selected="false">ใบเสนอราคา</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="service-status-h-tab" data-bs-toggle="tab" href="#service-status-h" role="tab"  aria-selected="false">ประวัติสถานะงานบริการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="email-h-tab" data-bs-toggle="tab" href="#email-h" role="tab"  aria-selected="false">ประวัติการส่งอีเมล</a>
                    </li>
                </ul>


                <div class="tab-content" id="myTabContent">
                    <!-- งานบริการสอบเทียบ tab -->
                    <div class="tab-pane fade active show" id="calibration" role="tabpanel">
                        <!-- ข้อมูลงานบริการสอบเทียบเครื่องมือวัด -->
                        <h6 class="p-2 bg-e5e5e5 fw-bold">ข้อมูลงานบริการสอบเทียบเครื่องมือวัด</h6>
                        <div class="row py-2">
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">เลขที่งานบริการ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style" value="CSyymm-xxxx"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่งานบริการ :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">เลขที่รับแจ้ง* :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style" value="RQyymm-xxxx" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่รับแจ้ง* :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style" value="21/07/2023" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ประเภทรับบริการ* :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="serviceType" class="form-or-style" onchange="changeServiceType()">
                                            <option value="1">สอบเทียบห้องปฏิบัติการบริษัทฯ</option>
                                            <option value="2">สอบเทียบนอกสถานที่</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ผู้รับงานบริการ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style" value="Default by Login" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วิธีการสอบเทียบ* :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">รายงานผลสอบเทียบ* :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">รายงานผลแบบไม่ปรับ</option>
                                            <option value="">รายงานผลแบบปรับ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">กำหนดสอบเทียบแล้วเสร็จ* :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select name="" id="" class="form-or-style w-25">
                                                <option value="">7 วัน</option>
                                                <option value="" selected>14 วัน</option>
                                                <option value="">อื่น ๆ</option>
                                            </select>
                                            <input type="date" name="" class="form-or-style w-75" value="2023-08-16"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">กำหนดสอบเทียบครั้งต่อไป* :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select name="" id="" class="form-or-style w-25">
                                                <option value="">3 เดือน</option>
                                                <option value="" selected>6 เดือน</option>
                                                <option value="">1 ปี</option>
                                                <option value="">อื่น ๆ</option>
                                            </select>
                                            <input type="date" name="" class="form-or-style w-75" value="2024-02-15"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ข้อมูลเพิ่มเติม :</label>
                                    <div class="col-sm-8">
                                        <textarea name="" id="" rows="4" class="form-or-style"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ใบแจ้งขอรับบริการ/ใบรายการเครื่องมือสอบเทียบของลูกค้า (ไฟล์แนบ) :</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="" class="form-or-style" multiple/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: ข้อมูลงานบริการสอบเทียบเครื่องมือวัด -->

                        <!-- ข้อมูลลูกค้า -->
                        <h6 class="mt-4 p-2 bg-e5e5e5 fw-bold">ข้อมูลลูกค้า</h6>
                        <div class="row py-2">
                            <div class="col-12 mb-3">
                                <button type="button" class="btn-black" data-bs-toggle="modal" data-bs-target="#searchCompanyFormQuotation"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหาข้อมูลบริษัท</button>
                                <a class="btn-black bg-green-00 border-green-00 px-5 mx-1" type="button" href="add-new-customer.php" target="_blank">เพิ่มลูกค้าใหม่</a>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">รหัสบริษัท* :</label>
                                    <div class="col-sm-8">
                                        <input type="search" name="" class="form-or-style"/>
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
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">เขต/อำเภอ* :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">แขวง/ตำบล* :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">รหัสไปรษณีย์* :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">โทรศัพท์ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">แฟกซ์ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: ข้อมูลลูกค้า -->

                        <!-- ข้อมูลผู้ติดต่อ -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลผู้ติดต่อ</h6>
                        <div class="row py-2">
                                <div class="col-12 mb-3 text-center text-md-start">
                                    <a class="btn-black bg-green-00 border-green-00 px-5" type="button" href="add-new-customer.php" target="_blank">เพิ่มผู้ติดต่อใหม่</a>
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
                                        <label for="" class="col-sm-4 col-form-label">โทรศัพท์* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">อีเมล* :</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="" class="form-or-style" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">Line ID :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" />
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- end: ข้อมูลผู้ติดต่อ -->

                        <!-- ข้อมูลใบรับรองผลการสอบเทียบ -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลใบรับรองผลการสอบเทียบ</h6>
                        <div class="row py-2">
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ชื่อบริษัท (อังกฤษ)* :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน (อังกฤษ)* :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ที่อยู่ (อังกฤษ)* :</label>
                                    <div class="col-sm-8">
                                        <textarea name="" id="" rows="4" class="form-or-style"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">จังหวัด (อังกฤษ)* :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">เขต/อำเภอ (อังกฤษ)* :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">แขวง/ตำบล (อังกฤษ)* :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">รหัสไปรษณีย์* :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">ใบรับรองผลทั้งหมด (Cloud Drive Link) :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ใบรับรองผลทั้งหมด (แนบไฟล์) :</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="" class="form-or-style" multiple/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: ข้อมูลใบรับรองผลการสอบเทียบ -->

                        <!-- ข้อมูลรายการเครื่องมือสอบเทียบ -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลรายการเครื่องมือสอบเทียบ</h6>
                        <div class="row">
                            <div class="tabs">
                                <ul class="nav tab-green nav-tabs flex-column flex-md-row" id="pipettesTabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="tab-green nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab"  aria-selected="true">รายการเครื่องมือจากฟอร์มแจ้งขอรับบริการ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="tab-green nav-link" id="undone-tab" data-bs-toggle="tab" href="#undone" role="tab"  aria-selected="false">รายการเครื่องมือสอบเทียบ</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <!-- รายการเครื่องมือจากฟอร์มแจ้งขอรับบริการ tab -->
                                    <div class="tab-pane fade active show" id="all" role="tabpanel">
                                        <!-- รายการเครื่องมือจากฟอร์ม table -->
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
                                        </div>
                                        <!-- end: table menu -->
                                        <div class="table-responsive">
                                            <table class="table table-hover text-nowrap table-warning" id="">
                                            <thead>
                                                <tr>
                                                <th scope="col">Action</th>
                                                <th scope="col">No.</th>
                                                <th scope="col">ประเภทเครื่องมือสอบเทียบ</th>
                                                <th scope="col">ยี่ห้อ</th>
                                                <th scope="col">รุ่น</th>
                                                <th scope="col">ขนาด</th>
                                                <th scope="col">หมายเลขเครื่อง</th>
                                                <th scope="col">รหัสเครื่องมือ</th>
                                                <th scope="col">จุดสอบเทียบ</th>
                                                <th scope="col">เกณฑ์ยอมรับ</th>
                                                <th scope="col">สภาพเครื่องมือ</th>
                                                <th scope="col">อุปกรณ์อื่น ๆ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">
                                                        <span title="เพิ่มรายการเครื่องมือ" data-bs-toggle="tooltip" data-bs-placement="top">
                                                            <a href="add-new-service-pipette.php" target="_blank" class="text-dark hover-text-red" ><i class="fa-solid fa-plus"></i></a>
                                                        </span>
                                                    </td>
                                                    <td>1</td>
                                                    <td>pipette type</td>
                                                    <td>brand</td>
                                                    <td>model</td>
                                                    <td>volumn</td>
                                                    <td>123456789</td>
                                                    <td>test</td>
                                                    <td>test</td>
                                                    <td>ACES PHIL PRODUCERS CORP</td>
                                                    <td>john</td>
                                                    <td class="text-center"><span class="green-badge">Active</span></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- end: รายการเครื่องมือจากฟอร์ม table -->
                                    </div>
                                    <!-- end: รายการเครื่องมือจากฟอร์มแจ้งขอรับบริการ tab -->

                                    <!-- รายการเครื่องมือสอบเทียบ tab -->
                                    <div class="tab-pane fade" id="undone" role="tabpanel">
                                        <!-- รายการเครื่องมือสอบเทียบ table -->
                                        <!-- table menu -->
                                        <div class="row d-flex align-items-center mb-2 mt-3" id="datatable_length">
                                            <div class="col-md-7 order-1 order-md-0 mt-2 mt-md-0">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา">
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="d-grid d-md-inline">
                                                            <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-auto text-md-end text-center ms-auto py-1 py-md-0 order-0 order-md-1">
                                                <a type="button" class="btn-black bg-blue border-blue mb-2" data-bs-toggle="modal" data-bs-target="#selectPipettesFormService">เลือกเครื่องมือสอบเทียบ</a>
                                                <a href="add-new-pipette-by-customer.php" type="button" class="btn-black mb-2">เพิ่มเครื่องมือสอบเทียบใหม่</a>
                                            </div>
                                        </div>
                                        <!-- end: table menu -->

                                        <div class="table-responsive">
                                            <table class="table table-hover text-nowrap table-info" id="">
                                            <thead>
                                                <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">เลขที่ใบรับรองผล</th>
                                                <th scope="col">เครื่องมือ</th>
                                                <th scope="col">ยี่ห้อ</th>
                                                <th scope="col">รุ่น</th>
                                                <th scope="col">ขนาด</th>
                                                <th scope="col">หมายเลขเครื่อง</th>
                                                <th scope="col">รหัสเครื่องมือ</th>
                                                <th scope="col">จุดสอบเทียบ</th>
                                                <th scope="col">เกณฑ์ยอมรับ</th>
                                                <th scope="col">วิธีการสอบเทียบ</th>
                                                <th scope="col">สถานะงาน</th>
                                                <th scope="col">รับเครื่อง</th>
                                                <th scope="col">ตรวจสภาพ</th>
                                                <th scope="col">สอบเทียบ</th>
                                                <th scope="col">ใบรับรอง</th>
                                                <th scope="col">ส่งเครื่อง</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- end: รายการเครื่องมือสอบเทียบ table -->
                                    </div>
                                    <!-- end: รายการเครื่องมือสอบเทียบ tab -->
                                </div>
                            </div>
                        </div>
                        <!-- end: ข้อมูลรายการเครื่องมือสอบเทียบ -->

                        <!-- แสดงผล รับบริการ = สอบเทียบห้องปฏิบัติการบริษัท --------------------------------------- -->
                            <div class="service-type" id="labCalibrateContent">
                                <!-- ข้อมูลใบรับ-ส่งเครื่องมือสอบเทียบ -->
                                <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลใบรับ - ส่งเครื่องมือสอบเทียบ</h6>
                                <div class="row py-2">
                                    <div class="col-12 mb-3">
                                        <button type="button" class="btn-black bg-blue border-blue" data-bs-toggle="modal" data-bs-target="#searchGrInvoiceForm">เลือกใบรับ - ส่งเครื่องมือ</button>
                                        <a class="btn-black bg-green-00 border-green-00 px-5 mx-1" type="button" href="add-new-gr-invoice.php" target="_blank">สร้างใบรับ - ส่งใหม่จากใบงานบริการ</a>
                                    </div>
                                    <!-- gr/invoice table -->
                                    <div class="table-responsive">
                                        <table class="table table-hover text-nowrap" id="grInvoiceTable">
                                        <thead>
                                            <tr>
                                            <th scope="col" data-field="">วันที่</th>
                                            <th scope="col" data-field="">เลขที่</th>
                                            <th scope="col" data-field="">ประเภท</th>
                                            <th scope="col" data-field="">เลขที่ใบเสนอราคา</th>
                                            <th scope="col" data-field="">เลขที่งานบริการ</th>
                                            <th scope="col" data-field="">สถานะใบรับ-ส่ง</th>
                                            <th scope="col" data-field="">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01/08/2023</td>
                                                <td>RDyymm-xxxx</td>
                                                <td>รับส่งเครื่องมือลูกค้า</td>
                                                <td>SRyymm-xxxx</td>
                                                <td>CSyymm-xxxx</td>
                                                <td>รับเครื่องมือจากลูกค้า</td>
                                                <td>
                                                    <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <a href="#" class="text-dark hover-text-red"><i class="fa-regular fa-pen-to-square"></i></a>
                                                    </span>
                                                    <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    <!-- end: gr/invoice table -->
                                </div>
                                <!-- end: ข้อมูลใบ-ส่งเครื่องมือสอบเทียบ -->
                            </div>
                        <!-- end: แสดงผล รับบริการ = สอบเทียบห้องปฏิบัติการบริษัท ---------------------------------- -->

                        <!-- แสดงผล รับบริการ = สอบเทียบนอกสถานที่ --------------------------------------------- -->
                            <div class="d-none service-type" id="onsiteContent">
                                <!-- ข้อมูลนัดหมายสอบเทียบนอกสถานที่ -->
                                <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลนัดหมายสอบเทียบนอกสถานที่</h6>
                                <div class="row py-2">
                                    <div class="col-md-6 col-12">
                                        <div class="row">
                                            <label for="" class="col-sm-4 col-form-label">วันที่นัดหมาย :</label>
                                            <div class="col-sm-8">
                                            <input type="text" name="datetimes" class="form-or-style"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="row">
                                            <label for="" class="col-sm-4 col-form-label">แจ้งเตือนนัดหมายล่วงหน้า :</label>
                                            <div class="col-auto">
                                                <input type="number" name="" class="form-or-style mt-0" value="0"/>
                                            </div>
                                            <label for="" class="col-auto col-form-label">วัน (ไม่นับวันหยุด)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="row">
                                            <label for="" class="col-sm-4 col-form-label">วิธีการแจ้งนัดหมาย :</label>
                                            <div class="col-sm-8">
                                                <select name="" class="form-or-style">
                                                    <option value="1">แจ้งโดยส่งอีเมลให้ลูกค้า</option>
                                                    <option value="2">โทรศัพท์</option>
                                                    <option value="3">Line</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="row">
                                            <label for="" class="col-sm-4 col-form-label">ผู้นัดหมาย :</label>
                                            <div class="col-sm-8">
                                                <select name=""  class="form-or-style">
                                                    <option value="1">Default by Login</option>
                                                    <option value="2">option 1</option>
                                                    <option value="3">option 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="row">
                                            <label for="" class="col-sm-4 col-form-label">เพิ่มเติมการนัดหมาย :</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-or-style" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: ข้อมูลนัดหมายสอบเทียบนอกสถานที่ -->

                                <!-- ข้อมูลการจองตารางช่างวิศวกรสอบเทียบ -->
                                <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลการจองตารางช่างวิศวกรสอบเทียบ</h6>
                                <div class="row py-2">
                                    <div class="col-12 mb-3">
                                        <button type="button" class="btn-black bg-blue border-blue" data-bs-toggle="modal" data-bs-target="#searchWorkScheduleForm">เช็คตารางงานช่าง</button>
                                        <a class="btn-black bg-green-00 border-green-00 px-5 mx-1" type="button" href="" target="_blank">จองตารางงานช่าง</a>
                                    </div>
                                    <!-- engineer table -->
                                    <div class="table-responsive">
                                        <table class="table table-hover text-nowrap" id="grInvoiceTable">
                                        <thead>
                                            <tr>
                                            <th scope="col" data-field="">ช่วงวันที่จอง</th>
                                            <th scope="col" data-field="">ชื่อช่าง</th>
                                            <th scope="col" data-field="">สถานะช่าง</th>
                                            <th scope="col" data-field="">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01/08/2023 - 03/08/2023</td>
                                                <td>john doe</td>
                                                <td>จอง</td>
                                                <td>
                                                    <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <a href="#" class="text-dark hover-text-red" ><i class="fa-regular fa-pen-to-square"></i></a>
                                                    </span>
                                                    <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01/08/2023 - 03/08/2023</td>
                                                <td>jane doe</td>
                                                <td>จอง</td>
                                                <td>
                                                    <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <a href="#" class="text-dark hover-text-red"><i class="fa-regular fa-pen-to-square"></i></a>
                                                    </span>
                                                    <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    <!-- end: engineer table -->
                                </div>
                                <!-- end: ข้อมูลการจองตารางช่างวิศวกรสอบเทียบ -->

                                <!-- ข้อมูลใบยืมเครื่องมือช่าง (STD) -->
                                <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลใบยืมเครื่องมือช่าง (STD)</h6>
                                <div class="row py-2">
                                    <div class="col-12 mb-3">
                                        <button type="button" class="btn-black bg-blue border-blue" data-bs-toggle="modal" data-bs-target="#searchToolkitsForm">เช็คเครื่องมือช่าง</button>
                                        <a class="btn-black bg-green-00 border-green-00 px-5 mx-1" type="button" href="" target="_blank">ใบยืมคืนเครื่องมือช่าง</a>
                                    </div>
                                    <!-- borrow return table -->
                                    <div class="table-responsive">
                                        <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                            <th scope="col" data-field="">เลขที่ใบยืม</th>
                                            <th scope="col" data-field="">ช่วงวันที่ยืม</th>
                                            <th scope="col" data-field="">กลุ่มเครื่องมือช่าง</th>
                                            <th scope="col" data-field="">ประเภทชุดเครื่องมือ</th>
                                            <th scope="col" data-field="">ชุดที่</th>
                                            <th scope="col" data-field="">รายการเครื่องมือช่าง/คอมพิวเตอร์</th>
                                            <th scope="col" data-field="">สถานะใบยืม</th>
                                            <th scope="col" data-field="">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>BRyymm-xxxx</td>
                                                <td>01/08/2023 - 03/08/2023</td>
                                                <td>เครื่องมือช่าง (STD)</td>
                                                <td>งานอ่าง</td>
                                                <td>ชุดที่ 1</td>
                                                <td>6599 #1 (RTD) งานอ่าง</td>
                                                <td>จอง</td>
                                                <td>
                                                    <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <a href="#" class="text-dark hover-text-red"><i class="fa-regular fa-pen-to-square"></i></a>
                                                    </span>
                                                    <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BRyymm-xxxx</td>
                                                <td>01/08/2023 - 03/08/2023</td>
                                                <td>เครื่องมือช่าง (STD)</td>
                                                <td>งานอ่าง</td>
                                                <td>ชุดที่ 1</td>
                                                <td>6599 #2 (RTD) งานตู้</td>
                                                <td>จอง</td>
                                                <td>
                                                    <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <a href="#" class="text-dark hover-text-red"><i class="fa-regular fa-pen-to-square"></i></a>
                                                    </span>
                                                    <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    <!-- end: borrow return table -->
                                </div>
                                <!-- end: ข้อมูลใบยืมเครื่องมือช่าง (STD) -->

                                <!-- ข้อมูลการจองรถยนต์ -->
                                <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลการจองรถยนต์</h6>
                                <div class="row py-2">
                                    <div class="col-12 mb-3">
                                        <button type="button" class="btn-black bg-blue border-blue" data-bs-toggle="modal" data-bs-target="#searchCarTableForm">เช็คตารางรถยนต์</button>
                                        <a class="btn-black bg-green-00 border-green-00 px-5 mx-1" type="button" href="" target="_blank">จองรถยนต์</a>
                                    </div>
                                    <!-- borrow return table -->
                                    <div class="table-responsive">
                                        <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                            <th scope="col" data-field="">ช่วงวันที่จอง</th>
                                            <th scope="col" data-field="">ทะเบียนรถ</th>
                                            <th scope="col" data-field="">สถานะรถ</th>
                                            <th scope="col" data-field="">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01/08/2023 - 03/08/2023</td>
                                                <td>กข1234</td>
                                                <td>จอง</td>
                                                <td>
                                                    <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <a href="#" class="text-dark hover-text-red" ><i class="fa-regular fa-pen-to-square"></i></a>
                                                    </span>
                                                    <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                                                        <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    <!-- end: borrow return table -->
                                </div>
                                <!-- end: ข้อมูลการจองรถยนต์ -->
                            </div>
                        <!-- end: แสดงผล รับบริการ = สอบเทียบนอกสถานที่ ---------------------------------------- -->

                        <div class="my-3 d-flex justify-content-between">
                            <div>
                                <button type="button" class="btn-grey" data-bs-toggle="collapse" data-bs-target="#collapseExample"><i class="fa-solid fa-qrcode"></i> Sticker <i class="fa-solid fa-chevron-down"></i></button>
                                <button type="button" class="btn-grey" data-bs-toggle="collapse" data-bs-target="#collapseExample2"><i class="fa-solid fa-file"></i> เอกสาร <i class="fa-solid fa-chevron-down"></i></button>
                            </div>
                            <div>
                                <button type="button" class="btn-black">สำเนางานบริการ</button>
                                <button type="button" class="btn-black">ส่งอีเมล</button>
                                <button type="button" class="btn-grey">ยกเลิก</button>
                                <button type="button" class="btn-green" onclick="location.href='add-new-service-step-5.php';">บันทึก</button>
                            </div>
                        </div>

                        <div class="collapse my-3" id="collapseExample">
                            <div class="card card-body flex-md-row flex-column" style="column-gap: 0.25em;">
                                <button type="button" class="btn-black bg-blue border-blue">เครื่องมือ Sticker</button>
                                <button type="button" class="btn-black bg-blue border-blue">Cert QR Code Sticker</button>
                                <button type="button" class="btn-black bg-blue border-blue">Cert QR Code Sticker (Link)</button>
                            </div>
                        </div>

                        <div class="collapse my-3" id="collapseExample2">
                            <div class="card card-body flex-md-row flex-column" style="column-gap: 0.25em;">
                                <button type="button" class="btn-black">ใบแจ้งขอรับบริการ</button>
                                <button type="button" class="btn-black">ใบงานบริการ</button>
                                <button type="button" class="btn-black">ใบรับ - ส่งเครื่องมือ</button>
                                <button type="button" class="btn-black">ใบตรวจเช็คสภาพ</button>
                                <button type="button" class="btn-black">ใบสรุปรายการ</button>
                                <button type="button" class="btn-black">ใบรับรองผล</button>
                            </div>
                        </div>
                    </div>
                    <!-- end: งานบริการสอบเทียบ tab -->


                    <!-- gr invoice tab -->
                    <div class="tab-pane fade" id="quotation" role="tabpanel">
                        <!-- ข้อมูลใบเสนอราคา -->
                        <h6 class="p-2 mb-2 bg-e5e5e5 fw-bold">ข้อมูลใบเสนอราคา</h6>
                        <div class="row py-2">
                            <div class="col-12 mb-3">
                                <button type="button" class="btn-black bg-blue border-blue" data-bs-toggle="modal" data-bs-target="#selectQuotationForm">เลือกใบเสนอราคา</button>
                                <a class="btn-black bg-green-00 border-green-00 px-5 mx-1" type="button" href="add-new-quotation.php" target="_blank">สร้างใบเสนอราคาใหม่</a>
                            </div>
                            <!-- gr/invoice table -->
                            <div class="table-responsive">
                                <table class="table table-hover text-nowrap" id="quotationTable">
                                <thead>
                                    <tr>
                                    <th scope="col" data-field="">วันที่</th>
                                    <th scope="col" data-field="">เลขที่ใบเสนอราคา</th>
                                    <th scope="col" data-field="">ประเภทใบเสนอราคา</th>
                                    <th scope="col" data-field="">สถานะ</th>
                                    <th scope="col" data-field="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                </table>
                            </div>
                            <!-- end: gr/invoice table -->
                        </div>
                        <!-- end: ข้อมูลใบเสนอราคา -->

                        <!-- แนบไฟล์เอกสารทางบัญชี -->
                        <h6 class="p-2 mb-2 mt-5 bg-e5e5e5 fw-bold">แนบไฟล์เอกสารทางบัญชี: ใบเสนอราคา, ใบสั่งซื้อ, ใบกำกับภาษี, ใบเสร็จรับเงิน, ใบ Pay Slip, ใบหัก ณ ที่จ่าย</h6>
                        <div class="row py-2">
                            <div class="col-12">
                                <div class="row">
                                    <label for="" class="col-sm-2 col-form-label">เลขที่ใบเสนอราคา :</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="file" name="" class="form-or-style" multiple/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <label for="" class="col-sm-2 col-form-label">เลขที่ใบจัดซื้อ (PO) :</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="file" name="" class="form-or-style" multiple/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <label for="" class="col-sm-2 col-form-label">เลขที่ใบกำกับภาษี :</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="file" name="" class="form-or-style" multiple/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <label for="" class="col-sm-2 col-form-label">เลขที่ใบเสร็จรับเงิน :</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="file" name="" class="form-or-style" multiple/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">เพิ่มเติม :</label>
                                    <div class="col-sm-8">
                                        <textarea name="" id="" class="form-or-style" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: แนบไฟล์เอกสารทางบัญชี -->

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-grey mx-2" data-bs-dismiss="modal">ยกเลิก</button>
                            <button type="button" class="btn-green">บันทึกข้อมูล</button>
                        </div>
                    </div>
                    <!-- end: gr invoice tab -->


                    <!-- ประวัติสถานะงานบริการ tab -->
                    <div class="tab-pane fade" id="service-status-h" role="tabpanel">
                        <h6 class="p-2 mb-3 bg-e5e5e5 fw-bold">ประวัติสถานะงานบริการ</h6>
                        <!-- table menu -->
                        <div class="row d-flex align-items-center">
                        <label style="font-weight: 400">แสดงทีละ
                            <select name="datatable_length" aria-controls="datatable" class="form-or-style" id="form-tablelength">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                            รายการ
                        </label>
                        </div>
                        <!-- end: table menu -->

                        <!-- ตารางประวัติสถานะงานบริการ -->
                        <div class="table-responsive mt-1">
                            <table class="table table-hover text-nowrap" id="sendEmailHistoryTable">
                                <thead>
                                <tr>
                                    <th scope="col" data-field="">ขั้นตอน</th>
                                    <th scope="col" data-field="">สถานะงานหลัก</th>
                                    <th scope="col" data-field="">สถานะงานย่อย</th>
                                    <th scope="col" data-field="">หมายเหตุ</th>
                                    <th scope="col" data-field="">วันที่</th>
                                    <th scope="col" data-field="">อัพเดทโดย</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <!-- end: ตารางประวัติสถานะงานบริการ -->
                    </div>
                    <!-- end: ประวัติสถานะงานบริการ tab -->


                    <!-- ประวัติการส่งอีเมล -->
                    <div class="tab-pane fade" id="email-h" role="tabpanel">
                        <h6 class="p-2 mb-2 bg-e5e5e5 fw-bold">ประวัติการส่งอีเมล</h6>
                        <!-- table menu -->
                        <div class="row d-flex align-items-center">
                        <label style="font-weight: 400">แสดงทีละ
                            <select name="datatable_length" aria-controls="datatable" class="form-or-style" id="form-tablelength">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                            รายการ
                        </label>
                        </div>
                        <!-- end: table menu -->

                        <!-- ตารางประวัติการส่งอีเมล -->
                        <div class="table-responsive mt-1">
                            <table class="table table-hover text-nowrap" id="sendEmailHistoryTable">
                                <thead>
                                <tr>
                                    <th scope="col" data-field="">วันที่</th>
                                    <th scope="col" data-field="">To</th>
                                    <th scope="col" data-field="">CC</th>
                                    <th scope="col" data-field="">Email Subject/สถานะงานบริการสอบเทียบ</th>
                                    <th scope="col" data-field="">ไฟล์แนบ</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <!-- end: ตารางประวัติการส่งอีเมล -->
                    </div>
                    <!-- end: การส่งอีเมล -->
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>

<script>
let serviceStatusBar = document.querySelectorAll(".service-status");
let progressBar = document.querySelectorAll(".progress-tab");
let progressStep = document.querySelectorAll(".progress-step");
let left = 0, fullStep = 100/(progressStep.length - 1);

// for (let i=0; i < serviceStatusBar.length; i++){
//     serviceStatusBar[i].style.width = 'calc(100%/' + serviceStatusBar.length + ')';
// }

for (let i=0; i < progressBar.length; i++){
    progressBar[i].style.width = 'calc(100%/' + progressBar.length + ')';
}

for (let i=0; i < progressStep.length; i++){
    progressStep[i].style.left = left + '%';
    left += fullStep;
}

let serviceType = document.getElementById("serviceType");
    const types = document.querySelectorAll('.service-type');

    function changeServiceType() {
        for (let i=0; i<types.length; i++) {
            for (const type of types) {
                type.classList.add('d-none');
            }
            if (serviceType.value == 1) {
                document.getElementById("labCalibrateContent").classList.remove("d-none");
            } else {
                document.getElementById("onsiteContent").classList.remove("d-none");
            }
        }

    }

    $(function() {
    $('input[name="datetimes"]').daterangepicker({
        timePicker: true,
        timePicker24Hour: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
        format: 'MMMM D, YYYY HH:mm '
        }
    });
    });

</script>