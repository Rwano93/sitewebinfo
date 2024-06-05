<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>French Systems</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="popup.css">
    
    
    

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="logo">
        <img src="images/logo.png" alt="logo" />
            <a class="navbar-brand" href="index.php">French Systems</a>
            </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showContent('home')">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showContent('materiel')">Matériel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showContent('applications')">Applications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showContent('contact')">Contact</a>
                </li>
            </ul>
            <button class="btn btn-blue">+33 6 37 56 85 01</button>
            <span class="navbar-text">
                <button class="btn btn-success">Contact</button>
            </span>
        </div>
    </nav>

    <div class="container" id="content">
        <!-- Contenu dynamique ici -->
        <div id="home" style="display: block;">
            <h1 class="section-title">Bienvenue sur French Systems</h1>
            <p class="section-content">Sélectionnez une section dans la barre de navigation.</p>
        </div>
        <div id="materiel" style="display: none;">
            <h1 class="section-title">Matériel</h1>
            <div class="row align-items-stretch"></div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Caisse enregistreuse">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse</h5>
                            <p class="card-text">La caisse enregistreuse est un équipement essentiel pour toute entreprise de vente au détail ou de service.</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('caisse_enregistreuse')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Borne">
                        <div class="card-body">
                            <h5 class="card-title">Borne</h5>
                            <p class="card-text">Une borne est un appareil qui permet aux utilisateurs d'interagir avec un système informatique via une interface utilisateur.</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('borne')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Monnayeur">
                        <div class="card-body">
                            <h5 class="card-title">Monnayeur</h5>
                            <p class="card-text">Un monnayeur est un appareil qui accepte les pièces de monnaie et les billets et fournit des changements si nécessaire.</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('monnayeur')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Balance">
                        <div class="card-body">
                            <h5 class="card-title">Balance</h5>
                            <p class="card-text">Une balance est un instrument de mesure utilisé pour déterminer la masse d'un objet en le comparant à des masses connues.</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('balance')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Détecteur et compteur">
                        <div class="card-body">
                            <h5 class="card-title">Détecteur et Compteur</h5>
                            <p class="card-text">Un détecteur et compteur est un dispositif utilisé pour détecter et compter des objets ou des événements spécifiques dans diverses applications.</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('detecteur_compteur')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Caméra">
                        <div class="card-body">
                            <h5 class="card-title">Caméra</h5>
                            <p class="card-text">Une caméra est un appareil utilisé pour capturer des images fixes ou en mouvement en convertissant la lumière en signaux électriques ou numériques.</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('camera')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="applications" style="display: none;">
            <h1 class="section-title">Applications</h1>
            <div class="row align-items-stretch"></div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="EASYRESTO">
                        <div class="card-body">
                            <h5 class="card-title">EASYRESTO</h5>
                            <p class="card-text">Description de l'application EASYRESTO...</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('easyresto')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="EASYRESTOPOCKET">
                        <div class="card-body">
                            <h5 class="card-title">EASYRESTO POCKET</h5>
                            <p class="card-text">Description de l'application EASYRESTO POCKET...</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('easyresto_pocket')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="EASYBOULANGERIE">
                        <div class="card-body">
                            <h5 class="card-title">EASYBOULANGERIE</h5>
                            <p class="card-text">Description de l'application EASYBOULANGERIE...</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('easyboulangerie')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="EASYBAR">
                        <div class="card-body">
                            <h5 class="card-title">EASYBAR</h5>
                            <p class="card-text">Description de l'application EASYBAR...</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('easybar')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="EASYPMU">
                        <div class="card-body">
                            <h5 class="card-title">EASYPMU</h5>
                            <p class="card-text">Description de l'application EASYPMU...</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('easypmu')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="EASYTPE">
                        <div class="card-body">
                            <h5 class="card-title">EASYTPE</h5>
                            <p class="card-text">Description de l'application EASYTPE...</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('easytpe')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="caisse_enregistreuse" style="display: none;">
        <div class="row align-items-stretch"></div>
            <h1 class="section-title">Détails des Caisses enregistreuses</h1>
            <p class="btn btn-secondary" onclick="showContent('materiel')">Retour à la liste</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Caisse enregistreuse 1">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse 1</h5>
                            <p class="card-text">Description de la caisse enregistreuse 1...</p>
                            <button class="btn btn-primary" onclick="showPopup('popup-caisse1')">Plus d'informations</button>
                                                           
                            <button class="btn btn-primary" onclick="showPopup('popup-caisse1-caracteristiques')">Caractéristiques</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card md-4 mb-4">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Caisse enregistreuse 2">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse 2</h5>
                            <p class="card-text">Description de la caisse enregistreuse 2...</p>
                            <button class="btn btn-primary" onclick="showPopup('popup-caisse2')">Plus d'informations</button>
                            <button class="btn btn-primary" onclick="showPopup('popup-caisse2-caracteristiques')">Caractéristiques</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Caisse enregistreuse 3">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse 3</h5>
                            <p class="card-text">Description de la caisse enregistreuse 3...</p>
                            <button class="btn btn-primary" onclick="showPopup('popup-caisse3')">Plus d'informations</button>
                            <button class="btn btn-primary" onclick="showPopup('popup-caisse3-caracteristiques')">Caractéristiques</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Caisse enregistreuse 4">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse 4</h5>
                            <p class="card-text">Description de la caisse enregistreuse 4...</p>
                            <button class="btn btn-primary" onclick="showPopup('popup-caisse4')">Plus d'informations</button>
                            <button class="btn btn-primary" onclick="showPopup('popup-caisse4-caracteristiques')">Caractéristiques</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Caisse enregistreuse 5">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse 5</h5>
                            <p class="card-text">Description de la caisse enregistreuse 5...</p>
                            <button class="btn btn-primary"  onclick="showPopup('popup-caisse5')">Plus d'informations</button>
                            <button class="btn btn-primary"  onclick="showPopup('popup-caisse5-caracteristiques')">Caractéristiques</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="popup-caisse1-caracteristiques" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse1-caracteristiques')">&times;</span>
                <div class="popup-left">
                    <img src="https://via.placeholder.com/300" alt="Caisse enregistreuse 1">
                </div>
                <div class="popup-right">
                    <h2>Caractéristiques de la Caisse enregistreuse 1</h2>
                    <p>Caractéristiques détaillées...</p>
                </div>
            </div>
        </div>

        <div id="popup-caisse2-caracteristiques" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse2-caracteristiques')">&times;</span>
                <div class="popup-left">
                    <img src="https://via.placeholder.com/300" alt="Caisse enregistreuse 2">
                </div>
                <div class="popup-right">
                    <h2>Caractéristiques de la Caisse enregistreuse 2</h2>
                    <p>Caractéristiques détaillées...</p>
                </div>
            </div>
        </div>


        
        <div id="popup-caisse1" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse1')">&times;</span>
                <div class="popup-left">
                    <img src="https://via.placeholder.com/300" alt="Caisse enregistreuse 1">
                </div>
                <div class="popup-right">
                    <h2>Caisse enregistreuse 1</h2>
                    <p>Présentation et installation...</p>
                    
                </div>
            </div>
        </div>

        <div id="popup-caisse2" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse2')">&times;</span>
                <div class="popup-left">
                    <img src="https://via.placeholder.com/300" alt="Caisse enregistreuse 2">
                </div>
                <div class="popup-right">
                    <h2>Caisse enregistreuse 2</h2>
                    <p>Présentation et installation...</p>
                    
                </div>
            </div>
        </div>
        <div id="contact" style="display: none;">
            <div class="container2">
                <h1 class="section-title">Contactez-nous</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-form">
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Prénom" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nom" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Téléphone" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Message" rows="5" required></textarea>
                                    <small id="messageCharacterCount" class="form-text text-muted">0/500</small>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="agreeCheckbox" required>
                                    <label class="form-check-label" for="agreeCheckbox">
                                        J'accepte les conditions d'utilisation.
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info">
                            <h4>Coordonnées</h4>
                            <p>French Systems</p>
                            <p>65 Rue du Commandant Brasseur</p>
                            <p>93600 Aulnay-Sous-Bois, France</p>
                            <p>+33 6 37 56 85 01</p>
                            <div class="google-info">
                                <iframe src="googlemap.php" width="100%" height="300px "></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

        
        </div>
        <div id="borne" style="display: none;">
            <h1 class="section-title">Détails de la Borne</h1>
            <p class="btn btn-secondary" onclick="showContent('materiel')">Retour à la liste</p>
            <p>Informations détaillées sur la borne...</p>
        </div>
        <div id="monnayeur" style="display: none;">
            <h1 class="section-title">Détails du Monnayeur</h1>
            <p class="btn btn-secondary" onclick="showContent('materiel')">Retour à la liste</p>
            <p>Informations détaillées sur le monnayeur...</p>
            
        </div>
        <div id="balance" style="display: none;">
            <h1 class="section-title">Détails de la Balance</h1>
            <p class="btn btn-secondary" onclick="showContent('materiel')">Retour à la liste</p>
            <p>Informations détaillées sur la balance...</p>*
            
        </div>
        <div id="detecteur_compteur" style="display: none;">
            <h1 class="section-title">Détails du Détecteur et Compteur</h1>
            <p class="btn btn-secondary" onclick="showContent('materiel')">Retour à la liste</p>
            <p>Informations détaillées sur le détecteur et compteur...</p>
        </div>
        <div id="camera" style="display: none;">
            <h1 class="section-title">Détails de la Caméra</h1>
            <p class="btn btn-secondary" onclick="showContent('materiel')">Retour à la liste</p>
            <p>Informations détaillées sur la caméra...</p>
        </div>
        <div id="easyresto" style="display: none;">
            <h1 class="section-title">Détails de EASYRESTO</h1>
            <p>Informations détaillées sur EASYRESTO...</p>
            <button class="btn btn-secondary" onclick="showContent('applications')">Retour</button>
        </div>
        <div id="easyresto_pocket" style="display: none;">
            <h1 class="section-title">Détails de EASYRESTO POCKET</h1>
            <p>Informations détaillées sur EASYRESTO POCKET...</p>
            <button class="btn btn-secondary" onclick="showContent('applications')">Retour</button>
        </div>
        <div id="easyboulangerie" style="display: none;">
            <h1 class="section-title">Détails de EASYBOULANGERIE</h1>
            <p>Informations détaillées sur EASYBOULANGERIE...</p>
            <button class="btn btn-secondary" onclick="showContent('applications')">Retour</button>
        </div>
        <div id="easybar" style="display: none;">
            <h1 class="section-title">Détails de EASYBAR</h1>
            <p>Informations détaillées sur EASYBAR...</p>
            <button class="btn btn-secondary" onclick="showContent('applications')">Retour</button>
        </div>
        <div id="easypmu" style="display: none;">
            <h1 class="section-title">Détails de EASYPMU</h1>
            <p>Informations détaillées sur EASYPMU...</p>
            <button class="btn btn-secondary" onclick="showContent('applications')">Retour</button>
        </div>
        <div id="easytpe" style="display: none;">
            <h1 class="section-title">Détails de EASYTPE</h1>
            <p>Informations détaillées sur EASYTPE...</p>
            <button class="btn btn-secondary" onclick="showContent('applications')">Retour</button>
        </div>


    <script src="app.js"></script>
    <script src="popup.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>

