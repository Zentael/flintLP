//Obscurcir les section non centrées ----------------------------

const firstPart = document.getElementById("firstPart");
const secondPart = document.getElementById("secondPart");
const thirdPart = document.getElementById("thirdPart");

const firstScroll = window.innerHeight * 2.09359605911;
const secondScroll = window.innerHeight * 2.46305418719;

console.log(window.innerHeight);
console.log(firstScroll);
console.log(secondScroll);

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

    body.classList.add('in-transition');
    body.style.WebkitTransform = "translate(0, -" + (targetOffset - currentPosition) + "px)";
    body.style.MozTransform = "translate(0, -" + (targetOffset - currentPosition) + "px)";
    body.style.transform = "translate(0, -" + (targetOffset - currentPosition) + "px)";

    window.setTimeout(function () {
        body.classList.remove('in-transition');
        body.style.cssText = "";
        window.scrollTo(0, targetOffset);
    }, animateTime);

    event.preventDefault();

}, false);

const footer = document.getElementById("footer");

window.addEventListener('resize', function (event) {
    footer.style.height = "370vh";
    footer.style.height = footer.clientHeight + 'px';
});


// Affichage transitif des boutons de partage réseaux sociaux -------

let isSocialShown = false;

const facebook = document.getElementById("facebookButton");
const twitter = document.getElementById("twitterButton");
const linkedin = document.getElementById("linkedinButton");

closeSocial = function(){
    isSocialShown = false;
    footer.style.height = "200px";
    footer.style.position = "initial";

    facebook.style.top = "calc(50% - 30px)";
    facebook.style.left = "calc(50% - 20px)";
    facebook.style.height = "40px";
    facebook.style.width = "40px";

    twitter.style.top = "calc(50% - 30px)";
    twitter.style.left = "calc(50% - 20px)";
    twitter.style.height = "40px";
    twitter.style.width = "40px";

    linkedin.style.top = "calc(50% - 30px)";
    linkedin.style.left = "calc(50% - 20px)";
    linkedin.style.height = "40px";
    linkedin.style.width = "40px";

    window.scrollTo(0,document.body.scrollHeight);
};

openSocial = function(){
    isSocialShown = true;

    console.log("document.body.scrollHeight : ", document.body.scrollHeight);

    const scrollHeight = document.body.scrollHeight;
    const scrollFraction = scrollHeight / 900;
    function toScroll(){
        console.log("scrolling");
        scrollTo(scrollFraction, scrollHeight);
    }
    const scrollToBottom = window.setInterval(toScroll, 1);
    setTimeout(function(){
        clearInterval(scrollToBottom);
    }, 900);

    footer.style.height = "100vh";
    footer.style.position = "absolute";

    facebook.style.top = "calc(50% - 145px)";
    facebook.style.left = "calc(50% - 30px)";
    facebook.style.height = "60px";
    facebook.style.width = "60px";

    setTimeout(function(){
        twitter.style.top = "calc(50%)";
        twitter.style.left = "calc(50% + 40px)";
        twitter.style.height = "60px";
        twitter.style.width = "60px";
    }, 400);

    setTimeout(function(){
        linkedin.style.top = "calc(50%)";
        linkedin.style.left = "calc(50% - 100px)";
        linkedin.style.height = "60px";
        linkedin.style.width = "60px";
    }, 800);

};

outsideClickSocial = function(){
    if(isSocialShown){
        closeSocial();
    }
};

triggerSocial = function(){
    if(!isSocialShown){
        openSocial();
    } else {
        closeSocial();
    }
};

openFacebook = function(){
    console.log("openFb");
};
