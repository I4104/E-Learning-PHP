<?php
include "../config.php";
/* Kiểm tra xem đã đăng nhập hay chưa */

if (!isset($_SESSION["username"])) {
    echo json_encode(["message" => "Vui lòng đăng nhập lại", "type" => "error"]);
    return; // dừng code tại đây
}

// Kiểm tra xem người dùng có nhập ID của danh mục cần xóa không
if (!isset($_GET["id"]) || $_GET["id"] == "") {
    // Chuyển người dùng về admin
    echo json_encode(["message" => "Danh mục không còn tồn tại", "type" => "error"]);
    return;
}

$get = $conn->query("SELECT * FROM category WHERE id = '{$_GET["id"]}'");
if ($get->num_rows > 0) {
    $id = $_GET["id"];
} else {
    echo json_encode(["message" => "Danh mục không còn tồn tại", "type" => "error"]);
}

if (isset($_POST["title"])) {
    $title = $_POST["title"];
} else {
    echo json_encode(["message" => "Vui lòng nhập tên danh mục", "type" => "error"]);
    return; // dừng code tại đây
}

if (isset($_POST["image"])) {
    $image = $_POST["image"];
} else {
    echo json_encode(["message" => "Vui lòng nhập đường dẫn ảnh cho danh mục", "type" => "error"]);
    return;
}

// Thay đổi dữ liệu trong sql
$conn->query("UPDATE category SET title = '{$title}', image = '{$image}' WHERE id = '{$_GET["id"]}'");
echo json_encode(["message" => "Đã lưu thông tin danh mục thành công", "type" => "success"]);

?>