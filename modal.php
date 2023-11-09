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


<!-- Modal add department form -->
<div class="modal fade" id="addDepartmentForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addDepartmentForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลแผนก/หน่วยงาน</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน (อังกฤษ) :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
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
<!-- end: Modal add department form -->


<!-- Modal add address form -->
<div class="modal fade" id="addAddressForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addAddressForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลที่อยู่</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ประเภทที่อยู่* :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style">
                                <option value="">ที่อยู่หลัก</option>
                                <option value="">ใบกำกับภาษี</option>
                                <option value="">ใบรับรองผลการสอบเทียบ (อังกฤษ)</option>
                                <option value="">ติดตั้งเครื่องมือ</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">สถานะที่อยู่* :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style">
                                <option value="">Active</option>
                                <option value="">Inactive</option>
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
                            <select name="" id="" class="form-or-style">
                                <option value="">Select</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">เขต/อำเภอ* :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style">
                                <option value="">Select</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">แขวง/ตำบล* :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style">
                                <option value="">Select</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
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
                                <option value="">Option 2</option>
                            </select>
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
                                <option value="">Option 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน (อังกฤษ) :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style" disabled>
                                <option value="">Select</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">หมายเหตุ :</label>
                        <div class="col-sm-8">
                            <input class="form-or-style" type="text">
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
<!-- end: Modal add address form -->


<!-- Modal add contact form -->
<div class="modal fade" id="addContactForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addContactForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลผู้ติดต่อ</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">แผนก/หน่วยงาน :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style">
                                <option value="">Select</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ชื่อผู้ติดต่อ* :</label>
                        <div class="col-sm-8">
                            <input class="form-or-style" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">อีเมล* :</label>
                        <div class="col-sm-8">
                            <input class="form-or-style" type="email">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">โทรศัพท์* :</label>
                        <div class="col-sm-8">
                            <input class="form-or-style" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">Line ID :</label>
                        <div class="col-sm-8">
                            <input class="form-or-style" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">เพิ่มเติม :</label>
                        <div class="col-sm-8">
                            <input class="form-or-style" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">สถานะ* :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style">
                                <option value="">Active</option>
                                <option value="">Inactive</option>
                            </select>
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
<!-- end: Modal add contact form -->


<!-- Modal select pipettes form -->
<div class="modal fade" id="selectPipettesForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="selectPipettesForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลเครื่องมือสอบเทียบของลูกค้า</h6>
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
                        <th scope="col" data-field="">เลือก</th>
                        <th scope="col" data-field="">ประเภทเครื่องมือสอบเทียบ</th>
                        <th scope="col" data-field="">ยี่ห้อ</th>
                        <th scope="col" data-field="">รุ่น</th>
                        <th scope="col" data-field="">ขนาด</th>
                        <th scope="col" data-field="">หมายเลขเครื่อง</th>
                        <th scope="col" data-field="">สถานะ</th>
                        </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
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
            <div class="modal-footer pt-0 border-0">
                <button type="button" class="btn-grey " data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn-green">เลือก</button>
            </div>
        </div>
    </div>
</div>
<!-- end: Modal select pipettes form -->


<!-- Modal select pipettes form service -->
<div class="modal fade" id="selectPipettesFormService" data-bs-backdrop="static" tabindex="-1" aria-labelledby="selectPipettesFormService" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลเครื่องมือสอบเทียบ</h6>
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
                        <th scope="col" data-field="">เลือก</th>
                        <th scope="col" data-field="">ประเภทเครื่องมือ</th>
                        <th scope="col" data-field="">ประเภทย่อย</th>
                        <th scope="col" data-field="">ยี่ห้อ</th>
                        <th scope="col" data-field="">รุ่น</th>
                        <th scope="col" data-field="">ขนาด</th>
                        <th scope="col" data-field="">หมายเลขเครื่อง</th>
                        <th scope="col" data-field="">รหัสรายการเครื่องมือ</th>
                        <th scope="col" data-field="">รหัสเครื่องมือ</th>
                        <th scope="col" data-field="">สถานะ</th>
                        </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                            <td></td>
                            <td></td>
                            <td></td>
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
            <div class="modal-footer pt-0 border-0">
                <button type="button" class="btn-grey " data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn-green">เลือก</button>
            </div>
        </div>
    </div>
</div>
<!-- end: Modal select pipettes form service -->


