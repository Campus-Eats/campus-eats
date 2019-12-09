console.log("hello");

var modal = document.getElementById("modal");
var btn = document.getElementsByClassName("btn");
var span = document.getElementsByClassName("close")[0];

for(var i=0; i<btn.length; i++){
    btn[i].onclick = function() {
    modal.style.display = "block";
    }
}

span.onclick = function() {
modal.style.display = "none";
}

window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}

var confirmText = document.getElementById("confirmText");
confirmText.innerHTML = "Would you like to confirm this pick up item from Sheridan Food First?"

var cancelBtn = document.getElementById("cancelBtn");
var confirmBtn = document.getElementById("confirmBtn");
var modal_content = document.getElementsByClassName("modal-content")[0];
var gohomeBtn = document.createElement("button");

cancelBtn.innerHTML = "Cancel";
cancelBtn.setAttribute("onclick", "window.location.href = 'program-page.php';");
confirmBtn.innerHTML = "Confirm";
gohomeBtn.innerHTML = "Go back home";
gohomeBtn.setAttribute("onclick", "window.location.href = 'home.php';");
gohomeBtn.setAttribute("id", "gohomeBtn");


function processConfirm(e){
    // console.log("click")
    confirmText.innerHTML="Thank you for your order! Your confirmation number is <strong>#00123</strong>. You can pick it up at Sheridan Food First location, during their operation hours.";
    cancelBtn.remove();
    confirmBtn.remove();
    modal_content.appendChild(gohomeBtn);
}