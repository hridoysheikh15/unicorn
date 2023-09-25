// navber

document.querySelector(".nav-burger-icon").addEventListener("click", () => {
    let menu = document.querySelector(".nav-items").style;
    let menu_icon = document.getElementsByClassName("cngIcon")[0].classList;
    if (menu.display == "block") {
        menu.display = "none";
        menu_icon.remove("bi-x-lg");
        menu_icon.add("bi-list");
    } else {
        menu.display = "block";
        menu_icon.remove("bi-list");
        menu_icon.add("bi-x-lg");
    }
})

// testimonial script

function card(n) {
    for (let i = 0; i < 5; i++) {
        let content = document.getElementById("card_content" + i);
        let dot = document.getElementsByClassName("dot");
        let cards = document.getElementsByClassName("cards");
        if (i !== n) {
            cards[i].classList.remove("fade");
            dot[i].classList.remove("activedot");
            content.style.display = "none";
        } else {
            cards[i].classList.add("fade");
            dot[i].classList.add("activedot");
            content.style.display = "block";
            setTimeout(() => {
                cards[i].classList.remove("fade");
            }, 1000);
        }
    }
}

function swap_card(n) {

    for (let i = 0; i < 5; i++) {
        let j = (i + (n));
        if (j = 5) {
            j = 0;
        } else {
            for (let z = 0; z < 5; z++) {
                let content = document.getElementById("card_content" + i);
                let dot = document.getElementsByClassName("dot");
                let cards = document.getElementsByClassName("cards");

                if (z !== j) {
                    cards[i].classList.remove("fade");
                    dot[i].classList.remove("activedot");
                    content.style.display = "none";
                } else {
                    document.getElementById("card_content" + (i + (n))).style.display = "block";
                    document.getElementsByClassName("dot")[i + (n)].classList.add("activedot");
                    document.getElementsByClassName("card")[i + (n)].classList.add("fade");
                }
            }
        }
    }
}

// swapper
