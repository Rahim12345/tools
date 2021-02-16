var modal = $('#blogAdd');
    modal.removeAttr('tabindex');

    modal.focusout(function(){
        $(this).css({'position':'relative'});
    });

    modal.focusin(function(){
        $(this).css({'position':'fixed'});
    });