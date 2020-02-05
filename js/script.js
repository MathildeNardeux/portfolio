

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
    origin: 'right'
})

sr.reveal("h1", {
    duration: 2000,
    distance: '60px',
    origin: 'left'
})

sr.reveal(".fa-chevron-down", {
    duration: 2000,
    distance: '60px',
    origin: 'bottom'
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

 $('.nav-item a').on('click', function (evt) {
            var href = $(this).attr('href');

            //- déclencher une animation de scroll vers le contenu de votre portfolio désiré
            $('html, body').animate({
                scrollTop: $(href).offset().top - 56


                //- masquer le menu de la navbar si celle-ci est "collapsed" une fois l'animation terminée
            }, 600, 'swing', function () {
                $('#btnMenu').trigger('click');
                $(".navbar-collapse").collapse('hide');

            });

            evt.preventDefault();
        })