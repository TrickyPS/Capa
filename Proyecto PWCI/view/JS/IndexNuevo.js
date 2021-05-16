
$(document).ready(function(){

    //VARIABLES GLOBALES 
    var funciono = true;
    
    function validar_clave(contrasenna)
    {
        if(contrasenna.length >= 8)
        {	
          
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
           // $(".navbar-nav").removeClass("ml-auto");
           
        }
        else{
            $(".navbar").removeClass("transicion");
          
          //  $(".navbar-nav").addClass("ml-auto");
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
             
        
            e.preventDefault(); // avoid to execute the actual submit of the form.
        
            var form = $(this);
            var muestra = form.serialize();
            var url = form.attr('action');

        
          
             $.ajax({
               type: "POST",
               url: "../../Controllers/iniciasesion.php",
               data: form.serialize(), // serializes the form's elements.
              
               success: function(data)
               {
               
                   
                var json = jQuery.parseJSON(data);

                if(isJson(json)){
                    toastr.error('Error', 'El usuario o la clave son incorrectos.');
                }
                //  console.log(json[0]);
                var resp = json[0];
                var usuario = new Usuario(resp.id,resp.nombre,resp.correo,resp.contra,resp.usuario_escuela,null);
                localStorage.setItem("user", JSON.stringify(usuario));


                $.ajax({
                    type: "POST",
                    url: "sesion.php",
                    data: usuario,
                    success: function(r)
                    {
                        
                       location.reload();
                     
                    }
                    
                  });
              
                 
                
               }
            
               
             });
   
           
    });
     
    var usuario = jQuery.parseJSON(localStorage.getItem("user"));
    if(usuario != null){
        
      $("#sesionperfil").text(usuario.nombre); 
      $("#infocuenta").removeClass("d-none");
      $("#sesionregistrate").hide(); 
      $("#sesioninicia").hide(); 
    }






    //REGISTRARSE
    
    $("#rerto").on("submit", function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        const variable = $('#passwordr').val();
        
        funciono = validar_clave(variable);
debugger

        if(funciono == true){
            
            
        
            var form = $(this);
            var muestra = form.serialize();
            var url = form.attr('action');

        
             
             $.ajax({     
               type: "POST",
               url: "../../Controllers/registrate.php",
               data: form.serialize(), // serializes the form's elements.
               success: function(data)
               {
                
               $("#exampleModal2").modal("hide");
                toastr.success('Excelente', 'Registro Exitoso');
               }
             });
    
       
        }else{

            toastr.error('Error', 'Ingresa bien los datos');

        }
    

            
       
        
    });
    
   


    $.ajax({
        type: "GET",
        url: "../../Controllers/getAllCursos.php?limit=0&to=4",
        dataType: 'json',
        success: function(data){
           
            var cont = data.length;
                
         
               
           
                for(let i = 0; i < cont; i++){
                    $("#addCursos").append(`
                    <div class="col-lg-2 col-md-4 col-sm-8 m-2">
                      <img src="" alt="..." width="100%" height="200px" style="object-fit:cover;" id="${'img' + data[i].id}">
                      <div class="card-body">
                        <h5 class="card-title">${data[i].nameCurso}</h5>
                        <div class="botones text-center mt-3">
                          <a href="curso.php?id=${data[i].id}" class="btn">View videos</a>
                        </div>
                      </div>
                    `);
                  $.ajax({
                    type: "POST",
                    url: "../../Controllers/getCursoImage.php",
                    data : {id:data[i].id},
                
                    success: function(resp){
                     
                      if(data != null){
                        $('#img' + data[i].id).attr("src", resp);
                     
                    }
                    
                  
                    },error:function(x,y,z){
                      alert (x,y,z);
                    }
                  });
                }
            
    
    
        },error:function(x,y,z){
          alert (x,y,z);
        }
      });
    

















   
 
  
});


function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}