<!-- Modal select quotation form -->
<div class="modal fade" id="selectQuotationForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="selectQuotationForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลใบเสนอราคา</h6>
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
                        <th scope="col" data-field="">เลือก</th>
                        <th scope="col" data-field="">วันที่ใบเสนอราคา</th>
                        <th scope="col" data-field="">เลขที่ใบเสนอราคา</th>
                        <th scope="col" data-field="">ประเภท</th>
                        <th scope="col" data-field="">ลูกค้า</th>
                        <th scope="col" data-field="">ที่อยู่</th>
                        <th scope="col" data-field="">สถานะ</th>
                        </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
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
            <div class="modal-footer pt-0 border-0">
                <button type="button" class="btn-grey " data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn-green">เลือก</button>
            </div>
        </div>
    </div>
</div>
<!-- end: Modal select quotation form-->


<!-- Modal edit customer address -->
<div class="modal fade" id="editCustomerAddressForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editCustomerAddressForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ประเภทที่อยู่ :</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <label for="" class="col-sm-4 col-md-2 col-form-label">ประเภทที่อยู่ :</label>
                <div class="col-sm-8 col-md-10">
                    <input type="text" name="" class="form-or-style mt-0" value="ที่อยู่หลัก"/>
                </div>
            </div>
            <div class="modal-footer pt-0 border-0">
                <button type="button" class="btn-grey " data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn-green">บันทึกข้อมูล</button>
            </div>
        </div>
    </div>
</div>
<!-- end: Modal edit customer address -->


<!-- Modal edit payment due form -->
<div class="modal fade" id="editPaymentDueForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editPaymentDueForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">กำหนดการชำระเงิน :</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <label for="" class="col-sm-2 col-form-label">กำหนดการชำระเงิน :</label>
                <div class="col-auto">
                    <input type="number" name="" class="form-or-style mt-0" value="0"/>
                </div>
                <label for="" class="col-auto col-form-label">วัน</label>
            </div>
            <div class="modal-footer pt-0 border-0">
                <button type="button" class="btn-grey " data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn-green">บันทึกข้อมูล</button>
            </div>
        </div>
    </div>
</div>
<!-- end: Modal edit payment due form -->


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


<!-- Modal search company form quotation -->
<div class="modal fade" id="searchCompanyFormQuotation" data-bs-backdrop="static" tabindex="-1" aria-labelledby="searchCompanyFormQuotation" aria-hidden="true">
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
                        <th scope="col" data-field="address">ที่อยู่</th>
                        <th scope="col" data-field="province">จังหวัด</th>
                        <th scope="col" data-field="zipcode">รหัสไปรษณีย์</th>
                        <th scope="col" data-field="">โทรศัพท์</th>
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
<!-- end: Modal search company form quotation-->


<!-- Modal add pipettes form quotation -->
<div class="modal fade" id="addPipettesFormQuotation" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addPipettesFormQuotation" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลเครื่องมือสอบเทียบ</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">Item No. :</label>
                        <div class="col-sm-8 d-flex align-items-center">
                            <p class="mb-0">2</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">รหัสเครื่องมือ :</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input class="form-or-style form-control" type="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" style="border-radius: 8px 0px 0px 8px;">
                                <button class="input-group-text border-0 h6" type="button" style="margin-top: 2px" id="search-icon-button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">รายการเครื่องมือ :</label>
                        <div class="col-sm-8">
                            <textarea name="" id="" class="form-or-style" rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ประเภทเครื่องมือ :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style" disabled>
                                <option value="">option 1</option>
                                <option value="">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ประเภทย่อยเครื่องมือ :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style" disabled>
                                <option value="">option 1</option>
                                <option value="">Inactive</option>
                            </select>
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
                        <label for="" class="col-sm-4 col-form-label">ราคาต่อหน่วย* :</label>
                        <div class="col-sm-8">
                            <input class="form-or-style" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ส่วนลด* :</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" name="" class="form-or-style w-75"/>
                                <select name="" id="" class="form-or-style w-25">
                                    <option value="">%</option>
                                    <option value="">ตัวเลข</option>
                                </select>
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
<!-- end: Modal add pipettes form quotation -->


