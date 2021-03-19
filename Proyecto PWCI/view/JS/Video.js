
$(document).ready(function(){



    $('#loginModal').modal('show');
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    
    $(".form1").hide();
    $(".navbar2").hide()

    $("body").on("click",".navbar-toggler",function(){
        $(".navbar").addClass("abierto");
        if($(".navbar-collapse").hasClass("show")){
            $(".navbar").removeClass("abierto");
        }
    });

    $(window).on("scroll", function () {
        if($(this).scrollTop()>20){
            $(".navbar").addClass("transicion");
            $(".navbar-nav").removeClass("ml-auto");
           
        }
        else{
            $(".navbar").removeClass("transicion");
          
            $(".navbar-nav").addClass("ml-auto");
        }

        if($(this).scrollTop()>20){
           $(".navbar2").show();
            $(".navbar2").addClass("deslizar");
           
        }
        else{
           $(".navbar2").hide()
           $(".navbar2").removeClass("deslizar");
        }





        if($(this).scrollTop()>20){
            $(".form1").show();
          
        }
        else{
            $(".form1").hide();
           
        }
    });

  

  
});