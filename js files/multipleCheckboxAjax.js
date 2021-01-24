$('#saveBoard').click(function () {
    var id = $('#saveBoard').attr('data-id');

    var data = [];
    $('.getBoard').each(function(){
        if($(this).is(":checked"))
        {
            data.push($(this).val());
        }
    });
    data = data.toString();

    $.ajax({
        type:'POST',
        data:{id:id,boards:data},
        url:'{!! route('admin.board.update') !!}',
        success:function (response) {
            alert(response);
        }
    });
});