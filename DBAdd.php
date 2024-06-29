
<?php
// Đọc dữ liệu JSON từ body của request


include"Connection.PHP";
$c = new db();
if (isset($_POST['name_catagory'])) {
    // Lấy dữ liệu từ form
    $type = $_POST['name_catagory'];
    $sql = "SELECT * FROM `catagory` WHERE name_catagory = '$type'";
   //$a= $c->querySQL($sql);
    // Thực hiện các xử lý khác như kiểm tra và lưu dữ liệu
    $a = $c->querySQL($sql);
    
    // Ví dụ đơn giản trả về một phản hồi
    if ($a->num_rows === 0) {
        $sql = "INSERT INTO `catagory`(`name_catagory`) VALUES ('$type')";
        $a= $c->querySQL($sql);
        
        echo "Thêm loại trang sức: '$type' thành công.";}
    else 
    {
      echo "Thêm loại trang sức: '$type' không thành công.";
        
    }
            

    
}

if (isset($_POST['name_metal'])) {
    // Lấy dữ liệu từ form
    $type = $_POST['name_metal'];
    $sql = "SELECT * FROM `metal` WHERE name_metal = '$type'";
   //$a= $c->querySQL($sql);
    // Thực hiện các xử lý khác như kiểm tra và lưu dữ liệu
    $a = $c->querySQL($sql);
    
    // Ví dụ đơn giản trả về một phản hồi
    if ($a->num_rows === 0) {
        $sql = "INSERT INTO `metal`(`name_metal`) VALUES ('$type')";
        $a= $c->querySQL($sql);
        
        echo "Thêm loại chất liệu: '$type' thành công.";}
    else 
    {
      echo "Thêm loại chất liệu: '$type' không thành công.";
        
    }
            

    
}
if (isset($_POST['name_size'])) {
    // Lấy dữ liệu từ form
    $type = $_POST['name_size'];
    $sql = "SELECT * FROM `size` WHERE name_size = '$type'";
   //$a= $c->querySQL($sql);
    // Thực hiện các xử lý khác như kiểm tra và lưu dữ liệu
    $a = $c->querySQL($sql);
    
    // Ví dụ đơn giản trả về một phản hồi
    if ($a->num_rows === 0) {
        $sql = "INSERT INTO `size`(`name_size`) VALUES ('$type')";
        $a= $c->querySQL($sql);
        
        echo "Thêm loại kích cỡ: '$type' thành công.";}
    else 
    {
      echo "Thêm loại kích cỡ: '$type' không thành công.";
        
    }
            

    
}

if (isset($_POST['name_stone'])) {
    // Lấy dữ liệu từ form
    $type = $_POST['name_stone'];
    $sql = "SELECT * FROM `stone` WHERE name_stone = '$type'";
   //$a= $c->querySQL($sql);
    // Thực hiện các xử lý khác như kiểm tra và lưu dữ liệu
    $a = $c->querySQL($sql);
    
    // Ví dụ đơn giản trả về một phản hồi
    if ($a->num_rows === 0) {
        $sql = "INSERT INTO `stone`(`name_stone`) VALUES ('$type')";
        $a= $c->querySQL($sql);
        
        echo "Thêm loại đá quý: '$type' thành công.";}
    else 
    {
      echo "Thêm loại đá quý: '$type' không thành công.";
        
    }
            

    
}

if(isset($_POST['name_product'])) {
    $name_product = $_POST['name_product'];
    $price = $_POST['price'];
    $describe_product = $_POST['describe_product'];
    $sex = $_POST['sex'];
    $id_type = $_POST['id_catagory'];
    $id_stone = $_POST['id_stone'];
    $sql = "INSERT INTO `product` (`name_product`, `description`, `sex`, `price`, `id_stone`, `id_catagory`) 
    VALUES ('$name_product', '$describe_product', '$sex', '$price', '$id_stone', '$id_catagory')";
// Thực thi câu lệnh SQL
    if ($c->querySQL($sql)) {
         echo "Sản phẩm đã được thêm vào cơ sở dữ liệu thành công.";
    } else {
        echo "Có lỗi xảy ra khi thêm sản phẩm: " ;
    }
    $id_product = $c->last_id;

    if (isset($_FILES['image']['name'])) {
    } else {
        echo "Không có tập tin được tải lên.";
    }
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



    foreach($_POST['size_product'] as $check) {
            echo $check; 
    }
    $a=$_POST["name_product"];
    echo" $a";
}





// Kiểm tra xem có file được gửi lên khôn


?>