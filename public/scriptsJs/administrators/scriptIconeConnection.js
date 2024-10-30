let icone_connexion=document.getElementById('icone_connexion_id');
let link_deconnexion=document.getElementById('link_deconexion_id');

let link_icone_connexion=document.getElementById('icone_id');


icone_connexion.style.borderColor='green';
link_deconnexion.style.display='block';
link_deconnexion.style.pointerEvents= 'auto';
link_icone_connexion.style.pointerEvents= 'none';
link_deconnexion.innerHTML='Deconexion';
