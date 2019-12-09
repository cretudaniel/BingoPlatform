$(document).ready(function () {

    // INPUT PASSWORD EYE

    $(".toggle-password").click(function () {


        if ($(this).hasClass("visible")) {

            $(this).attr("src", "img/invisible.svg");
        } else {
            $(this).attr("src", "img/eye2.svg");
        }

        var input = $("#password-field");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }

        $(this).toggleClass("visible");

    })

    // SLIDER
    var toggle = document.getElementById('menu');
    var slider = document.getElementById('slider');

    $(toggle).click( function () {
        event.preventDefault();
        Slider();
    });

    function Slider() {

        if (slider.classList.contains('opened')) {
            slider.classList.remove('opened');
            slider.classList.add('closed');

        } else {
            slider.classList.remove('closed');
            slider.classList.add('opened');
        }
    }

});