function showPopup() {
    // Créer le conteneur du pop-up
    var popupContainer = document.createElement('div');
    popupContainer.classList.add('popup-container');

    // Créer le contenu du pop-up
    var popupContent = document.createElement('div');
    popupContent.classList.add('popup-content');
    popupContent.innerHTML = `
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Titre du Pop-up</h2>
        <p>Contenu du Pop-up...</p>
    `;

    // Ajouter le contenu au conteneur
    popupContainer.appendChild(popupContent);

    // Ajouter le conteneur au corps de la page
    document.body.appendChild(popupContainer);
}

function closePopup() {
    var popup = document.querySelector('.popup-container');
    if (popup) {
        popup.remove();
    }
}
