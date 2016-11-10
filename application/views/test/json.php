<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    This is a test page.


    <!-- Placed js at the end of the document so the pages load faster -->
    <?php include_once VIEWPATH."include/frame/frame-js.php"?>

    <script>
        $(function() {
            $.getScript('/json/get?callback=', function(data) {

            })
        });
    </script>
</body>
</html>