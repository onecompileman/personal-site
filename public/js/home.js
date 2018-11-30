
document.addEventListener('DOMContentLoaded', function (event) {

    var dataText = [
        "I'm currently a Team Leader",
        "I do Front end Development",
        "I love to conduct talks and seminars",
        "Also joining hackathons"
    ];

    // type one text in the typwriter
    // keeps calling itself until the text is finished
    function typeWriter(text, i, fnCallback) {
        // chekc if text isn't finished yet
        if (i < (text.length)) {
            // add next character to h1
            document.getElementById("text").innerHTML = text.substring(0, i + 1) +
                '<span aria-hidden="true" class="banner_text_w3ls"></span>';

            // wait for a while and call this function again for next character
            setTimeout(function () {
                typeWriter(text, i + 1, fnCallback)
            }, 75);
        }
        // text finished, call callback if there is a callback function
        else if (typeof fnCallback == 'function') {
            // call callback after timeout
            setTimeout(fnCallback, 3000);
        }
    }
    // start a typewriter animation for a text in the dataText array
    function StartTextAnimation(i) {
        // check if dataText[i] exists
        i = ((dataText.length) === i) ? 0 : i;
        if (i < dataText[i].length) {
            // text exists! start typewriter animation
            typeWriter(dataText[i], 0, function () {
                // after callback (and whole text has been animated), start next text
                StartTextAnimation(i + 1);
            });
        }
    }
    // start the text animation
    StartTextAnimation(0);
});