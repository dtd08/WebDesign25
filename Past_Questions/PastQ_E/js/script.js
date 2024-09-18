$(function() {
    // 이미지 슬라이더
    let currentIdx = 0;
    $(".sliderWrap").append($(".slider").first().clone(true));

    setInterval(function() {
        currentIdx++;
        $(".sliderWrap").animate({marginLeft: -100 * currentIdx+"%"}, 600);

        if(currentIdx == 3) {
            setTimeout(function() {
                $(".sliderWrap").animate({marginLeft: 0}, 0);
                currentIdx = 0;
            }, 600);
        }
    }, 3000);


    // 메뉴
    $(".nav > ul > li").mouseover(function() {
        $(this).find(".sub").stop().slideDown();
    });
    $(".nav > ul > li").mouseout(function() {
        $(this).find(".sub").stop().slideUp();
    });


    // 팝업
    $(".popup-btn").click(function() {
        $(".popup-view").show(); 
    });

    $(".popup-close").click(function() {
        $(".popup-view").hide();
    });
});