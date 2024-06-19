const tabBtn = document.querySelectorAll(".tab-btn > ul > li"); // 버튼 설정
const tabCont = document.querySelectorAll(".tab-cont > div"); // 콘텐츠 설정

tabCont.forEach(el => el.style.display = "none"); // 모든 콘텐츠 숨김
tabCont[0].style.display = "block"; // 첫번째 콘텐츠만 보이게 설정

tabBtn.forEach((tab, index) => {
    tab.addEventListener("click", (e) => {
        e.preventDefault();
        tabBtn.forEach(tab => tab.classList.remove("active")); // 모든 버튼 활성화 클래스 삭제
        tab.classList.add("active"); // 클릭한 버튼만 클래스 추가

        tabCont.forEach(cont => cont.style.display = "none"); // 모든 콘텐츠 숨기기
        tabCont[index].style.display = "block"; // 클릭한 버튼의 콘텐츠만 보여줌
    });
});