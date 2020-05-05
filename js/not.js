$(document).ready(function(){
          
          var notItems = $('.not li').length; 
          var notPos = 1;
          
          for(i = 1; i <= imgItems; i++){
                   
                    $('.paginanot').append('<li><span class="icon-circle"></span></li>');
                    
          }
          
          
          
          
          $('.slidernot li').hide();
          $('.slidernot li:first').show();
          $('.paginanot li:first').css({'color':'#cd6e2e'});
          
          
          $('.paginanot li').click(paginanot);
          $('.rightnot span').click(nextSlidernot);
          $('.leftnot span').click(prevSlidernot);
          
          setInterval(function(){
                   nextSlider(); 
          }, 8000);          
          
          
          function paginanot(){
                    
                    var paginanotPos = $(this).index() + 1;
                    console.log(paginanotPos);
                    
                    $('.slider li').hide();
                    $('.slider li:nth-child('+ paginanotPos +')').fadeIn();
                    $('.pagination li').css({'color':'#ffffff'});
                    $(this).css({'color':'#cd6e2e'});
                    
          notPos = paginanotPos;          
          }
          function nextSlidernot(){
                    
                    if(imgPos >= imgItems){
                              imgPos = 1;
                    }else{
                              imgPos++;
                    }
                    
                    $('.pagination li').css({'color':'ffffff'});
                    $('.pagination li:nth-child('+ imgPos +')').css({'color':'#cd6e2e'});
                    
                              
                    $('.slider li').hide();
                    $('.slider li:nth-child('+ imgPos +')').fadeIn();
                    
                    
                    
                    
          }
          function prevSlidernot(){
                    
                    if(imgPos <=1){imgPos = imgItems;}
                    else{imgPos--;}
                    
                    $('.pagination li').css({'color':'#858585'});
                    $('.pagination li:nth-child('+ imgPos +')').css({'color':'#cd6e2e'});
                    
                              
                    $('.slider li').hide();
                    $('.slider li:nth-child('+ imgPos +')').fadeIn();
                    
                    
                    
                    
          }
          
});