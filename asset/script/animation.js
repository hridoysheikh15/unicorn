// preloader 

window.addEventListener("load", ()=>{
    document.getElementById("preloader").style.display = "none";
})

// navber animation 

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('header').addClass('scrollNav');
        } else {
            $('header').removeClass('scrollNav');
        }
    })
});