var vars = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,
  function (m, key, value) {
    vars[key] = value;
  });

  var usuario = jQuery.parseJSON(localStorage.getItem("user"));
  

  $.ajax({
    type: "GET",
    url: `../../Controllers/getInfoVideo.php?id=${vars.watch}`,
    success: function(data){
       
       var encode = JSON.parse(data);
        
        $("#titulo").html(encode[0].titulo);
        $("#date").html((encode[0].create).substring(0,10));


    },error:function(x,y,z){
            debugger
            console.log(x);
    }
});


  $.ajax({
    type: "GET",
    url: `../../Controllers/getVideo.php?id=${vars.watch}`,

    success: function(data){
     

$("#vid").attr('src',data);


    },error:function(x,y,z){
            debugger
            console.log(x);
    }
});


var vid = document.getElementById("vid");
vid.onended = function() {
  $.ajax({
    type: "POST",
    url: "../../Controllers/addProgress.php",
    data: {video:vars.watch,usuario:usuario.id},
    success: function(data){
     
   
    },error:function(x,y,z){
      alert (x,y,z);
    }
  });
};
    