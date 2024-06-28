
$(document).ready(function(){

  // hover but another shape
    $("#showElement").click(function(){
        $("#myElement").show(); // Hiển thị phần tử có id="myElement"
      });
      $(".absolutem ").hide();
    $(".relativem").on({
        mouseenter: function() {
            var s= ` <div class="row p-3">
            <div class="col-4">
              <p><b>Mua sắm theo loại</b></p>
              <p>Nhẫn cầu hôn</p>
              <p>Nhẫn cầu hôn</p>
              <p>Nhẫn cầu hôn</p>
              <p>Nhẫn cầu hôn</p>
            </div>
            <div class="col-4">.col-6</div>
            <div class="col-4">.col-6</div>
          </div>
          
          <select class="form-select form-select-sm" aria-label="Small select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>`;
          $(this).find("b").addClass("border-bottom border-dark")
            $(".absolutem ").hide(20);
            $(".absolutem ").show(20);
            $(".absolutem .row").html( `<div class="col-4">.col-6</div>
            <div class="col-4">`+ $(this).html()+`</div>
            <div class="col-4">`+s+`</div>`);
        },
        mouseleave: function() {
          $(this).find("b").removeClass("border-bottom border-dark")
            $(".absolutem").mouseleave(function(){
                $(this).hide(150);
               
            });                      
        }
    });
  

  // changingimg 
  var imgc;
  $(".changingimg").on({
    mouseenter: function() {
      if ($(this).data('imgchange')){
        imgc = $(this).attr('src');
        $(this).attr('src',$(this).data('imgchange'))
      }
      
    },
    mouseleave: function() {
      if ($(this).data('imgchange')){
      $(this).attr('src',imgc)        
      }       
    }
});
  // /changingimg

  

    // /titlebottom 

     // showdivchild 
     $(".divchild").hide();
     $(".showdivchild").on({
      mouseenter: function() {
          $(this).find('.divchild').show();
      },
      mouseleave: function() {
          // Sử dụng giá trị mặc định mà bạn mong muốn
          $(this).find('.divchild').hide();
      }
  }); 
    // /showdivchild 

    //hover
    var imgsrc;
    $(".changeevent").hover(function(){
      imgsrc = $(this).find('img').attr('src');
      $(this).find('img').attr('src',`https://res.cloudinary.com/mejuri-com/image/upload/f_auto,c_limit,w_1920,q_auto/q_auto/v1714053383/2024/Batch%207/Category%20tile/3.patra.png`); 
      
      $(this).find('.overlay').addClass("bg-dark text-white")
    },
    function(){   
       $(this).find('img').attr('src',imgsrc); 
       
       $(this).find('.overlay').removeClass("bg-dark text-white")
    });


    //multiple carousel
    $(".slidecontainer").append(`  
            <div style="width: 0;">
              <div class="btn-slide scroll-left-btn" style="position:absolute; bottom: 50%; left: 54px; " height="510">
                <i data-testid="icon-undefined" class="styled__I-sc-1mg62fn-0 kcEkud"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.4082 20C15.33 20 15.2525 19.9832 15.1806 19.9506C15.1087 19.918 15.0438 19.8703 14.9898 19.8105L8.2947 12.7445C8.20132 12.6466 8.1272 12.5301 8.07662 12.4018C8.02604 12.2735 8 12.1358 8 11.9968C8 11.8578 8.02604 11.7202 8.07662 11.5918C8.1272 11.4635 8.20132 11.3471 8.2947 11.2492L14.9898 4.1832C15.0447 4.12512 15.11 4.07905 15.1818 4.04761C15.2536 4.01618 15.3305 4 15.4082 4C15.4859 4 15.5629 4.01618 15.6347 4.04761C15.7065 4.07905 15.7717 4.12512 15.8267 4.1832C15.8816 4.24128 15.9252 4.31023 15.955 4.38612C15.9847 4.46201 16 4.54334 16 4.62548C16 4.70762 15.9847 4.78895 15.955 4.86484C15.9252 4.94073 15.8816 5.00968 15.8267 5.06776L9.28103 11.9968L15.8267 18.9259C15.9023 19.015 15.9524 19.1249 15.9711 19.2429C15.9899 19.3609 15.9766 19.4821 15.9328 19.5924C15.889 19.7027 15.8164 19.7976 15.7235 19.866C15.6307 19.9345 15.5213 19.9736 15.4082 19.9789V20Z" fill="currentColor"></path></svg></i>
              </div>
              <div class="btn-slide scroll-right-btn" style=" position:absolute; bottom: 50%; right: 54px;" height="510">
                  <i data-testid="icon-undefined" class="styled__I-sc-1mg62fn-0 kcEkud"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.59175 20C8.47866 19.9947 8.36933 19.9555 8.27647 19.8871C8.18361 19.8187 8.11104 19.7238 8.06721 19.6135C8.02338 19.5031 8.01008 19.3819 8.02886 19.2639C8.04765 19.146 8.09774 19.036 8.17332 18.9469L14.7188 12.0179L8.17332 5.06776C8.06235 4.95046 8 4.79137 8 4.62548C8 4.45959 8.06235 4.3005 8.17332 4.1832C8.28429 4.0659 8.43481 4 8.59175 4C8.74869 4 8.89921 4.0659 9.01018 4.1832L15.7051 11.2492C15.7985 11.3471 15.8726 11.4635 15.9231 11.5918C15.9737 11.7202 15.9998 11.8578 15.9998 11.9968C15.9998 12.1358 15.9737 12.2735 15.9231 12.4018C15.8726 12.5301 15.7985 12.6466 15.7051 12.7445L9.01018 19.8105C8.95621 19.8703 8.8913 19.918 8.81937 19.9506C8.74744 19.9832 8.67 20 8.59175 20Z" fill="currentColor"></path></svg></i>
              </div> 
            </div>   `)
    $('.scroll-left-btn').hide();
    $('.scroll-left-btn').on('click', function() {
      let $mulcon = $(this).parents('.slidecontainer');
      let $items = $mulcon.find('.product:first');
      let containerScrollLeft = $mulcon.scrollLeft();
      let nextItemWidth = $items.outerWidth(true); 
      let numberofscroll = parseInt($mulcon.width()/nextItemWidth);
      let newScrollLeft = containerScrollLeft - numberofscroll*nextItemWidth;
      $mulcon.animate({ scrollLeft: newScrollLeft }, 'slow');
      if (newScrollLeft <= 0) $(this).hide(20)
      $(this).parent().find('.scroll-right-btn').show();
    
  });
  
  $('.scroll-right-btn').on('click', function() {     
      let $mulcon = $(this).parents('.slidecontainer');
      let $items = $mulcon.find(".product").first();
      let containerScrollLeft = $mulcon.scrollLeft();
      let nextItemWidth = $items.outerWidth(true); 
      let numberofscroll = parseInt($mulcon.width()/nextItemWidth);
      let newScrollLeft = containerScrollLeft + numberofscroll*nextItemWidth;
      if (newScrollLeft + $mulcon.width()  >= $mulcon[0].scrollWidth) $(this).hide(20);
      $mulcon.animate({ scrollLeft: newScrollLeft }, 'slow');   
      $(this).parent().find('.scroll-left-btn').show();
  });
  
  
    /// getheight of id
    let topInt = $(".fixedtopint1").innerHeight()
    console.log(topInt)
    console.log("a")
    $(".fixedtopint2").css("top",topInt+1+"px")
    let offsetl = $(".needoffset").offset().left + "px";
    $(".absolutem").css("padding-left",offsetl)

    //ajax 
    $('.formDB').on('submit', function(event){
      var phpSiteBack = $(this).attr('id')+'.php';
      console.log(phpSiteBack);
      event.preventDefault(); // Ngăn chặn form submit truyền thống
      var formData = {};
      $(this).find('input').each(function(){
        var id = $(this).attr('name');
        var value = $(this).val();
        formData[id] = value;
      });
                // Duyệt qua tất cả các input trong form và thêm dữ liệu vào đối tượng
               
      $.ajax({
          url: phpSiteBack,
          type: 'POST',
          data: formData,//JSON.stringify(formData),
          success: function(response){
              $('#result').html(response);
          },
          error: function(jqXHR, textStatus, errorThrown){
              $('#result').html('<p style="color: red;">Error: ' + textStatus + ' - ' + errorThrown + '</p>');
          }
      });
  });
});


    
