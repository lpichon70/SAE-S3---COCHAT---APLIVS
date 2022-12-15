const titreSpans = document.querySelectorAll('h1 span');
const l1 = document.querySelector('.l1');
const l2 = document.querySelector('.l2');
const logo = document.querySelector('#logoDDCS');
const btns = document.querySelectorAll('.lien');
const l3 = document.querySelector('.l3');

window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(titreSpans, 1, {top: -50, opacity: 0, ease: "power2.out"}, 0.3)   
    .from(l1, 1, {width: 0, ease: "power2.out"}, '-=2')
    .from(l2, 1, {width: 0, ease: "power2.out"}, '-=2')
    .from(logo, 0.4, {transform: "scale(0)", ease: "power2.out"}, '-=2')
    .staggerFrom(btns, 1, {opacity: 0, ease: "power2.out"}, 0.3, '-=1')
    .from(l3, 1, {width: 0, ease: "power2.out"}, '-=2')

    TL.play();
})