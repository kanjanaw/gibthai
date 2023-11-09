<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
<?php   $pageName = "pipettes";  ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>

<div class="px-4">
    <div class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="pipettes.php">เครื่องมือสอบเทียบ</a></li>
                <li class="breadcrumb-item active" aria-current="page">แก้ไขเครื่องมือสอบเทียบ</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>แก้ไขเครื่องมือสอบเทียบ - เครื่องมือ xxxx</h4>
        </div>

        <!-- table menu -->
        <div class="row my-md-4 my-2">
            <div class="tabs">
                <ul class="nav tab-green nav-tabs nav-fill flex-column flex-md-row" id="pipettesTabs" role="tablist">
                    <li class="nav-item">
                        <a class="tab-green nav-link active" id="pipettes-tab" data-bs-toggle="tab" href="#pipettes" role="tab"  aria-selected="true">เครื่องมือสอบเทียบ</a>
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
                </ul>


                <div class="tab-content" id="myTabContent">
                    <!-- เครื่องมือสอบเทียบ tab -->
                    <div class="tab-pane fade active show" id="pipettes" role="tabpanel">
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
                                <div class="col-12 mb-3">
                                    <button type="button" class="btn-black" data-bs-toggle="modal" data-bs-target="#searchCompanyForm"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหาข้อมูลบริษัท</button>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">รหัสบริษัท* :</label>
                                        <div class="col-sm-8">
                                            <input type="search" name="" class="form-or-style" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ชื่อบริษัท :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" disabled/>
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

                        <!-- Modal search company form -->
                        <div class="modal fade" id="searchCompanyForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="searchCompanyForm" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 bg-e5e5e5 py-2">
                                            <h6 class="py-2 fw-bold mb-0">ข้อมูลลูกค้า</h6>
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
                                                    <th scope="col" data-field="companyId">รหัสบริษัท</th>
                                                    <th scope="col" data-field="companyName">ชื่อบริษัท</th>
                                                    <th scope="col" data-field="addressType">ประเภทที่อยู่</th>
                                                    <th scope="col" data-field="address">ที่อยู่</th>
                                                    <th scope="col" data-field="province">จังหวัด</th>
                                                    <th scope="col" data-field="zipcode">รหัสไปรษณีย์</th>
                                                    </tr>
                                                    </thead>
                                                <tbody>
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
                        <!-- end: Modal search company form -->

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-grey mx-2" data-bs-dismiss="modal">ยกเลิก</button>
                            <button type="button" class="btn-green">บันทึกข้อมูล</button>
                        </div>
                    </div>
                    <!-- end: เครื่องมือสอบเทียบ tab -->


                    <!-- ประวัติใบเสนอราคา -->
                    <div class="tab-pane fade" id="quotation-h" role="tabpanel">
                        <h6 class="p-2 mb-3 bg-e5e5e5 fw-bold">ประวัติใบเสนอราคา</h6>
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
                                    <button type="button" class="btn-grey">นำออก Excel</button>
                                    <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                                </div>
                            </div>
                            <!-- end: table menu -->

                        <!-- ตารางประวัติใบเสนอราคา -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover text-nowrap" id="pipettesTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="date">วันที่</th>
                                <th scope="col" data-field="quotationNo">เลขที่ใบเสนอราคา</th>
                                <th scope="col" data-field="type">ประเภท</th>
                                <th scope="col" data-field="status">สถานะ</th>
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
                                    <button type="button" class="btn-grey">นำออก Excel</button>
                                    <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                                </div>
                            </div>
                            <!-- end: table menu -->

                        <!-- ตารางประวัติงานบริการสอบเทียบ -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover text-nowrap" id="pipettesTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="date">วันที่</th>
                                <th scope="col" data-field="quotationNo">เลขที่ใบงาน</th>
                                <th scope="col" data-field="type">ประเภท</th>
                                <th scope="col" data-field="status">สถานะ</th>
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
                        <h6 class="p-2 mb-3 bg-e5e5e5 fw-bold">ประวัติใบรับรอง Certificate</h6>
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
                                    <button type="button" class="btn-grey">นำออก Excel</button>
                                    <button type="button" class="btn-grey">พิมพ์รายงาน</button>
                                </div>
                            </div>
                            <!-- end: table menu -->

                        <!-- ตารางประวัติงานบริการสอบเทียบ -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover text-nowrap" id="certTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="date">วันที่</th>
                                <th scope="col" data-field="certNo">เลขที่ใบรับรอง</th>
                                <th scope="col" data-field="type">ประเภท</th>
                                <th scope="col" data-field="">สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            </table>
                        </div>
                        <!-- end: ตารางประวัติงานบริการสอบเทียบ -->

                    </div>
                    <!-- end: ประวัติงานบริการซ่อม -->
                </div>
            </div>
        </div>
        <!-- end: table menu -->

    </div>
</div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>