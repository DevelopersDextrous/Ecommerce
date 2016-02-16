<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            #comment_bubble {
                width: 200px;
                height: 300px;
                background: #088cb7;
                position: relative;
                -moz-border-radius: 12px;
                -webkit-border-radius: 12px;
                border-radius: 12px;
                top: 100px;
            }

            #comment_bubble:before {
                content: "";
                width: 0;
                height: 0;
                left: 42%;
                top: -26px;
                position: absolute;
                border-top: 26px solid transparent;
                border-right: 13px solid #088cb7;
                border-bottom: 0px solid transparent;
/*                border-left: 26px solid #088cb7;*/
            }
            
            #comment_bubble:after {
                content: "";
                width: 0;
                height: 0;
                right: 45%;
                top: -26px;
                position: absolute;
                border-top: 26px solid transparent;
                /*border-right: 13px solid #088cb7;*/
                border-bottom: 0px solid transparent;
                border-left: 13px solid #088cb7;
            }
            
        </style>
    </head>
    <body>
        <div id="comment_bubble"></div>
    </body>
</html>