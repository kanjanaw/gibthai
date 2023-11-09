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
                <li class="breadcrumb-item"><a href="add-new-service.php">เพิ่มงานบริการสอบเทียบใหม่</a></li>
                <li class="breadcrumb-item active" aria-current="page">เพิ่มรายการเครื่องมือสอบเทียบ</li>
            </ol>
        </nav>
    </div>


    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>รายการเครื่องมือสอบเทียบ</h4>
        </div>

        <!-- ข้อมูลรายการเครื่องมือสอบเทียบ -->
        <h6 class="mt-4 p-2 bg-e5e5e5 fw-bold">ข้อมูลรายการเครื่องมือสอบเทียบ</h6>
        <div class="row py-3">
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">Item No. :</label>
                    <label for="" class="col-sm-8 col-form-label">1</label>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">สถานะเครื่องมือสอบเทียบ* :</label>
                    <div class="col-sm-8">
                        <select name="" id="" class="form-or-style">
                            <option value="">Update ข้อมูลล่าสุดไปที่เมนูเครื่องมือสอบเทียบ Master</option>
                            <option value="">status 2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">ประเภทเครื่องมือ* :</label>
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
                        <input type="text" name="" class="form-or-style" disabled/>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">หน่วยนับ :</label>
                    <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style"/>
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
        <!-- end: ข้อมูลรายการเครื่องมือสอบเทียบ -->

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

        <!-- ข้อมูลใบตรวจสภาพเครื่องมือ - สภาพแวดล้อมก่อนการสอบเทียบ (รายการ) -->
        <h6 class="mt-4 p-2 bg-e5e5e5 fw-bold">ข้อมูลใบตรวจสภาพเครื่องมือ - สภาพแวดล้อมก่อนการสอบเทียบ (รายการ)</h6>
        <div class="row py-2">
            <div class="d-flex justify-content-md-end justify-content-center">
                <button type="button" name="add" class="btn-black d-block px-4" data-bs-toggle="modal" data-bs-target="#addListConditionBeforeForm">เพิ่มรายการ</button>
            </div>
                <!-- รายการใบตรวจสภาพ table -->
                <div class="table-responsive mt-3">
                    <table class="table table-hover text-nowrap" id="checkTable">
                    <thead>
                        <tr>
                        <th scope="col" data-field="">รายการ</th>
                        <th scope="col" data-field="">Minimum</th>
                        <th scope="col" data-field="">Maximum</th>
                        <th scope="col" data-field="">ผลการตรวจ</th>
                        <th scope="col" data-field="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ambient Temperature</td>
                            <td>25.7 °C</td>
                            <td>27.8 °C</td>
                            <td class="text-green fw-bold"><i class="fa-solid fa-check"></i>&nbsp; ผ่านเกณฑ์</td>
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
                            <td>Relative Humidity</td>
                            <td>36.1%</td>
                            <td>45.0%</td>
                            <td class="text-red fw-bold"><i class="fa-solid fa-xmark"></i>&nbsp; ไม่ผ่านเกณฑ์</td>
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
                            <td>Line Voltage</td>
                            <td>221.4 VAC</td>
                            <td>222.6 VAC</td>
                            <td class="text-muted fw-bold">N/A</td>
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
                <!-- end: รายการใบตรวจสภาพ table -->

                <div class="col-12 ">
                    <div class="row">
                        <label for="" class="col-sm-2 col-12 col-form-label">Volt Leakage :</label>
                        <div class="col-sm-10 col-12 mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    ไม่มี
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    มี
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- end: ข้อมูลใบตรวจสภาพเครื่องมือ - สภาพแวดล้อมก่อนการสอบเทียบ (รายการ) -->

        <!-- ข้อมูลใบตรวจสภาพเครื่องมือ - สภาพแวดล้อมก่อนการสอบเทียบ (กลุ่มรายการ) -->
        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลใบตรวจสภาพเครื่องมือ - สภาพแวดล้อมก่อนการสอบเทียบ (กลุ่มรายการ)</h6>
        <div class="row py-2">
            <div class="d-flex justify-content-md-end justify-content-center">
                <button type="button" name="add" class="btn-black d-block px-4" data-bs-toggle="modal" data-bs-target="#addListGroupConditionBeforeForm">เพิ่มกลุ่มรายการ</button>
            </div>
                <!-- รายการใบตรวจสภาพ table -->
                <div class="table-responsive mt-3">
                    <table class="table table-hover text-nowrap" id="checkTable">
                    <thead>
                        <tr>
                        <th scope="col" data-field="">กลุ่มรายการ</th>
                        <th scope="col" data-field="">รายการ</th>
                        <th scope="col" data-field="">ผลการตรวจ</th>
                        <th scope="col" data-field="">หมายเหตุ</th>
                        <th scope="col" data-field="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>สภาพเครื่องมือภายนอก</td>
                            <td>xxxxxxxxxxxxxxxxx</td>
                            <td class="text-green fw-bold">ปกติ</td>
                            <td>-</td>
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
                            <td>สภาพเครื่องมือภายนอก</td>
                            <td>xxxxxxxxxxxxxxxxx</td>
                            <td class="text-red fw-bold">ผิดปกติ</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
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
                            <td>สภาพเครื่องมือภายใน</td>
                            <td>xxxxxxxxxxxxxxxxx</td>
                            <td class="text-green fw-bold">ปกติ</td>
                            <td>-</td>
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
                            <td>สภาพอื่น ๆ</td>
                            <td>xxxxxxxxxxxxxxxxx</td>
                            <td class="text-green fw-bold">ปกติ</td>
                            <td>-</td>
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
                            <td>ชุดควบคุมการทำงานเครื่องมือ</td>
                            <td>xxxxxxxxxxxxxxxxx</td>
                            <td class="text-green fw-bold">ปกติ</td>
                            <td>-</td>
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
                <!-- end: รายการใบตรวจสภาพ table -->
        </div>
        <!-- end: ข้อมูลใบตรวจสภาพเครื่องมือ - สภาพแวดล้อมก่อนการสอบเทียบ (กลุ่มรายการ) -->

        <!-- ข้อมูลสรุปการตรวจสอบเครื่องมือโดยรวม -->
        <h6 class="mt-4 p-2 bg-e5e5e5 fw-bold">ข้อมูลสรุปการตรวจสอบเครื่องมือโดยรวม</h6>
        <div class="row py-2 mt-2">
            <div class="col-12 col-md-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio1" checked>
                    <label class="form-check-label" for="flexRadio1">
                        ปกติสอบเทียบได้
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio2">
                    <label class="form-check-label" for="flexRadio2">
                        ผิดปกติแต่ไม่มีผลกระทบต่อการสอบเทียบ
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio3">
                    <label class="form-check-label" for="flexRadio3">
                        ผิดปกติมีผลกระทบต่อการสอบเทียบ
                    </label>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">หมายเหตุ :</label>
                    <div class="col-sm-8">
                        <textarea name="" id="" rows="6" class="form-or-style"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">สภาพเครื่องมือตรวจเช็ค (แนบรูป) :</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-or-style" multiple>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">วันที่ผู้ตรวจสภาพ :</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-or-style">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">วันที่ :</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-or-style">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">ผู้ตรวจสภาพ :</label>
                    <div class="col-sm-8">
                        <select name="" id="" class="form-or-style">
                            <option value="">Default by Login</option>
                            <option value="">option 1</option>
                            <option value="">option 2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">ผู้ใช้งาน/ลูกค้า :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-or-style">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">ลายเซ็นผู้ตรวจสภาพ (เจ้าหน้าที่) :</label>
                    <div class="col-sm-8">
                        <div class="card form-or-style">
                            <img src="images/signature.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">ลายเซ็นลูกค้า :</label>
                    <div class="col-sm-8">
                        <div class="wrapper-pad">
                            <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
                        </div>
                        <div>
                            <button id="clear" class="btn-grey mt-2">Clear</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: ข้อมูลสรุปการตรวจสอบเครื่องมือโดยรวม -->

        <!-- ข้อมูลการสอบเทียบเครื่องมือ -->
        <h6 class="mt-4 p-2 bg-e5e5e5 fw-bold">ข้อมูลการสอบเทียบเครื่องมือ</h6>
        <div class="row py-2 mt-2">
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">งานบริการ :</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                Serviced
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Calibrated
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">สถานะการสอบเทียบ :</label>
                    <div class="col-sm-8">
                        <select name=""  class="form-or-style">
                            <option value="1">อยู่ระหว่างสอบเทียบ</option>
                            <option value="2">สอบเทียบเสร็จ</option>
                            <option value="3">ไม่ต้องสอบเทียบ</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">วันที่สอบเทียบ :</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-or-style">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">ผู้สอบเทียบ :</label>
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
                    <label for="" class="col-sm-4 col-form-label">รายละเอียดการสอบเทียบ (สำหรับเจ้าหน้าที่) :</label>
                    <div class="col-sm-8">
                        <textarea name="" id="" rows="6" class="form-or-style"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">รายละเอียดการสอบเทียบ (สำหรับลูกค้า) :</label>
                    <div class="col-sm-8">
                        <textarea name="" id="" rows="6" class="form-or-style"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: ข้อมูลการสอบเทียบเครื่องมือ -->

        <!-- ข้อมูลใบรับรองผลการสอบเทียบ -->
        <h6 class="mt-4 p-2 bg-e5e5e5 fw-bold">ข้อมูลใบรับรองผลการสอบเทียบ</h6>
        <div class="row py-2 mt-2">
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">เลขที่ใบรับรอง* :</label>
                    <div class="col-sm-8">
                    <input type="text" value="DC_01/08/0005" class="form-or-style">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">วันที่รับรองผล :</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-or-style">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">ชื่อบริษัท (อังกฤษ) :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-or-style" value="Default ตามเอกสาร แก้ไขได้">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน (อังกฤษ) :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-or-style" value="Default ตามเอกสาร แก้ไขได้">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">ที่อยู่ (อังกฤษ)* :</label>
                    <div class="col-sm-8">
                        <textarea name="" id="" rows="4" class="form-or-style" value="Default ตามเอกสาร แก้ไขได้"></textarea>
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
                    <label for="" class="col-sm-4 col-form-label">ผู้ตรวจเช็คและอนุมัติ :</label>
                    <div class="col-sm-8">
                        <select name=""  class="form-or-style">
                            <option value="1">Default ตามเอกสาร แก้ไขได้</option>
                            <option value="2">option 1</option>
                            <option value="3">option 2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">วันที่ตรวจเช็คและอนุมัติ :</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-or-style">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <label for="" class="col-sm-4 col-form-label">หมายเหตุ :</label>
                    <div class="col-sm-8">
                        <textarea name="" id="" rows="4" class="form-or-style"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: ข้อมูลใบรับรองผลการสอบเทียบ -->

        <div class="my-3 d-flex justify-content-between">
            <div>
                <button type="button" class="btn-black bg-blue border-blue">เครื่องมือ Sticker</button>
                <button type="button" class="btn-black">ใบตรวจเช็คสภาพ</button>
                <button type="button" class="btn-black">ใบรับรองผล</button>
            </div>
            <div>
                <button type="button" class="btn-grey">ยกเลิก</button>
                <button type="button" class="btn-green" onclick="location.href='add-new-service-step-5.php';">บันทึก</button>
            </div>
        </div>

    </div>
</div>
</div>

</body>
</html>
<?php require('inc_footer.php'); ?>

<script>
let progressBar = document.getElementById("progress-bar");
let progressStep = document.querySelectorAll(".progress-step");
let left = 0, fullStep = 100/(progressStep.length - 1);

for (let i=0; i < progressStep.length; i++){
    progressStep[i].style.left = left + '%';
    left += fullStep;
}

// progressBar.style.width = '11.11%';

var signature = {
	canvas: null,
    clearButton: null,
	/*resizeCanvas: function resizeCanvas() {
		// When zoomed out to less than 100%, for some very strange reason,
		// some browsers report devicePixelRatio as less than 1
		// and only part of the canvas is cleared then.
		var ratio = Math.max(window.devicePixelRatio || 1, 1);
		this.canvas.width = canvas.offsetWidth * ratio;
		this.canvas.height = canvas.offsetHeight * ratio;
		this.canvas.getContext("2d").scale(ratio, ratio);
	},*/
	init: function init() {
		this.canvas = document.querySelector(".signature-pad");
        this.clearButton = document.getElementById('clear');
		signaturePad = new SignaturePad(this.canvas);
        this.clearButton.addEventListener('click', function (event) {
    signaturePad.clear();
});
	}
};

signature.init();


</script>
