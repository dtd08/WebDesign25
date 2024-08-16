$(function () {
    // 이미지 슬라이드
    let currentIdx = 0;
    $(".sliderWrap").append($(".slider").first().clone(true));

    setInterval(function () {
        currentIdx++;
        $(".sliderWrap").animate({ marginTop: -350 * currentIdx + "px" }, 600);

        if (currentIdx == 3) {
            setTimeout(function () {
                $(".sliderWrap").animate({ marginTop: 0 }, 0);
                currentIdx = 0;
            }, 700);
        }
    }, 3000);
})
