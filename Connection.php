<?php
    function selectE ($sql){
        $servername = "localhost";  // Tên máy chủ MySQL (thường là localhost nếu chạy local)
        $username = "root"; // Tên người dùng MySQL
        $password = ""; // Mật khẩu MySQL
        $database = "jewelryweb"; 
        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
        }
        
        $result = $conn -> query($sql);
        $conn->close();
        return $result;
    }
?>
