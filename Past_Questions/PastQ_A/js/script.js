$(function() {
    // 슬라이드(페이드 아웃)
    let currentIdx = 0;
    $(".slider").hide().first().show();

    setInterval(function() {
        let nextIdx = (currentIdx + 1) % 3;

        $(".slider").eq(currentIdx).fadeOut(1200);
        $(".slider").eq(nextIdx).fadeIn(1200);

        currentIdx = nextIdx;
    }, 3000);

    // 메뉴
    $(".nav > ul > li").mouseover(function() {
        $(this).find(".sub").stop().slideDown(200);
    });
    $(".nav > ul > li").mouseout(function() {
        $(this).find(".sub").stop().slideUp(200);
    });

    // 탭메뉴
    const tabBtn = $(".info-menu > a");
    const tabCont = $(".info-cont > div");
    tabCont.hide().eq(0).show();

    tabBtn.click(function() {
        const idx = $(this).index();

        $(this).addClass("active").siblings().removeClass("active");
        tabCont.eq(idx).show().siblings().hide();
    });
});
