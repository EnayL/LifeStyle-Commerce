function selectService(select) {
    if (select) {
        //recuperer tout les employés
        // classse taille = Nom, photo de profil et bouton Voir profil.
        const contenair = document.querySelectorAll(".article");

        contenair.forEach((contenair) => {
            console.log(select.value);
            //verif si chaque employé appartient à un service
            //si selection = tous affiche tous
            if (
                !select.value.includes(contenair.dataset.service) &&
                select.value !== "tous"
            ) {
                contenair.style.display = "none";
                // si nn affiche
            } else {
                //afficher
                contenair.style.removeProperty("display");
            }
        });
        displayService();
    }

    // function select(this) dans le html = pour selectioner le select à la fonction.
}

function displayService() {
    //afficher le nom de la valeur
    var x = document.getElementById("choose").value;
}
