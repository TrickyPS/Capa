
$(document).ready(function(){

    //VARIABLES GLOBALES 
    var funciono = true;
    
    function validar_clave(contrasenna)
    {
        if(contrasenna.length >= 8)
        {	
            debugger	
            var mayuscula = false;
            var minuscula = false;
            var numero = false;
            var caracter_raro = false;
            
            for(var i = 0;i<contrasenna.length;i++)
            {
                if(contrasenna.charCodeAt(i) >= 65 && contrasenna.charCodeAt(i) <= 90)
                {
                    mayuscula = true;
                }
                else if(contrasenna.charCodeAt(i) >= 97 && contrasenna.charCodeAt(i) <= 122)
                {
                    minuscula = true;
                }
                else if(contrasenna.charCodeAt(i) >= 48 && contrasenna.charCodeAt(i) <= 57)
                {
                    numero = true;
                }
                else
                {
                    caracter_raro = true;
                }
            }
            if(mayuscula == true && minuscula == true && caracter_raro == true && numero == true)
            {
                return true;
            }
        }
        return false;
    }












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

        if($(this).scrollTop()>300){
           $(".navbar2").show();
            $(".navbar2").addClass("deslizar");
           
        }
        else{
           $(".navbar2").hide()
           $(".navbar2").removeClass("deslizar");
        }





        if($(this).scrollTop()>300){
            $(".form1").show();
          
        }
        else{
            $(".form1").hide();
           
        }
    });


    $("#rertol").on("submit", function (e) {
             
        debugger
            e.preventDefault(); // avoid to execute the actual submit of the form.
        
            var form = $(this);
            var muestra = form.serialize();
            var url = form.attr('action');

        
             debugger
             $.ajax({
               type: "POST",
               url: "../../Controllers/iniciasesion.php",
               data: form.serialize(), // serializes the form's elements.
              
               success: function(data)
               {
                var json = jQuery.parseJSON(data);
               // console.log(json[0]);
               
                $("#sesionperfil").append(json[0].nombre); 
                $("#sesionregistrate").hide(); 
                $("#sesioninicia").hide(); 
                $('#exampleModal').modal('hide');
                $("#infocuenta").removeClass("d-none");
                   alert('Iniciaste correctamente'); // show response from the php script.
               }
               
             });
   
            
       
        
    });






    //REGISTRARSE
    
    $("#rerto").on("submit", function (e) {

        const variable = $('#passwordr').val();
        debugger
        funciono = validar_clave(variable);


        if(funciono == true){
            
            e.preventDefault(); // avoid to execute the actual submit of the form.
        
            var form = $(this);
            var muestra = form.serialize();
            var url = form.attr('action');

        
             debugger
             $.ajax({     
               type: "POST",
               url: "../../Controllers/registrate.php",
               data: form.serialize(), // serializes the form's elements.
               success: function(data)
               {
             
               
                alert('Te registraste correctamente') // show response from the php script.
               }
             });
    
       
        }else{

alert('Ingresa los datos correctamente');

        }
    

            
       
        
    });
    
   









    //INICIA SESION










   
 
  
});