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

        <div class="px-4 py-5 my-2 text-center">
            <h1 class="display-5 fw-bold">KU CSC</h1>
            <div class="col-lg-8 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                    world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive
                    grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            </div>
        </div>
        <div class="container">
            <h2>Zone</h2>
        </div>
        
        <div class="container mt-3">
            <div class="text-center">
                
                <select id="zoneSelect" class="form-select">
                    <option value="">กรุณาเลือกโซน</option>
                    <option value="id1">อาคาร7</option>
                    <option value="id2">อาคาร12</option>
                </select>
            </div>

            <div class="container mt-5">
                <div id="id1" class="zone-content" style="display: none;">
                    
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
                            <div class="seat status2"><a href="#">A1</a></div>
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
                </div>

                <div id="id2" class="zone-content" style="display: none;">
                    <h2 class="text-center">บูธโซนอาคาร12</h2><br>
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
                            <div class="seat status3"><a href="#">C1</a></div>
                            <div class="seat status3"><a href="#">C2</a></div>
                            <div class="seat status3"><a href="#">C3</a></div>
                            <div class="seat status3"><a href="#">C4</a></div>
                            <div class="seat status3"><a href="#">C5</a></div>
                            <div class="seat status3"><a href="#">C6</a></div>
                            <!-- Add more booths as needed -->
                        </div>
                    </div>
                </div>
            </div>

            <script>
            document.getElementById('zoneSelect').addEventListener('change', function() {
                var selectedZone = this.value;
                var zones = document.querySelectorAll('.zone-content');

                zones.forEach(zone => {
                    zone.style.display = (zone.id === selectedZone) ? 'block' : 'none';
                });
            });
            </script>

            <!-- footer -->
            <?php include('footer.php') ?>
            <!-- footer end -->
        </div>

        <script src="bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>