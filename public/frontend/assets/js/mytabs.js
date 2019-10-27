var tabs = $('.tabs');
var selector = $('.tabs').find('a').length;
//var selector = $(".tabs").find(".selector");
var activeItem = tabs.find('.active');
var activeWidth = activeItem.innerWidth();
$(".selector").css({
    "left": activeItem.position.left + "px",
    "width": activeWidth + "px"
});

$(".tabs").on("click","a",function(e){
    e.preventDefault();
    $('.tabs a').removeClass("active");
    $(this).addClass('active');
    var activeWidth = $(this).innerWidth();
    var itemPos = $(this).position();
    $(".selector").css({
        "left":itemPos.left + "px",
        "width": activeWidth + "px"
    });

    var selTab = e.target.pathname.substring(1);
    if(selTab == "easy-move")
    {
        $('#easyMove').show();
        $('#safeMove').hide();
        $('#normalPrice').hide();
    }
    else if(selTab == "safe-move")
    {
        $('#easyMove').hide();
        $('#safeMove').show();
        $('#normalPrice').hide();
    }
    else
    {
        $('#easyMove').hide();
        $('#safeMove').hide();
        $('#normalPrice').show();
    }

});
