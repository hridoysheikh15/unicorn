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
    const prevCard = document.querySelector('.prev-card');
    const nextCard = document.querySelector('.next-card');
    let prevCardIndex = n - 1;
    let nextCardIndex = n + 1;
    if (n === 4) {
        nextCardIndex = 0;
    } else if (n === 0) {
        prevCardIndex = 4;
    }

    prevCard.setAttribute('onclick', `card(${prevCardIndex})`);
    nextCard.setAttribute('onclick', `card(${nextCardIndex})`);

    for (let i = 0; i < 5; i++) {
        let content = document.getElementById("card_content" + i);
        let dot = document.getElementsByClassName("dot");
        let cards = document.getElementsByClassName("cards");
        if (i !== n) {
            cards[i].classList.remove("fade");
            dot[i].classList.remove("active_dot");
            content.style.display = "none";
        } else {
            cards[i].classList.add("fade");
            dot[i].classList.add("active_dot");
            content.style.display = "block";
            setTimeout(() => {
                cards[i].classList.remove("fade");
            }, 500);
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
                    dot[i].classList.remove("active_dot");
                    content.style.display = "none";
                } else {
                    document.getElementById("card_content" + (i + (n))).style.display = "block";
                    document.getElementsByClassName("dot")[i + (n)].classList.add("active_dot");
                    document.getElementsByClassName("card")[i + (n)].classList.add("fade");
                }
            }
        }
    }
}

// swapper
