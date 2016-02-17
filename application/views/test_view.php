<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <style type="text/css">

        </style>
    </head>
    <body>
        <div id="dBlock">
            <div id="dCalc">

                <input id="btn1" type="button" value="Add" />
                <input id="btn2" type="button" value="Subtract" />
                <input id="btn3" type="button" value="Multiply" />
                <input id="btn4" type="button" value="Divide" />
            </div>
        </div>
        <script type="text/javascript">
            $("input").click(function (e) {
                var idClicked = e.target.id;
                alert(idClicked);
            });
        </script>
    </body>
</html>