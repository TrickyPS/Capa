

$.ajax({
    type: "GET",
    url: "../../Controllers/getAllCursos.php?limit=0&to=8",
    dataType: 'json',
    success: function(data){
        $("#page1").addClass("active");
        $("#part1Curso").html("");
        $("#part2Curso").html("");
        var cont = data.length;
            
            for(let i = 0; i < 4; i++){  
            
                $("#part1Curso").append(` <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="product-grid">
                  <div class="product-image">
                    <a href="#">
                      <img class="pic-1" id="${"imgCurso" + data[i].id}"   style="height:300px !important; object-fit:cover;" src="">
        
                    </a>
                    <ul class="social">
                      <li><a href="curso.php?id=${data[i].id}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                      
                      
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                  </div>
                  <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                  </ul>
                  <div class="product-content">
                    <h3 class="title"><a href="#">${data[i].nameCurso}</a></h3>
                    <div class="price pb-2">${ "$" + data[i].costo}
                      <span>$20.00</span>
                    </div>
                  </div>
                </div>
              </div>`);
              $.ajax({
                type: "POST",
                url: "../../Controllers/getCursoImage.php",
                data : {id:data[i].id},
            
                success: function(resp){
                 
                  if(data != null){
                    $('#imgCurso' + data[i].id).attr("src", resp);
                
                }
                
              
                },error:function(x,y,z){
                  alert (x,y,z);
                }
              });
            }

       
            for(let i = 4; i < cont; i++){
                $("#part2Curso").append(` <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="product-grid">
                  <div class="product-image">
                    <a href="#">
                    <img class="pic-1" id="${"imgCurso" + data[i].id}" style="height:300px !important; object-fit:cover;" src="">
        
                    </a>
                    <ul class="social">
                    <li><a href="curso.php?id=${data[i].id}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                  </div>
                  <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                  </ul>
                  <div class="product-content">
                    <h3 class="title"><a href="#">${data[i].nameCurso}</a></h3>
                    <div class="price pb-2">${ "$" + data[i].costo}
                      <span>$20.00</span>
                    </div>
                  </div>
                </div>
              </div>`);
              $.ajax({
                type: "POST",
                url: "../../Controllers/getCursoImage.php",
                data : {id:data[i].id},
            
                success: function(resp){
                 
                  if(data != null){
                    $('#imgCurso' + data[i].id).attr("src", resp);
                 
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

  function page2(){
    $.ajax({
        type: "GET",
        url: "../../Controllers/getAllCursos.php?limit=8&to=16",
        dataType: 'json',
        success: function(data){
            $("#page2").addClass("active");
            $("#page1").removeClass("active");
            $("#part1Curso").html("");
            $("#part2Curso").html("");
            var cont = data.length;
                
         
                for(let i = 0; i < 4; i++){
                    $("#part1Curso").append(` <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="product-grid">
                      <div class="product-image">
                        <a href="#">
                        <img class="pic-1" id="${"imgCurso" + data[i].id}" style="height:300px !important; object-fit:cover;" src="">
            
                        </a>
                        <ul class="social">
                        <li><a href="curso.php?id=${data[i].id}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        </ul>
                        <span class="product-new-label">Sale</span>
                        <span class="product-discount-label">20%</span>
                      </div>
                      <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                      </ul>
                      <div class="product-content">
                        <h3 class="title"><a href="#">${data[i].nameCurso}</a></h3>
                        <div class="price pb-2">${ "$" + data[i].costo}
                          <span>$20.00</span>
                        </div>
                      </div>
                    </div>
                  </div>`);
                  $.ajax({
                    type: "POST",
                    url: "../../Controllers/getCursoImage.php",
                    data : {id:data[i].id},
                
                    success: function(resp){
                     
                      if(data != null){
                        $('#imgCurso' + data[i].id).attr("src", resp);
                     
                    }
                    
                  
                    },error:function(x,y,z){
                      alert (x,y,z);
                    }
                  });
                }
    
           
                for(let i = 4; i < cont; i++){
                    $("#part2Curso").append(` <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="product-grid">
                      <div class="product-image">
                        <a href="#">
                        <img class="pic-1" id="${"imgCurso" + data[i].id}" style="height:300px !important; object-fit:cover;" src="">
            
                        </a>
                        <ul class="social">
                        <li><a href="curso.php?id=${data[i].id}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        </ul>
                        <span class="product-new-label">Sale</span>
                        <span class="product-discount-label">20%</span>
                      </div>
                      <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                      </ul>
                      <div class="product-content">
                        <h3 class="title"><a href="#">${data[i].nameCurso}</a></h3>
                        <div class="price pb-2">${ "$" + data[i].costo}
                          <span>$20.00</span>
                        </div>
                      </div>
                    </div>
                  </div>`);
                  $.ajax({
                    type: "POST",
                    url: "../../Controllers/getCursoImage.php",
                    data : {id:data[i].id},
                
                    success: function(resp){
                     
                      if(data != null){
                        $('#imgCurso' + data[i].id).attr("src", resp);
                     
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
    
    
  }

