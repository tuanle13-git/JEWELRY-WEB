<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Upload Image via AJAX</title>
<script>
function uploadImage() {
    var fileInput = document.getElementById('imageInput');
    var file = fileInput.files[0];
    var formData = new FormData();
    formData.append('image', file);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'upload.php', true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log('Upload successful');
                console.log(xhr.responseText); // Response from PHP script
            } else {
                console.error('Upload failed: ' + xhr.status);
            }
        }
    };

    xhr.send(formData);
}

document.addEventListener('DOMContentLoaded', function() {
    var fileInput = document.getElementById('imageInput');
    fileInput.addEventListener('change', uploadImage);
});
</script>
</head>
<body>
    <h2>Upload Image via AJAX</h2>
    <input type="file" id="imageInput">
</body>
</html>
