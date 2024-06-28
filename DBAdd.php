
<?php
// Đọc dữ liệu JSON từ body của request


 include"Connection.PHP";
if (isset($_POST['name'])) {
    // Lấy dữ liệu từ form
    $type = $_POST['name'];
    $sql = "SELECT * FROM `type` WHERE name_type = '$type'";
    $c = new db();
   //$a= $c->querySQL($sql);
    // Thực hiện các xử lý khác như kiểm tra và lưu dữ liệu
    $a = $c->querySQL($sql);
    
    // Ví dụ đơn giản trả về một phản hồi
    if ($a->num_rows === 0) {
        $sql = "INSERT INTO `type`(`name_type`) VALUES ('$type')";
        $a= $c->querySQL($sql);
        
        echo "Thêm loại trang sức: '$type' thành công.";}
    else 
    {
      echo "Thêm loại trang sức: '$type' không thành công.";
        
    }
            
   
    
}
?>