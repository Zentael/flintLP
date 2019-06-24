const error = document.getElementById("errorMessage");
const valid = document.getElementById("validMessage");
document.getElementById('formmailchimp').addEventListener('submit', function (e) {
    e.preventDefault();
    console.log(this.elements);
    console.log(this.elements[0].checked);
    if(this.elements[0].checked){
        fetch('../includes/subscribeNL.php',{ method: 'POST',
            mode: 'no-cors',
            body: JSON.stringify({
                mail: this.elements[1].value
            })
        })
            .then(function(response) {
                return response.text();
            })
            .then(function(msg) {
                console.log(msg);
                if(msg === "")
                    valid.innerText = msg;
                else error.innerText = msg;
            })
    } else {
        error.innerText = "Veuillez consentir à l'utilisation de votre email";
    }

});
