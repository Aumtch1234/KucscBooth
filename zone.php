<?php
    require_once("config.php");
    session_start();
    if(!isset($_SESSION['user_login'])){
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ !!';
        header('location: login.php');
    }   
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/booth.css">

    <style>
    /* test */
    </style>
</head>

<body>
    <div class="container">
        <!-- nav -->
        <?php include('nav.php') ?>
        <!-- nav end -->


        <div class="container">
            <h2>กรุณาเลือกโซนที่คุณต้องการได้เลย</h2>
        </div>




        <div class="album py-5 bg-body-tertiary">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <div class="col">
                        <div class="card shadow-sm">
                            <a href="z_detail.php"><img class="bd-placeholder-img card-img-top" width="100%"
                                    height="225" src="img/KUSE_Logo_2021.png" alt="" role="img">
                            </a>

                            <div class="card-body">
                                <div class="d-flex flex-column h-100">
                                    <h4>อาคาร 7</h4>
                                    <p class="card-text">มีทั้งหมด 20 บูธ
                                    </p>
                                    <div class="mt-auto">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">
                                                    <a href="z_detail.php" style="text-decoration: none;color: inherit;">
                                                        ดูรายระเอียด
                                                    </a>
                                                </button>
                                            </div>
                                            <small>เหลือว่าง: 10 บูธ</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <a href="z_detail.php"><img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    src="img/KUSE_Logo_2021.png" alt="" role="img">
                            </a>

                            <div class="card-body">
                                <div class="d-flex flex-column h-100">
                                    <h4>อาคาร 7</h4>
                                    <p class="card-text">มีทั้งหมด 20 บูธ
                                    </p>
                                    <div class="mt-auto">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                    <a href="z_detail.php" style="text-decoration: none;color: inherit;">
                                                        ดูรายระเอียด
                                                    </a>
                                                </button>
                                            </div>
                                            <small>เหลือว่าง: 10 บูธ</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <a href="z_detail.php"><img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    src="img/KUSE_Logo_2021.png" alt="" role="img">
                            </a>

                            <div class="card-body">
                                <div class="d-flex flex-column h-100">
                                    <h4>อาคาร 7</h4>
                                    <p class="card-text">มีทั้งหมด 20 บูธ
                                    </p>
                                    <div class="mt-auto">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                    <a href="z_detail.php" style="text-decoration: none;color: inherit;">
                                                        ดูรายระเอียด
                                                    </a>
                                                </button>
                                            </div>
                                            <small>เหลือว่าง: 10 บูธ</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <a href="z_detail.php"><img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    src="img/KUSE_Logo_2021.png" alt="" role="img">
                            </a>

                            <div class="card-body">
                                <div class="d-flex flex-column h-100">
                                    <h4>อาคาร 7</h4>
                                    <p class="card-text">มีทั้งหมด 20 บูธ
                                    </p>
                                    <div class="mt-auto">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                    <a href="z_detail.php" style="text-decoration: none;color: inherit;">
                                                        ดูรายระเอียด
                                                    </a>
                                                </button>
                                            </div>
                                            <small>เหลือว่าง: 10 บูธ</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                    .card-body {
                        display: flex;
                        flex-direction: column;
                        height: 100%;
                    }

                    .card-text {
                        flex: 1;
                        /* ใช้พื้นที่ที่เหลือ */
                        overflow: hidden;
                        text-overflow: ellipsis;
                        display: -webkit-box;
                        -webkit-box-orient: vertical;
                        -webkit-line-clamp: 2;
                        /* จำนวนบรรทัดที่ต้องการให้แสดง */
                    }

                    .card-img-top {
                        width: 100%;
                        height: 225px;
                        object-fit: cover;
                        transition: transform 0.3s ease;
                        /* เพิ่มการเปลี่ยนแปลง */
                    }

                    .card-img-top:hover {
                        transform: scale(1.05);
                        /* เพิ่มขนาดรูปภาพเมื่อโฮเวอร์ */
                    }
                    </style>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php include('footer.php') ?>
        <!-- footer end -->
    </div>

    <script src="bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>