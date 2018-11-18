const btnQuota = document.getElementById('calculQuota');

btnQuota.onclick = function (){
    const nbEmployes = document.getElementById('effectif').value;
    const nbEmployesHandi = document.getElementById('handicap').value;
    const result = document.getElementById('resultQuota');

    if (nbEmployes < nbEmployesHandi){
        result.style.backgroundColor = "red";
        return result.innerText = "Je crois que vous vous êtes trompés dans vos chiffres, vérifiez et réessayez !";
    }

    let nbQuota = nbEmployes/(50/3) - nbEmployesHandi;
    nbQuota = Math.ceil(nbQuota);

    if (nbQuota > 0){
        result.innerText = "Vous êtes à " + nbQuota + " handicapés de remplir votre Quota !";
    } else {
        result.innerText = "Félicitations, vous avez déjà rempli votre quota !";
    }
    console.log(nbQuota);
}