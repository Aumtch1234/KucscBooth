<?php

session_start();
require_once("../config.php");

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email)) {
    echo json_encode(array("status" => "error", "msg" => "กรุณากรอกอีเมลของคุณ"));
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(array("status" => "error", "msg" => "รูปแบบ อีเมลของคุณ ไม่ถูกต้อง"));
} else if (empty($password)) {
    echo json_encode(array("status" => "error", "msg" => "กรุณากรอกรหัสผ่านของคุณ"));
} else {
    try {
        $check_data = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $check_data->bindParam(":email", $email);
        $check_data->execute();
        $row = $check_data->fetch(PDO::FETCH_ASSOC);

        if ($check_data->rowCount() > 0) {
            if (password_verify($password, $row['password'])) {
                if ($row['role'] == 'admin') {
                    $_SESSION['admin_login'] = $row['id'];
                    echo json_encode(array("status" => "success", "msg" => "เข้าสู่ระบบสำเร็จ", "redirect" => "admin/index.php"));
                } else {
                    $_SESSION['user_login'] = $row['id'];
                    echo json_encode(array("status" => "success", "msg" => "เข้าสู่ระบบสำเร็จ", "redirect" => "user.php"));
                }
            } else {
                echo json_encode(array("status" => "error", "msg" => "รหัสผ่านของคุณไม่ถูกต้อง"));
            }
        } else {
            echo json_encode(array("status" => "error", "msg" => "ไม่มีข้อมูลในระบบ"));
        }
    } catch (PDOException $e) {
        echo json_encode(array("status" => "error", "msg" => "มีบางอย่างผิดพลาด: " . $e->getMessage()));
    }
}
?>
