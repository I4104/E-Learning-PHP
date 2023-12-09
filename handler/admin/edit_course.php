<?php
include "../config.php";
/* Kiểm tra xem đã đăng nhập hay chưa */

if (!isset($_SESSION["username"])) {
    echo json_encode(["message" => "Vui lòng đăng nhập lại", "type" => "error"]);
    return; // dừng code tại đây
}

// Kiểm tra xem người dùng có nhập ID của Bài viết cần xóa không
if (!isset($_GET["id"]) || $_GET["id"] == "") {
    // Chuyển người dùng về admin
    echo json_encode(["message" => "Bài viết không còn tồn tại", "type" => "error"]);
    return;
}

$get = $conn->query("SELECT * FROM course WHERE id = '{$_GET["id"]}'");
if ($get->num_rows > 0) {
    $id = $_GET["id"];
} else {
    echo json_encode(["message" => "Bài viết không còn tồn tại", "type" => "error"]);
}

if (isset($_POST["name"])) {
    $name = $_POST["name"];
} else {
    echo json_encode(["message" => "Vui lòng nhập tên Bài viết", "type" => "error"]);
    return; // dừng code tại đây
}

if (isset($_POST["image"])) {
    $image = $_POST["image"];
} else {
    echo json_encode(["message" => "Vui lòng nhập đường dẫn ảnh cho Bài viết", "type" => "error"]);
    return;
}

if (isset($_POST["description"])) {
    $description = $_POST["description"];
} else {
    echo json_encode(["message" => "Vui lòng nhập mô tả", "type" => "error"]);
    return;
}

if (isset($_POST["link"])) {
    $link = $_POST["link"];
} else {
    echo json_encode(["message" => "Vui lòng Youtube ID", "type" => "error"]);
    return;
}

// Thay đổi dữ liệu trong sql
$conn->query("UPDATE course SET name = '{$name}', image = '{$image}', description = '{$description}', link = '{$link}' WHERE id = '{$_GET["id"]}'");
echo json_encode(["message" => "Đã lưu thông tin bài viết thành công", "type" => "success"]);

?>