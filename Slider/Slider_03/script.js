window.onload = function() {
    let currentIndex = 0;
    const sliderWrap = document.querySelector(".sliderWrap");
    const slider = document.querySelectorAll(".slider");
    const sliderClone = sliderWrap.firstChild.cloneNode(true); // 자식 노드(이미지)도 함께 복제
    sliderWrap.appendChild(sliderClone);

    setInterval(() => {
        currentIndex++;
        console.log(currentIndex);
        sliderWrap.style.transition = "all 0.6s";
        sliderWrap.style.marginTop = -currentIndex * 300 + "px";

        if(currentIndex == slider.length) {
            console.log(currentIndex);
            setInterval(() => {
                sliderWrap.style.transition = "0s";
                sliderWrap.style.marginTop = "0";
                currentIndex = 0;
            }, 700)
        }
    }, 3000);
}