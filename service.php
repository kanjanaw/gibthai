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
                <li class="breadcrumb-item active" aria-current="page">งานบริการสอบเทียบ</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between align-items-center row">
            <div class="col-md-6 col-12 text-center text-md-start">
                <h4>ข้อมูลงานบริการสอบเทียบเครื่องมือวัด</h4>
            </div>
            <!-- add new service -->
            <div class="col-md-6 col-12 text-center text-md-end">
                <a class="btn-black bg-green-00 border-green-00" type="button" href="add-new-service.php">เพิ่มงานบริการสอบเทียบใหม่</a>
            </div>
        </div>

        <!-- table menu -->
        <div class="row d-flex align-items-center" id="datatable_length">
            <div class="col-md-auto col-12 text-center pt-2 pt-md-0">
                <label style="font-weight: 400">แสดงทีละ
                    <select name="datatable_length" aria-controls="datatable" class="form-or-style" id="form-tablelength">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select> รายการ
                </label>
            </div>
            <div class="col-md-auto col-12 text-center text-md-start py-1 py-md-0">
                <button class="btn-grey" type="button" >นำออก Excel</button>
            </div>
            <div class="col-md-auto col-12 ms-md-auto text-center py-1 py-md-0">
                <button class="btn-grey px-5" type="button" data-bs-toggle="collapse" data-bs-target="#advanceSearch" aria-expanded="false" aria-controls="advanceSearch">
                ค้นหาแบบมีเงื่อนไข&nbsp;  <i class="fa-solid fa-chevron-down"></i>
                </button>
            </div>
        </div>
        <!-- end: table menu -->

        <!-- collapse advance search -->
        <div class="d-flex pt-3 align-items-center">
            <div class="col-12">
                <div class="collapse" id="advanceSearch">
                    <div class="row pb-4">
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">เลขที่แจ้งรับบริการ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่รับแจ้งเริ่มต้น :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่รับแจ้งสิ้นสุด :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">เลขที่ใบงานบริการ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่งานบริการเริ่มต้น :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่งานบริการสิ้นสุด :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">รหัสลูกค้า :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ชื่อบริษัท :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ชื่อผู้ติดต่อ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">โทรศัพท์ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">อีเมล :</label>
                                    <div class="col-sm-8">
                                        <input type="email" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ประเภทรับบริการ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วิธีการสอบเทียบ :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">รายงานผลสอบเทียบ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่สอบเทียบเสร็จเริ่มต้น :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่สอบเทียบเสร็จสิ้นสุด :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">กำหนดสอบเทียบเสร็จ :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่สอบเทียบครั้งต่อไปเริ่มต้น :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่สอบเทียบครั้งต่อไปสิ้นสุด :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">กำหนดสอบเทียบครั้งต่อไป :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">รหัสรายการเครื่องมือ :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">รายการเครื่องมือ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ประเภทเครื่องมือ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ประเภทย่อยเครื่องมือ :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ยี่ห้อ :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">รุ่น :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ขนาด :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">หมายเลขเครื่อง :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">รหัสเครื่องมือ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">จุดสอบเทียบ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">เกณฑ์ยอมรับ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ใบเสนอราคา :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ใบรับ-ส่งเครื่องมือ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ใบตรวจสภาพ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ใบรับรองผล :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ใบกำกับภาษี :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">สถานะงานหลัก :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">สถานะงานย่อย :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">option 1</option>
                                            <option value="">option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-md-flex justify-content-center justify-content-md-end align-items-center mt-md-2 mt-2">
                                <div class="d-grid d-md-inline gap-2">
                                    <button class="btn-grey" type="button">Reset</button>
                                    <button class="btn-black px-5" type="button">
                                    <i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- end: collapse advance search -->

        <div class="row">
            <div class="tabs">
                <ul class="nav tab-green nav-tabs nav-fill flex-column flex-md-row" id="pipettesTabs" role="tablist">
                    <li class="nav-item">
                        <a class="tab-green nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab"  aria-selected="true">ทั้งหมด</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="gr-invoice-tab" data-bs-toggle="tab" href="#gr-invoice" role="tab"  aria-selected="false">แจ้งขอรับ
                        <span class="badge rounded-pill bg-danger">17</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="quotation-tab" data-bs-toggle="tab" href="#quotation" role="tab"  aria-selected="false">ใบเสนอราคา</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="service-tab" data-bs-toggle="tab" href="#service" role="tab"  aria-selected="false">งานบริการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="invoice-tab" data-bs-toggle="tab" href="#invoice" role="tab"  aria-selected="false">รับเครื่อง</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="onsite-tab" data-bs-toggle="tab" href="#onsite" role="tab"  aria-selected="false">นัดหมายนอกสถานที่</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="calibration-tab" data-bs-toggle="tab" href="#calibration" role="tab"  aria-selected="false">สอบเทียบ</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="cert-tab" data-bs-toggle="tab" href="#cert" role="tab"  aria-selected="false">ใบรับรอง</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="return-tab" data-bs-toggle="tab" href="#return" role="tab"  aria-selected="false">ส่งคืน</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <!-- service table (ALL) tab -->
                    <div class="tab-pane fade active show" id="all" role="tabpanel">
                        <!-- service table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="gr-invoiceTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="">วันที่แจ้ง</th>
                                <th scope="col" data-field="">เลขที่แจ้ง</th>
                                <th scope="col" data-field="">วันที่งาน</th>
                                <th scope="col" data-field="">เลขที่งาน</th>
                                <th scope="col" data-field="">บริษัท</th>
                                <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="">สถานะ</th>
                                <th scope="col" data-field="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25/09/2023</td>
                                    <td>RD2309-0001</td>
                                    <td>01/10/2023</td>
                                    <td>CSyymm-xxxx</td>
                                    <td>test</td>
                                    <td>-</td>
                                    <td>test</td>
                                    <td>aaa</td>
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
                        <!-- end: service table -->
                    </div>
                    <!-- end: service table (ALL) tab -->

                    <!-- service table (gr-invoice) tab -->
                    <div class="tab-pane fade" id="gr-invoice" role="tabpanel">
                        <!-- service table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="gr-invoiceTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="">วันที่แจ้ง</th>
                                <th scope="col" data-field="">เลขที่แจ้ง</th>
                                <th scope="col" data-field="">วันที่งาน</th>
                                <th scope="col" data-field="">เลขที่งาน</th>
                                <th scope="col" data-field="">บริษัท</th>
                                <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="">สถานะ</th>
                                <th scope="col" data-field="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25/09/2023</td>
                                    <td>RD2309-0001</td>
                                    <td>01/10/2023</td>
                                    <td>CSyymm-xxxx</td>
                                    <td>test</td>
                                    <td>-</td>
                                    <td>test</td>
                                    <td>aaa</td>
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
                        <!-- end: service table -->
                    </div>
                    <!-- end: service table (gr-invoice) tab -->

                    <!-- service table (quotation) tab -->
                    <div class="tab-pane fade" id="quotation" role="tabpanel">
                        <!-- service table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="gr-invoiceTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="">วันที่แจ้ง</th>
                                <th scope="col" data-field="">เลขที่แจ้ง</th>
                                <th scope="col" data-field="">วันที่งาน</th>
                                <th scope="col" data-field="">เลขที่งาน</th>
                                <th scope="col" data-field="">บริษัท</th>
                                <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="">สถานะ</th>
                                <th scope="col" data-field="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25/09/2023</td>
                                    <td>RD2309-0001</td>
                                    <td>01/10/2023</td>
                                    <td>CSyymm-xxxx</td>
                                    <td>test</td>
                                    <td>-</td>
                                    <td>test</td>
                                    <td>aaa</td>
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
                        <!-- end: service table -->
                    </div>
                    <!-- end: service table (quotation) tab -->

                    <!-- service table (service) tab -->
                    <div class="tab-pane fade" id="service" role="tabpanel">
                        <!-- service table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="gr-invoiceTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="">วันที่แจ้ง</th>
                                <th scope="col" data-field="">เลขที่แจ้ง</th>
                                <th scope="col" data-field="">วันที่งาน</th>
                                <th scope="col" data-field="">เลขที่งาน</th>
                                <th scope="col" data-field="">บริษัท</th>
                                <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="">สถานะ</th>
                                <th scope="col" data-field="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25/09/2023</td>
                                    <td>RD2309-0001</td>
                                    <td>01/10/2023</td>
                                    <td>CSyymm-xxxx</td>
                                    <td>test</td>
                                    <td>-</td>
                                    <td>test</td>
                                    <td>aaa</td>
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
                        <!-- end: service table -->
                    </div>
                    <!-- end: service table (service) tab -->

                    <!-- service table (invoice) tab -->
                    <div class="tab-pane fade" id="invoice" role="tabpanel">
                        <!-- service table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="gr-invoiceTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="">วันที่แจ้ง</th>
                                <th scope="col" data-field="">เลขที่แจ้ง</th>
                                <th scope="col" data-field="">วันที่งาน</th>
                                <th scope="col" data-field="">เลขที่งาน</th>
                                <th scope="col" data-field="">บริษัท</th>
                                <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="">สถานะ</th>
                                <th scope="col" data-field="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25/09/2023</td>
                                    <td>RD2309-0001</td>
                                    <td>01/10/2023</td>
                                    <td>CSyymm-xxxx</td>
                                    <td>test</td>
                                    <td>-</td>
                                    <td>test</td>
                                    <td>aaa</td>
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
                        <!-- end: service table -->
                    </div>
                    <!-- end: service table (invoice) tab -->

                    <!-- service table (onsite) tab -->
                    <div class="tab-pane fade" id="onsite" role="tabpanel">
                        <!-- service table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="gr-invoiceTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="">วันที่แจ้ง</th>
                                <th scope="col" data-field="">เลขที่แจ้ง</th>
                                <th scope="col" data-field="">วันที่งาน</th>
                                <th scope="col" data-field="">เลขที่งาน</th>
                                <th scope="col" data-field="">บริษัท</th>
                                <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="">สถานะ</th>
                                <th scope="col" data-field="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25/09/2023</td>
                                    <td>RD2309-0001</td>
                                    <td>01/10/2023</td>
                                    <td>CSyymm-xxxx</td>
                                    <td>test</td>
                                    <td>-</td>
                                    <td>test</td>
                                    <td>aaa</td>
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
                        <!-- end: service table -->
                    </div>
                    <!-- end: service table (onsite) tab -->

                    <!-- service table (calibration) tab -->
                    <div class="tab-pane fade" id="calibration" role="tabpanel">
                        <!-- service table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="gr-invoiceTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="">วันที่แจ้ง</th>
                                <th scope="col" data-field="">เลขที่แจ้ง</th>
                                <th scope="col" data-field="">วันที่งาน</th>
                                <th scope="col" data-field="">เลขที่งาน</th>
                                <th scope="col" data-field="">บริษัท</th>
                                <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="">สถานะ</th>
                                <th scope="col" data-field="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25/09/2023</td>
                                    <td>RD2309-0001</td>
                                    <td>01/10/2023</td>
                                    <td>CSyymm-xxxx</td>
                                    <td>test</td>
                                    <td>-</td>
                                    <td>test</td>
                                    <td>aaa</td>
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
                        <!-- end: service table -->
                    </div>
                    <!-- end: service table (calibration) tab -->

                    <!-- service table (cert) tab -->
                    <div class="tab-pane fade" id="cert" role="tabpanel">
                        <!-- service table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="gr-invoiceTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="">วันที่แจ้ง</th>
                                <th scope="col" data-field="">เลขที่แจ้ง</th>
                                <th scope="col" data-field="">วันที่งาน</th>
                                <th scope="col" data-field="">เลขที่งาน</th>
                                <th scope="col" data-field="">บริษัท</th>
                                <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="">สถานะ</th>
                                <th scope="col" data-field="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25/09/2023</td>
                                    <td>RD2309-0001</td>
                                    <td>01/10/2023</td>
                                    <td>CSyymm-xxxx</td>
                                    <td>test</td>
                                    <td>-</td>
                                    <td>test</td>
                                    <td>aaa</td>
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
                        <!-- end: service table -->
                    </div>
                    <!-- end: service table (cert) tab -->

                    <!-- service table (return) tab -->
                    <div class="tab-pane fade" id="return" role="tabpanel">
                        <!-- service table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="gr-invoiceTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="">วันที่แจ้ง</th>
                                <th scope="col" data-field="">เลขที่แจ้ง</th>
                                <th scope="col" data-field="">วันที่งาน</th>
                                <th scope="col" data-field="">เลขที่งาน</th>
                                <th scope="col" data-field="">บริษัท</th>
                                <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="">สถานะ</th>
                                <th scope="col" data-field="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25/09/2023</td>
                                    <td>RD2309-0001</td>
                                    <td>01/10/2023</td>
                                    <td>CSyymm-xxxx</td>
                                    <td>test</td>
                                    <td>-</td>
                                    <td>test</td>
                                    <td>aaa</td>
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
                        <!-- end: service table -->
                    </div>
                    <!-- end: service table (return) tab -->
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <!-- show total fields -->
            <small class="text-muted">แสดง 1 - 10 รายการ จาก 2,395 รายการ</small>

            <!-- page navigation -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="bi bi-chevron-double-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="bi bi-chevron-double-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- end: page navigation -->
        </div>

    </div>
</div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>
