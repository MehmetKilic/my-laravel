$(function() {

    // accordion
    $(".accordion").click(function() {
        if($(this).hasClass("current")) {
            $(this).next("div").stop().slideUp("fast");
            $(this).removeClass("current");
        } else {
            $(".accordion").each(function(index, element) {
                $(element).removeClass("current");
                $(element).next("div").stop().slideUp("fast");
            });

            $(this).addClass("current");
            $(this).next("div").stop().slideDown("fast");
        }
    });

});
