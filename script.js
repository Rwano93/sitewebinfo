$(document).ready(function() {
    // Redirection dynamique des éléments de menu
    $('#caisseEnregistreuse').click(function() {
        $('#content').html(`
            <h1>Caisse enregistreuse</h1>
            <p>Contenu de la caisse enregistreuse...</p>
        `);
    });

    $('#borne').click(function() {
        $('#content').html(`
            <h1>Borne</h1>
            <p>Contenu de la borne...</p>
        `);
    });

    $('#monnayeur').click(function() {
        $('#content').html(`
            <h1>Monnayeur</h1>
            <p>Contenu du monnayeur...</p>
        `);
    });

    $('#balance').click(function() {
        $('#content').html(`
            <h1>Balance</h1>
            <p>Contenu de la balance...</p>
        `);
    });

    $('#detecteurCompteur').click(function() {
        $('#content').html(`
            <h1>Detecteur et Compteur</h1>
            <p>Contenu du détecteur et compteur...</p>
        `);
    });

    $('#camera').click(function() {
        $('#content').html(`
            <h1>Camera</h1>
            <p>Contenu de la caméra...</p>
        `);
    });

    // Redirection pour le lien de contact
    $('#contactLink').click(function() {
        $('#content').html(`
            <h1>Contact</h1>
            <p>Informations de contact...</p>
        `);
    });
});
