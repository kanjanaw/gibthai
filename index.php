<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require('inc_header.php'); ?>
</head>
<body style="background: #f2f2f2;">

<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-4 col-12">
            <div class="card login-card p-4">
                <div class="card-body">
                    <div class="text-center">
                        <img src="images/logo.png" alt="" class="img-fluid" width="45%">
                    </div>
                    <h4 class="card-title text-center mt-5 fw-bold">LOGIN</h4>
                    <h5 class="fw-light fs-6 text-center mb-4">ระบบบริหารจัดการงานบริการสอบเทียบ</h5>
                    <form action="">
                        <input type="text" name="" class="form-or-style login-form" placeholder="Username"/>
                        <input type="password" name="" class="form-or-style login-form" placeholder="Password"/>
                        <div class="row mb-3 mt-1">
                            <div class="col-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                                    <label class="form-check-label" for="exampleCheck1">จำฉันไว้</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="" class="text-green fw-bold">ลืมรหัสผ่าน?</a>
                            </div>
                        </div>

                    </form>
                    <div class="d-grid">
                        <a class="btn-grey bg-green-00 border-green-00 text-light login-button text-center" href="customer.php">เข้าสู่ระบบ</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<?php require('inc_footer.php'); ?>
</body>
</html>
