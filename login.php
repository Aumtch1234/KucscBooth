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
            <form action="action/login_db.php" id="loginForm" method="POST">
                <h1 class="h3 mb-3 fw-normal">เข้าสู่ระบบ</h1>

                <?php if (isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </div>
                <?php } ?>
                
                <?php if (isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </div>
                <?php } ?>
                
                <div class="form-floating">
                    <input type="email" class="form-control my-2" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">อีเมลของคุณ</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control my-2" id="myPass" placeholder="Password" name="password">
                    <label for="floatingPassword">รหัสผ่านของคุณ</label>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" style="cursor: pointer;" onclick="showPass()"> แสดงรหัสผ่าน
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">เข้าสู่ระบบ</button><br><br>
                <p>คุณต้องการสมัครสมาชิก ? <a href="register.php">กดที่นี่</a> ได้เลย</p>
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
            let myPass = document.getElementById('myPass');
            if (myPass.type === "password") {
                myPass.type = "text";
            } else {
                myPass.type = "password";
            }
        }

        $(document).ready(function() {
            $("#loginForm").submit(function(e) {
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
                            console.log("Success", resultData);
                            Swal.fire("สำเร็จ!", resultData.msg, resultData.status).then(function() {
                                window.location.href = resultData.redirect;
                            });
                        } else {
                            console.log("Error", resultData);
                            Swal.fire("ล้มเหลว!", resultData.msg, resultData.status);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
