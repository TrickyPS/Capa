
$(document).ready(function(){

    var usuario = jQuery.parseJSON(sessionStorage.getItem("user"));
    $("#uName").val(usuario.nombre);
    $("#uEmail").val(usuario.correo);
    $("#uContra").val(usuario.contra);

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
            debugger
            console.log(data);
           
            var url = window.URL || window.webkitURL;
            var binaryData = [];
            binaryData.push(data);
            var src = window.URL.createObjectURL(new Blob(binaryData, {type: "image/png"}));
            
            $('#image').attr("src", data);
           
           },
           error : function(x,y,z){
            debugger
           }
         });

   
   
         return false;

        
   
    
});


});