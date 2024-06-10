window.onload = function() {
    let navList = document.querySelectorAll(".nav > ul > li");

    navList.forEach(function(nav) {
        nav.querySelector("ul").style.display = "block";
        nav.querySelector("ul").style.height = "0";
        nav.querySelector("ul").style.overflow = "hidden";
        nav.querySelector("ul").style.transition = "height 400ms";
    });

    navList.forEach(navItem => {
        navItem.addEventListener("mouseover", function() {
            this.querySelector(".submenu").style.height = "170px";
        });
    });

    navList.forEach(navItem => {
        navItem.addEventListener("mouseout", function() {
            this.querySelector(".submenu").style.height = "0";
        })
    });
}