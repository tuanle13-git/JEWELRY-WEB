<html>
    <head>
        <meta charset="uft-8">
        <title>Jewelry</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="event.js"></script>
        <script src="font.css"></script>
        <style>
        </style>
    </head>
    <body>       
            Thêm loại trang sức         
            <form id="DBAdd" class="formDB">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name_catagory" required>
                <input type="submit" value="Submit">
                <h1 id="result"></h1>
            </form>
            Thêm chất liệu         
            <form id="DBAdd" class="formDB">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name_metal" required>
                <input type="text" id="name" name="describe_metal" required>
                <input type="submit" value="Submit">
                <h1 id="result"></h1>
            </form>
            Thêm loại đá         
            <form id="DBAdd" class="formDB">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name_stone" required>
                <input type="text" id="name" name="describe_stone" required>
                <input type="submit" value="Submit">
                <h1 id="result"></h1>
            </form>
            Thêm loại size         
            <form id="DBAdd" class="formDB">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name_size" required>
                <input type="submit" value="Submit">
                <h1 id="result"></h1>
            </form>


            Thêm sản phẩm
            <form id="DBAdd" class="formDB" method="post">

                <select class="select-form" name="id_catagory" required >
                    <option value="" hidden>Chọn loại trang sức</option>   
                    <?php 
                        include"Connection.PHP";
                        $c = new db();
                        $sql = "select * from catagory";
                        $result = $c->querySQL($sql);
                        while ($row = $result->fetch_row()){
                            echo"<option value='$row[0]'>$row[1]</option>";
                        }
                    ?>                   
                </select>
                <select class="select-form" name="id_stone" required >
                    <option value="" hidden>Chọn loại đá</option>   
                    <?php 
                        $sql = "select * from stone";
                        $result = $c->querySQL($sql);
                        while ($row = $result->fetch_row()){
                            echo"<option value='$row[0]'>$row[1]</option>";
                        }
                    ?>                   
                </select>

                <?php 
                        $sql = "select * from size";
                        $result = $c->querySQL($sql);
                        while ($row = $result->fetch_row()){
                            echo"<input type='checkbox' name='size_product[]' value='$row[0]'>$row[1]";
                        }
                    ?>     
                    <?php 
                        $sql = "select * from metal";
                        $result = $c->querySQL($sql);
                        while ($row = $result->fetch_row()){
                            echo"<input type='checkbox' name='metal_product[]'  value='$row[0]'>$row[1]";
                        }
                    ?> 
                <label for="name">Dành cho:</label>
                <select name="sex" id="" required>
                    <option value="">Chọn giới tính</option>
                    <option value="1">Nữ</option>
                    <option value="2">Nam</option>
                    <option value="0">unisex</option>
                </select>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name_product" required>
                <label for="name">descibe:</label>
                <input type="text" id="name" name="describe_product" required>
                <label for="name">price:</label>
                <input type="number" id="name" name="price" required>
                <input type="file" name="image">
                <input type="submit" value="Submit">
                
                <h1 id="result"></h1>

            </form>
            Thêm sản phẩm
            <form id="DBAdd" class="formDB" method="post"enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="naame_product" required>
        
                <input type="file" name="image" id="imageInput">
                <input type="submit" value="Submit">
                
                <h1 id="result"></h1>

            </form>
           
             
   

          
    </body>
</html>