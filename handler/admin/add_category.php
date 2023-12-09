<?php
include "../config.php";
/* Kiểm tra xem đã đăng nhập hay chưa */

if (!isset($_SESSION["username"])) {
    echo json_encode(["message" => "Vui lòng đăng nhập lại", "type" => "error"]);
    return; // dừng code tại đây
}

if (isset($_POST["title"])) {
    $title = $_POST["title"];
} else {
    echo json_encode(["message" => "Vui lòng nhập tên đăng nhập", "type" => "error"]);
    return; // dừng code tại đây
}

if (isset($_POST["image"])) {
    $image = $_POST["image"];
} else {
    echo json_encode(["message" => "Vui lòng nhập mật khẩu", "type" => "error"]);
    return;
}

// Thêm category mới vào trong sql
$conn->query("INSERT INTO category SET title = '{$title}', image = '{$image}'");
echo json_encode(["message" => "Đã thêm danh mục mới thành công", "type" => "success"]);

?>