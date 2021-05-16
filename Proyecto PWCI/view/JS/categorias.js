
    $.ajax({
      type: "POST",
      url: "../../Controllers/getCategorias.php",
      dataType: 'json',
      success: function(data){
        $("#contCat").html("");
       data.forEach(element => {
         $("#contCat").append(`<a class="navbar-brand p-0 mt-3 mr-3 ml-3" href="Categorias.php">${element.nombre}</a>`);

       });
      },error:function(x,y,z){
        alert (x,y,z);
      }
    });
