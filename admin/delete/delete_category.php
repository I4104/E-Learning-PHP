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

$get = $conn->query("SELECT * FROM category WHERE id = '{$_GET["id"]}'");
if ($get->num_rows > 0) {
    $category = $get->fetch_array();

    // Xóa dữ liệu từ các bảng liên quan
    $conn->query("DELETE FROM course WHERE category_id = '{$_GET["id"]}'"); // Xóa dữ liệu trong bảng course
    $conn->query("DELETE FROM category WHERE id = '{$_GET["id"]}'"); // Xóa dữ liệu trong bảng category
}

// Chuyển về trang admin sau khi đã xóa
header("location: index.php");
?>