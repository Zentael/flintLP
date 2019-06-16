const slider = tns({
    container: '.userSlider',
    loop: true,
    items: 1,
    slideBy: 'page',
    autoplay: false,
    autoplayButtonOutput: false,
    mouseDrag: true,
    lazyload: true,
    controlsContainer: "#customize-controls",
    nav:true,
    navPosition: 'bottom',
    arrowKeys:true,

});

const usageExplainer = [
    [
        document.getElementById("usagePin"),
        document.getElementById("pinDesc"),
    ],
    [
        document.getElementById("usageTrail"),
        document.getElementById("trailDesc")
    ],
    [
        document.getElementById("usageQuizz"),
        document.getElementById("quizzDesc"),

    ],
    [
        document.getElementById("usageBeacon"),
        document.getElementById("beaconDesc")
    ],
];

usageExplainer.map(toShow => {
    toShow[0].onclick = () => {
        toShow[1].classList.add('shown');

       const usageToHide = usageExplainer.filter(usages => {return usages !== toShow});
       usageToHide.map(toHide => {
           toHide[1].classList.remove('shown');
       });
   }
});



/* Taille du container Iframe */
const resizeHeight = () => {
    const iframe = document.getElementById("container-iframe");
    const containerIframeWidth = iframe.offsetWidth;
    const containerIframeHeight = containerIframeWidth/1.77;
    iframe.style.width = containerIframeWidth+"px";
    iframe.style.height =  containerIframeHeight+"px";
};

/* Quand la page change de taille */
window.onresize = function(event){
    resizeHeight();
};
