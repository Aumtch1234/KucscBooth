<?php
    require_once("../config.php");
    session_start();
    if(!isset($_SESSION['admin_login'])){
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ !!';
        header('location: ../login.php');
    }   

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.dataTables.min.css">
    
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="container mt-5">
        <h1>จัดการโซน &nbsp &nbsp &nbsp<button class="btn btn-warning"><a href="" style="text-decoration: none; color: inherit;">เพิ่มโซน</a></button></h1>
        
    </div>
    <br>
    <!-- <style>
        .table td, .table th {
            text-align: center;
            vertical-align: middle;
        }
    </style> -->
    
    <table class="table table-striped" style="width:100%" id="zone">
            <thead class="table-primary">
                <tr>
                    <th >#</th>
                    <th >ชื่อโซน</th>
                    <th >ชื่องานที่จัดขึ้น</th>
                    <th >จำนวนบูธ</th>
                    <th >แก้ไขข้อมูล</th>
                    <th >ลบโซน</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th >1</th>
                    <td>ถนนด้านอาคาร 9 </td>
                    <td>งานเกษตรแฟร์ ปี 2567</td>
                    <td>10</td>
                    <td>
                        <a href="#"><img src="../img/edit.png" width="50px" height="50px" role="img"></a>
                    </td>
                    <td>
                        <a href="#"><img src="../img/bin.png" width="50px" height="50px" role="img"></a>
                    </td>
                </tr>
                <tr>
                    <th >2</th>
                    <td>ถนนด้าน อาคาร 2</td>
                    <td>งานเกษตรแฟร์ ปี 2567</td>
                    <td>20</td>
                    <td>
                        <a href="#"><img src="../img/edit.png" width="50px" height="50px" role="img"></a>
                    </td>
                    <td>
                        <a href="#"><img src="../img/bin.png" width="50px" height="50px" role="img"></a>
                    </td>
                </tr>
                
            </tbody>
        </table>

        <script defer src="../js/jquery-3.7.1.min.js"></script>
        <script defer src="js/dataTables.min.js"></script>
        <script defer src="js/table.js"></script>
</body>

</html>