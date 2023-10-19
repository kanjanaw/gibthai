<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
<?php   $pageName = "gr-invoice2";  ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>

<div class="px-4">
    <div class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">ใบรับ-ส่งเครื่องมือสอบเทียบ</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between align-items-center row">
            <div class="col-md-6 col-12 text-center text-md-start">
                <h4>ข้อมูลใบรับ-ส่งเครื่องมือสอบเทียบ</h4>
            </div>
            <!-- add new gr/invoice -->
            <div class="col-md-6 col-12 text-center text-md-end">
                <a class="btn-black bg-green-00 border-green-00" type="button" href="add-new-gr-invoice.php">เพิ่มใบรับ-ส่งเครื่องมือสอบเทียบใหม่</a>
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
                                    <label for="" class="col-sm-4 col-form-label">เลขที่ใบรับ - ส่งเครื่อง :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ประเภท :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">รับส่งเครื่องมือลูกค้า</option>
                                            <option value="">ส่งต่อสอบเทียบ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">สถานะใบรับ - ส่ง :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">เลขที่ใบเสนอราคา :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
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
                                    <label for="" class="col-sm-4 col-form-label">เลขที่ใบแจ้งขอรับบริการ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วิธีการรับเครื่อง :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">วันที่นัดหมายรับเริ่มต้น :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่นัดหมายรับสิ้นสุด :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">เจ้าหน้าที่ผู้รับ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่รับเครื่องเริ่มต้น :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่รับเครื่องสิ้นสุด :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วิธีการส่งเครื่อง :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">วันที่นัดหมายส่งเริ่มต้น :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่นัดหมายส่งสิ้นสุด :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">เจ้าหน้าที่ผู้ส่ง :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่ส่งเครื่องเริ่มต้น :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">วันที่ส่งเครื่องสิ้นสุด :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ประเภทกลุ่มบริษัท :</label>
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
                            <div class="col-12 d-md-flex justify-content-center justify-content-md-end align-items-center mt-md-0 mt-2">
                                <div class="d-grid gap-2">
                                    <button class="btn-black px-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
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
                <ul class="nav tab-green nav-tabs  flex-column flex-md-row" id="pipettesTabs" role="tablist">
                    <li class="nav-item">
                        <a class="tab-green nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab"  aria-selected="true">ทั้งหมด</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="undone-tab" data-bs-toggle="tab" href="#undone" role="tab"  aria-selected="false">ยังไม่เสร็จ</a>
                    </li>
                    <li class="nav-item">
                        <a class="tab-green nav-link" id="done-tab" data-bs-toggle="tab" href="#done" role="tab"  aria-selected="false">เสร็จแล้ว</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <!-- gr/invoice table (ALL) tab -->
                    <div class="tab-pane fade active show" id="all" role="tabpanel">
                        <!-- gr/invoice table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="gr-invoiceTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="">วันที่</th>
                                <th scope="col" data-field="">เลขที่</th>
                                <th scope="col" data-field="">ประเภท</th>
                                <th scope="col" data-field="">เลขที่ใบเสนอราคา</th>
                                <th scope="col" data-field="">เลขที่งานบริการ</th>
                                <th scope="col" data-field="">บริษัท</th>
                                <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="">สถานะใบรับ-ส่ง</th>
                                <th scope="col" data-field="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25/09/2023</td>
                                    <td>RD2309-0001</td>
                                    <td>รับส่งเครื่องมือลูกค้า</td>
                                    <td>SRyymm-xxxx</td>
                                    <td>CSyymm-xxxx</td>
                                    <td>test</td>
                                    <td>-</td>
                                    <td>test</td>
                                    <td>aaa</td>
                                    <td>
                                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#" ><i class="fa-regular fa-pen-to-square"></i></a>
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
                    <!-- end: gr/invoice table (ALL) tab -->

                    <!-- gr/invoice table (UNDONE) tab -->
                    <div class="tab-pane fade" id="undone" role="tabpanel">
                        <!-- gr/invoice table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="gr-invoiceTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="">วันที่</th>
                                <th scope="col" data-field="">เลขที่</th>
                                <th scope="col" data-field="">ประเภท</th>
                                <th scope="col" data-field="">เลขที่ใบเสนอราคา</th>
                                <th scope="col" data-field="">เลขที่งานบริการ</th>
                                <th scope="col" data-field="">บริษัท</th>
                                <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="">สถานะใบรับ-ส่ง</th>
                                <th scope="col" data-field="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>05/06/2020</td>
                                    <td>RD2012-1555</td>
                                    <td>ส่งต่อ/สอบเทียบ</td>
                                    <td>SRyymm-xxxx</td>
                                    <td>CSyymm-xxxx</td>
                                    <td>test</td>
                                    <td>-</td>
                                    <td>test</td>
                                    <td>aaa</td>
                                    <td>
                                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#" ><i class="fa-regular fa-pen-to-square"></i></a>
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
                    <!-- end: gr/invoice table (UNDONE) tab -->

                    <!-- gr/invoice table (DONE) tab -->
                    <div class="tab-pane fade" id="done" role="tabpanel">
                        <!-- gr/invoice table -->
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="gr-invoiceTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="">วันที่</th>
                                <th scope="col" data-field="">เลขที่</th>
                                <th scope="col" data-field="">ประเภท</th>
                                <th scope="col" data-field="">เลขที่ใบเสนอราคา</th>
                                <th scope="col" data-field="">เลขที่งานบริการ</th>
                                <th scope="col" data-field="">บริษัท</th>
                                <th scope="col" data-field="">แผนก/หน่วยงาน</th>
                                <th scope="col" data-field="contact">ผู้ติดต่อ</th>
                                <th scope="col" data-field="">สถานะใบรับ-ส่ง</th>
                                <th scope="col" data-field="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>03/08/2021</td>
                                    <td>RD2101-7777</td>
                                    <td>รับส่งเครื่องมือลูกค้า</td>
                                    <td>SRyymm-xxxx</td>
                                    <td>CSyymm-xxxx</td>
                                    <td>test</td>
                                    <td>-</td>
                                    <td>test</td>
                                    <td>aaa</td>
                                    <td>
                                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#" ><i class="fa-regular fa-pen-to-square"></i></a>
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
                    <!-- end: gr/invoice table (DONE) tab -->
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

        <!-- Modal delete -->
        <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0 justify-content-center">
                        <h4>ยืนยันการลบ?</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row text-center">
                            <div class="d-grid col-6">
                                <button type="button" class="btn-lg btn-grey bg-green-00">ตกลง</button>
                            </div>
                            <div class="d-grid col-6">
                                <button type="button" class="btn-lg btn-grey" data-bs-dismiss="modal">ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Modal delete -->

    </div>
</div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>
