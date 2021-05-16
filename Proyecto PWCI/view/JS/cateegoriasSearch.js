
    $.ajax({
        type: "POST",
        url: "../../Controllers/getCategorias.php",
        dataType: 'json',
        success: function(data){
          $("#contCat2").html("");
         data.forEach(element => {
       
           $("#contCat2").append(`<li class="nav-item active">
           <a class="nav-link titulo" href="">${element.nombre}
             <span class="sr-only">(current)</span>
           </a>
         </li>`)
         });
        },error:function(x,y,z){
          alert (x,y,z);
        }
      });



  