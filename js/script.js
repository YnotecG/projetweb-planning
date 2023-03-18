var liens = document.querySelectorAll("a"); // Sélectionne tous les éléments <a> de la page
for (var i = 0; i < liens.length; i++) {
    liens[i].style.cursor = "url('pictures/cursor.cur'), auto"; // Modifie l'image du curseur pour chaque lien
}
