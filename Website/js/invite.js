var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

var send = document.getElementById("send");

btn.onclick = function(event)
{
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

send.onclick = function(event)
{
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
