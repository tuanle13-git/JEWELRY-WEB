<html>
    <head>
    </head>
    <body>
        <form action="" method="POST">
            <label for="Newtype">Nhập tên kiểu</label>
            <input type="text" name="newtype">
            <button type="submit" name="submit">Thêm</button>
        </form>
   

<H3>
<?php
 include"Connection.PHP";
if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ form
    $type = $_POST['newtype'];
   
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
</H3>

<html>
    <head>
    </head>
    <body>
        <select name="" id="">
            <?php 
            $sql = "select * from type";
            $result = $c->querySQL($sql);
            while ($row = $result->fetch_row()){
                echo"<option value='$row[0]'>$row[1]</option>";
            }
            ?>
            
        </select>
    </body>
</html>
