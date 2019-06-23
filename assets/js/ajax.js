subscribe = function(e) {
    e.preventDefault();
    /* Initialiser l'objet xhttp */
    var xhttp = new XMLHttpRequest();

    // Display loader for 2 seconds then continue AJAX
    $(this).html('<div class="loader"></div>');

    function loadandvalidate() {
        setTimeout(function() {
            // Get email
            let mail = document.getElementById("email").value;

            // List id
            let list = document.getElementById("list").value;

            // Checkbox
            let checkbox = document.getElementById("checkbox");
            if (checkbox.checked == true) {
                checkbox = 'ok';
            } else {
                checkbox = 'non';
            }
            //vérifier si XMLHttpRequest() est interprété par tous les navigateurs cf; activeXObject()...
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    /* Display the result of PHP controller file in PHP view */
                    document.getElementById("ajax-contact-response").innerHTML = this.responseText;
                    //Si tout est ok
                    if (this.responseText.includes('class=\'valide\'')) {
                        $('#validate-contact').html('<i class="fas fa-check"></i>');
                        // Après 0.5s, cacher le formulaire
                        function waitandhideform() {
                            setTimeout(function() {
                                $('.form-elements-container').animate({
                                    opacity: 0
                                }, 500, function() {
                                    $('#validate-contact').css('display', 'none');
                                    $('.form-element-to-hide').css('opacity', '0');
                                    $('.form-element-to-hide').addClass('inactiveLink');
                                    $('.form-elements-container').css('opacity', '1');
                                    $('#validate-contact').css('display', 'inline-block');
                                    // Afficher le message de confirmation
                                    $('.form-validated-message').css('display', 'inline-block');
                                    $('.form-validated-message').animate({
                                        opacity: 1
                                    }, 500, function() {
                                        // Animation complete.
                                    });
                                });
                            }, 500);
                        }
                        waitandhideform();
                    } else {
                        $('#validate-contact').html('<img src="assets/img/ic-arrow-right.svg" alt="Arrow" class="submit-anim-content svg">');
                    }
                }
            };
            /* Paramétrer le fichier de traitement php et lui passer des variables*/
            xhttp.open("GET", "controller/form-control.php?mail=" + mail + "&checkbox=" + checkbox + "&list=" + list, true);
            xhttp.send();
        }, 1000);
    }
    loadandvalidate();
};
