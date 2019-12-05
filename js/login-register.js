console.log("hello");

var modal = document.getElementById("modal");
var button = document.getElementById("button");
var span = document.getElementsByClassName("close")[0];

function modalDisplay() {
    modal.style.display = "block";
    }
    
span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function processRegister(e){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(e){     
        console.log(xhr.readyState);  
        if(xhr.readyState === 4){        
            console.log(xhr.responseText);
            var responseJSON = JSON.parse(xhr.responseText);
            if(responseJSON.success == "true"){
                var confirmText = document.getElementById("confirmText");
                confirmText.innerHTML = "Your registration was successful! Login to continue using Campus Eats."

                var confirmBtn = document.getElementById("confirmBtn");
                confirmBtn.setAttribute("onclick", "window.location.href = 'login.php';");
                confirmBtn.innerHTML="LogIn";
            }
        }
    }

    var firstname = document.forms[0]["firstname"];
    var lastname = document.forms[0]["lastname"];
    var email = document.forms[0]["email"];
    var password = document.forms[0]["password"];

    // console.log(nom.value, email.value, password.value);

    xhr.open("POST", "/campus-eats/processing-register.php", true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
    xhr.send("firstname="+firstname.value+"&lastname="+lastname.value+"&email="+email.value+"&password="+password.value);

};


// var confirmText = document.getElementById("confirmText");
// confirmText.innerHTML = "Would you like to confirm this pick up item from Sheridan Food First?"

// var cancelBtn = document.getElementById("cancelBtn");
// var confirmBtn = document.getElementById("confirmBtn");
// var modal_content = document.getElementsByClassName("modal-content")[0];
// var gohomeBtn = document.createElement("button");

// cancelBtn.innerHTML = "Cancel";
// cancelBtn.setAttribute("onclick", "window.location.href = 'program-page.php';");
// confirmBtn.innerHTML = "Confirm";
// gohomeBtn.innerHTML = "Go back home";
// gohomeBtn.setAttribute("onclick", "window.location.href = 'home.php';");
// gohomeBtn.setAttribute("id", "gohomeBtn");
