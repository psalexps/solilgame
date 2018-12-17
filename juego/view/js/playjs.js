
$(document).ready(function () {

    let botonAtacar = $('#atacar');
    let jugador = $('#jugador');

    botonAtacar.click(function () {

        jugador.css({"margin-left":"400px","margin-top":"200px"});
        $('#pj1').attr({"src":"model/sprays/goku1_atk.png"});
        $('#pj1').css({"width":"200px","height":"100px"});

        setTimeout(function () {
            jugador.css({"margin-left":"0px","margin-top":"0px"});
            $('#pj1').attr({"src":"model/sprays/goku1.png"});
            $('#pj1').css({"width":"160px","height":"160px"});
        }, 300);

    });

});