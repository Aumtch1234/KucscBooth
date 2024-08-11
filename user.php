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
</head>
<body>
    <div class="container">
         <!-- nav -->
         <?php include('nav.php') ?>
        <!-- nav end -->
        <div class="my-4">
            <?php

            if(isset($_SESSION['user_login'])){
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }

            ?>
            <h3>wellcome user <?php ?></h3>
            <h4>Hello: <?php echo $row['fname']. $row['phone']?></h4>
        </div>
        <!-- footer -->
        <?php include('footer.php') ?>
        <!-- footer end -->
    </div>

    <script src="bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>