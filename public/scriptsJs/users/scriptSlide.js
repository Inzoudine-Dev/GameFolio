const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
const indicators = document.querySelectorAll('.indicators button');

let currentIndex = 0;
const slideCount = slides.length;

// Fonction pour mettre à jour l'affichage des slides
function updateSlider(index) {
    // Revenir au premier slide si on dépasse le dernier
    if (index >= slideCount) currentIndex = 0;
    // Revenir au dernier slide si on dépasse le premier
    else if (index < 0) currentIndex = slideCount - 1;
    else currentIndex = index;

    // Déplacer le slider
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;

    // Mettre à jour les indicateurs
    indicators.forEach((btn, i) => {
        btn.classList.toggle('active', i === currentIndex);
    });
}

// Défilement manuel
prevBtn.addEventListener('click', () => updateSlider(currentIndex - 1));
nextBtn.addEventListener('click', () => updateSlider(currentIndex + 1));

// Navigation par indicateurs
indicators.forEach((btn, i) => {
    btn.addEventListener('click', () => updateSlider(i));
});

// Défilement automatique
let autoSlide = setInterval(() => updateSlider(currentIndex + 1), 5000);

// Arrêter le défilement automatique au survol
document.querySelector('.slider-container').addEventListener('mouseover', () => {
    clearInterval(autoSlide);
});

// Redémarrer le défilement automatique après le survol
document.querySelector('.slider-container').addEventListener('mouseout', () => {
    autoSlide = setInterval(() => updateSlider(currentIndex + 1), 5000);
});
