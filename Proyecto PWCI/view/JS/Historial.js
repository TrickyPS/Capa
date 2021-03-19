
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

  
   $("#boton1").click(function () { 


    $(".division").removeClass("d-none");
    $(".division2").addClass("d-none");

    $(".primero").removeClass("d-none");
    $(".segundo").addClass("d-none");
    
   });

   $("#boton2").click(function () { 

    $(".division").addClass("d-none");
    $(".division2").removeClass("d-none");
    $(".segundo").removeClass("d-none");
    $(".primero").addClass("d-none");
  
  });

  
});