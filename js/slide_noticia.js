$(document).ready(function(){
          
          var imgItems = $('.slider li').length; 
          var imgPos = 1;
          
          for(i = 1; i <= imgItems; i++){
                   
                    $('.pagination').append('<li><span class="icon-circle"></span></li>');
                    
          }
          
          
          
          
          $('.slider li').hide();
          $('.slider li:first').show();
          $('.pagination li').css({'color':'#333333'});
          $('.pagination li:first').css({'color':'#cd6e2e'});
          
          
          $('.pagination li').click(pagination);
          $('.right span').click(nextSlider);
          $('.left span').click(prevSlider);
          
          setInterval(function(){
                   nextSlider(); 
          }, 4000);          
          
          
          function pagination(){
                    
                    var paginationPos = $(this).index() + 1;
                    console.log(paginationPos);
                    
                    $('.slider li').hide();
                    $('.slider li:nth-child('+ paginationPos +')').fadeIn();
                    $('.pagination li').css({'color':'#333333'});
                    $(this).css({'color':'#cd6e2e'});
                    
          imgPos = paginationPos;          
          }
          function nextSlider(){
                    
                    if(imgPos >= imgItems){
                              imgPos = 1;
                    }else{
                              imgPos++;
                    }
                    
                    $('.pagination li').css({'color':'#333333'});
                    $('.pagination li:nth-child('+ imgPos +')').css({'color':'#cd6e2e'});
                    
                              
                    $('.slider li').hide();
                    $('.slider li:nth-child('+ imgPos +')').fadeIn();
                    
                    
                    
                    
          }
          function prevSlider(){
                    
                    if(imgPos <=1){imgPos = imgItems;}
                    else{imgPos--;}
                    
                    $('.pagination li').css({'color':'#333333'});
                    $('.pagination li:nth-child('+ imgPos +')').css({'color':'#999999'});
                    
                              
                    $('.slider li').hide();
                    $('.slider li:nth-child('+ imgPos +')').fadeIn();
                    
                    
                    
                    
          }
          
});