function showContent(contentId) {
    var contents = document.querySelectorAll('#content > div');
    contents.forEach(function(content) {
        content.style.display = 'none';
    });

    var selectedContent = document.getElementById(contentId);
    if (selectedContent) {
        selectedContent.style.display = 'block';
    }
}

function showDetails(detailId) {
    var details = document.querySelectorAll('#content > div');
    details.forEach(function(detail) {
        detail.style.display = 'none';
    });

    var selectedDetail = document.getElementById(detailId);
    if (selectedDetail) {
        selectedDetail.style.display = 'block';
    }
}
    function showPopup(id) {
        var popup = document.getElementById(id);
        if (popup) {
            popup.style.display = 'flex'; 
        }
    }

    function closePopup(id) {
        var popup = document.getElementById(id);
        if (popup) {
            popup.style.display = 'none';
        }
    }



function updateMessageCharacterCount() {
    var message = document.getElementById('message').value;
    var characterCount = message.length;
    var maxCharacters = 500;
    var counterText = characterCount + '/' + maxCharacters;
    document.getElementById('messageCharacterCount').innerText = counterText;

    var counterElement = document.getElementById('messageCharacterCount');
    if (characterCount > maxCharacters) {
        counterElement.style.color = 'red';
    } else {
        counterElement.style.color = '#6c757d';
    }
}

document.getElementById('message').addEventListener('input', updateMessageCharacterCount);

</script>
</body>
</html>

