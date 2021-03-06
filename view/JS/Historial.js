
$(document).ready(function(){

   updateDatosPerfil()
  getAvatar()

    showCursos();



    
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

  $("#rerto3").on("submit", function (e) {
    e.preventDefault();


   
   const correo = $('#uEmail').val();
   const nombre = $("#uName").val();
   const contra = $("#uContra").val();
   // const avatar = $("#fileProfile").val();
   var usuario = jQuery.parseJSON(localStorage.getItem("user"));
        var form = $(this);
        var muestra = form.serialize();
        var formData = new FormData();
        var files = $('#avatar')[0].files[0];
        formData.append('avatar',files);
        formData.append('nombre',nombre);
        formData.append('contra',contra);
        formData.append('correo',correo);
        formData.append('id',usuario.id);
        
         $.ajax({     
           type: "POST",
           url: "../../Controllers/updateProfile.php",
           enctype: "multipart/form-data",
           data:  formData, // serializes the form's elements.
           
           processData: false,  // tell jQuery not to process the data
           contentType: false ,
           success: function(data)
           {

            var json = jQuery.parseJSON(data);
               // console.log(json[0]);
               var resp = json[0];
                var usuario = new Usuario(resp.id,resp.nombre,resp.correo,resp.contra,resp.usuario_escuela,null);
                localStorage.setItem("user", JSON.stringify(usuario));
                updateDatosPerfil()
                getAvatar()
           // $('#image').attr("src", data);
           
           },
           error : function(x,y,z){
            
           }
         });

   
   
         return false;

        
   
    
});


});

function updateDatosPerfil(){
    var usuario = jQuery.parseJSON(localStorage.getItem("user"));
    $("#uName").val(usuario.nombre);
    $("#uEmail").val(usuario.correo);
    $("#uContra").val(usuario.contra);
   
   if(usuario.estudiante == 0){
    $("#tipou").text(usuario.nombre +"(Estudiante)");
   }
   else{
    $("#tipou").text(usuario.nombre +"(Profesor)");
   }

}

        function getAvatar(){
            var usuario = jQuery.parseJSON(localStorage.getItem("user"));
        
            $.ajax({     
                type: "POST",
                url: "../../Controllers/getImageProfile.php",
                
                data: {'id': usuario.id} , // serializes the form's elements.
                
                //processData: false,  // tell jQuery not to process the data
                //contentType: false ,
                success: function(data)
                {

            
                    localStorage.setItem("avatar", data);

                    if(data != "\r\ndata:image/jpeg;base64,")
                    $('#image').attr("src", data);

                
                },
                error : function(x,y,z){
                
                }
            });

        }



function showCursos(){
     var usuario = jQuery.parseJSON(localStorage.getItem("user"));
debugger
     $.ajax({
        type: "POST",
        url: "../../Controllers/getHistorial.php",
        data : {id:usuario.id},
        dataType: 'json',
        success: function(data){
         
            if(data !=null){
                    data.forEach(element => {
                        $("#addCursos").append(`
                        <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card flex-sm-row  flex-md-row flex-md-row mb-4 box-shadow h-md-250 ">
                        <img class="shadow card-img-right flex-auto  mx-auto " alt="" style="width: 200px; height:200px; object-fit:cover;"
                            src="" data-holder-rendered="true" id="${'imgCurso' + element.id}">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">${element.categoria}</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">${element.curso}</a>
                            </h3>
                            <div class="mb-1 text-muted">${(element.create).substring(0,10)}</div>
                            <p class="card-text mb-auto">${element.descripcion}</p>
                            <a type="button" href="curso.php?id=${element.id}" class="btn btn-dark  mx-auto btn-lg mt-2" style="width:150px;color:#FFF" >Ver
                                curso</a>
                        </div>
                    </div>
                </div>
                        
                        `);

                        $.ajax({
                            type: "POST",
                            url: "../../Controllers/getCursoImage.php",
                            data : {id:element.id},
                        
                            success: function(resp){
                             
                              if(data != null){
                                $('#imgCurso' + element.id).attr("src", resp);
                             
                            }
                            
                          
                            },error:function(x,y,z){
                              alert (x,y,z);
                            }
                          });
                        
                    });
            }else{
                $("#addCursos").html("<h2> No tienes cursos agregados </h2>")
            }

         $("#addCursos").append
        },error:function(x,y,z){
          alert (x,y,z);
        }
      });
   
}