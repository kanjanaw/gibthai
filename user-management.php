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
                <li class="breadcrumb-item active" aria-current="page">พนักงานและผู้ใช้งาน</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between align-items-center row">
            <div class="col-md-6 col-12 text-center text-md-start">
                <h4>ข้อมูลพนักงานและผู้ใช้งาน</h4>
            </div>
            <!-- add new quotation -->
            <div class="col-md-6 col-12 text-center text-md-end">
                <a class="btn-black bg-green-00 border-green-00" type="button" href="add-new-user.php">เพิ่มพนักงานใหม่</a>
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
                                    <label for="" class="col-sm-4 col-form-label">รหัสพนักงาน :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ชื่อ-นามสกุล :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ชื่อ-นามสกุล (อังกฤษ) :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">แผนก :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ตำแหน่ง :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">ระดับตำแหน่ง :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">กรรมการผู้จัดการ</option>
                                            <option value="">ผู้จัดการ-หัวหน้าแผนก</option>
                                            <option value="">พนักงานขาย</option>
                                            <option value="">พนักงาน</option>
                                        </select>
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
                                    <label for="" class="col-sm-4 col-form-label">โทรศัพท์ :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">Username :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-or-style"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <label for="" class="col-sm-4 col-form-label">User Role :</label>
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
                                    <label for="" class="col-sm-4 col-form-label">สถานะ :</label>
                                    <div class="col-sm-8">
                                        <select name="" id="" class="form-or-style">
                                            <option value="">ทำงาน</option>
                                            <option value="">ลาออก</option>
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

        <!-- report user table -->
        <div class="table-responsive">
            <table class="table table-hover text-nowrap" id="customerTable">
            <thead>
                <tr>
                <th scope="col" data-field="companyId">รหัสพนักงาน</th>
                <th scope="col" data-field="companyName">ชื่อ-นามสกุล</th>
                <th scope="col" data-field="department">ชื่อ-นามสกุล (อังกฤษ)</th>
                <th scope="col" data-field="address">แผนก</th>
                <th scope="col" data-field="status">ตำแหน่ง</th>
                <th scope="col" data-field="address">อีเมล</th>
                <th scope="col" data-field="status">โทรศัพท์</th>
                <th scope="col" data-field="address">Username</th>
                <th scope="col" data-field="status">User Role</th>
                <th scope="col" data-field="status">สถานะ</th>
                <th scope="col" data-field="action">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12345</td>
                    <td>กรชวัล เจริญกิจธารา</td>
                    <td>Konchawan Jaroekijatara</td>
                    <td>Sale</td>
                    <td>ผู้จัดการ-หัวหน้าแผนก</td>
                    <td>abc@gmail.com</td>
                    <td>0812345679</td>
                    <td>konchawan</td>
                    <td>Admin Officer</td>
                    <td class="text-center"><span class="green-badge">ทำงาน</span></td>
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
                    <td>12345</td>
                    <td>กรชวัล เจริญกิจธารา</td>
                    <td>Konchawan Jaroekijatara</td>
                    <td>Sale</td>
                    <td>ผู้จัดการ-หัวหน้าแผนก</td>
                    <td>abc@gmail.com</td>
                    <td>0812345679</td>
                    <td>konchawan</td>
                    <td>Admin Officer</td>
                    <td class="text-center"><span class="green-badge">ทำงาน</span></td>
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
                    <td>12345</td>
                    <td>กรชวัล เจริญกิจธารา</td>
                    <td>Konchawan Jaroekijatara</td>
                    <td>Sale</td>
                    <td>ผู้จัดการ-หัวหน้าแผนก</td>
                    <td>abc@gmail.com</td>
                    <td>0812345679</td>
                    <td>konchawan</td>
                    <td>Admin Officer</td>
                    <td class="text-center"><span class="green-badge">ทำงาน</span></td>
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
                    <td>12345</td>
                    <td>กรชวัล เจริญกิจธารา</td>
                    <td>Konchawan Jaroekijatara</td>
                    <td>Sale</td>
                    <td>ผู้จัดการ-หัวหน้าแผนก</td>
                    <td>abc@gmail.com</td>
                    <td>0812345679</td>
                    <td>konchawan</td>
                    <td>Admin Officer</td>
                    <td class="text-center"><span class="green-badge">ทำงาน</span></td>
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
                    <td>12345</td>
                    <td>กรชวัล เจริญกิจธารา</td>
                    <td>Konchawan Jaroekijatara</td>
                    <td>Sale</td>
                    <td>ผู้จัดการ-หัวหน้าแผนก</td>
                    <td>abc@gmail.com</td>
                    <td>0812345679</td>
                    <td>konchawan</td>
                    <td>Admin Officer</td>
                    <td class="text-center"><span class="green-badge">ทำงาน</span></td>
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
                    <td>12345</td>
                    <td>กรชวัล เจริญกิจธารา</td>
                    <td>Konchawan Jaroekijatara</td>
                    <td>Sale</td>
                    <td>ผู้จัดการ-หัวหน้าแผนก</td>
                    <td>abc@gmail.com</td>
                    <td>0812345679</td>
                    <td>konchawan</td>
                    <td>Admin Officer</td>
                    <td class="text-center"><span class="green-badge">ทำงาน</span></td>
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
                    <td>12345</td>
                    <td>กรชวัล เจริญกิจธารา</td>
                    <td>Konchawan Jaroekijatara</td>
                    <td>Sale</td>
                    <td>ผู้จัดการ-หัวหน้าแผนก</td>
                    <td>abc@gmail.com</td>
                    <td>0812345679</td>
                    <td>konchawan</td>
                    <td>Admin Officer</td>
                    <td class="text-center"><span class="green-badge">ทำงาน</span></td>
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
                    <td>12345</td>
                    <td>กรชวัล เจริญกิจธารา</td>
                    <td>Konchawan Jaroekijatara</td>
                    <td>Sale</td>
                    <td>ผู้จัดการ-หัวหน้าแผนก</td>
                    <td>abc@gmail.com</td>
                    <td>0812345679</td>
                    <td>konchawan</td>
                    <td>Admin Officer</td>
                    <td class="text-center"><span class="green-badge">ทำงาน</span></td>
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
                    <td>12345</td>
                    <td>กรชวัล เจริญกิจธารา</td>
                    <td>Konchawan Jaroekijatara</td>
                    <td>Sale</td>
                    <td>ผู้จัดการ-หัวหน้าแผนก</td>
                    <td>abc@gmail.com</td>
                    <td>0812345679</td>
                    <td>konchawan</td>
                    <td>Admin Officer</td>
                    <td class="text-center"><span class="green-badge">ทำงาน</span></td>
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
                    <td>12345</td>
                    <td>กรชวัล เจริญกิจธารา</td>
                    <td>Konchawan Jaroekijatara</td>
                    <td>Sale</td>
                    <td>ผู้จัดการ-หัวหน้าแผนก</td>
                    <td>abc@gmail.com</td>
                    <td>0812345679</td>
                    <td>konchawan</td>
                    <td>Admin Officer</td>
                    <td class="text-center"><span class="red-badge">ลาออก</span></td>
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
        <!-- end: report user table -->

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
