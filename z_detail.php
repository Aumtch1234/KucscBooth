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
            <h2>Zone</h2>
        </div>

        <div class="container mt-3">
            <div class="container mt-5">
                <h2 class="text-center">บูธโซนอาคาร7</h2><br>
                <div class="d-flex justify-content-center">

                    <div class="status">
                        <div class="box-container">
                            <div class="box status1"></div>
                            <div class="description">สถานะ : ยังไม่ถูกจอง</div>
                        </div>
                        <div class="box-container">
                            <div class="box status2"></div>
                            <div class="description">สถานะ : อยู่ในระหว่างรอชำระเงิน</div>
                        </div>
                        <div class="box-container">
                            <div class="box status3"></div>
                            <div class="description">สถานะ : ถูกจองแล้ว</div>
                        </div>
                    </div>
                </div><br>
                <div class="d-flex justify-content-center">
                    <div class="seat-container">
                        <div class="seat status2" data-bs-toggle="modal" data-bs-target="#booth_id">A1</div>
                        <div class="seat status1"><a href="#">A2</a></div>
                        <div class="seat status1"><a href="#">A3</a></div>
                        <div class="seat status3"><a href="#">A4</a></div>
                        <div class="seat status1"><a href="#">A5</a></div>
                        <div class="seat status1"><a href="#">B1</a></div>
                        <div class="seat status1"><a href="#">B2</a></div>
                        <div class="seat status1"><a href="#">B3</a></div>
                        <div class="seat status1"><a href="#">B4</a></div>
                        <div class="seat status1"><a href="#">B5</a></div>
                        <!-- Add more booths as needed -->
                    </div>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#booth_id">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="booth_id" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form action="" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">รายละเอียดบูธ</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row mb-3">
                                            <h4 class="text-center"><input
                                                    style="border: none; background: transparent; width: 100%;"
                                                    placeholder="ชื่อ บูธ" value="#" disabled></input></h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 d-flex justify-content-center">
                                                <img src="img/bin.png" width="200" height="200" role="img"
                                                    style="cursor: pointer;">
                                            </div>

                                            <div class="col-md-8" style="position: relative; right: -20px;">
                                                <div>
                                                    <strong>รายละเอียด:</strong>
                                                    <input style="border: none; background: transparent; width: 100%;"
                                                        placeholder="ขายขนมปังรสเด็ดมากๆ" value="#" disabled></input>
                                                </div>
                                                <div>
                                                    <strong>ขนาดบูธ:</strong>
                                                    <input style="border: none; background: transparent; width: 100%;"
                                                        placeholder="ขนาดของบูธ" value="#" disabled></input>
                                                </div>
                                                <div>
                                                    <strong>สถานะ:</strong>
                                                    <input style="border: none; background: transparent; width: 100%;"
                                                        placeholder="สถานะของบูธ" value="#" disabled></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="w-100 d-flex justify-content-between">
                                        <div>
                                            <strong>ราคา:</strong>
                                            <input style="border: none; background: transparent;"
                                                placeholder="1,000 บาท" value="#" disabled></input>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">ปิด</button>
                                            <button type="submit" class="btn btn-success"
                                                name="booking_zone">จอง</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

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