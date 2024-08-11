<?php

session_start();
require_once("../config.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$phone = $_POST['phone'];
$role = 'user';

if (empty($fname)) {
    echo json_encode(array("status" => "error", "msg" => "กรุณากรอกชื่อของคุณ"));
} else if (empty($lname)) {
    echo json_encode(array("status" => "error", "msg" => "กรุณากรอกนามสกุลของคุณ"));
} else if (empty($email)) {
    echo json_encode(array("status" => "error", "msg" => "กรุณากรอกอีเมลของคุณ"));
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(array("status" => "error", "msg" => "รูปแบบ อีเมลของคุณ ไม่ถูกต้อง"));
} else if (empty($password)) {
    echo json_encode(array("status" => "error", "msg" => "กรุณากรอกรหัสผ่านของคุณ"));
} else if (strlen($password) < 6) {
    echo json_encode(array("status" => "error", "msg" => "รหัสผ่านต้องอย่างน้อย 6 ตัวอักษรขึ้นไป"));
} else if (empty($c_password)) {
    echo json_encode(array("status" => "error", "msg" => "กรุณากรอกรหัสผ่านของคุณให้ตรงกัน"));
} else if ($password != $c_password) {
    echo json_encode(array("status" => "error", "msg" => "รหัสผ่านของคุณไม่ตรงกัน"));
} else if (empty($phone)) {
    echo json_encode(array("status" => "error", "msg" => "กรุณากรอกเบอร์โทรศัพท์ของคุณ"));
} else {
    try {
        $check_email = $conn->prepare("SELECT email FROM users WHERE email = :email");
        $check_email->bindParam(":email", $email);
        $check_email->execute();
        $row = $check_email->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            echo json_encode(array("status" => "warning", "msg" => "มีอีเมลนี้อยู่ในระบบแล้ว"));
        } else {
            $passHash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users(fname, lname, email, password, phone, role) VALUES(:fname, :lname, :email, :password, :phone, :role)");
            $stmt->bindParam(":fname", $fname);
            $stmt->bindParam(":lname", $lname);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $passHash);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":role", $role);
            $stmt->execute();
            
            echo json_encode(array("status" => "success", "msg" => "สมัครสมาชิกเรียบร้อยแล้ว"));
        }
    } catch (PDOException $e) {
        echo json_encode(array("status" => "error", "msg" => "มีบางอย่างผิดพลาด: " . $e->getMessage()));
    }
}
?>