<!-- Modal add pipettes form quotation by pipettes -->
<div class="modal fade" id="addPipettesFormQuotationPipettes" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addPipettesFormQuotationPipettes" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลเครื่องมือสอบเทียบ</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">Item No. :</label>
                        <div class="col-sm-8 d-flex align-items-center">
                            <p class="mb-0">2</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ประเภทเครื่องมือสอบเทียบ* :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style" disabled="">
                                <option value="">option 1</option>
                                <option value="">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ยี่ห้อ* :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style" disabled="">
                                <option value="">option 1</option>
                                <option value="">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">รุ่น* :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style" disabled="">
                                <option value="">option 1</option>
                                <option value="">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ขนาด :</label>
                        <div class="col-sm-8">
                            <input class="form-or-style" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">หมายเลขเครื่อง* :</label>
                        <div class="col-sm-8">
                            <input class="form-or-style" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">รหัสเครื่องมือ :</label>
                        <div class="col-sm-8">
                            <input class="form-or-style" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">จุดสอบเทียบ* :</label>
                        <div class="col-sm-8">
                            <input class="form-or-style" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">วิธีการสอบเทียบ* :</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style">
                                <option value="">option 1</option>
                                <option value="">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">รายละเอียดรายการเครื่องมือ :</label>
                        <div class="col-sm-8">
                            <textarea name="" id="" class="form-or-style" rows="6"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">จำนวน :</label>
                        <div class="col-sm-8 d-flex align-items-center">
                            <p class="mb-0">1</p>
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
                        <label for="" class="col-sm-4 col-form-label">ราคาต่อหน่วย* :</label>
                        <div class="col-sm-8">
                            <input class="form-or-style" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ส่วนลด* :</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="text" name="" class="form-or-style w-75">
                                <select name="" id="" class="form-or-style w-25">
                                    <option value="">%</option>
                                    <option value="">ตัวเลข</option>
                                </select>
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
<!-- end: Modal add pipettes form quotation by pipettes -->


<!-- Modal search service info form  -->
<div class="modal fade" id="searchServiceInfoForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="searchServiceInfoForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลงานบริการสอบเทียบเครื่องมือ</h6>
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
                        <th scope="col">เลือก</th>
                        <th scope="col">วันที่แจ้ง</th>
                        <th scope="col">เลขที่แจ้งขอรับบริการ</th>
                        <th scope="col">วันที่งาน</th>
                        <th scope="col">เลขที่ใบงานบริการ</th>
                        <th scope="col">ชื่อบริษัท</th>
                        <th scope="col">แผนก/หน่วยงาน</th>
                        <th scope="col">สถานะ</th>
                        </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                            <td></td>
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
            <div class="modal-footer pt-0 border-0">
                <button type="button" class="btn-grey" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn-green">เลือก</button>
            </div>
        </div>
    </div>
</div>
<!-- end: Modal search service info form  -->


<!-- Modal add pipettes form GrInvoice -->
<div class="modal fade" id="addPipettesFormGrInvoice" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addPipettesFormGrInvoice" aria-hidden="true">
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
<!-- end: Modal add pipettes form GrInvoice -->


<!-- Modal edit gr invoice status -->
<div class="modal fade" id="editGrInvoiceStatusForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editGrInvoiceStatusForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">สถานะใบรับ - ส่งเครื่องมือสอบเทียบ :</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">สถานะใบรับ - ส่งเครื่องมือ :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style mt-0" value="นัดหมายรับเครื่องมือ"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ประเภทใบรับ - ส่งเครื่องมือ</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style mt-0">
                                <option value="" selected>รับ - ส่งเครื่องมือลูกค้า</option>
                                <option value="">ส่งต่อ - สอบเทียบ</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">สถานะรอง</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style mt-0">
                                <option value="" selected>ยังไม่เสร็จ</option>
                                <option value="">เสร็จแล้ว</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">สถานะ*</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-or-style mt-0">
                                <option value="" selected>Active</option>
                                <option value="">Inactive</option>
                            </select>
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
<!-- end: Modal edit gr invoice status -->


<!-- Modal edit gr invoice method -->
<div class="modal fade" id="editGrInvoiceMethodForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editGrInvoiceMethodForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">วิธีการรับ - ส่งเครื่องมือสอบเทียบ :</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">วิธีการรับ - ส่งเครื่องมือ*</label>
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
            </div>
            <div class="modal-footer pt-0 border-0">
                <button type="button" class="btn-grey " data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn-green">บันทึกข้อมูล</button>
            </div>
        </div>
    </div>
</div>
<!-- end: Modal edit gr invoice method -->


