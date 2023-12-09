<?php
include "../../handler/config.php";

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION["username"])) {
    // Chuyển về trang chủ do chưa đăng nhập
    header("location: ../");
}

// Kiểm tra xem người dùng có phải admin không
// Biến $users được định nghĩa ở config.php
if ($users["user_type"] != "admin") {
    header("location: ../");
}

// Kiểm tra xem người dùng có nhập ID của danh mục cần xóa không
if (!isset($_GET["id"]) || $_GET["id"] == "") {
    // Chuyển người dùng về admin
    header("location: index.php");
    return;
}

$get = $conn->query("SELECT * FROM course WHERE id = '{$_GET["id"]}'");
if ($get->num_rows > 0) {
    // Xóa dữ liệu từ các bảng liên quan
    $conn->query("DELETE FROM course WHERE id = '{$_GET["id"]}'"); // Xóa dữ liệu trong bảng course
}

// Chuyển về trang course để tiếp tục chỉnh sửa
// $_SERVER['HTTP_REFERER'] là đường dẫn trang trước đó
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>