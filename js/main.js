$(function(){
    $('.menutop a').mouseover(function(){      


            var title = $(this).attr('data-title');
            var url = $(this).attr('data-url');
            $('.header h1').text(title);
            $('header.header').css('background-image',url);
         
            
        });
    
    var fx = {
        'initModal': function(){
            if($('.modal-window').length ==0){
                $('<div>').attr('id','overlay').fadeIn(2000).appendTo('body');
                $('#overlay').fadeOut(2000,function(){$(this).remove();
                    });
                return $('<div>').addClass('modal-window').appendTo('body');
                
                
            }else{
                return $('.modal-window');
            }    
        
    }
              
    }
    
    $('.link').bind('click',function(){
        id = $(this).attr('data_id');
        modal = fx.initModal();
        console.log(modal);
        $('<a>').attr('href','#').addClass('model-close-btn').html('&times;').click(function(e){
            e.preventDefault();
            console.log('djfdhf');
            modal.remove();
        }).appendTo(modal);

    });
});