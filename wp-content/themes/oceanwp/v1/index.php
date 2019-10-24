<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </script>
    <script type="text/javascript">
        function load_ajax() {
            $.ajax({
                url: "<?php echo get_template_directory_uri();?>/v1/result.php",
                type: "post",
                dataType: "text",
                data: {},
                success: function (result) {
                    $('#result').html(result);
                }
            });
        }
    </script>
</head>
<body>
<fiv class="d-flex justify-content-center">
    <div id="result">
        Check images for API
    </div>
    <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Check image"/>
</fiv>
</body>
</html>
