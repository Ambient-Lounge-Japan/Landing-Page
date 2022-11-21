let mybutton = document.getElementById("group-btn-float");
let header_bottom = document.getElementById("header-bottom");
let buy_btn_small = document.getElementById("buy-btn-sm");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};
function scrollFunction() {
    if (
        document.body.scrollTop > 0 ||
        document.documentElement.scrollTop > 0
    ) {
        buy_btn_small.style.display = "block";
        header_bottom.style.display = "none";
    } else {
        buy_btn_small.style.display = "none";
        header_bottom.style.display = "block";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}