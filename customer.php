<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
</head>
<body>
<?php require('inc_sidebar.php'); ?>

<div class="px-4">
    <div class="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">ลูกค้าและคู่ค้า</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between align-items-center row">
            <div class="col-md-6 col-12 text-center text-md-start">
                <h4>ข้อมูลลูกค้าและคู่ค้า</h4>
            </div>
            <!-- add new customer -->
            <div class="col-md-6 col-12 text-center text-md-end">
                <a class="btn-black bg-green-00 border-green-00" type="button" href="add-new-customer.php">เพิ่มลูกค้าใหม่</a>
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
                <button class="btn-grey" type="button" >นำเข้า Excel</button>
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
                                    <label for="" class="col-sm-4 col-form-label">รหัสบริษัท :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">กลุ่มบริษัท :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">ลูกค้า</option>
                                            <option value="">Dealer</option>
                                            <option value="">Supplier</option>
                                        </select>
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
                                    <label for="" class="col-sm-4 col-form-label">สถานะบริษัท :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Active</option>
                                            <option value="">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ชื่อบริษัท (อังกฤษ) :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน (อังกฤษ) :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ประเภทบริษัท :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">สำนักงานใหญ่</option>
                                            <option value="">สาขาที่</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">เลขผู้เสียภาษีอากร :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ประเภทที่อยู่ :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">ที่อยู่ :</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-or-style" id="exampleFormControlTextarea1" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">จังหวัด :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">กรุงเทพมหานคร</option>
                                            <option value="">กาญจนบุรี</option>
                                            <option value="">กาฬสินธุ์</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">เขต/อำเภอ :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">แขวง/ตำบล :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">รหัสไปรษณีย์ :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">โทรศัพท์ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">แฟกซ์ :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">โทรศัพท์ผู้ติดต่อ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">อีเมลผู้ติดต่อ :</label>
                                    <div class="col-sm-8">
                                        <input type="email" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">Line ID :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">เครื่องมือสอบเทียบ :</label>
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
                                        <input type="text" name="" class="form-or-style"/>
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
                                    <label for="" class="col-sm-4 col-form-label">กำหนดชำระเงิน :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">Select</option>
                                            <option value="">30 วัน</option>
                                            <option value="">option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 d-md-flex justify-content-center justify-content-md-end align-items-center mt-md-0 mt-2">
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

        <!-- report table -->
        <div class="table-responsive">
            <table class="table table-hover text-nowrap" id="customerTable">
            <thead>
                <tr>
                <th scope="col" data-field="companyId">รหัสบริษัท</th>
                <th scope="col" data-field="companyName">ชื่อบริษัท</th>
                <th scope="col" data-field="department">แผนก/หน่วยงาน</th>
                <th scope="col" data-field="address">ที่อยู่</th>
                <th scope="col" data-field="group">กลุ่มบริษัท</th>
                <th scope="col" data-field="status" class="text-center">สถานะบริษัท</th>
                <th scope="col" data-field="action">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12345</td>
                    <td>มหาวิทยาลัยธรรมศาสตร์ (ศูนย์รังสิต)</td>
                    <td>-</td>
                    <td>99 หมู่ 18 ถนนพหลโยธิน</td>
                    <td></td>
                    <td class="text-center">Active</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="edit-customer.php" class="text-dark hover-text-red"><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>12344</td>
                    <td>ACES PHIL PRODUCERS CORP</td>
                    <td>-</td>
                    <td>IBAAIN</td>
                    <td></td>
                    <td class="text-center">Inactive</td>
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
                    <td>12343</td>
                    <td>ANC International Co.Ltd.</td>
                    <td>-</td>
                    <td>99 หมู่ 7 ต.เขาสมอคอน</td>
                    <td></td>
                    <td class="text-center">Active</td>
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
                    <td>12342</td>
                    <td>Bumrungrad Clinic Yangon</td>
                    <td>-</td>
                    <td>No. 77 , Pyidaungsu Yeiktha Road,</td>
                    <td></td>
                    <td class="text-center">Active</td>
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
                    <td>12341</td>
                    <td>CCS MACHINERY</td>
                    <td>-</td>
                    <td>003 Ban chom cheng , KM6 Thadeua Road,</td>
                    <td></td>
                    <td class="text-center">Active</td>
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
                    <td>12340</td>
                    <td>Clinical Laboratory Section, Kanlayani</td>
                    <td>-</td>
                    <td>Floor 9, Srinagarind Hospital,</td>
                    <td></td>
                    <td class="text-center">Active</td>
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
                    <td>12339</td>
                    <td>Coastal Aquaculture Research and De</td>
                    <td>-</td>
                    <td>1/19 Moo 3 Soi 1 kaosean Rd.</td>
                    <td></td>
                    <td class="text-center">Active</td>
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
                    <td>12338</td>
                    <td>CREST Water Pte Ltd</td>
                    <td>-</td>
                    <td>10 Anson Road, #27-15 International Plaza</td>
                    <td></td>
                    <td class="text-center">Active</td>
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
                    <td>12337</td>
                    <td>Diagnostic Center N Health Rayong</td>
                    <td>-</td>
                    <td>13/9 M.3, Sukhumvit Rd.</td>
                    <td></td>
                    <td class="text-center">Active</td>
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
                    <td>12336</td>
                    <td>โรงพยาบาลยันฮี</td>
                    <td>-</td>
                    <td>454 Charan Sanit Wong Rd, Bang Ao, Bang Phlat</td>
                    <td></td>
                    <td class="text-center">Inactive</td>
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
        <!-- end: report table -->

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

