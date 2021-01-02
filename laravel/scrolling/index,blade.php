<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scrolling tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div id="div_1" class="bg-info col-5 m-5" style="height: 100px;overflow: auto">

    </div>
    <div id="div_2" class="bg-danger col-5 m-5" style="height: 100px;overflow: auto">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur consequuntur ea in natus, nulla quidem sunt. Cumque ea excepturi sint. Ad dolor dolores eius fugit nobis perferendis praesentium tempora.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores id laborum nisi obcaecati perspiciatis rem voluptatum. Accusantium atque culpa est exercitationem facere harum, provident, quo repellendus reprehenderit sit suscipit vitae!
    </div>
    <div id="div_3" class="bg-success col-5 m-5" style="height: 100px;overflow: auto">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur consequuntur ea in natus, nulla quidem sunt. Cumque ea excepturi sint. Ad dolor dolores eius fugit nobis perferendis praesentium tempora.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloremque fugit hic illum, inventore ipsa, itaque, laboriosam laborum magni natus numquam obcaecati odio optio porro qui sed temporibus veniam voluptatum!
    </div>
    <input type="hidden" value="0" id="div_1_id">
    <input type="hidden" value="" id="div_2_id">
    <input type="hidden" value="" id="div_3_id">
    <input type="hidden" value="{{ csrf_token() }}" id="totalToken">
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


<script>
    $(document).ready(function () {


        //Initial loading
        loadMore_1();

        $('#div_1').on('scroll', function() {


            let div = $(this).get(0);
            if(div.scrollTop + div.clientHeight >= div.scrollHeight)
            {
                loadMore_1($("#div_1_id").val());
            }
        });

        function loadMore_1(div_1_id = 0,token = $("#totalToken").val())
        {
            // div_1_id    = $("#div_1_id").val();
            // alert(div_1_id);
            $.ajax({
                type:'Get',
                data:{div_1_id:div_1_id,_token:token},
                url:'/div1'+div_1_id,
                success:function (response)
                {
                    if(response.last_id === '')
                    {
                        $("#div_1_id").val(response.last_id);
                    }
                    $("#div_1_id").val(response.last_id);
                    $("#div_1").append(response.item);
                }
            });
        }
    });
</script>
</body>
</html>
