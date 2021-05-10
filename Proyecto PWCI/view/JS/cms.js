var usuario = jQuery.parseJSON(sessionStorage.getItem("user"));
getCategorias("categoriaE");
var idCursoSelect = null;
var idNivelSelect = null;
$("#toggleCurso").hide();
//obtener todos los cursos al cargar la pagina
$(document).ready(function(){
$(this).on("click","#editCurso",function(){
  idCursoSelect = $(this).attr('name');
  $("#toggleCurso").show();
  getNivel();
  $.ajax({
    type: "POST",
    url: "../../Controllers/getCurso.php",
    data : {id:idCursoSelect},
    dataType: 'json',
    success: function(data){
     
      if(data != null){
        $("#nombreE").val(data.nameCurso);
        $("#costoE").val(data.costo);
        $("#descripcionE").val(data.descripcion);
        document.getElementById("categoriaE").selectedIndex = data.categoria;
     
    }
    
  
    },error:function(x,y,z){
      alert (x,y,z);
    }
  });

  $.ajax({
    type: "POST",
    url: "../../Controllers/getCursoImage.php",
    data : {id:idCursoSelect},

    success: function(data){
     
      if(data != null){
        $('#imagenE').attr("src", data);
     
    }
    
  
    },error:function(x,y,z){
      alert (x,y,z);
    }
  });



});


$(this).on("click","#deleteNivel",function(){
  var id = $(this).attr('name');
  
  
  $.ajax({
    type: "POST",
    url: "../../Controllers/deleteNivel.php",
    data : {id:id},
    success: function(data){
     location.reload();
    },error:function(x,y,z){
      alert (x,y,z);
    }
  });
});

});

$.ajax({
  type: "POST",
  url: "../../Controllers/getCursos.php",
  data : {id:usuario.id},
  dataType: 'json',
  success: function(data){
   
    if(data != null){
   data.forEach(element => {
     $("#addCursos").append(`<li class="list-group-item h5" > ${element.nameCurso}
     <button class="btn btn-second float-right" id="editCurso" name="${element.id}"  >
         <i class="fas fa-pen"></i>
     </button>
 </li>`);
    
   });
   
  }
  else{
    $("#addCursos").append(`<li class="list-group-item h5"> No tienes cursos agregados.
    
</li>`);
  }

  },error:function(x,y,z){
    alert (x,y,z);
  }
});










$("#formVideo").on("submit", function (e) {
  e.preventDefault();

  const titulo = $("#vTitle").val();
  
  

  var formData = new FormData();
        var files = $('#vVideo')[0].files[0];
        formData.append('video',files);
        formData.append('nivel',idNivelSelect);
        formData.append('titulo',titulo);
        
        debugger
  $.ajax({
    type: "POST",
    url: "../../Controllers/addVideo.php",
    enctype: "multipart/form-data",
    data: formData,

    processData: false,
    contentType: false,
    success:function(data){
      debugger
      location.reload();
      
    },error: function(x,y,z){
      alert('error');
    }
  });
  return false;
});



$("#formCategoria").on("submit", function (e) {
  e.preventDefault();

 
  const formData = {nCategoria:$("#nCategoria").val()};

 document.getElementById("formCategoria").reset();

  $.ajax({
    type: "POST",
    url: "../../Controllers/addCategoria.php",
    data: formData,
    success: function(data){
      console.log(data);
 
    },error:function(x,y,z){
      alert (x,y,z);
    }
  });
  
});


function getCategorias(object){
  $.ajax({
    type: "POST",
    url: "../../Controllers/getCategorias.php",
    dataType: 'json',
    success: function(data){
      $("#" + object).html("").append(` <option selected disabled>Eligir categoria...</option>`);
     data.forEach(element => {
       $("#" + object).append(`<option value="${element.id}"> ${element.nombre} </option>`);
     });
    },error:function(x,y,z){
      alert (x,y,z);
    }
  });
}


$("#btnUpdateCurso").click(function(e){


  const nameCurso = $("#nombreE").val();
  const costo = $("#costoE").val();
  const descripcion = $("#descripcionE").val();
  const categoria = $("#categoriaE").val();
  
const datos = {
  id: idCursoSelect,
  nameCurso: nameCurso,
  costo: costo,
  descripcion: descripcion,
  categoria: categoria
};
  
       
        
  $.ajax({
    type: "POST",
    url: "../../Controllers/updateCurso.php",
    data: datos,
    success:function(data){
     
      
    },error: function(x,y,z){
      alert('error');
    }
  });
  
});


$("#btnDeleteCurso").click(function(e){   
        
  $.ajax({
    type: "POST",
    url: "../../Controllers/deleteCurso.php",
    data: {id: idCursoSelect},
    success:function(data){
     
    location.reload();
    },error: function(x,y,z){
      alert('error');
    }
  });
  
});



function addNivel(){
  $.ajax({
    type: "POST",
    url: "../../Controllers/addNivel.php",
    data: {nombre: $("#nombreN").val(),
          id: idCursoSelect },
    success:function(data){
      $("#nombreN").val("");
      getNivel();
      
    },error: function(x,y,z){
      alert('error');
    }
  });
}

function getNivel(){
  $.ajax({
    type: "POST",
    url: "../../Controllers/getNivel.php",
    data: {id:idCursoSelect},
    dataType: 'json',
    success:function(data){
    
    if (data != null){
      $("#niveles").html("");
       data.forEach(element => {
         $("#niveles").append(`<div class="form-row mt-2 mb-2">
         <div class="col-6">
             <div class="list-group-item ">
                 <h5 class="d-inline-block">${element.nombre}</h5>
                 <button type="button"
                     class="btn bg-transparent dropdown-toggle dropdown-toggle-split float-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 </button>
                 <div class="dropdown-menu dropN" id="${'niv' + element.id}">
    
    
  </div>
             </div>
         </div>
         <div class="col-3 ">
             <button class="btn btn-main  w-100 h-100" data-toggle="modal" onclick="updateNivelSelected(${element.id});"   data-target="#ModalAddVideo"> <i class="fas fa-plus mr-2"></i>Agregar video</button>
         </div>
         
         <div class="col-3 ">
             <button class="btn btn-main w-100 h-100" id="deleteNivel" name="${element.id}"><i class="fas fa-trash mr-2"></i>Eliminar</button>
         </div>
     </div>`);
     $.ajax({
      type: "POST",
      url: "../../Controllers/getVideos.php",
      data: {nivel:element.id},
      dataType: 'json',
      success:function(resp){
        debugger
      if(resp != null){
        resp.forEach(item => {
          $("#niv" + element.id ).append(`<a class="dropdown-item" href="#">${item.titulo}</a>`);
        });
      }
      }
      ,error:function(x,y,z){
          debugger
      }});
       });
      
    }
      
    },error: function(x,y,z){
      alert('error');
    }
  });
}


function updateNivelSelected(id){
  idNivelSelect = id;
}