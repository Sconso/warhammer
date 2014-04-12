$(document).load(function() {
    
});

$(document).ready(function() {

    $('input[type=submit], input[type=button]').button();
    $('#board').draggable();
    $('#chatbox').dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 500
        },
        hide: {
            effect: "explode",
            duration: 600
        }
    });
    
/********************************************/
/**************** ANIMATIONS ****************/
/********************************************/
    $('#play').click(function() {
        $(this).animate({
            width: '100%',
            height: $('#game').outerHeight(),
            margin: '0px auto',
            borderRadius: '0px'
        }, 5000, function() {
            $(this).attr('id', 'play2').css('height', $('#game').outerHeight());
            $('#options').css('display', 'block');
        });
        
        $('#game').animate({
            opacity: 1
        }, 5000);
    });

    $('#zoomin').click(function() {
        var mod = $('.case:first-child').width() + 5;
        
        if (mod <= 35)
        {
            $('.case').each(function() {
                $(this).css('width', mod + 'px').css('height', mod + 'px'); 
            });
            
            $('#game').css('min-width', $('#board').width() + 100);
        }
    });
    
    $('#zoomout').click(function() {
        var mod = $('.case:first-child').width() - 5;
        
        if (mod >= 5)
        {
             $('.case').each(function() {
                $(this).css('width', mod + 'px').css('height', mod + 'px'); 
            });
            if ($('#board').width() < $('#secton').width())
                $('#game').css('width', '100%');
            else
                $('#game').css('min-width', $('#board').width() + 100);
        }
    });
    

    $('#chat').click(function() {
        $("#chatbox").dialog("open");
    });
});