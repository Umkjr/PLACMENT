function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }

        if (display.textContent== "00:00") 
        {
            alert("Your Time is over!!! Your test has been submitted!");
            
        }
    }, 1000);
}

window.onload = function ()
 {
    var minutes = 60 * 30,
        display = document.querySelector('#time');
    startTimer(minutes, display);
};

function submit () {

       var x;
     if (confirm("Do you really wish to submit the Test? Once you submit the test you won't be able to go back.") == true) {
        x = "You pressed OK!";
    } else {
        x = "You pressed Cancel!";
    }
}