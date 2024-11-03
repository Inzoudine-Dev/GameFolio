// Sélection de l'icône de connexion et du menu déroulant
const iconeConnexion = document.querySelector('.icone_connexion_class');
const iconeConnexionId = document.getElementById('.icone_connexion_id');
const dropdownContent = document.querySelector('.links');


// Affiche le menu déroulant au clic
iconeConnexion.addEventListener('click', function(e) {

    dropdownContent.classList.toggle('show');
    /*iconeConnexion.style.='red';*/
});

// Ferme le menu si l'utilisateur clique en dehors
window.onclick = function(event) {
    if (!event.target.matches('.icone_connexion_class')) {
        if (dropdownContent.classList.contains('show')) {
            dropdownContent.classList.remove('show');
        }
    }
};

