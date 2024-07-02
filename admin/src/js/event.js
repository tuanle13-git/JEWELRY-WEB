$(document).ready(function () {
    $('.formDB').on('submit', function (event) {
        var phpSiteBack = $(this).attr('id') + '.php';
        console.log(phpSiteBack);
        event.preventDefault(); // Ngăn chặn form submit truyền thống
        var formData = new FormData($(this)[0]);
        var thisp = $(this);

        var formData = new FormData($(this)[0]); // Lấy dữ liệu form
        $.ajax({
            url: phpSiteBack, // Đường dẫn tới file xử lý PHP
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
               
                $(".addsubproduct").removeClass('d-none');
                $(".addsubproduct").data('idproduct',response);
                console.log("adddata"+response);
                console.log($(".addsubproduct").data("idproduct"));
            }
        });
        return false;

    });

    $(".addsubproduct").on("click",function(){
        $(this).after($(".sanphamcon:first").html() )
        console.log($(this).data("idproduct"));
        $(".id_product").val($(this).data("idproduct"))
    })
    //ajax listsubstyle
    $(".listtype").on("change", function () {
        var liststyle = $(this).siblings(".liststyle");
        if (liststyle.length > 0) {
            var id_type = $(this).val();
            $.ajax({
                url: 'DBAdd.php',
                type: 'POST',
                data: { liststyle: id_type }, //JSON.stringify(formData),
                success: function (response) {
                    liststyle.html(response);
                    console.log('aâ' + id_type + response + $("#listload").val());
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    liststyle.html('<p style="color: red;">Error: ' + textStatus + ' - ' + errorThrown + '</p>');
                }
            });
        }

    });

    $(".liststyle").on("change", function () {
        var listsubstyle = $(this).siblings(".listsubstyle");
        if (listsubstyle.length > 0) {
            var id_style = $(this).val();
            $.ajax({
                url: 'DBAdd.php',
                type: 'POST',
                data: { listsubstyle: id_style }, //JSON.stringify(formData),
                success: function (response) {
                    listsubstyle.html(response);
                    console.log('aâ' + id_type + response + $("#listload").val());
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    listsubstyle.html('<p style="color: red;">Error: ' + textStatus + ' - ' + errorThrown + '</p>');
                }
            });
        }

    });
 // Gán sự kiện click cho phần tử document, xử lý cho các phần tử .my-element
 $(document).on("change", ".imgInp", function() {
    readURL(this);
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $(input).next('.blah').attr('src', e.target.result); // Sử dụng $(input).next('.blah') để thay đổi src của img kế tiếp
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}


});
