$(document).ready(function () {
    $('.nav li').removeClass('active');
    
    $('.main_header a').click(function(){ 
        var mode = $(this).data('mode');
        
        $('.main_header a').removeClass('selected_mode');
        $(this).addClass('selected_mode');
        Pixastic.process($('.mode_header_open img')[0], "desaturate", {average : false});
        
        $('.mode_header_open').fadeOut( 1000, function() {
            $('.header_'+ mode + '_mode').hide();
            $('.mode_header_open').removeClass('mode_header_open');
            console.log('removed old image')
            
            $('.header_'+ mode + '_mode').fadeIn(1000, function(){ 
                console.log('new image added')  ;
                $('.header_'+ mode + '_mode').addClass('mode_header_open');
            });
            
        });
    });
});
