<?php
if(isset($_POST['naame_product'])) {
    if (!empty($_FILES['image']['name'])) {
        if (!is_dir('uploads')) {
            mkdir('uploads', 0755);
        }
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "Hình ảnh đã được lưu trữ thành công.";
        } else {
            echo "Không thể lưu trữ hình ảnh.";
        }
    } else {
        echo "Vui lòng chọn hình ảnh.";
    }
} else {
    echo "Vui lòng điền tên sản phẩm.";
}
?>
