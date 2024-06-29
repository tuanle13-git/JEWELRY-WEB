<form  method="post" enctype="multipart/form-data" name="imglink">
    <input type="file" name="image">
    <input type="submit" name="submit" value="Upload">
</form>
<?php
if (isset($_POST["submit"])) {
    // Kiểm tra xem có file được gửi lên không
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['image'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        // Hiển thị thông tin của file
        echo "Thông tin của file đã tải lên:<br>";
        echo "Tên file: " . $fileName . "<br>";
        echo "Đường dẫn tạm thời: " . $fileTmpName . "<br>";
        echo "Kích thước file: " . $fileSize . " bytes<br>";
        echo "Loại file: " . $fileType . "<br>";
        echo "Mã lỗi: " . $fileError . "<br>";

        if (!is_dir('uploads')) {
            mkdir('uploads', 0755);
        }
        $uploadDir = 'uploads/'; // Thư mục lưu trữ hình ảnh
        $uploadFile = $uploadDir . basename($fileName);

        // Di chuyển file từ thư mục tạm sang thư mục lưu trữ
        if (move_uploaded_file($fileTmpName, $uploadFile)) {
            echo "Hình ảnh đã được lưu trữ thành công.";
        } else {
            echo "Không thể lưu trữ hình ảnh.";
        }
    } else {
        echo "Có lỗi xảy ra khi tải lên hình ảnh.";
    }
}
?>
