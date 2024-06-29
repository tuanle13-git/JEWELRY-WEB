<?php
 echo $_POST['image'];
// Kiểm tra xem có file được gửi lên không
if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
   
    if (! is_dir('uploads') ) mkdir ( 'uploads' , 0755);
    $uploadDir = 'uploads/'; // Thư mục lưu trữ hình ảnh
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);

    // Di chuyển file từ thư mục tạm sang thư mục lưu trữ
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        echo "Hình ảnh đã được lưu trữ thành công.";
    } else {
        echo "Không thể lưu trữ hình ảnh.";
    }
} else {
    echo "Có lỗi xảy ra khi tải lên hình ảnh.";
}
?>