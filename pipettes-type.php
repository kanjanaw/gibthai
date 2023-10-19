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
                <li class="breadcrumb-item"><a href="pipettes.php">เครื่องมือสอบเทียบ</a></li>
                <li class="breadcrumb-item active" aria-current="page">ประเภทเครื่องมือสอบเทียบ</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>ประเภทเครื่องมือสอบเทียบ</h4>
        </div>

        <form action="">
            <div class="row py-md-3">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ประเภทเครื่องมือสอบเทียบ*</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ประเภทงาน*</label>
                        <div class="col-sm-8">
                            <div class="col-md-6 col-12 form-check d-inline-block">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">งานสอบเทียบ</label>
                            </div>
                            <div class="col-md-6 col-12 form-check d-inline-block">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">งานซ่อม</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">เลขที่ใบรับรองผลการสอบเทียบ - ตามมาตรฐาน</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">เลขที่ใบรับรองผลการสอบเทียบ - ตามลูกค้า</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">เลขที่ใบรับรองผลงานซ่อม</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style mt-0"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">สถานะ*</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style mt-0">
                                <option value="">Active</option>
                                <option value="">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-flex justify-content-center justify-content-md-end mt-md-0 mt-2">
                    <!-- add new -->
                    <div class="d-grid gap-2">
                        <a class="btn-black bg-green-00 border-green-00 py-1 px-5 text-center" type="button" href="">เพิ่ม/บันทึก</a>
                    </div>
                </div>
            </div>
        </form>


        <!-- table menu -->
        <div class="row d-flex align-items-center mb-2 mt-4" id="datatable_length">
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
            <div class="col-md-auto col-12 text-center ms-auto py-1 py-md-0 order-0 order-md-1">
                <button class="btn-grey" type="button" >นำเข้า Excel</button>
                <button class="btn-grey" type="button" >นำออก Excel</button>
            </div>
        </div>
        <!-- end: table menu -->


        <!-- pipettes type table -->
        <div class="table-responsive">
            <table class="table table-hover text-nowrap" id="pipettesTypeTable">
            <thead>
                <tr>
                <th scope="col" data-field="pipetttesType">ประเภทเครื่องมือสอบเทียบ</th>
                <th scope="col" data-field="" class="text-center">งานสอบเทียบ</th>
                <th scope="col" data-field="" class="text-center">งานซ่อม</th>
                <th scope="col" data-field="">วิธีการสอบเทียบตามมาตรฐานของห้องปฏิบัติการ</th>
                <th scope="col" data-field="">วิธีการสอบเทียบตามความต้องการของลูกค้า</th>
                <th scope="col" data-field="">งานซ่อม</th>
                <th scope="col" data-field="">สถานะ</th>
                <th scope="col" data-field="">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pipette</td>
                    <td class="h4 text-center"><i class="fas fa-check-square" style="color: #00ba63;"></i></td>
                    <td class="h4 text-center"><i class="fas fa-check-square" style="color: #00ba63;"></i></td>
                    <td>DC_01/yy/####</td>
                    <td>NC_00/yy/####</td>
                    <td>SR_00/yy/####</td>
                    <td>Active</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#editCustomerAddressForm" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Refrigerator/Oven/Freezer</td>
                    <td class="h4 text-center"><i class="fas fa-check-square" style="color: #00ba63;"></i></td>
                    <td class="text-center">-</td>
                    <td>DC_02/yy/####</td>
                    <td>NC_00/yy/####</td>
                    <td></td>
                    <td>Active</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#editCustomerAddressForm" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Dispenser</td>
                    <td class="h4 text-center"><i class="fas fa-check-square" style="color: #00ba63;"></i></td>
                    <td class="text-center">-</td>
                    <td>DC_03/yy/####</td>
                    <td>NC_00/yy/####</td>
                    <td></td>
                    <td>Active</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#editCustomerAddressForm" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Bath</td>
                    <td class="h4 text-center"><i class="fas fa-check-square" style="color: #00ba63;"></i></td>
                    <td class="text-center">-</td>
                    <td>DC_04/yy/####</td>
                    <td>NC_00/yy/####</td>
                    <td></td>
                    <td>Active</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#editCustomerAddressForm" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Autoclave</td>
                    <td class="h4 text-center"><i class="fas fa-check-square" style="color: #00ba63;"></i></td>
                    <td class="text-center">-</td>
                    <td>DC_05/yy/####</td>
                    <td>NC_00/yy/####</td>
                    <td></td>
                    <td>Active</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#editCustomerAddressForm" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Balance</td>
                    <td class="h4 text-center"><i class="fas fa-check-square" style="color: #00ba63;"></i></td>
                    <td class="text-center">-</td>
                    <td>DC_06/yy/####</td>
                    <td>NC_00/yy/####</td>
                    <td></td>
                    <td>Active</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#editCustomerAddressForm" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>pH meter</td>
                    <td class="h4 text-center"><i class="fas fa-check-square" style="color: #00ba63;"></i></td>
                    <td class="text-center">-</td>
                    <td>DC_07/yy/####</td>
                    <td>NC_00/yy/####</td>
                    <td></td>
                    <td>Active</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#editCustomerAddressForm" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Centrifuge</td>
                    <td class="h4 text-center"><i class="fas fa-check-square" style="color: #00ba63;"></i></td>
                    <td class="text-center">-</td>
                    <td>DC_09/yy/####</td>
                    <td>NC_00/yy/####</td>
                    <td></td>
                    <td>Active</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#editCustomerAddressForm" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Burette</td>
                    <td class="h4 text-center"><i class="fas fa-check-square" style="color: #00ba63;"></i></td>
                    <td class="text-center">-</td>
                    <td>DC_10/yy/####</td>
                    <td>NC_00/yy/####</td>
                    <td></td>
                    <td>Active</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#editCustomerAddressForm" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Digital thermometer</td>
                    <td class="h4 text-center"><i class="fas fa-check-square" style="color: #00ba63;"></i></td>
                    <td class="text-center">-</td>
                    <td>DC_11/yy/####</td>
                    <td>NC_00/yy/####</td>
                    <td></td>
                    <td>Active</td>
                    <td>
                        <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#editCustomerAddressForm" ><i class="fa-regular fa-pen-to-square"></i></a>
                        </span>
                        <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                            <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                        </span>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
        <!-- end: pipettes type table -->

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