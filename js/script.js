function montreContenu(){
    document.querySelector(".loader-container").classList.add('hidden');
}

setTimeout(montreContenu, 1200);


const parralax = document.querySelector("#accueil")
window.addEventListener('scroll', () => {
    parralax.style.backgroundPositionY = window.scrollY / 2 + "px";

});

const sr = ScrollReveal({
    reset: true
});
sr.reveal(".accueilBloc", {
    duration: 2000,
    distance: '60px',
    origin: 'top'
});
sr.reveal(".descPresentation", {
    duration: 2000,
    distance: '60px',
    origin: 'top',
});

sr.reveal("h3", {
    duration: 2000,
    distance: '60px',
    origin: 'top'
})


sr.reveal(".unProjet", {
    interval: 200,
    reset: true
});


sr.reveal(".infographie", {
    duration: 2000,
    distance: '60px',
    origin: 'top',
    delay: 700
});


sr.reveal(".audiovisuel", {
    duration: 2000,
    distance: '60px',
    origin: 'top',
    delay: 900

});

sr.reveal(".devWeb", {
    duration: 2000,
    distance: '60px',
    origin: 'top',
    delay: 800
});

sr.reveal(".formulaireContact",{
    duration: 2000,
    distance: '60px',
    origin: 'top',
    delay: 900
})

sr.reveal("#contact p",{
    duration: 2000,
    distance: '60px',
    origin: 'top',
    delay: 800
})