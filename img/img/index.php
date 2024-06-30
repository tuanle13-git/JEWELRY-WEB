<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Upload Form</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#DBAdd').submit(function(event) {
       
    });
});
</script>
</head>
<body>
<form id="DBAdd" class="formDB" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="naame_product" required>
    <input type="file" name="image">
    <input type="submit" value="Submit">
</form>
<h1 id="result"></h1>
</body>
</html>
