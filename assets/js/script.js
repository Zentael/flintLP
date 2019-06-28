//Obscurcir les section non centrées ----------------------------

if(window.innerWidth < 1400){
    console.log(window.innerWidth);
    const firstPart = document.getElementById("firstPart");
    const secondPart = document.getElementById("secondPart");
    const thirdPart = document.getElementById("thirdPart");

    const firstScroll = window.innerHeight * 2.09359605911;
    const secondScroll = window.innerHeight * 2.46305418719;

    window.addEventListener('scroll', function () {
        if(window.pageYOffset < firstScroll){
            firstPart.classList.add("lit");
            secondPart.classList.remove("lit");
            thirdPart.classList.remove("lit");
        } else
        if(firstScroll < window.pageYOffset && window.window.pageYOffset < secondScroll){
            firstPart.classList.remove("lit");
            secondPart.classList.add("lit");
            thirdPart.classList.remove("lit");
        } else
        if(secondScroll < window.pageYOffset){
            firstPart.classList.remove("lit");
            secondPart.classList.remove("lit");
            thirdPart.classList.add("lit");
        }
    });
}


//Smooth scroll ------------------------------------------------

let targetOffset, currentPosition,
    body = document.body,
    button = document.getElementById('scrollToCta'),
    animateTime = 900;

function getPageScroll() {
    let yScroll;

    if (window.pageYOffset) {
        yScroll = window.pageYOffset;
    } else if (document.documentElement && document.documentElement.scrollTop) {
        yScroll = document.documentElement.scrollTop;
    } else if (document.body) {
        yScroll = document.body.scrollTop;
    }
    return yScroll;
}

button.addEventListener('click', function (event) {

    targetOffset = document.getElementById(event.target.hash.substr(1)).offsetTop;
    currentPosition = getPageScroll();
    console.log(targetOffset);
    body.classList.add('in-transition');
    body.style.WebkitTransform = "translate(0, -" + (targetOffset - currentPosition + 170) + "px)";
    body.style.MozTransform = "translate(0, -" + (targetOffset - currentPosition + 170) + "px)";
    body.style.transform = "translate(0, -" + (targetOffset - currentPosition + 170) + "px)";

    window.setTimeout(function () {
        body.classList.remove('in-transition');
        body.style.cssText = "";
        window.scrollTo(0, targetOffset + 170);
    }, animateTime);

    event.preventDefault();

}, false);

const footer = document.getElementById("footer");

window.addEventListener('resize', function (event) {
    footer.style.height = "370vh";
    footer.style.height = footer.clientHeight + 'px';
});


// Affichage modale Dossier de presse -------

document.getElementById('pressBtn').onclick = function(event) {
    event.preventDefault();
    document.getElementById('modal-wrapper').style.display = "block";
};

document.getElementById('close-modal').onclick = function() {
    document.getElementById('modal-wrapper').style.display = 'none';
};

