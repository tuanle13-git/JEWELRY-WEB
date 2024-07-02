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


  <div class="container-sm position-relative ">
    <div style="z-index: 1;" class="d-flex justify-content-between pb-3 pt-3 bg-white sticky-top fixedtopint2">
      <p class=""><b>SẢN PHẨM MỚI NHẤT</b></p>
      <div>
        <div class="d-inline-block">SẮP XẾP THEO: </div>
        <div class="d-inline-block">
          <select class="form-select " aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>

      </div>

    </div>

    <div class="row">
      <?php
      include_once "Connection.php";
      $c = new db();
      $sql = "select * from product";
      $result = $c->querySQL($sql);
      $lastid = $c->last_id;
      while ($row = $result->fetch_assoc()) {
          echo '<div class=" col-4 col-sm-3 col-md-3 col-lg-3 ">
                <div class= "product">
                             <a href="a.php/' . $row["id_product"] . '" class="text-decoration-none text-dark">
                             <div class="responsive-square titlebottom div_imgproduct" >
                                <img  style="object-fit:cover;" class="changingimg h-100 w-100" data-imgchange="" alt="...">      
                             </div>
                             ';
          echo '
                             <div class="titleimgbaaotstom bg-white">
                               <h6>' . $row["name_product"] . '</h6>';

        $sql = "SELECT `link`, `sublink`, `name_metal`, `name_stone` FROM img,stone,metal WHERE
                               stone.id_stone = img.id_stone and img.id_metal = metal.id_metal and id_product='" . $row['id_product'] . "'";
        $list =  $c->querySQL($sql);
        while ($rows = $list->fetch_assoc()) {
          echo '<input type="radio" class="product_checkboxz" name ="id' . $row["id_product"] . '" data-imgchange="' . $rows['sublink']
            . '" data-src="' . $rows["link"] . '" data-name="' . $rows["name_metal"] . ", " . $rows['name_stone'] . '">';
        }

        echo '                                
                                  <p class="m-0 metal_stone_name" style="font-size: 14px;">?</p>
                                   <p style="font-size: 14px;">' . $row["price"] . ' VNĐ</p>
                                  
                                 </div>
                               
                             </a>
                            </div>
                           </div>';
      }




      ?>


    </div>
  </div>
  <a href class="p-3 text-dark d-flex justify-content-end font-trirong"><b>XEM THÊM</b></a>
  </div>

  <form id="DBAdd" class="formDB">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <input type="submit" value="Submit">
  </form>
  <h1 id="result"></h1>
</body>

</html>