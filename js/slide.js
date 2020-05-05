$(document).ready(function(){
          
          var imgItems = $('.slider li').length; 
          var imgPos = 1;
          
          for(i = 1; i <= imgItems; i++){
                   
                    $('.pagination').append('<li><span class="icon-circle"></span></li>');
                    
          }
          
          
          
          
          $('.slider li').hide();
          $('.slider li:first').show();
          $('.pagination li').css({'color':'#ffffff'});
          $('.pagination li:first').css({'color':'#cd6e2e'});
          
          

          
          
          $('.pagination li').click(pagination);
          $('.right span').click(nextSlider);
          $('.left span').click(prevSlider);
          
          setInterval(function(){
                   nextSlider(); 
          }, 5000);          
          
          
          function pagination(){
                    
                    var paginationPos = $(this).index() + 1;
                    console.log(paginationPos);
                    
                    $('.slider li').hide();
                    $('.slider li:nth-child('+ paginationPos +')').fadeIn();
                    $('.pagination li').css({'color':'#ffffff'});
                    $(this).css({'color':'#cd6e2e'});
                    
          imgPos = paginationPos;          
          }
          function nextSlider(){
                    
                    if(imgPos >= imgItems){
                              imgPos = 1;
                    }else{
                              imgPos++;
                    }
                    
                    $('.pagination li').css({'color':'#ffffff'});
                    $('.pagination li:nth-child('+ imgPos +')').css({'color':'#cd6e2e'});
                    
                              
                    $('.slider li').hide();
                    $('.slider li:nth-child('+ imgPos +')').fadeIn();
                    
                    
                    
                    
          }
          function prevSlider(){
                    
                    if(imgPos <=1){imgPos = imgItems;}
                    else{imgPos--;}
                    
                    $('.pagination li').css({'color':'#858585'});
                    $('.pagination li:nth-child('+ imgPos +')').css({'color':'#cd6e2e'});
                    
                              
                    $('.slider li').hide();
                    $('.slider li:nth-child('+ imgPos +')').fadeIn();
                    
                    
                    
                    
          }
          
});


             //Slide de PO

$(document).ready(function(){
          
          var imgItem = $('.slider_po li').length; 
          var imgPo = 1;
          
          for(e = 1; e <= imgItem; e++){
                   
                    $('.pagina').append('<li><span class="icon-circle"></span></li>');
                    
          }
          
          //comportamiento al inicio (load) de la animacion

          $('.slider_po li').hide();
          $('.slider_po li:first').show();
          $('.pagina li').css({'color':'rgba(0,0,0,0.7)'});
          $('.pagina li:first').css({'color':'rgba(0,0,0,0.9)'});
          
          $('.pagina li').click(pagina);
          $('.right_po span').click(nextSlide);
          $('.left_po span').click(prevSlide);
          
          //Intervalos o transciones

          setInterval(function(){
                   nextSlide(); 
          }, 8000);

          //comportamiento, al momento del "click" o de estado quieto     

          function pagina(){
                    
                    var paginaPos = $(this).index() + 1;
                    console.log(paginaPos);
                    
                    $('.slider_po li').hide();
                    $('.slider_po li:nth-child('+ paginaPos +')').fadeIn();
                    $('.pagina li').css({'color':'rgba(0,0,0,0.7)'});
                    $(this).css({'color':'rgba(0,0,0,0.9)'});
                    
          imgPo = paginaPos;          
          }


          //comportamiento "siguiente"

          function nextSlide(){
                    
                    if(imgPo >= imgItem){
                              imgPo = 1;
                    }else{
                              imgPo++;
                    }
                    
                    $('.pagina li').css({'color':'rgba(0,0,0,0.7)'});
                    $('.pagina li:nth-child('+ imgPo +')').css({'color':'rgba(0,0,0,0.9)'});
                    
                              
                    $('.slider_po li').hide();
                    $('.slider_po li:nth-child('+ imgPo +')').fadeIn();
                    
                    
                    
                    
          }

          //comportamiento anterior     

          function prevSlide(){
                    
                    if(imgPo <=1){imgPo = imgItem;}
                    else{imgPo--;}
                    
                    $('.pagina li').css({'color':'rgba(0,0,0,0.7'});
                    $('.pagina li:nth-child('+ imgPo +')').css({'color':'rgba(0,0,0,0.9)'});
                    
                              
                    $('.slider_po li').hide();
                    $('.slider_po li:nth-child('+ imgPo +')').fadeIn();
                    
                    
                    
                    
          }
          
});