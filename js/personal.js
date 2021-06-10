var estado = true;
setTimeout("cambio()", 9000);
function cambio() {
    estado = !estado;
    if (estado == true)
        img.src = "img/Hand Taking Strawberrys And Cream Cake.jpg"
    else
        img.src = "img/AZ3NPVPEZ6.jpg"
    setTimeout("cambio()", 5000);
}
$(document).ready(function(){
    $('.carousel').carousel({
        dist:0,
        shift:0,
        padding:20,

    });

});
$(".dropdown-button").dropdown();
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
});

$(document).ready(function(){
    $('.scrollspy').scrollSpy();
});

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});


$('.modal').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        inDuration: 300, // Transition in duration
        outDuration: 200, // Transition out duration
        startingTop: '4%', // Starting top style attribute
        endingTop: '10%', // Ending top style attribute
        ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            alert("Ready");
            console.log(modal, trigger);
        },
        complete: function() { alert('Closed'); } // Callback for Modal close
    }
);
$('.carousel.carousel-slider').carousel({fullWidth: true});

// Next slide
$('.carousel').carousel('next');
$('.carousel').carousel('next', 3); // Move next n times.
// Previous slide
$('.carousel').carousel('prev');
$('.carousel').carousel('prev', 4); // Move prev n times.
// Set to nth slide
$('.carousel').carousel('set', 4);
$(document).ready(function(){
    $('.carousel').carousel();
});
$(document).ready(function(){
    $('.parallax').parallax();
});
