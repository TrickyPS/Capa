

  var cursoC = null;
  var usuarioC = null;
var usuario = jQuery.parseJSON(localStorage.getItem("user"));

$.ajax({
    type: "POST",
    url: "../../Controllers/getCursos.php",
    data : {id:usuario.id},
    dataType: 'json',
    success: function(data){

        if(data == null){
            $("#contCursos").append(`No hay cursos creados`);
        }
     
      if(data != null){
     data.forEach(element => {
       $("#contCursos").append(`
       <h2>${element.nameCurso}</h2>
       <table class="table table-striped">
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Alumno</th>
           <th scope="col">Costo</th>
           <th scope="col">Progreso</th>
         </tr>
       </thead>
       <tbody id="${'cur' + element.id}">
         
      
       </tbody>
     </table>`);

     $.ajax({
        type: "POST",
        url: "../../Controllers/getPN.php",
        data : {curso:element.id},
        dataType: 'json',
        success: function(resp){
           if(resp != null){
            var countj = 0;
            resp.forEach(item => {
                countj++;
             $('#cur' + element.id).append(`
             <tr>
             <th scope="row">${countj}</th>
             <td>${item.nombre}</td>
             <td>${item.precio}</td>
             <td id="${'p' + countj + element.id}"></td>
           </tr>`);
           
           $.ajax({
             type: "POST",
             url: "../../Controllers/getProgress.php",
             data: {curso:element.id,usuario: usuario.id},
           
             success: function(data){
               if(data != null){
                 var count = JSON.parse(data);
                 var redonde = (count * 100).toFixed(0);
                  $('#p' + countj + element.id).html(`${redonde + '%'}`);
                  
               }
             }
 
            });
            
         }); 
           }
        },error:function(x,y,z){
                debugger
        }
     });



     });
     
    }

    
  
    },error:function(x,y,z){
      alert (x,y,z);
    }
});


  










  $("#toggleTable").click(function(){
        $("#contCursos").toggle();
  });

  $(document).ready(function(){

    $(".title").click(function(){
     $("#chatToggle").toggleClass("chatFloat2")
        
    });

  });


  $(document).ready(function(){
   
    
    $.ajax({
      type: "POST",
      url: "../../Controllers/getChatMaestro.php",
      data: {usuario:usuario.id},
      dataType:"json",
      success: function(data){
        
       
        data.forEach(element => {
          $("#showUsersChat").append(`<div class="card p-3 mt-2" id="showChat" curso="${element.cursoC}" usuario="${element.usuarioC}">
        <div class="d-flex justify-content-between align-items-center"  >
            <div class="user d-flex flex-row align-items-center"> <img
                    src="../IMG/user.png" id="imgChat${element.usuarioC}" width="30" height="30" style="object-fit:cover;"
                    class="user-img rounded-circle mr-2"> <span><small
                        class="font-weight-bold text-primary">${element.nombre}:</small> <small
                        class="font-weight-bold">${element.cursoName}</small></span>
            </div>
           
        </div>
    </div>`);
    debugger
    $.ajax({     
      type: "POST",
      url: "../../Controllers/getImageProfile.php",
      
      data: {'id': element.usuarioC} , 
      success: function(resp)
      {
  
  debugger
          if(resp == "\r\ndata:image/jpeg;base64,"){
            resp = "../IMG/user.png"
          }

          $("#imgChat" + element.usuarioC).attr("src",resp);
          
  
      
      },
      error : function(x,y,z){
      
      }
  });
  
        });
      
      }
      ,error: function(x,y,z){
      
      }
      });
  
    
    
  
  
    });


    $(document).ready(function(){
    
      var player = Metro.getPlugin("#chatToggle",'chat');
      $(this).on("click","#showChat",function(){
         cursoC =  $(this).attr("curso");
         usuarioC =  $(this).attr("usuario");

player.clear()

         $.ajax({
          type: "POST",
          url: "../../Controllers/getChatEstudiante.php",
          data: {curso:cursoC,usuario:usuario.id,to:usuarioC},
          dataType:"json",
          async:false,
          success: function(data){
            
            
            for(let element of data){
              $.ajax({     
                type: "POST",
                url: "../../Controllers/getImageProfile.php",
                
                data: {'id': element.usuarioC} , 
                success: function(resp)
                {
            
            
                    if(resp == "\r\ndata:image/jpeg;base64,"){
                      resp = "../IMG/user.png"
                    }
                    
               
                    var pos = "left"
                    if(element.usuarioC == usuario.id)
                    pos="right"
                    debugger
                    player.add( {
                      id:element.identificadorC,
                      name:usuario.nombre,
                      time: element.tiempo,
                      avatar:resp,
                      position:pos,
                      text: element.comentarioC
                  });
            
                
                },
                error : function(x,y,z){
                
                }
            });
             
            }
          }
          ,error: function(x,y,z){
            debugger
          }
          });
      

      });


     

    });


    function onSend(msg){
      var player = Metro.getPlugin("#chatToggle",'chat');
      var message = new Message(msg.id,msg.name,msg.time,msg.avatar,msg.position,msg.text);
    console.log(message);
      $.ajax({
        type: "POST",
        url: "../../Controllers/addChat.php",
        data: {curso:cursoC,usuario:usuario.id,mensaje:message.text,to:usuarioC},
        success: function(data){
          player.clear()

         $.ajax({
          type: "POST",
          url: "../../Controllers/getChatEstudiante.php",
          data: {curso:cursoC,usuario:usuario.id,to:usuarioC},
          dataType:"json",
          async:false,
          success: function(data){
            debugger
            
            data.forEach(element => {
              $.ajax({     
                type: "POST",
                url: "../../Controllers/getImageProfile.php",
                
                data: {'id': element.usuarioC} , 
                success: function(resp)
                {
            
            
                    if(resp == "\r\ndata:image/jpeg;base64,"){
                      resp = "../IMG/user.png"
                    }
                    
      
                    var pos = "left"
                    if(element.usuarioC == usuario.id)
                    pos="right"

                    player.add( {
                      id:element.identificadorC,
                      name:usuario.nombre,
                      time: element.tiempo,
                      avatar:resp,
                      position:pos,
                      text: element.comentarioC
                  });
            
                
                },
                error : function(x,y,z){
                
                }
            });
             
            });
          }
          ,error: function(x,y,z){
            debugger
          }
          });
        }
        ,error: function(x,y,z){
          debugger
        }
        });
    
    }