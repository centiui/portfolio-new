document.querySelector('.snap').addEventListener("scroll", onScroll, function() {
    var header = document.querySelector("nav");
    header.classList.toggle("stickyauto", window.scrollY > 0);
})