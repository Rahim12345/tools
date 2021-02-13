<script>
$(document).on('click','.myCategoryEditor',function () {
    var id  = $(this).attr('data-id');
    var url = '{{ route("categories.show", ":id") }}';
    url     = url.replace(':id', id );
    $.ajax({
        type:'GET',
        url: url,
        success:function (response) {
            alert(response);
        }
    });
})
</script>
