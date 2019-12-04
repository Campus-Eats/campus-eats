console.log("hello");

// function selectPackage() {
//     window.confirm("Thank you for reserving a package!");
//     }


// Get the modal
var modal = document.getElementById("modal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal

for(var i=0; i<btn.length; i++){
    btn[i].onclick = function() {
    modal.style.display = "block";
    }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
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