
<?php
// Đọc dữ liệu JSON từ body của request


include"model/Connection.PHP";
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
    $sex = $_POST['sex'];
    $id_catagory = $_POST['id_catagory'];
    $sql = "INSERT INTO `product` (`name_product`, `sex`, `id_catagory`) 
    VALUES ('$name_product', '$sex', '$id_catagory')";
// Thực thi câu lệnh SQL
    if ($c->querySQL($sql)) {
         
    } else {
       
    }
    $id_product = $c->last_id;

    echo $id_product;
}





// Kiểm tra xem có file được gửi lên khôn


?>