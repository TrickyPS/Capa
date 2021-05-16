var vars = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,
  function (m, key, value) {
    vars[key] = value;
  });


  var usuario = jQuery.parseJSON(localStorage.getItem("user"));

if(!vars.activate){
  $.ajax({
    type: "POST",
    url: "../../Controllers/validateCurso.php?",
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