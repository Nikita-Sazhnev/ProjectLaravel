let headerClassList = document.querySelector(".header").classList;
window.onscroll = function (e) {
    if (this.oldScroll > this.scrollY) {
        headerClassList.remove("hide");
    } else {
        headerClassList.add("hide");
    }
    this.oldScroll = this.scrollY;
};