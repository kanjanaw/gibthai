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
                <li class="breadcrumb-item"><a href="gr-invoice2.php">ใบรับ-ส่งเครื่องมือสอบเทียบ</a></li>
                <li class="breadcrumb-item active" aria-current="page">เพิ่มใบรับ-ส่งเครื่องมือสอบเทียบใหม่</li>
            </ol>
        </nav>
    </div>

    <div class="panel">
        <div class="d-flex justify-content-between">
            <h4>เพิ่มใบรับ-ส่งเครื่องมือสอบเทียบใหม่</h4>
        </div>

        <!-- table menu -->
        <div class="my-4">
                        <!-- ข้อมูลใบรับ-ส่งเครื่องมือสอบเทียบ -->
                        <h6 class="p-2 bg-e5e5e5 fw-bold">ข้อมูลใบรับ-ส่งเครื่องมือสอบเทียบ</h6>
                            <div class="row py-3">
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เลขที่ใบรับ-ส่งเครื่อง* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" value="Auto Generate ERyymm-xxxx"disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">สถานะใบรับ - ส่งเครื่อง* :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style mt-0">
                                                <option value="">option 1</option>
                                                <option value="">option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ประเภทใบรับ - ส่งเครื่องมือ* :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style mt-0">
                                                <option value="">รับ - ส่งเครื่องมือลูกค้า</option>
                                                <option value="">ส่งต่อ - สอบเทียบ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เลขที่ใบเสนอราคา :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input class="form-or-style form-control" type="search" placeholder="ค้นหา" aria-label="ค้นหา" aria-describedby="search-addon" style="border-radius: 8px 0px 0px 8px;">
                                                <button class="input-group-text border-0 h6" type="button" style="margin-top: 2px" id="search-icon-button">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เลขที่ใบงานบริการ :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input class="form-or-style form-control" type="search" placeholder="ค้นหา" aria-label="ค้นหา" aria-describedby="search-addon" style="border-radius: 8px 0px 0px 8px;">
                                                <button class="input-group-text border-0 h6" type="button" style="margin-top: 2px" id="search-icon-button">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เลขที่ใบแจ้งขอรับบริการ :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- end: ข้อมูลใบรับ-ส่งเครื่องมือสอบเทียบ -->

                        <!-- ข้อมูลนัดหมายรับ-ส่งเครื่องมือสอบเทียบ -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลนัดหมายรับ-ส่งเครื่องมือสอบเทียบ</h6>
                            <div class="row py-3">
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วันที่นัดหมายรับเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เจ้าหน้าที่ผู้นัดหมายรับ :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style mt-0">
                                                <option value="">Default by login แก้ไขได้</option>
                                                <option value="">option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วิธีการแจ้งนัดหมายรับ :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style mt-0">
                                                <option value="">แจ้งโดยส่งอีเมลให้ลูกค้า</option>
                                                <option value="">โทรศัพท์</option>
                                                <option value="">Line</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วิธีการรับเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style mt-0">
                                                <option value="">ลูกค้านำส่งเครื่องมาที่บริษัทเอง</option>
                                                <option value="">ลูกค้านำส่งเครื่องผ่านขนส่ง</option>
                                                <option value="">ลูกค้านำส่งเครื่องผ่านบริษัท Dealer</option>
                                                <option value="">บริษัทฯ ส่งเครื่องคืนที่ Site ลูกค้า</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เพิ่มเติมการนัดหมายรับเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-or-style" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วันที่นัดหมายส่งเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เจ้าหน้าที่ผู้นัดหมายส่ง :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style mt-0">
                                                <option value="">Default by login แก้ไขได้</option>
                                                <option value="">option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วิธีการแจ้งนัดหมายส่ง :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style mt-0">
                                                <option value="">แจ้งโดยส่งอีเมลให้ลูกค้า</option>
                                                <option value="">โทรศัพท์</option>
                                                <option value="">Line</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วิธีการส่งเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style mt-0">
                                                <option value="">ลูกค้านำส่งเครื่องมาที่บริษัทเอง</option>
                                                <option value="">ลูกค้านำส่งเครื่องผ่านขนส่ง</option>
                                                <option value="">ลูกค้านำส่งเครื่องผ่านบริษัท Dealer</option>
                                                <option value="">บริษัทฯ เข้ารับเครื่องที่ Site ลูกค้า</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เพิ่มเติมการนัดหมายส่งเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-or-style" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- end: ข้อมูลนัดหมายรับ-ส่งเครื่องมือสอบเทียบ -->

                        <!-- ข้อมูลรับ-ส่งเครื่องมือสอบเทียบ -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลรับ-ส่งเครื่องมือสอบเทียบ</h6>
                            <div class="row py-3">
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วันที่รับเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เจ้าหน้าที่ผู้รับเครื่อง* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วันที่ลูกค้าส่งเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ลูกค้าผู้ส่งเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">สภาพเครื่อง (รับ) :</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-or-style" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วันที่ส่งคืนเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เจ้าหน้าที่ผู้ส่งคืนเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">วันที่ลูกค้ารับเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ลูกค้าผู้รับเครื่อง :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">สภาพเครื่อง (ส่ง) :</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-or-style" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">สภาพเครื่อง (แนบรูป) :</label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-or-style" multiple>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">หมายเหตุเพิ่มเติม :</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-or-style" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- end: ข้อมูลรับ-ส่งเครื่องมือสอบเทียบ -->

                        <!-- ข้อมูลลูกค้า -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลลูกค้า</h6>
                        <div class="row py-2">
                                <div class="col-12 mb-3">
                                    <button type="button" class="btn-black" data-bs-toggle="modal" data-bs-target="#searchCompanyForm"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหาข้อมูลบริษัท</button>
                                    <a class="btn-black bg-green-00 border-green-00 px-5 mx-1" type="button" href="add-new-customer.php">เพิ่มลูกค้าใหม่</a>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">รหัสบริษัท* :</label>
                                        <div class="col-sm-8">
                                            <input type="search" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ประเภทกลุ่มบริษัท :</label>
                                        <div class="col-sm-8">
                                            <select name="" id="" class="form-or-style mt-0">
                                                <option value="">ลูกค้า</option>
                                                <option value="">บริษัทภายนอก</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">ชื่อบริษัท* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
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
                                        <label for="" class="col-sm-4 col-form-label">ที่อยู่* :</label>
                                        <div class="col-sm-8">
                                            <textarea name="" id="" rows="4" class="form-or-style"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">จังหวัด* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">เขต/อำเภอ* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">แขวง/ตำบล* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">รหัสไปรษณีย์* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">โทรศัพท์ :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">แฟกซ์ :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" />
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- end: ข้อมูลลูกค้า -->

                        <!-- Modal search company form -->
                        <div class="modal fade" id="searchCompanyForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="searchCompanyForm" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 bg-e5e5e5 py-2">
                                            <h6 class="py-2 fw-bold mb-0">ข้อมูลลูกค้า</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-12 row">
                                                <div class="col-10">
                                                    <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                                                </div>
                                                <div class="col-auto g-0">
                                                    <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                                                </div>
                                            </div>

                                            <div class="table-responsive mt-4">
                                                <table class="table table-hover" id="contactTable">
                                                <thead>
                                                    <tr>
                                                    <th scope="col" data-field="companyId">รหัสบริษัท</th>
                                                    <th scope="col" data-field="companyName">ชื่อบริษัท</th>
                                                    <th scope="col" data-field="address">ที่อยู่</th>
                                                    <th scope="col" data-field="province">จังหวัด</th>
                                                    <th scope="col" data-field="zipcode">รหัสไปรษณีย์</th>
                                                    <th scope="col" data-field="tel">โทรศัพท์</th>
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

                        <!-- ข้อมูลผู้ติดต่อ -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลผู้ติดต่อ</h6>
                        <div class="row py-2">
                                <div class="col-12 mb-3">
                                    <a class="btn-black bg-green-00 border-green-00 px-5" type="button" href="add-new-customer.php">เพิ่มผู้ติดต่อใหม่</a>
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
                                        <label for="" class="col-sm-4 col-form-label">โทรศัพท์* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">อีเมล* :</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="" class="form-or-style" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">Line ID* :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-or-style" />
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- end: ข้อมูลผู้ติดต่อ -->

                        <!-- ข้อมูลรายการเครื่องมือสอบเทียบ -->
                        <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลรายการเครื่องมือสอบเทียบ</h6>
                            <!-- table menu -->
                            <div class="row d-flex align-items-center mb-2 mt-3">
                                <div class="col-6">
                                    <input type="text" name="" class="form-or-style my-0" placeholder="ค้นหา"/>
                                </div>
                                <div class="col-auto g-0">
                                    <button type="button" class="btn-black"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;  ค้นหา</button>
                                </div>
                                <div class="col-auto d-inline-block ms-auto">
                                    <a type="button" class="btn-black bg-blue border-blue" href="add-new-quotation-by-pipettes.php" data-bs-toggle="modal" data-bs-target="#addPipettesForm">เพิ่มรายการ</a>
                                </div>
                            </div>
                            <!-- end: table menu -->

                            <!-- Modal add pipettes form -->
                            <div class="modal fade" id="addPipettesForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addPipettesForm" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 bg-e5e5e5 py-2">
                                            <h6 class="py-2 fw-bold mb-0">ข้อมูลเครื่องมือสอบเทียบ</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-6 col-12 ">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">Item No. :</label>
                                                    <div class="col-sm-8 d-flex align-items-center">
                                                        <p class="mb-0">2</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">รหัสรายการเครื่องมือ :</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input class="form-or-style form-control" type="search" placeholder="ค้นหา" aria-label="ค้นหา" aria-describedby="search-addon" style="border-radius: 8px 0px 0px 8px;">
                                                            <button class="input-group-text border-0 h6" type="button" style="margin-top: 2px" id="search-icon-button">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12 ">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-md-2 col-form-label">รายการเครื่องมือ :</label>
                                                    <div class="col-sm-8 col-md-10 d-flex align-items-center">
                                                        <input type="text" class="form-or-style">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">ประเภทเครื่องมือ :</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-or-style" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">ประเภทเครื่องมือย่อย :</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-or-style" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">จำนวน* :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-or-style" type="number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">หน่วยนับ* :</label>
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
                                                    <label for="" class="col-sm-4 col-form-label">สภาพเครื่อง :</label>
                                                    <div class="col-sm-8">
                                                        <textarea name="" id="" class="form-or-style" rows="4"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="row">
                                                    <label for="" class="col-sm-4 col-form-label">สภาพเครื่อง (รูป) :</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input type="file" name="" class="form-or-style" multiple/>
                                                        </div>
                                                    </div>
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
                            <!-- end: Modal add pipettes form -->

                            <!-- pipettes table -->
                            <div class="table-responsive mt-3">
                                <table class="table table-hover" id="pipettesTypeTable">
                                <thead>
                                    <tr>
                                    <th scope="col" data-field="">No</th>
                                    <th scope="col" data-field="">รหัสรายการเครื่องมือ</th>
                                    <th scope="col" data-field="">รายการเครื่องมือ</th>
                                    <th scope="col" data-field="">จำนวน</th>
                                    <th scope="col" data-field="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>"รหัสรายการเครื่องมือ"</td>
                                        <td>"รายการเครื่องมือ"</td>
                                        <td>4</td>
                                        <td>
                                            <span title="แก้ไข" data-bs-toggle="tooltip" data-bs-placement="top">
                                                <a href="#" class="text-dark hover-text-red"data-bs-toggle="modal" data-bs-target="#" ><i class="fa-regular fa-pen-to-square"></i></a>
                                            </span>
                                            <span title="ลบ" data-bs-toggle="tooltip" data-bs-placement="top">
                                                <a href="#" class="text-dark hover-text-red mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-regular fa-trash-can"></i></a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class="h5 fw-bold">จำนวนรวมทั้งหมด</td>
                                        <td class="h5 fw-bold">xxx</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            <!-- end: pipettes  table -->

                        <!-- end: ข้อมูลรายการเครื่องมือสอบเทียบ -->

                        <div class="row mt-3 pt-3 text-md-end text-center">
                            <div class="col-12 d-flex justify-content-md-end justify-content-center">
                                <div class="d-md-inline d-grid gap-1">
                                    <a type="button" class="btn-black bg-blue border-blue text-center">ใบรับ - ส่งเครื่องมือ</a>
                                    <button type="button" class="btn-green btn-grey text-center order-last">ยกเลิก</button>
                                    <button type="button" class="btn-green text-center">บันทึกข้อมูล</button>
                                </div>
                            </div>
                        </div>

        </div>
        <!-- end: table menu -->

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

<script>

</script>