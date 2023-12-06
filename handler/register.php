<?php
include "config.php";
/* Kiểm tra xem tài khoản và mật khẩu đã được nhập hay chưa */

if (isset($_POST["username"])) {
    $username = $_POST["username"];
} else {
    echo json_encode(["message" => "Vui lòng nhập tên đăng nhập", "type" => "error"]);
    return; // dừng code tại đây
}

if (isset($_POST["password"])) {
    $password = $_POST["password"];
} else {
    echo json_encode(["message" => "Vui lòng nhập mật khẩu", "type" => "error"]);
    return;
}

if (isset($_POST["repassword"])) {
    $repassword = $_POST["repassword"];
} else {
    echo json_encode(["message" => "Vui lòng nhập mật khẩu", "type" => "error"]);
    return;
}

/* Kiểm tra mật khẩu đã đạt điều kiện hay chưa */
if (strlen($password) < 8) {
    echo json_encode(["message" => "Mật khẩu phải dài tối thiểu 8 ký tự", "type" => "error"]);
    return;
}

if ($password != $repassword) {
    echo json_encode(["message" => "Nhập lại mật khẩu không chính xác", "type" => "error"]);
    return;
}

/* Kiểm tra tài khoản đã tồn tại hay chưa */
$get = $conn->query("SELECT * FROM users WHERE username = '{$username}'");
if ($get->num_rows > 0) {
    // Tài khoản đã tồn tại trong cơ sở dữ liệu
    echo json_encode(["message" => "Tài khoản đã được sử dụng", "type" => "error"]);
} else {
    // Mã hoá mật khẩu
    $password = md5($password);
    // Thêm tài khoản vào mysql
    $conn->query("INSERT INTO users SET username = '{$username}', password = '{$password}'");
    // Lưu tên đăng nhập vào session để sử dụng trên toàn bộ website
    $_SESSION["username"] = $username;
    // Thông báo đăng nhập thành công
    echo json_encode(["message" => "Đăng nhập thành công!", "type" => "success"]);
}

?>