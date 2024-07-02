<html>

<head>
    <meta charset="uft-8">
    <title>Jewelry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="src/js/event.js"></script>

    <style>
    </style>
</head>

<body>
    Thêm sản phẩm
    <form id="DBAdd" class="formDB" method="post">
   
        <select class="select-form" name="id_catagory" required>
            <option value="" hidden>Chọn loại trang sức</option>
            <?php
            include "model/Connection.PHP";
            $c = new db();
            $sql = "select * from catagory";
            $result = $c->querySQL($sql);
            while ($row = $result->fetch_row()) {
                echo "<option value='$row[0]'>$row[1]</option>";
            }
            ?>
        </select>
        <label for="name">Dành cho:</label>
        <select name="sex" id="" required>
            <option value="">Chọn giới tính</option>
            <option value="1">Nữ</option>
            <option value="2">Nam</option>
            <option value="0">unisex</option>
        </select>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name_product" required>
        <input type="submit">
    </form>
    
    <input type="button" class="addsubproduct d-none" value="thêm sản phẩm con">
    <div class="sanphamcon d-none">
        Sản phẩm con
        <input type='file' class="imgInp" >
    <img class="blah" src="#" alt="your image" >
        <form action="DBAdd" class="formDB" method="post">
            <div class="form-check form-check-inline">

                <?php
                $sql = "select * from stone";
                $result = $c->querySQL($sql);
                while ($row = $result->fetch_row()) {
                    echo "<input type='checkbox' name='size_product[]' value='$row[0]'>$row[1]";
                }
                ?>
            </div>
            <input type="text" hidden class="id_product" name="id_product">
            <label for="size_product" class="form-label">Kích cỡ</label>
            <div class="form-check form-check-inline">
                <?php
                $sql = "select * from size";
                $result = $c->querySQL($sql);
                while ($row = $result->fetch_row()) {
                    echo "<input type='checkbox' name='size_product[]' value='$row[0]'>$row[1]";
                }
                ?>
            </div>
            <label for="size_product" class="form-label">chất liệu</label>
            <div class="form-check form-check-inline">
                <?php
                $sql = "select * from metal";
                $result = $c->querySQL($sql);
                while ($row = $result->fetch_row()) {
                    echo "<input type='checkbox' name='metal_product[]'  value='$row[0]'>$row[1]";
                }
                ?>
           
        
            <input type="submit">
        </form>
        
    
    </div>
   
 



    <h1 id="result"></h1>


</body>

</html>