<?php
    require_once "config.php";
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img class="bi me-2" width="60" height="60" role="img" aria-label="Bootstrap"src="img/KUSE_Logo_2021.png"></img>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-secondary">หน้าแรก</a></li>
        <li><a href="pricing.php" class="nav-link px-2 link-dark">วิธีการจอง</a></li>
        <li><a href="zone.php" class="nav-link px-2 link-dark">การจอง</a></li>
        <li><a href="faqs.php" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="about.php" class="nav-link px-2 link-dark">About</a></li>
    </ul>

    <?php
    if (isset($_SESSION['user_login'])) {


        $user_id = $_SESSION['user_login'];
        $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);


        echo '<div class="col-md-3 text-end">
                <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    '. $row["fname"] . '
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="user.php">ข้อมูลของฉัน</a></li>
                    <li><a class="dropdown-item" href="#">การจองของฉัน</a></li>
                    <li><a class="dropdown-item" href="#">สถานะการจอง</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="logout.php" style="color: red;">ออกจากระบบ</a></li>
                </ul>
                </div>
            </div> 
            
            ';
    } else {
        echo '<div class="col-md-3 text-end">
                <a href="login.php"><button type="button" class="btn btn-outline-primary me-2">เข้าสู่ระบบ</button></a>
                <a href="register.php"><button type="button" class="btn btn-primary">สมัครสมาชิก</button></a>
            </div>';
    }
    ?>
</header>