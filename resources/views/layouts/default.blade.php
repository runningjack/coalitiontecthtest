<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 9/25/15
 * Time: 5:05 PM
 */?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    @include('includes.head')
</head>
<body>

@yield("content")
<script src="{!!URL::asset('js/bootstrap.min.js')!!}"></script>
<script src="{!!URL::asset('js/jquery-2.0.2.min.js')!!}"></script>

<script>
    $(document).read(function(){
        $("#save").on("click",function(){
            var request = $.ajax({
                url:"/products",
                type:"post",
                data:{pname:$("#productname").val(),quantity:$("quantity").val(),price:$("price").val()},
                dataType:"html"
            })

            request.done(function(data){
                $("#productTable").html(data);
            })
        })

    })
</script>
</body>
</html>