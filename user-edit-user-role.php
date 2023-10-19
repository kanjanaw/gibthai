<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
<?php   $pageName = "user-management";  ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>

<div class="px-4">
    <div class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="user-management.php">พนักงานและผู้ใช้งาน</a></li>
                <li class="breadcrumb-item"><a href="user-role.php">กำหนดสิทธิ์การใช้งาน</a></li>
                <li class="breadcrumb-item active" aria-current="page">แก้ไขสิทธิ์การใช้งาน</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>แก้ไขสิทธิ์การใช้งาน</h4>
        </div>


                        <!-- ข้อมูลสิทธิ์การใช้งาน -->
                        <h6 class="p-2 bg-e5e5e5 fw-bold mt-4">ข้อมูลสิทธิ์การใช้งาน</h6>
                            <div class="row py-3">
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">User Role* :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style">
                                                <option value="">Admin System</option>
                                                <option value="">Sales Manager</option>
                                                <option value="">Lab & Calibration Manager</option>
                                                <option value="">Calibration Engineer</option>
                                                <option value="">Calibration Officer</option>
                                                <option value="">Sales & Sales Support</option>
                                                <option value="">Admin Officer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- end: ข้อมูลสิทธิ์การใช้งาน -->

                        <!-- user role table -->
                        <h5 class="fw-bold">Permission</h5>
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap" id="pipettesTypeTable">
                            <thead>
                                <tr>
                                <th scope="col" data-field="pipetttesType">เมนู</th>
                                <th scope="col" data-field="">ขั้นตอนสถานะ</th>
                                <th scope="col" data-field="" class="text-center w-6">Access</th>
                                <th scope="col" data-field="" class="text-center w-6">Create</th>
                                <th scope="col" data-field="" class="text-center w-6">View</th>
                                <th scope="col" data-field="" class="text-center w-6">Edit</th>
                                <th scope="col" data-field="" class="text-center w-6">Delete</th>
                                <th scope="col" data-field="" class="text-center w-6">Import</th>
                                <th scope="col" data-field="" class="text-center w-6">Export</th>
                                <th scope="col" data-field="" class="text-center w-6">Print</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Dashboard</th>
                                    <td></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <th>Service Calendar</th>
                                    <td></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <th>ลูกค้า</th>
                                    <td></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <th>เครื่องมือสอบเทียบ</th>
                                    <td></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <th>ใบเสนอราคา</th>
                                    <td></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>

                                <!-- งานบริการสอบเทียบ -->
                                <tr>
                                    <th>งานบริการสอบเทียบ</th>
                                    <td>Requests</td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Quotation</td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Service Booked</td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Pick-up in Progress</td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Onsite Appointment</td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Service in Progress</td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Service Completed</td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Return in Progress</td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Dispatched</td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <!-- งานบริการสอบเทียบ -->

                                <tr>
                                    <th>งานบริการภายนอก</th>
                                    <td></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <th>เครื่องมือช่าง</th>
                                    <td></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <th>ตารางงานช่างวิศวกร</th>
                                    <td></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <th>ตารางการใช้งานรถยนต์</th>
                                    <td></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>
                                <tr>
                                    <th>พนักงานและผู้ใช้งาน</th>
                                    <td></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                    <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                </tr>

                            </tbody>
                            </table>
                        </div>
                        <!-- end: user role table -->

                        <div class="d-flex justify-content-end my-3">
                            <button type="button" class="btn-grey mx-2" data-bs-dismiss="modal">ยกเลิก</button>
                            <button type="button" class="btn-green">บันทึกข้อมูล</button>
                        </div>





    </div>
</div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>
