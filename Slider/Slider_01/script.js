window.onload = function() {
    let currentIndex = 0;  // 현재 이미지 차례
    const slider = document.querySelectorAll(".slider");  // 모든 이미지 저장
    slider.forEach(img => img.style.opacity = "0");  // 모든 이미지를 투명하게(안보이게)
    slider[0].style.opacity = "1";  // 첫번째 이미지만 보이게

    setInterval(() => {
        let nextIndex = (currentIndex + 1) % slider.length  // 1 2 0 1 2 0 1 2 ...
        
        slider[currentIndex].style.opacity = "0"; // 첫 번째 이미지가 사라지고
        slider[nextIndex].style.opacity = "1";  // 두 번째 이미지가 보임
        slider.forEach(img => img.style.transition = "all 1s");  // 이미지에 애니메이션 추가 (스르륵 사라짐)
        currentIndex = nextIndex;
    }, 3000);  // 3초에 한 번씩 실행
}