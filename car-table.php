<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>

<div class="px-4">
    <div class="panel">
        <h4>ตารางการใช้งานรถยนต์  &nbsp;<input type="month" id="monthInput" name="start" min="2018-03" value="2023-04" /></h4>

        <div class="row">
            <!-- ปฏิทิน -->
            <div class="col-md-10 col-12">
                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="calendarTable">
                    <thead>
                        <tr class="text-center">
                        <th scope="col" data-field="startBorrow">อา.</th>
                        <th scope="col" data-field="endBorrow">จ.</th>
                        <th scope="col" data-field="vehicle">อ.</th>
                        <th scope="col" data-field="borrower">พ.</th>
                        <th scope="col" data-field="lender">พฤ.</th>
                        <th scope="col" data-field="place">ศ.</th>
                        <th scope="col" data-field="returnDate">ส.</th>
                        </tr>
                    </thead>
                    <tbody class="text-end">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5
                                <div class="car-mark bg-purple"></div>
                            </td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>10</td>
                            <td>11
                                <div class="car-mark bg-blue"></div>
                            </td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>17
                                <div class="car-mark bg-blue"></div>
                            </td>
                            <td>18
                                <div class="car-mark bg-blue"></div>
                            </td>
                            <td>19
                                <div class="car-mark bg-blue"></div>
                                <div class="car-mark bg-green-00"></div>
                                <div class="car-mark bg-purple"></div>
                            </td>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td>30</td>
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
            <!-- end: ปฏิทิน -->
            <!-- badge แสดงรถว่าง -->
            <div class="col-md-2 col-12">
                <h5>รถว่าง</h5>
                <h6 class="car-badge bg-purple unavailable">2 ฒฏ 3165</h6>
                <h6 class="car-badge bg-blue unavailable">3 ฒฆ 4759</h6>
                <h6 class="car-badge bg-green-00">3 ฒจ 2955</h6>
            </div>
            <!-- end: badge แสดงรถว่าง -->
        </div>

        <!-- borrow button -->
        <button class="btn-black bg-purple border-purple py-1 px-5" type="button" data-bs-toggle="modal" data-bs-target="#borrowCarForm">ยืมรถ</button>
        <!-- return button -->
        <button class="btn-black bg-blue border-blue py-1 px-5" type="button" data-bs-toggle="modal" data-bs-target="#returnCarForm">คืนรถ</button>
        <!-- add new car button -->
        <button class="btn-black bg-green-00 border-green-00 py-1 px-5" type="button" data-bs-toggle="modal" data-bs-target="#addNewCarForm">เพิ่มรถ</button>
        <!-- edit car button -->
        <button class="btn-black bg-orange border-orange py-1 px-5" type="button" data-bs-toggle="modal" data-bs-target="#editCarForm">แก้ไขรถ</button>


        <!-- Borrow car form modal -->
        <div class="modal fade" id="borrowCarForm" tabindex="-1" aria-labelledby="borrowCarForm" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-light-purple border-0 px-4">
                        <h4 class="modal-title fs-5 fw-bold text-center" id="exampleModalLabel" style="color: #a109ff">ฟอร์มยืมรถ</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4">
                        <label for="companyName" class="fw-bold">ช่วงเวลาการยืมรถ</label>
                        <div class="row">
                            <div class="col-4">
                                <label for="startBorrow">วันยืมวันแรก :</label>
                            </div>
                            <div class="col-8">
                                <input type="date" name="startBorrow" class="form-or-style"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="endBorrow">วันยืมวันสุดท้าย :</label>
                            </div>
                            <div class="col-8">
                                <input type="date" name="endBorrow" class="form-or-style"/>
                            </div>
                        </div>

                        <label for="companyName" class="fw-bold mt-4">ข้อมูลทั่วไป</label>
                        <div class="row">
                            <div class="col-4">
                                <label for="vehicle">ทะเบียนรถ :</label>
                            </div>
                            <div class="col-8">
                                <select class="form-or-style" aria-label="เลือกทะเบียนรถ">
                                    <option selected>เลือกทะเบียนรถ</option>
                                    <option value="1">2 ฒฏ 3165</option>
                                    <option value="2">3 ฒฆ 4759</option>
                                    <option value="3">3 ฒจ 2955</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label for="place">หมายเหตุ :</label>
                            </div>
                            <div class="col-8">
                                <textarea class="form-or-style" id="place" name="place" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label for="borrower">ลงชื่อผู้ยืม :</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="borrower" class="form-or-style"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label for="lender">ลงชื่อผู้ให้ยืม :</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="leader" class="form-or-style"/>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer border-none justify-content-center border-top-0 py-4 pt-3">
                        <button type="button" class="btn-green w-25 border-0">ยืนยัน</button>
                        <button type="button" class="btn-grey w-25 border-0" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Borrow car form modal -->

        <!-- Return car form modal -->
        <div class="modal fade" id="returnCarForm" tabindex="-1" aria-labelledby="returnCarForm" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-light-blue border-0 px-4">
                        <h4 class="modal-title fs-5 fw-bold text-center" id="exampleModalLabel" style="color: #0b7bff">ฟอร์มคืนรถ</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4">
                        <label for="companyName" class="fw-bold">ข้อมูลทั่วไป</label>
                        <div class="row">
                            <div class="col-4">
                                <label for="vehicle">ทะเบียนรถ :</label>
                            </div>
                            <div class="col-8">
                                <select class="form-or-style" aria-label="เลือกทะเบียนรถ">
                                    <option selected>เลือกทะเบียนรถ</option>
                                    <option value="1">2 ฒฏ 3165</option>
                                    <option value="2">3 ฒฆ 4759</option>
                                    <option value="3">3 ฒจ 2955</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="returnDate">วันคืนรถ :</label>
                            </div>
                            <div class="col-8">
                                <input type="date" name="returnDate" class="form-or-style"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="borrower">ลงชื่อผู้คืน :</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="returner" class="form-or-style"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="lender">ลงชื่อผู้รับคืน :</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="returnee" class="form-or-style"/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-none justify-content-center border-top-0 py-4 pt-3">
                        <button type="button" class="btn-green w-25 border-0">ยืนยัน</button>
                        <button type="button" class="btn-grey w-25 border-0" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Return car form modal -->

        <!-- Add new car form modal -->
        <div class="modal fade" id="addNewCarForm" tabindex="-1" aria-labelledby="addNewCarForm" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-light-green border-0 px-4">
                        <h4 class="modal-title fs-5 fw-bold text-center" id="exampleModalLabel">เพิ่มรถ</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4">
                        <label for="companyName" class="fw-bold">ข้อมูลทั่วไป</label>
                        <div class="row">
                            <div class="col-4">
                                <label for="vehicle">ทะเบียนรถ :</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="vehicle" class="form-or-style"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="status">สถานะรถ :</label>
                            </div>
                            <div class="col-8">
                                <select class="form-or-style" aria-label="เลือกสถานะรถ">
                                    <option selected>เลือกสถานะรถ</option>
                                    <option value="1">ว่าง</option>
                                    <option value="2">ไม่ว่าง</option>
                                    <option value="3">ส่งซ่อม</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="colorBadge">สี :</label>
                            </div>
                            <div class="col-8">
                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#000" title="สีระบุแทนรถ">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-none justify-content-center border-top-0 py-4 pt-3">
                        <button type="button" class="btn-green w-25 border-0">ยืนยัน</button>
                        <button type="button" class="btn-grey w-25 border-0" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Add new car form modal -->

        <!-- Edit car form modal -->
        <div class="modal fade" id="editCarForm" tabindex="-1" aria-labelledby="editCarForm" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-light-yellow border-0 px-4">
                        <h4 class="modal-title fs-5 fw-bold text-center" id="exampleModalLabel">แก้ไขรถ</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4">
                        <label for="companyName" class="fw-bold">ข้อมูลทั่วไป</label>
                        <div class="row">
                            <div class="col-4">
                                <label for="vehicle">ทะเบียนรถ :</label>
                            </div>
                            <div class="col-8">
                                <select class="form-or-style" aria-label="เลือกทะเบียนรถ">
                                    <option selected>เลือกทะเบียนรถ</option>
                                    <option value="1">2 ฒฏ 3165</option>
                                    <option value="2">3 ฒฆ 4759</option>
                                    <option value="3">3 ฒจ 2955</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="status">สถานะรถ :</label>
                            </div>
                            <div class="col-8">
                                <select class="form-or-style" aria-label="เลือกสถานะรถ">
                                    <option selected>เลือกสถานะรถ</option>
                                    <option value="1">ว่าง</option>
                                    <option value="2">ไม่ว่าง</option>
                                    <option value="3">ส่งซ่อม</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="colorBadge">สี :</label>
                            </div>
                            <div class="col-8">
                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#000" title="สีระบุแทนรถ">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-none justify-content-center border-top-0 py-4 pt-3">
                        <button type="button" class="btn-green w-25 border-0">ยืนยัน</button>
                        <button type="button" class="btn-orange w-25 border-0">ลบ</button>
                        <button type="button" class="btn-grey w-25 border-0" data-bs-dismiss="modal">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Edit car form modal -->


    <!-- ตารางการใช้งานรถยนต์ -->
    <div class="panel">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" id="carTable">
            <thead>
                <tr>
                <th scope="col" data-field="startBorrow">วันยืมวันแรก</th>
                <th scope="col" data-field="endBorrow">วันยืมวันสุดท้าย</th>
                <th scope="col" data-field="vehicle">ทะเบียนรถ</th>
                <th scope="col" data-field="borrower">ผู้ยืม</th>
                <th scope="col" data-field="lender">ผู้ให้ยืม</th>
                <th scope="col" data-field="place">หมายเหตุ</th>
                <th scope="col" data-field="returnDate">วันที่คืน</th>
                <th scope="col" data-field="retuner">ผู้คืน</th>
                <th scope="col" data-field="returnee">ผู้รับคืน</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>05/04/2023</td>
                    <td>05/04/2023</td>
                    <td class="bg-light-purple">2 ฒฏ 3165</td>
                    <td>ปุณพจน์</td>
                    <td>สิรวิชญ์</td>
                    <td>จักรีนฤบดินทร์</td>
                    <td>05/04/2023</td>
                    <td>ปุณพจน์</td>
                    <td>สิรวิชญ์</td>
                </tr>
                <tr>
                    <td>11/04/2023</td>
                    <td>11/04/2023</td>
                    <td class="bg-light-blue">3 ฒฆ 4759</td>
                    <td>วันชัย</td>
                    <td>สิรวิชญ์</td>
                    <td>รพ. ธรรมศาสตร์</td>
                    <td>11/04/2023</td>
                    <td>วันชัย</td>
                    <td>สิรวิชญ์</td>
                </tr>
                <tr>
                    <td>18/04/2023</td>
                    <td>21/04/2023</td>
                    <td class="bg-light-blue">3 ฒฆ 4759</td>
                    <td>วัฒนชัย</td>
                    <td>วันชัย</td>
                    <td>มหาวิทยาลัยมหิดล</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>18/04/2023</td>
                    <td>20/04/2023</td>
                    <td class="bg-light-green">3 ฒจ 2955</td>
                    <td>อนุชา</td>
                    <td>สิรวิชญ์</td>
                    <td>บริษัท ซีพีเอฟ (ประเทศไทย) จํากัด (มหาชน)</td>
                    <td>19/04/2023</td>
                    <td>อนุชา</td>
                    <td>สิรวิชญ์</td>
                </tr>
                <tr>
                    <td>19/04/2023</td>
                    <td>19/04/2023</td>
                    <td class="bg-light-purple">2 ฒฏ 3165</td>
                    <td>ปุณพจน์</td>
                    <td>สิรวิชญ์</td>
                    <td>มหาวิทยาลัยบูรพา</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            </table>
        </div>


        <div class="d-flex justify-content-between">
            <!-- print button -->
            <button class="btn-black py-1 px-5" type="button">พิมพ์รายงาน</button>

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

        </div>
    </div>
    <!-- end: ตารางการใช้งานรถยนต์ -->
</div>
</div>

</body>
</html>
