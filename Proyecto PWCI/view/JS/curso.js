var vars = {};
var progrss = null;
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,
  function (m, key, value) {
    vars[key] = value;
  });



  var usuario = jQuery.parseJSON(localStorage.getItem("user"));

if(!vars.activate){
  $.ajax({
    type: "POST",
    url: "../../Controllers/validateCurso.php",
    data: {curso:vars.id,user: usuario.id},
  
    success: function(data){
       var count = JSON.parse(data);

       if(count.length > 0){
          location.href= `curso.php?id=${vars.id}&activate=true`;
       }



    },error:function(x,y,z){

      location.href = "IndexNuevo.php";
      
    }
  });
}


if(vars.activate){
  $.ajax({
    type: "POST",
    url: "../../Controllers/getProgress.php",
    data: {curso:vars.id,usuario: usuario.id},
  
    success: function(data){
       var count = JSON.parse(data);

      

       if(count >= 1){
         $("#calificar").append(` <button class="ml-2 btn btn-main btn-md my-0 p waves-effect waves-light"
         type="submit" data-toggle="modal" data-target="#calificate">Calificar
         
     </button>
     <a class="ml-2 btn btn-main  btn-md my-0 p waves-effect waves-light" target="blank"
         href="certificado.php?curso=${vars.id}&user=${usuario.id}"  >Generar Certificado
         
     </a>`);
         $("#comentar").append(`    <div action="" class="col-lg-12 col-md-8 col-sm-12">
         <div class="comentarios">
                    <div class="form-group">
        <label for="comment">Comentario:</label>
        <textarea class="form-control" rows="2" id="comment"></textarea>
             </div>
                         </div>
                <div class=" botonsub justify-content-between">
              <button type="button" class="btn btn-dark" id="comentarChat" >Comentar</button>
                  <button type="button" class="btn btn-dark" onclick="javascript:$('#comment').val('');">Cancelar</button>
            </div>

     </div>`);
       }

       var redonde = (count * 100).toFixed(0);
       $("#progress").append(`<div class="progress-bar" role="progressbar" style="width: ${redonde}%;" aria-valuenow="${redonde}" aria-valuemin="0" aria-valuemax="100">${redonde}%</div>`);
  



    },error:function(x,y,z){

     debugger
      
    }
  });
}


  $.ajax({
    type: "POST",
    url: "../../Controllers/getCurso.php",
    data: {id:vars.id},
    dataType: 'json',
    success: function(data){
       
$("#nameCurso").html(data.nameCurso);
$("#descripcion").html(data.descripcion);
$("#costo").html("$ " + data.costo);
$("#del").html("$ " +(parseInt(data.costo) * 1.20).toFixed(2));


    },error:function(x,y,z){

      location.href = "IndexNuevo.php";
      
    }
  });


  $.ajax({
    type: "POST",
    url: "../../Controllers/getCursoImage.php",
    data : {id:vars.id},

    success: function(data){
     
      if(data != null){
        $('#imgCurso').attr("src", data);
     
    }
    
  
    },error:function(x,y,z){
      alert (x,y,z);
    }
  });


  

  $.ajax({
    type: "POST",
    url: "../../Controllers/getPuntuacion.php",
    data: {curso:vars.id},
    success: function(data){
       var resp = JSON.parse(data);
      if(resp){
        var pts = parseFloat(resp).toFixed(2);
        $("#pts").append(`<input data-role="rating" data-value="${pts}" data-static="true" data-message="(${pts})"></input>`);
      }else{
        $("#pts").append(`<input data-role="rating" data-value="0" data-static="true" data-message="(0)"></input>`);
      }

    },error:function(x,y,z){

       
    }
  });

  $("#btnCal").click(function(){
    $.ajax({
      type: "POST",
      url: "../../Controllers/addPuntuacion.php",
      data: {curso:vars.id,usuario:usuario.id,pts:$("#cPuntos").val()},
      success: function(data){
         var resp = JSON.parse(data);
         $("#pts").html("");
         $("#calificate").modal("hide");
         $("#cPuntos").val("");
        if(resp){
          var pts = parseFloat(resp).toFixed(2);
          $("#pts").append(`<input data-role="rating" data-value="${(pts)}" data-static="true" data-message="(${pts})"></input>`);
        }else{
          $("#pts").append(`<input data-role="rating" data-value="0" data-static="true" data-message="(0)"></input>`);
        }
  
      },error:function(x,y,z){
  
         
      }
    });
  });


    $.ajax({
      type: "POST",
      url: "../../Controllers/getNivel.php",
      data: {id:vars.id},
      dataType: 'json',
      success:function(data){
      
      if (data != null){
        $("#niveles").html("");
         data.forEach(element => {
           $("#niveles").append(` <div class="list-group mb-2">
           <button class="list-group-item list-group-item-action bg-dark text-light" id="hide_nivel">
             ${element.nombre}
           </button>
           <div id="${"vid"+element.id}">
  
           </div>
       </div>`);
       $.ajax({
        type: "POST",
        url: "../../Controllers/getVideos.php",
        data: {nivel:element.id},
        dataType: 'json',
        success:function(resp){
          
        if(resp != null){
          resp.forEach(item => {
            $("#vid" + element.id ).append(` <a  class="list-group-item list-group-item-action" id="${'ver' + item.id}">${item.titulo}<i class="fas fa-play-circle float-right"></i></a>
            `);
            if(vars.activate){
              $('#ver' + item.id ).append(`<a href="video.php?watch=${item.id}" class="btn btn-dark float-right mr-3" style="margin-top: -8px;"  >VER</a>`);
            }
          });
        }else{
          $("#vid" + element.id ).parent().hide();
        }
        }
        ,error:function(x,y,z){
            
        }});
         });
        
      }
        
      },error: function(x,y,z){
        alert('error');
      }
    });
  

   function  addHistorial(user){
       
    $.ajax({
        type: "POST",
        url: "../../Controllers/addHistorial.php",
        data: {id:vars.id,user},
        dataType: 'json',
        success: function(data){
           
            location.href = "Historial.php";
    
    
        },error:function(x,y,z){
    
            location.href = "Historial.php";
        }
      });
    }



    $(document).ready(function(){

    $(".title").click(function(){
     $("#chatToggle").toggleClass("chatFloat2")
        
    });

  });




  $(document).ready(function(){

$(this).on("click","#comentarChat",function(){

  $.ajax({
    type: "POST",
    url: "../../Controllers/comentar.php",
    data: {curso:vars.id,mensaje:$("#comment").val(),usuario:usuario.id},
    dataType:'json',
    success: function(data){
       var cont = 0;
      $("#contComent").html("");

     data.forEach(element => {
       cont++;
       $("#contComent").append(`<div class="card p-3 mt-2">
       <div class="d-flex justify-content-between align-items-center">
           <div class="user d-flex flex-row align-items-center"> <img
                   src="../IMG/user.png" id="imgChat${cont}" width="30"
                   class="user-img rounded-circle mr-2"> <span><small
                       class="font-weight-bold text-primary">${element.nombre}:</small> <small
                       class="font-weight-bold">${element.mensaje}</small></span>
           </div>
           <small>${element.create}</small>
       </div>
   </div>`);
   $.ajax({     
    type: "POST",
    url: "../../Controllers/getImageProfile.php",
    
    data: {'id': element.usuario} , 
    success: function(resp)
    {


        if(resp != "\r\ndata:image/jpeg;base64,")
        $('#imgChat' + cont).attr("src", resp);

    
    },
    error : function(x,y,z){
    
    }
});


     });
     $("#comment").val("");
    },error:function(x,y,z){

     alert(x);
      
    }
  });

});

  });


  $.ajax({
    type: "POST",
    url: "../../Controllers/getComentarios.php",
    data: {curso:vars.id},
    dataType:'json',
    success: function(data){
       
   
if(data){
  var cont = 0;
  data.forEach(element => {
    cont++;
    $("#contComent").append(`<div class="card p-3 mt-2">
    <div class="d-flex justify-content-between align-items-center">
        <div class="user d-flex flex-row align-items-center"> <img
                src="../IMG/user.png" id="imgChat${cont}" width="30" height="30" style="object-fit:cover;"
                class="user-img rounded-circle mr-2"> <span><small
                    class="font-weight-bold text-primary">${element.nombre}:</small> <small
                    class="font-weight-bold">${element.mensaje}</small></span>
        </div>
        <small>${(element.create).substr(0,10)}</small>
    </div>
</div>`);
$.ajax({     
 type: "POST",
 url: "../../Controllers/getImageProfile.php",
 
 data: {'id': element.usuario} , 
 success: function(resp)
 {


     if(resp != "\r\ndata:image/jpeg;base64,")
     $('#imgChat' + cont).attr("src", resp);

 
 },
 error : function(x,y,z){
 
 }
});
  });
}
    },error:function(x,y,z){

     alert(x);
      
    }
  });