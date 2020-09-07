var timer = 5000;
var interval = 1000;
var range = timer / interval;

function init() {
     interv = setInterval("countdown()", 1000);
}
function countdown() {
    if (range > 1) {
        range--;
        document.getElementById('countdown').innerHTML = range + ' s';
    }
    else {
        window.location = '../index.php';
    }
};