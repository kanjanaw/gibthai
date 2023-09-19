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
                <li class="breadcrumb-item"><a href="user-management.php">พนักงานและผู้ใช้งาน</a></li>
                <li class="breadcrumb-item active" aria-current="page">กำหนดสิทธิ์การใช้งาน</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>กำหนดสิทธิ์การใช้งาน</h4>
            <!-- <div class="">
                <a href="user-edit-user-role.php" type="button" class="btn-black bg-red border-red py-1 ">แก้ไข User Role</a>
            </div> -->
        </div>

        <!-- table menu -->
        <div class="row d-flex align-items-center mb-2 mt-2" id="datatable_length">
            <div class="col-6">
                <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
            </div>
            <div class="col-auto g-0">
                <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
            </div>
            <div class="col-auto d-inline-block ms-auto">
                <button type="button" class="btn-grey">นำเข้า Excel</button>
                <button type="button" class="btn-grey">นำออก Excel</button>
                <button type="button" name="add" class="btn-black px-4" data-bs-toggle="modal" data-bs-target="#addUserRoleForm">เพิ่ม User Role ใหม่</button>
            </div>
        </div>
        <!-- end: table menu -->

                            <!-- Modal add user role form -->
                            <div class="modal fade" id="addUserRoleForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addUserRoleForm" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 bg-e5e5e5 py-2">
                                            <h6 class="py-2 fw-bold mb-0">ข้อมูล User Role</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-3 col-form-label">ชื่อ User Role* :</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-or-style" type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table table-hover" id="pipettesTypeTable">
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
                                            </div>
                                        </div>
                                        <div class="modal-footer pt-0 border-0">
                                            <button type="button" class="btn-grey " data-bs-dismiss="modal">ยกเลิก</button>
                                            <button type="button" class="btn-green">บันทึกข้อมูล</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Modal add user role form -->


        <!-- user role table -->
        <div class="table-responsive">
            <table class="table table-hover" id="pipettesTypeTable">
            <thead>
                <tr>
                <th scope="col" data-field="pipetttesModel">ลำดับ</th>
                <th scope="col" data-field="">User Role</th>
                <!-- <th scope="col" data-field=""><i class="fa-solid fa-plus"></i></th>
                <th scope="col" data-field=""><i class="fa-regular fa-eye"></i></th>
                <th scope="col" data-field=""><i class="fa-regular fa-pen-to-square"></i></th>
                <th scope="col" data-field=""><i class="fa-solid fa-trash"></i></th>
                <th scope="col" data-field=""><i class="fa-solid fa-file-import"></i></th>
                <th scope="col" data-field=""><i class="fa-solid fa-file-export"></i></th>
                <th scope="col" data-field=""><i class="fa-solid fa-print"></i></th> -->
                <!-- <th scope="col" data-field="">Permission</th> -->
                <th scope="col" data-field="">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td scope="row">Admin System</td>
                    <td>
                        <button class="btn my-0 py-0 hover-text-red" data-bs-toggle="modal" data-bs-target="#editUserRoleForm"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td scope="row">Sales Manager</td>
                    <td>
                        <button class="btn my-0 py-0 hover-text-red"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td scope="row">Lab & Calibration Manager</td>
                    <td>
                        <button class="btn my-0 py-0 hover-text-red"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td scope="row">Calibration Engineer</td>
                    <td>
                        <button class="btn my-0 py-0 hover-text-red"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td scope="row">Calibration Officer</td>
                    <td>
                        <button class="btn my-0 py-0 hover-text-red"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td scope="row">Sales & Sales Support</td>
                    <td>
                        <button class="btn my-0 py-0 hover-text-red"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td scope="row">Admin Officer</td>
                    <td>
                        <button class="btn my-0 py-0 hover-text-red"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
        <!-- end: user role table -->

        <!-- Modal add user role form -->
        <div class="modal fade" id="editUserRoleForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editUserRoleForm" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 bg-e5e5e5 py-2">
                                            <h6 class="py-2 fw-bold mb-0">ข้อมูล User Role :</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-3 col-form-label">ชื่อ User Role :</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-or-style" type="text" value="Admin System" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table table-hover" id="pipettesTypeTable">
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
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Service Calendar</th>
                                                            <td></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                        </tr>
                                                        <tr>
                                                            <th>ลูกค้า</th>
                                                            <td></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                        </tr>
                                                        <tr>
                                                            <th>เครื่องมือสอบเทียบ</th>
                                                            <td></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                        </tr>
                                                        <tr>
                                                            <th>ใบเสนอราคา</th>
                                                            <td></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                        </tr>

                                                        <!-- งานบริการสอบเทียบ -->
                                                        <tr>
                                                            <th>งานบริการสอบเทียบ</th>
                                                            <td>Requests</td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id=""></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Quotation</td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Service Booked</td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Pick-up in Progress</td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Onsite Appointment</td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
                                                            <td class="text-center"><input class="form-check-input" type="checkbox" value="" id="" checked></td>
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
                                            </div>
                                        </div>
                                        <div class="modal-footer pt-0 border-0">
                                            <button type="button" class="btn-grey " data-bs-dismiss="modal">ยกเลิก</button>
                                            <button type="button" class="btn-green">บันทึกข้อมูล</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Modal add user role form -->
    </div>
</div>

</body>
</html>
