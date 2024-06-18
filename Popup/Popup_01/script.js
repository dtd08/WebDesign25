window.onload = function() {
    // popup btn
    document.querySelector(".popup-btn").addEventListener("click", (e) => {
        e.preventDefault();
        // popup view show
        document.querySelector(".popup-view").style.display = "block";
    });

    // popup close
    document.querySelector(".popup-close").addEventListener("click", (e) => {
        e.preventDefault();
        // popup view close
        document.querySelector(".popup-view").style.display = "none";
    })
}