var cartStatus = 'off';

$(document).ready(function () {
    $("#comment_bubble").hide();
    
    $("#cart_icon").click(function () {

        if (cartStatus == 'off')
        {
            $("#comment_bubble").show();
            cartStatus = 'on';
        } else if (cartStatus == 'on')
        {
            $("#comment_bubble").hide();
            cartStatus = 'off';
        }
    });
});