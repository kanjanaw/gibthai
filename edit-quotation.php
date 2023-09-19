<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php require('inc_header.php'); ?>
  </head>
  <body>
    <?php require('inc_sidebar.php'); ?>
    <?php require('inc_user.php'); ?>

    <div class="container-inner">
      <div class="breadcrumb" style="--bs-breadcrumb-divider: '>'">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="quotation.php">ใบเสนอราคา</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              แก้ไขใบเสนอราคา
            </li>
          </ol>
        </nav>
      </div>

      <div class="panel">
        <div class="d-flex justify-content-between">
          <h4>แก้ไขใบเสนอราคา - SO2309-0001</h4>
        </div>

        <!-- table menu -->
        <div class="row my-4">
          <div class="tabs">
            <ul
              class="nav tab-green nav-tabs nav-fill"
              id="quotationTabs"
              role="tablist"
            >
              <li class="nav-item">
                <a
                  class="tab-green nav-link active"
                  id="quotation-tab"
                  data-bs-toggle="tab"
                  href="#quotation"
                  role="tab"
                  aria-selected="true"
                  >ใบเสนอราคา</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="tab-green nav-link"
                  id="quotationEdit-h-tab"
                  data-bs-toggle="tab"
                  href="#quotationEdit-h"
                  role="tab"
                  aria-selected="false"
                  >ประวัติการแก้ไขใบเสนอราคา</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="tab-green nav-link"
                  id="sendEmail-tab"
                  data-bs-toggle="tab"
                  href="#sendEmail"
                  role="tab"
                  aria-selected="false"
                  >การส่งอีเมล</a
                >
              </li>
            </ul>

            <div class="tab-content" id="myTabContent">
              <!-- ใบเสนอราคา tab -->
              <div
                class="tab-pane fade active show"
                id="quotation"
                role="tabpanel"
              >
                <!-- ข้อมูลใบเสนอราคา -->
                <h6 class="p-2 bg-e5e5e5 fw-bold">ข้อมูลใบเสนอราคา</h6>
                <div class="row py-3">
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >เลขที่ใบเสนอราคา :</label
                      >
                      <div class="col-sm-8">
                        <!-- *แก้ไขได้ แต่ต้องไม่ซ้ำที่มี เช่น เพิ่มจุด -->
                        <input
                          type="text"
                          name=""
                          class="form-or-style"
                          value="SO2309-0001"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >ประเภทใบเสนอราคา :</label
                      >
                      <div class="col-sm-8">
                        <select name="" id="" class="form-or-style">
                          <option value="">ใบเสนอราคาหลัก</option>
                          <option value="">ใบเสนอราคาแปลงบิลลูกค้า</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >วันที่ใบเสนอราคา :</label
                      >
                      <div class="col-sm-8">
                        <!-- *default วันที่ปัจจุบัน แต่แก้ไขเปลี่ยนได้  -->
                        <input
                          type="date"
                          name=""
                          class="form-or-style"
                          id="quotationDate"
                          value="2023-09-19"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >สถานะใบเสนอราคา :</label
                      >
                      <div class="col-sm-8">
                        <!-- *ถ้าเปลี่ยนสถานะ = อนุมัติใบเสนอราคา ให้บังคับกรอกวันที่อนุมัติใบเสนอราคาด้วย -->
                        <select name="" id="" class="form-or-style">
                          <option value="">ใบเสนอราคา</option>
                          <option value="">อนุมัติใบเสนอราคา</option>
                          <option value="">ไม่อนุมัติยกเลิก</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >พนักงานขาย :</label
                      >
                      <div class="col-sm-8">
                        <select name="" id="" class="form-or-style">
                          <option value="">ปุณพจน์ นิกรนนท์</option>
                          <option value="">Option 1</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >อีเมล :</label
                      >
                      <div class="col-sm-8">
                        <input
                          type="email"
                          name=""
                          class="form-or-style"
                          value="phunnaphod.ni@drcal.co.th"
                          disabled
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >ผู้จัดทำใบเสนอราคา :</label
                      >
                      <div class="col-sm-8">
                        <!-- *Employee default by login -->
                        <input
                          type="text"
                          name=""
                          class="form-or-style"
                          value="ปุณพจน์ นิกรนนท์"
                          disabled
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >เลขที่แจ้งขอรับบริการ :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >อ้างอิงใบเสนอราคา :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >เลขที่ใบงานบริการ :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >อ้างอิงใบสั่งซื้อ (PO) :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >วันที่อนุมัติใบเสนอราคา :</label
                      >
                      <div class="col-sm-8">
                        <input type="date" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <label for="" class="col-sm-2 col-form-label"
                        >กำหนดยืนราคา :</label
                      >
                      <div class="col-sm-10">
                        <div class="input-group">
                          <select name="" id="" class="form-or-style w-25">
                            <option value="">30 วัน</option>
                            <option value="">45 วัน</option>
                            <option value="">60 วัน</option>
                          </select>
                          <input
                            type="text"
                            name=""
                            class="form-or-style w-75"
                            value="Default wording กำหนดยืนราคา ภายใน xx xx นับจากวันใบเสนอราคา"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <label for="" class="col-sm-2 col-form-label"
                        >กำหนดงานเสร็จ :</label
                      >
                      <div class="col-sm-10">
                        <div class="input-group">
                          <select name="" id="" class="form-or-style w-25">
                            <option value="">30 วัน</option>
                            <option value="">45 วัน</option>
                            <option value="">60 วัน</option>
                          </select>
                          <input
                            type="text"
                            name=""
                            class="form-or-style w-75"
                            value="Default wording กำหนดงานเสร็จ ภายใน xx xx นับจากวันที่ได้รับใบสั่งซื้อ"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end: ข้อมูลใบเสนอราคา -->

                <!-- ข้อมูลลูกค้า -->
                <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">ข้อมูลลูกค้า</h6>
                <div class="row py-2">
                  <div class="col-12 mb-3">
                    <button
                      type="button"
                      class="btn-black"
                      data-bs-toggle="modal"
                      data-bs-target="#searchCompanyForm"
                    >
                      <i class="fa-solid fa-magnifying-glass"></i>&nbsp;
                      ค้นหาข้อมูลบริษัท
                    </button>
                    <a
                      class="btn-black bg-green-00 border-green-00 px-5 mx-1"
                      type="button"
                      href="add-new-customer.php"
                      >เพิ่มลูกค้าใหม่</a
                    >
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >รหัสบริษัท* :</label
                      >
                      <div class="col-sm-8">
                        <input type="search" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >ชื่อบริษัท* :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >แผนก/หน่วยงาน :</label
                      >
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
                      <label for="" class="col-sm-4 col-form-label"
                        >ที่อยู่* :</label
                      >
                      <div class="col-sm-8">
                        <textarea
                          name=""
                          id=""
                          rows="4"
                          class="form-or-style"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >จังหวัด* :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >เขต/อำเภอ* :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >แขวง/ตำบล* :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >รหัสไปรษณีย์* :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >โทรศัพท์ :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >แฟกซ์ :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <label for="" class="col-sm-2 col-form-label"
                        >กำหนดชำระเงิน :</label
                      >
                      <div class="col-sm-10">
                        <div class="input-group">
                          <select name="" id="" class="form-or-style w-25">
                            <option value="">0 วัน</option>
                            <option value="">30 วัน</option>
                            <option value="">60 วัน</option>
                            <option value="">90 วัน</option>
                            <option value="">120 วัน</option>
                            <option value="">150 วัน</option>
                            <option value="">180 วัน</option>
                          </select>
                          <input
                            type="text"
                            name=""
                            class="form-or-style w-75"
                            value="กำหนดชำระเงิน ภายใน 0 นับจากวันที่ได้รับ"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end: ข้อมูลลูกค้า -->

                <!-- Modal search company form -->
                <div
                  class="modal fade"
                  id="searchCompanyForm"
                  tabindex="-1"
                  aria-labelledby="searchCompanyForm"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header border-0 bg-e5e5e5 py-2">
                        <h6 class="py-2 fw-bold mb-0">ข้อมูลลูกค้า</h6>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body row">
                        <div class="col-12 row">
                          <div class="col-10">
                            <input
                              type="text"
                              name=""
                              class="form-or-style my-0"
                              placeholder="ค้นหา"
                            />
                          </div>
                          <div class="col-auto g-0">
                            <button type="button" class="btn-black">
                              <i class="fa-solid fa-magnifying-glass"></i>&nbsp;
                              ค้นหา
                            </button>
                          </div>
                        </div>

                        <div class="table-responsive mt-4">
                          <table class="table table-hover" id="contactTable">
                            <thead>
                              <tr>
                                <th scope="col" data-field="companyId">
                                  รหัสบริษัท
                                </th>
                                <th scope="col" data-field="companyName">
                                  ชื่อบริษัท
                                </th>
                                <th scope="col" data-field="address">
                                  ที่อยู่
                                </th>
                                <th scope="col" data-field="province">
                                  จังหวัด
                                </th>
                                <th scope="col" data-field="zipcode">
                                  รหัสไปรษณีย์
                                </th>
                                <th scope="col" data-field="tel">โทรศัพท์</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                      </div>
                      <div class="modal-footer pt-0 border-0">
                        <button
                          type="button"
                          class="btn-grey"
                          data-bs-dismiss="modal"
                        >
                          ยกเลิก
                        </button>
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
                    <a
                      class="btn-black bg-green-00 border-green-00 px-5"
                      type="button"
                      href="add-new-customer.php"
                      >เพิ่มผู้ติดต่อใหม่</a
                    >
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >ชื่อผู้ติดต่อ* :</label
                      >
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
                      <label for="" class="col-sm-4 col-form-label"
                        >โทรศัพท์* :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >อีเมล* :</label
                      >
                      <div class="col-sm-8">
                        <input type="email" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >Line ID :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end: ข้อมูลผู้ติดต่อ -->

                <!-- ข้อมูลรายการเครื่องมือสอบเทียบ -->
                <h6 class="mt-5 p-2 bg-e5e5e5 fw-bold">
                  ข้อมูลรายการเครื่องมือสอบเทียบ
                </h6>
                <!-- table menu -->
                <div class="row d-flex align-items-center mb-2 mt-3">
                  <div class="col-6">
                    <input
                      type="text"
                      name=""
                      class="form-or-style my-0"
                      placeholder="ค้นหา"
                    />
                  </div>
                  <div class="col-auto g-0">
                    <button type="button" class="btn-black">
                      <i class="fa-solid fa-magnifying-glass"></i>&nbsp; ค้นหา
                    </button>
                  </div>
                  <div class="col-auto d-inline-block ms-auto"></div>
                </div>
                <!-- end: table menu -->
                <!-- pipettes table -->
                <div class="table-responsive mt-3">
                  <table class="table table-hover" id="pipettesTypeTable">
                    <thead>
                      <tr>
                        <th scope="col" data-field="">No</th>
                        <th scope="col" data-field="">รายการเครื่องมือ</th>
                        <th scope="col" data-field="">จำนวน</th>
                        <th scope="col" data-field="">หน่วยนับ</th>
                        <th scope="col" data-field="">ราคา/หน่วย</th>
                        <th scope="col" data-field="">ส่วนลด</th>
                        <th scope="col" data-field="">จำนวนเงิน</th>
                        <th scope="col" data-field="">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>
                          "ประเภทเครื่องมือสอบเทียบ" "ยี่ห้อ" "รุ่น" "ขนาด"
                          "หมายเลขเครื่อง" "รหัสเครื่องมือ" "จุดสอบเทียบ"
                          "วิธีการสอบเทียบ"
                        </td>
                        <td>4</td>
                        <td>เครื่อง</td>
                        <td>x,xxx</td>
                        <td>xx</td>
                        <td>xx,xxx</td>
                        <td>
                          <button class="btn my-0 py-0 hover-text-red">
                            <i class="fa-regular fa-copy"></i> สำเนา
                          </button>
                          <button class="btn my-0 py-0 hover-text-red">
                            <i class="fa-regular fa-trash-can"></i> ลบ
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- end: pipettes  table -->
                <div class="row mt-4">
                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >หมายเหตุในใบเสนอราคา :</label
                      >
                      <div class="col-sm-8">
                        <textarea
                          name=""
                          id=""
                          rows="8"
                          class="form-or-style"
                        ></textarea>
                      </div>
                      <label for="" class="col-sm-4 col-form-label"
                        >เพิ่มเติม :</label
                      >
                      <div class="col-sm-8">
                        <textarea
                          name=""
                          id=""
                          rows="4"
                          class="form-or-style"
                        ></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-12">
                    <div class="row">
                      <label for="" class="col-sm-4 col-form-label"
                        >รูปแบบการคำนวณภาษีมูลค่าเพิ่ม :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>

                      <label for="" class="col-sm-4 col-form-label"
                        >จำนวนเงินรวม :</label
                      >
                      <div class="col-sm-8">
                        <input
                          type="text"
                          name=""
                          class="form-or-style"
                          placeholder="xxx,xxx"
                          disabled
                        />
                      </div>

                      <label for="" class="col-sm-4 col-form-label"
                        >ส่วนลดรวม :</label
                      >
                      <div class="col-sm-8">
                        <input type="text" name="" class="form-or-style" />
                      </div>

                      <label for="" class="col-sm-4 col-form-label"
                        >จำนวนเงินรวมหักส่วนลด :</label
                      >
                      <div class="col-sm-8">
                        <input
                          type="text"
                          name=""
                          class="form-or-style"
                          placeholder="xxx,xxx"
                          disabled
                        />
                      </div>

                      <label for="" class="col-sm-4 col-form-label"
                        >ภาษีมูลค่าเพิ่ม :</label
                      >
                      <div class="col-sm-8">
                        <div class="input-group">
                          <select name="" id="" class="form-or-style w-25">
                            <option value="">0%</option>
                            <option value="" selected>7%</option>
                            <option value="">10%</option>
                          </select>
                          <input
                            type="text"
                            name=""
                            class="form-or-style w-75"
                          />
                        </div>
                      </div>

                      <label for="" class="col-sm-4 col-form-label"
                        >จำนวนเงินรวมทั้งสิ้น :</label
                      >
                      <div class="col-sm-8">
                        <input
                          type="text"
                          name=""
                          class="form-or-style"
                          placeholder="123,000"
                          disabled
                        />
                      </div>

                      <label for="" class="col-sm-4 col-form-label"
                        >จำนวนเงินรวมทั้งสิ้น (คำอ่าน) :</label
                      >
                      <div class="col-sm-8">
                        <p class="fst-italic py-2">หนึ่งแสนสองหมื่นสามพันบาท</p>
                      </div>

                      <label for="" class="col-sm-4 col-form-label"
                        >ลายเซ็น :</label
                      >
                      <div class="col-sm-8">
                        <div class="mb-1 form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="signCheck1"
                            checked
                          />
                          <label class="form-check-label" for="signCheck1"
                            >พนักงานขาย</label
                          >
                        </div>
                        <div class="mb-1 form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="signCheck2"
                          />
                          <label class="form-check-label" for="signCheck2"
                            >ผู้จัดการขาย</label
                          >
                        </div>
                        <div class="mb-1 form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="signCheck3"
                          />
                          <label class="form-check-label" for="signCheck3"
                            >กรรมการผู้จัดการ</label
                          >
                        </div>
                      </div>

                      <label for="" class="col-sm-4 col-form-label mt-4"
                        >รายละเอียด :</label
                      >
                      <div class="col-sm-8 mt-4">
                        <div class="mb-1 form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="dateCheck1"
                            checked
                          />
                          <label class="form-check-label" for="dateCheck1"
                            >แสดงวันที่ในใบเสนอราคา</label
                          >
                        </div>
                        <div class="mb-1 form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="dateCheck2"
                          />
                          <label class="form-check-label" for="dateCheck2"
                            >ไม่แสดงวันที่ในใบเสนอราคา</label
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end: ข้อมูลรายการเครื่องมือสอบเทียบ -->
                <div class="d-flex justify-content-end py-3 mt-3">
                  <a type="button" class="btn-black bg-blue border-blue mx-2"
                    >ใบเสนอราคา</a
                  >
                  <a type="button" class="btn-black">ส่งอีเมล PDF</a>
                  <a type="button" class="btn-black mx-2">สำเนาใบเสนอราคา</a>
                  <button type="button" class="btn-grey mx-2">ยกเลิก</button>
                  <button type="button" class="btn-green">บันทึกข้อมูล</button>
                </div>
              </div>
              <!-- end: ใบเสนอราคา tab -->

              <!-- ประวัติการแก้ไขใบเสนอราคา -->
              <div class="tab-pane fade" id="quotationEdit-h" role="tabpanel">
                <h6 class="p-2 mb-2 bg-e5e5e5 fw-bold">
                  ประวัติการแก้ไขใบเสนอราคา
                </h6>
                <!-- table menu -->
                <div class="row d-flex align-items-center">
                  <label style="font-weight: 400"
                    >แสดงทีละ
                    <select
                      name="datatable_length"
                      aria-controls="datatable"
                      class="form-or-style"
                      id="form-tablelength"
                    >
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                    </select>
                    รายการ
                  </label>
                </div>
                <!-- end: table menu -->

                <!-- ตารางประวัติการแก้ไขใบเสนอราคา -->
                <div class="table-responsive mt-1">
                  <table
                    class="table table-hover"
                    id="quotationEditHistoryTable"
                  >
                    <thead>
                      <tr>
                        <th scope="col" data-field="date">วันที่</th>
                        <th scope="col" data-field="">รายการแก้ไข</th>
                        <th scope="col" data-field="">ผู้แก้ไข</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
                <!-- end: ตารางประวัติการแก้ไขใบเสนอราคา -->
              </div>
              <!-- end: ประวัติการแก้ไขใบเสนอราคา -->

              <!-- การส่งอีเมล -->
              <div class="tab-pane fade" id="sendEmail" role="tabpanel">
                <h6 class="p-2 mb-2 bg-e5e5e5 fw-bold">การส่งอีเมล</h6>
                <!-- table menu -->
                <div class="row d-flex align-items-center">
                  <label style="font-weight: 400"
                    >แสดงทีละ
                    <select
                      name="datatable_length"
                      aria-controls="datatable"
                      class="form-or-style"
                      id="form-tablelength"
                    >
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                    </select>
                    รายการ
                  </label>
                </div>
                <!-- end: table menu -->

                <!-- ตารางประวัติการส่งอีเมล -->
                <div class="table-responsive mt-1">
                  <table class="table table-hover" id="sendEmailHistoryTable">
                    <thead>
                      <tr>
                        <th scope="col" data-field="">วันที่</th>
                        <th scope="col" data-field="">To</th>
                        <th scope="col" data-field="">CC</th>
                        <th scope="col" data-field="">ไฟล์แนบ</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
                <!-- end: ตารางประวัติการส่งอีเมล -->
              </div>
              <!-- end: การส่งอีเมล -->
            </div>
          </div>
        </div>
        <!-- end: table menu -->
      </div>
    </div>
  </body>
</html>
