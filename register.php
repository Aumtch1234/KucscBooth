<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link href="css/sign-in.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- nav -->
        <?php include('nav.php') ?>
        <!-- nav end -->
        <main class="form-signin w-100 m-auto">
            <form action="action/register_db.php" method="POST" id="registerForm">
                <h1 class="h3 mb-3 fw-normal">สมัครสมาชิก</h1>

                <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                </div>
                <?php } ?>

                <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                </div>
                <?php } ?>

                <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php
                            echo $_SESSION['warning'];
                            unset($_SESSION['warning']);
                        ?>
                </div>
                <?php } ?>
                <div class="form-floating">
                    <input type="text" class="form-control my-2" placeholder="Enter your first name" name="fname">
                    <label for="floatingInput">ชื่อ</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control my-2" placeholder="Enter your last name" name="lname">
                    <label for="floatingInput">นามสกุล</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control my-2" id="floatingInput" placeholder="name@example.com"
                        name="email">
                    <label for="floatingInput">อีเมลของคุณ</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control my-2 form-control my-2 password-input" placeholder="Password" name="password">
                    <label for="floatingInput">รหัสผ่านของคุณ</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control my-2 form-control my-2 password-input" placeholder="Confirm Password"
                        name="c_password">
                    <label for="floatingInput">รหัสผ่านของคุณ (ยืนยัน)</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control my-2" placeholder="Enter your first name" name="phone">
                    <label for="floatingInput">เบอร์โทรศัพท์</label>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" style="cursor: pointer;" onclick="showPass()"> แสดงรหัสผ่าน
                    </label>
                </div>


                <button class="w-100 btn btn-lg btn-primary" type="submit" name="register">เข้าสู่ระบบ</button><br><br>
                <p>ถ้าคุณเป็นสมัครสมาชิกแล้ว <a href="login.php">เข้าสู่ระบบ</a></p>
            </form>
        </main>
        <!-- footer -->
        <?php include('footer.php') ?>
        <!-- footer end -->
    </div>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/sweetalert.all.min.js"></script>
    <script src="bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function showPass() {
        let passInputs = document.querySelectorAll('.password-input');
        passInputs.forEach(input => {
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        });
    }
    $(document).ready(function() {
        $("#registerForm").submit(function(e) {
            e.preventDefault();

            let formUrl = $(this).attr("action");
            let reqMethod = $(this).attr("method");
            let Formdata = $(this).serialize();

            $.ajax({
                url: formUrl,
                type: reqMethod,
                data: Formdata,
                success: function(data) {
                    let resultData = JSON.parse(data);
                    if (resultData.status == "success") {
                        console.log("Success", resultData)
                        Swal.fire("สำเร็จ!", resultData.msg, resultData.status).then(function(){
                            window.location.href = "login.php";
                        })
                    }else  if (resultData.status == "warning") {
                        console.log("Warning", resultData)
                        Swal.fire("เเจ้งเตือน!", resultData.msg, resultData.status).then(function(){
                            window.location.reload();
                        })
                    } else {
                        console.log("Error", resultData)
                        Swal.fire("ล้มเหลว!", resultData.msg, resultData.status).then(function(){
                            window.location.reload();
                        })
                    }
                }
            })
        })
    })
    </script>
</body>

</html>