<!-- Modal add status form -->
<div class="modal fade" id="addStatusForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addStatusForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลสถานะงานบริการสอบเทียบ</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="col-12">
                    <div class="row">
                        <label for="" class="col-sm-2 col-12 col-form-label">ประเภทรับบริการ :</label>
                        <div class="col-sm-10 col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    สอบเทียบห้องปฏิบัติการบริษัทฯ
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    สอบเทียบนอกสถานที่
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ขั้นตอนงาน* :</label>
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
                        <label for="" class="col-sm-4 col-form-label">สถานะงานบริการหลัก* :</label>
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
                        <label for="" class="col-sm-4 col-form-label">สถานะงานบริการย่อย* :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ระบุสาเหตุ :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
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
<!-- end: Modal add status form -->


<!-- Modal search gr invoice form  -->
<div class="modal fade" id="searchGrInvoiceForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="searchGrInvoiceForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลใบรับ-ส่งเครื่องมือสอบเทียบ</h6>
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
                        <th scope="col">เลือก</th>
                        <th scope="col">วันที่</th>
                        <th scope="col">เลขที่ใบรับ-ส่ง</th>
                        <th scope="col">ประเภท</th>
                        <th scope="col">ชื่อบริษัท</th>
                        <th scope="col">แผนก/หน่วยงาน</th>
                        <th scope="col">ผู้ติดต่อ</th>
                        <th scope="col">สถานะ</th>
                        </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                            <td></td>
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
            <div class="modal-footer pt-0 border-0">
                <button type="button" class="btn-grey" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn-green">เลือก</button>
            </div>
        </div>
    </div>
</div>
<!-- end: Modal search gr invoice form  -->


<!-- Modal add สภาพแวดล้อมก่อนการสอบเทียบ (รายการ) form -->
<div class="modal fade" id="addListConditionBeforeForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addListConditionBeforeForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลสภาพแวดล้อมก่อนการสอบเทียบ (รายการ)</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="col-md-6 col-12 ">
                    <div class="row">
                        <label for="" class="col-sm-4 col-3 col-form-label">Item No. :</label>
                        <div class="col-sm-8 col-9 d-flex align-items-center">
                            <p class="mb-0">1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">รายการ* :</label>
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
                        <label for="" class="col-sm-4 col-form-label">Minimum* :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">Maximum* :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ผลการตรวจ* :</label>
                        <div class="col-sm-8 mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Radio" id="Radio1" checked>
                                <label class="form-check-label" for="flexRadio1">
                                    ผ่านเกณฑ์
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Radio" id="Radio1">
                                <label class="form-check-label" for="flexRadio1">
                                    ไม่ผ่านเกณฑ์
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Radio" id="Radio1">
                                <label class="form-check-label" for="flexRadio1">
                                    N/A
                                </label>
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
<!-- end: Modal add สภาพแวดล้อมก่อนการสอบเทียบ (รายการ) form -->


<!-- Modal add สภาพแวดล้อมก่อนการสอบเทียบ (กลุ่มรายการ) form -->
<div class="modal fade" id="addListGroupConditionBeforeForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addListGroupConditionBeforeForm" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 bg-e5e5e5 py-2">
                <h6 class="py-2 fw-bold mb-0">ข้อมูลสภาพแวดล้อมก่อนการสอบเทียบ (กลุ่มรายการ)</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="col-12 ">
                    <div class="row">
                        <label for="" class="col-sm-2 col-3 col-form-label">Item No. :</label>
                        <div class="col-sm-10 col-9 d-flex align-items-center">
                            <p class="mb-0">1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">กลุ่มรายการ* :</label>
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
                        <label for="" class="col-sm-4 col-form-label">รายการ* :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ผลการตรวจ* :</label>
                        <div class="col-sm-8 mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="listgroup" id="Radio1" checked>
                                <label class="form-check-label" for="flexRadio1">
                                    ปกติ
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="listgroup" id="Radio1">
                                <label class="form-check-label" for="flexRadio1">
                                    ผิดปกติ
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <label for="" class="col-sm-4 col-form-label">ระบุ ผิดปกติ :</label>
                        <div class="col-sm-8">
                            <input type="text" name="" class="form-or-style"/>
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
<!-- end: Modal add สภาพแวดล้อมก่อนการสอบเทียบ (กลุ่มรายการ) form -->


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


<!-- Modal edit user role form -->
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
                            <input class="form-or-style" type="text" value="Admin System">
                        </div>
                    </div>
                </div>

                <div class="col-12">
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
<!-- end: Modal edit user role form -->