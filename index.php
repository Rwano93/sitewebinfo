<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>French Systems</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">French Systems</a>
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
            <button class="btn btn-blue">+33 1 23 45 67 89</button>
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
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="EASYBEAUTECOIFFURE">
                <div class="card-body">
                    <h5 class="card-title ">EASYBEAUTE COIFFURE/h5>
                    <p class="card-text">Description de l'application EASYBEAUTE COIFFURE...</p>
                    <a href="#" class="btn btn-primary" onclick="showDetails('easybeaute_coiffure')">Plus d'informations</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="EASYINVENTAIRE">
                <div class="card-body">
                    <h5 class="card-title ">EASYINVENTAIRE</h5>
                    <p class="card-text">Description de l'application EASYINVENTAIRE...</p>
                    <a href="#" class="btn btn-primary" onclick="showDetails('easyinventaire')">Plus d'informations</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="EASYBILLETERIE">
                <div class="card-body">
                    <h5 class="card-title ">EASYBILLETERIE</h5>
                    <p class="card-text">Description de l'application EASYBILLETERIE...</p>
                    <a href="#" class="btn btn-primary" onclick="showDetails('easybilleterie')">Plus d'informations</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="SOLUTICK">
                <div class="card-body">
                    <h5 class="card-title ">SOLUTICK</h5>
                    <p class="card-text">Description de l'application SOLUTICK...</p>
                    <a href="#" class="btn btn-primary" onclick="showDetails('solutick')">Plus d'informations</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="EASYCENTRAL">
                <div class="card-body">
                    <h5 class="card-title ">EASYCENTRAL</h5>
                    <p class="card-text">Description de l'application EASYCENTRAL...</p>
                    <a href="#" class="btn btn-primary" onclick="showDetails('easycentral')">Plus d'informations</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="EASYLIVRAISON">
                <div class="card-body">
                    <h5 class="card-title">EASYLIVRAISON</h5> 
                    <p class="card-text">Description de l'application EASYLIVRAISON...</p>
                    <a href="#" class="btn btn-primary" onclick="showDetails('easylivraison')">Plus d'informations</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="EASYCAISSE">
                <div class="card-body">
                    <h5 class="card-title ">EASYCAISSE</h5>
                    <p class="card-text">Description de l'application EASYCAISSE...</p>
                    <a href="#" class="btn btn-primary" onclick="showDetails('easycaisse')">Plus d'informations</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="PACKSMS&KOUST">
                <div class="card-body">
                    <h5 class="card-title ">PACKSMS & KOUST</h5>
                    <p class="card-text">Description de l'application PACKSMS & KOUST...</p>
                    <a href="#" class="btn btn-primary" onclick="showDetails('packsms_koust')">Plus d'informations</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="MAE">
                <div class="card-body">
                    <h5 class="card-title ">MAE</h5>
                    <p class="card-text">Description de l'application MAE...</p>
                    <a href="#" class="btn btn-primary" onclick="showDetails('mae')">Plus d'informations</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="CONTRATSERENITE">
                <div class="card-body">
                    <h5 class="card-title">CONTRAT SERENITE</h5>
                    <p class="card-text">Description de l'application CONTRAT SERENITE...</p>
                    <a href="#" class="btn btn-primary" onclick="showDetails('contrat_serenite')">Plus d'informations</a>
                </div>
            </div>
        </div>

        
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="CLYOSYSTEMS">
                <div class="card-body">
                    <h5 class="card-title ">CLYO SYSTEMS</h5>
                    <p class="card-text">Description de l'application CLYO SYSTEMS...</p>
                    <a href="#" class="btn btn-primary" onclick="showDetails('clyo_systems')">Plus d'informations</a>
                </div>
            </div>
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
                    <p>123 Rue de la Technologie</p>
                    <p>75000 Paris, France</p>
                    <p>+33 1 23 45 67 89</p>
                </div>
            </div>
        </div>
    </div>
</div>



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
        function showDetails(item) {
        window.location.href = item + '.html';
        
        function updateMessageCharacterCount() {
        var message = document.getElementById('message').value;
        var characterCount = message.length;
        var maxCharacters = 500;
        var remainingCharacters = maxCharacters - characterCount;
        var counterText = characterCount + '/' + maxCharacters;
        document.getElementById('messageCharacterCount').innerText = counterText;

        var counterElement = document.getElementById('messageCharacterCount');
        if (remainingCharacters < 0) {
            counterElement.style.color = 'red';
        } else {
            counterElement.style.color = '#6c757d'; // Couleur de texte par défaut
        }
    }

    document.getElementById('message').addEventListener('input', updateMessageCharacterCount);
}

    </script>
</body>
</html>
