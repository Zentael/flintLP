//Obscurcir les section non centrées ----------------------------

const firstPart = document.getElementById("firstPart");
const secondPart = document.getElementById("secondPart");
const thirdPart = document.getElementById("thirdPart");

window.addEventListener('scroll', function() {
    if(1100 < window.scrollY && window.scrollY < 1500){
        firstPart.style.filter = "initial";
        secondPart.style.filter = "brightness(30%)";
        thirdPart.style.filter = "brightness(30%)";
    } else
    if(1500 < window.scrollY && window.scrollY < 1900){
        firstPart.style.filter = "brightness(30%)";
        secondPart.style.filter = "initial";
        thirdPart.style.filter = "brightness(30%)";
    } else
    if(1900 < window.scrollY && window.scrollY < 2300){
        firstPart.style.filter = "brightness(30%)";
        secondPart.style.filter = "brightness(30%)";
        thirdPart.style.filter = "initial";
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

// Affichage transitif des boutons de partage réseaux sociaux -------

let isSocialShown = false;

const footer = document.getElementById("footer");

const facebook = document.getElementById("facebookButton");
const twitter = document.getElementById("twitterButton");
const linkedin = document.getElementById("linkedinButton");

closeSocial = function(){
    isSocialShown = false;
    footer.style.height = "30vh";

    facebook.style.top = "calc(50% - 50px)";
    facebook.style.left = "calc(50% - 20px)";
    facebook.style.height = "40px";
    facebook.style.width = "40px";

    twitter.style.top = "calc(50% - 50px)";
    twitter.style.left = "calc(50% - 20px)";
    twitter.style.height = "40px";
    twitter.style.width = "40px";


    linkedin.style.top = "calc(50% - 50px)";
    linkedin.style.left = "calc(50% - 20px)";
    linkedin.style.height = "40px";
    linkedin.style.width = "40px";
};

openSocial = function(){
    isSocialShown = true;
    footer.style.height = "90vh";

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
