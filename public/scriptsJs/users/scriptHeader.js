// Sélectionne le bouton et le contenu du menu
const dropdownButton = document.querySelector('.icone_connexion');
const dropdownContent = document.querySelector('.dropdown-content');

// Lorsque le bouton est cliqué, alterne l'affichage du menu
dropdownButton.addEventListener('click', function(e) {
    e.preventDefault(); // Empêche le comportement par défaut du lien
    dropdownContent.classList.toggle('show');
    //dropdownContent.style.position='absolute';
});

// Ferme le menu si l'utilisateur clique en dehors
window.onclick = function(event) {
    if (!event.target.matches('.icone_connexion')) {
        if (dropdownContent.classList.contains('show')) {
            dropdownContent.classList.remove('show');
        }
    }
};

