console.log("connected to contact");

// var submitContact = document.getElementById("submitContact");
// submitContact.addEventListener("click", processContact, false);

function processContact(e){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(e){     
        console.log(xhr.readyState);  
        if(xhr.readyState === 4){        
            console.log(xhr.responseText);
            var responseJSON = JSON.parse(xhr.responseText);
            if(responseJSON.success == "true"){
                document.forms[0].remove();
                var newP = document.createElement("h3");
                newP.innerHTML = "Thank you! We'll get back to you as soon as possible.";
                var confirmation = document.getElementById("confirmation") 
                confirmation.appendChild(newP);
            }
        }
    }

    var nom = document.forms[0]["name"];
    var email = document.forms[0]["email"];
    var message = document.forms[0]["message"];

    console.log(nom.value, email.value, message.value);

    xhr.open("POST", "/campus-eats/process-contact.php", true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
    xhr.send("name="+nom.value+"&email="+email.value+"&message="+message.value);

};


