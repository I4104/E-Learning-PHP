<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    session_start();

    $conn = new mysqli("localhost", "root", "", "e-learning");
    $conn->set_charset("utf8");

    // Kiểm tra xem người dùng có đăng nhập hay chưa
    if (isset($_SESSION["username"])) {
        /* Nếu người dùng đã đăng nhập
           Khởi tạo biến users để lưu trữ thông tin của người dùng được lấy từ mysql */
        $users = $conn->query("SELECT * FROM users WHERE username = '{$_SESSION["username"]}'");
        if ($users->num_rows > 0) {
            $users = $users->fetch_array();
        } else {
            // Nếu thông tin người dùng không tồn tại hoặc đã bị xóa, thực hiện logout tài khoản
            unset($_SESSION["username"]);
            session_unset();
            session_destroy();
        }
    }
?>