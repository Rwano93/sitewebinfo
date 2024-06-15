<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>French Systems</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="popup.css">
    <style>
        .card-img-top {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .navbar-brand img {
            max-height: 100%;
        }
        .reduce-size {
            width: 60%; 
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
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
                        <img src="images/caisse.jpg" class="card-img-top" style="width: 300px; height: 300px;" alt="Caisse enregistreuse">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse</h5>
                            <p class="card-text">La caisse enregistreuse est un équipement essentiel pour toute entreprise de vente au détail ou de service.</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('caisse_enregistreuse')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/borne2.jpg" class="card-img-top" style="width: 300px; height: 300px;" alt="Borne">
                        <div class="card-body">
                            <h5 class="card-title">Borne</h5>
                            <p class="card-text">Une borne est un appareil qui permet aux utilisateurs d'interagir avec un système informatique via une interface utilisateur.</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('borne')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/monnayeur.jpg" class="card-img-top" style="width: 300px; height: 300px;" alt="Monnayeur">
                        <div class="card-body">
                            <h5 class="card-title">Monnayeur</h5>
                            <p class="card-text">Un monnayeur est un appareil qui accepte les pièces de monnaie et les billets et fournit des changements si nécessaire.</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('monnayeur')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/balance.jpg" class="card-img-top" style="width: 300px; height: 300px;" alt="Balance">
                        <div class="card-body">
                            <h5 class="card-title">Balance</h5>
                            <p class="card-text">Une balance est un instrument de mesure utilisé pour déterminer la masse d'un objet en le comparant à des masses connues.</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('balance')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/compteur.jpg" class="card-img-top" style="width: 300px; height: 300px;"" alt="Détecteur et compteur">
                        <div class="card-body">
                            <h5 class="card-title">Détecteur et Compteur</h5>
                            <p class="card-text">Un détecteur et compteur est un dispositif utilisé pour détecter et compter des objets ou des événements spécifiques dans diverses applications.</p>
                            <a href="#" class="btn btn-primary" onclick="showDetails('detecteur_compteur')">Plus d'informations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/camera.jpg" class="card-img-top" class="image-300" style="width: 300px; height: 300px;" alt="Caméra">
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

        <div id="contact" style="display: none;">
        <h1 class="section-title">Contact</h1>
        <p class="section-content">Pour toute demande d'information, veuillez remplir le formulaire ci-dessous.</p>
        <form class="contact-form">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required> 
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message <span id="messageCharacterCount">0/500</span></label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
        </form>
        <div class="contact-info">
            <h4>Coordonnées</h4>
            <p>French Systems</p>
            <p>65 Rue du Commandant Brasseur</p>
            <p>93600 Aulnay-Sous-Bois, France</p>
            <p>+33 6 37 56 85 01</p>
            <p>info@frenchsystems.com</p>
            <div class="google-info">
                <iframe src="googlemap.php" width="100%" height="300px"></iframe>
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
                        <img src="images/caisse/a.jpg" class="card-img-top" alt="Caisse enregistreuse 1">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse 1</h5>
                            <p class="card-text">Description de la caisse enregistreuse 1...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-caisse1')">Plus d'informations</button>
                                <button class="btn btn-primary" onclick="showPopup('popup-caisse1-caracteristiques')">Caractéristiques</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card md-4 mb-4">
                        <img src="images/caisse/b.jpg" class="card-img-top" alt="Caisse enregistreuse 2">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse 2</h5>
                            <p class="card-text">Description de la caisse enregistreuse 2...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-caisse2')">Plus d'informations</button>
                                <button class="btn btn-primary" onclick="showPopup('popup-caisse2-caracteristiques')">Caractéristiques</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/caisse/c.png" class="card-img-top" alt="Caisse enregistreuse 3">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse 3</h5>
                            <p class="card-text">Description de la caisse enregistreuse 3...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-caisse3')">Plus d'informations</button>
                                <button class="btn btn-primary" onclick="showPopup('popup-caisse3-caracteristiques')">Caractéristiques</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/caisse/d.png" class="card-img-top" alt="Caisse enregistreuse 4">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse 4</h5>
                            <p class="card-text">Description de la caisse enregistreuse 4...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-caisse4')">Plus d'informations et Caractéristiques</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/caisse/e.png" class="card-img-top" alt="Caisse enregistreuse 5">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse 5</h5>
                            <p class="card-text">Description de la caisse enregistreuse 5...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary"  onclick="showPopup('popup-caisse5')">Plus d'informations et Caractéristiques</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/caisse/f.png" class="card-img-top" alt="Caisse enregistreuse 6">
                        <div class="card-body">
                            <h5 class="card-title">Caisse enregistreuse 6</h5>
                            <p class="card-text">Description de la caisse enregistreuse 6...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary"  onclick="showPopup('popup-caisse6')">Plus d'informations et Caractéristiques</button>
                            </div>
                        </div>
                     </div>
                </div>


        <div id="popup-caisse1" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse1')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/1.jpg" alt="Caisse enregistreuse 1">
                </div>
            </div>
        </div>

        <div id="popup-caisse1-caracteristiques" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse1-caracteristiques')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/2.jpg" alt="Caisse enregistreuse 1">
                </div>
            </div>
        </div>

        <div id="popup-caisse2" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse2')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/3.jpg" alt="Caisse enregistreuse 2">
                </div>
            </div>
        </div>

        <div id="popup-caisse2-caracteristiques" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse2-caracteristiques')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/4.jpg" alt="Caisse enregistreuse 2">
                </div>
            </div>
        </div>

        <div id="popup-caisse3" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse3')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/5.jpg" alt="Caisse enregistreuse 3">
                </div>
            </div>
        </div>

        <div id="popup-caisse3-caracteristiques" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse3-caracteristiques')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/6.jpg" alt="Caisse enregistreuse 3">
                </div>
            </div>
        </div>

        <div id="popup-caisse4" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse4')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/7.jpg" alt="Caisse enregistreuse 4">
                </div>
            </div>
        </div>
        

        <div id="popup-caisse5" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse5')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/8.jpg" alt="Caisse enregistreuse 5">
                </div>
            </div>
        </div>

        <div id="popup-caisse6" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-caisse6')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/9.jpg" alt="Caisse enregistreuse 5">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="borne" style="display: none;">
        <h1 class="section-title">Détails de la Borne</h1>
        <p class="btn btn-secondary" onclick="showContent('materiel')">Retour à la liste</p>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card mb-4">
                    <img src="images/borne/b1" class="card-img-top reduce-size" alt="Borne 1">
                    <div class="card-body">
                        <h5 class="card-title">Borne 1</h5>
                        <p class="card-text">Description de la borne 1...</p>
                        <div class="card-buttons">
                            <button class="btn btn-primary" onclick="showPopup('popup-borne1')">Plus d'informations</button>
                            <button class="btn btn-primary" onclick="showPopup('popup-borne1-caracteristiques')">Caractéristiques</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card mb-4">
                    <img src="images/borne/b2" class="card-img-top reduce-size" alt="Borne 2">
                    <div class="card-body">
                        <h5 class="card-title">Borne 2</h5>
                        <p class="card-text">Description de la borne 2...</p>
                        <div class="card-buttons">
                            <button class="btn btn-primary" onclick="showPopup('popup-borne2')">Plus d'informations</button>
                            <button class="btn btn-primary" onclick="showPopup('popup-borne2-caracteristiques')">Caractéristiques</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card mb-4">
                    <img src="images/borne/b3" class="card-img-top" alt="Borne 3">
                    <div class="card-body">
                        <h5 class="card-title">Borne 3</h5>
                        <p class="card-text">Description de la borne 3...</p>
                        <div class="card-buttons">
                            <button class="btn btn-primary" onclick="showPopup('popup-borne3')">Plus d'informations</button>
                            <button class="btn btn-primary" onclick="showPopup('popup-borne3-caracteristiques')">Caractéristiques</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-borne1" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-borne1')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/10.jpg" alt="Borne 1">
                </div>
            </div>
        </div>
        <div id="popup-borne1-caracteristiques" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-borne1-caracteristiques')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/11.jpg" alt="Borne 1">
                </div>
            </div>
        </div>
        <div id="popup-borne2" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-borne2')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/12.jpg" alt="Borne 2">
                </div>
            </div>
        </div>
        <div id="popup-borne2-caracteristiques" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-borne2-caracteristiques')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/13.jpg" alt="Borne 2">
                </div>
            </div>
        </div>
        <div id="popup-borne3" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-borne3')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/14.jpg" alt="Borne 3">
                </div>
            </div>
        </div>
        <div id="popup-borne3-caracteristiques" class="popup" style="display: none;">
            <div class="box">
                <span class="close" onclick="closePopup('popup-borne3-caracteristiques')">&times;</span>
                <div class="popup-image">
                    <img src="images/images2/15.jpg" alt="Borne 3">
                </div>
            </div>
        </div>
    </div>
        <div id="monnayeur" style="display: none;">
            <h1 class="section-title">Détails du Monnayeur</h1>
            <p class="btn btn-secondary" onclick="showContent('materiel')">Retour à la liste</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/monnayeur/m1.png" class="card-img-top" alt="Monnayeur 1">
                        <div class="card-body">
                            <h5 class="card-title">Monnayeur 1</h5>
                            <p class="card-text">Description du monnayeur 1...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-monnayeur1')">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/monnayeur/m2.jpg" class="card-img-top" alt="Monnayeur 2">
                        <div class="card-body">
                            <h5 class="card-title">Monnayeur 2</h5>
                            <p class="card-text">Description du monnayeur 2...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-monnayeur2')">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/monnayeur/m3.jpg" class="card-img-top" alt="Monnayeur 3">
                        <div class="card-body">
                            <h5 class="card-title">Monnayeur 3</h5>
                            <p class="card-text">Description du monnayeur 3...</p>
                                <div class="card-buttons">
                            <button class="btn btn-primary" onclick="showPopup('popup-monnayeur3')">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div id="popup-monnayeur1" class="popup" style="display: none;">
                <div class="box">
                    <span class="close" onclick="closePopup('popup-monnayeur1')">&times;</span>
                    <div class="popup-image">
                        <img src="images/images2/16.jpg" alt="Monnayeur 1">
                    </div>
                </div>
            </div>
            <div id="popup-monnayeur2" class="popup" style="display: none;">
                <div class="box">
                    <span class="close" onclick="closePopup('popup-monnayeur2')">&times;</span>
                    <div class="popup-image">
                        <img src="images/images2/17.jpg" alt="Monnayeur 2">
                    </div>
                </div>
            </div>
            <div id="popup-monnayeur3" class="popup" style="display: none;">
                <div class="box">
                    <span class="close" onclick="closePopup('popup-monnayeur3')">&times;</span>
                    <div class="popup-image">
                        <img src="images/images2/18.jpg" alt="Monnayeur 3">
                    </div>
                </div>
            </div>
        </div>
        <div id="balance" style="display: none;">
            <h1 class="section-title">Détails de la Balance</h1>
            <p class="btn btn-secondary" onclick="showContent('materiel')">Retour à la liste</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/balance/ba1.jpg" class="card-img-top" alt="Balance 1">
                        <div class="card-body">
                            <h5 class="card-title">Balance 1</h5>
                            <p class="card-text">Description de la balance 1...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-balance1')">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/balance/ba2.jpg" class="card-img-top" alt="Balance 2">
                        <div class="card-body">
                            <h5 class="card-title">Balance 2</h5>
                            <p class="card-text">Description de la balance 2...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-balance2')">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/balance/ba3.jpg" class="card-img-top" alt="Balance 3">
                        <div class="card-body">
                            <h5 class="card-title">Balance 3</h5>
                            <p class="card-text">Description de la balance 3...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-balance3')">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/balance/ba4.jpg" class="card-img-top" alt="Balance 4">
                        <div class="card-body">
                            <h5 class="card-title">Balance 4</h5>
                            <p class="card-text">Description de la balance 4...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-balance4')">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="popup-balance1" class="popup" style="display: none;">
                <div class="box">
                    <span class="close" onclick="closePopup('popup-balance1')">&times;</span>
                    <div class="popup-image">
                        <img src="images/images2/19.jpg" alt="Balance 1">
                    </div>
                </div>
            </div>
            <div id="popup-balance2" class="popup" style="display: none;">
                <div class="box">
                    <span class="close" onclick="closePopup('popup-balance2')">&times;</span>
                    <div class="popup-image">
                        <img src="images/images2/20.jpg" alt="Balance 2">
                    </div>
                </div>
            </div>
            <div id="popup-balance3" class="popup" style="display: none;">
                <div class="box">
                    <span class="close" onclick="closePopup('popup-balance3')">&times;</span>
                    <div class="popup-image">
                        <img src="images/images2/21.jpg" alt="Balance 3">
                    </div>
                </div>
            </div>
            <div id="popup-balance4" class="popup" style="display: none;">
                <div class="box">
                    <span class="close" onclick="closePopup('popup-balance4')">&times;</span>
                    <div class="popup-image">
                        <img src="images/images2/22.jpg" alt="Balance 4">
                    </div>
                </div>
            </div>
        </div>

        <div id="detecteur_compteur" style="display: none;">
            <h1 class="section-title">Détails du Détecteur et Compteur</h1>
            <p class="btn btn-secondary" onclick="showContent('materiel')">Retour à la liste</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/detecteur_compteur/d1.jpg" class="card-img-top" alt="Détecteur et Compteur 1">
                        <div class="card-body">
                            <h5 class="card-title">Détecteur et Compteur 1</h5>
                            <p class="card-text">Description du détecteur et compteur 1...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-detecteur_compteur1')">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/detecteur_compteur/d2.jpg" class="card-img-top" alt="Détecteur et Compteur 2">
                        <div class="card-body">
                            <h5 class="card-title">Détecteur et Compteur 2</h5>
                            <p class="card-text">Description du détecteur et compteur 2...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-detecteur_compteur2')">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="popup-detecteur_compteur1" class="popup" style="display: none;">
                    <div class="box">
                        <span class="close" onclick="closePopup('popup-detecteur_compteur1')">&times;</span>
                        <div class="popup-image">
                            <img src="images/images2/23.jpg" alt="Détecteur et Compteur 1">
                        </div>
                    </div>
                </div>
                <div id="popup-detecteur_compteur2" class="popup" style="display: none;">
                    <div class="box">
                        <span class="close" onclick="closePopup('popup-detecteur_compteur2')">&times;</span>
                        <div class="popup-image">
                            <img src="images/images2/24.jpg" alt="Détecteur et Compteur 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="imprimante" style="display: none;">
            <h1 class="section-title">Détails de l'Imprimante</h1>
            <p class="btn btn-secondary" onclick="showContent('materiel')">Retour à la liste</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/imprimante/i1.jpg" class="card-img-top" alt="Imprimante 1">
                        <div class="card-body">
                            <h5 class="card-title">Imprimante 1</h5>
                            <p class="card-text">Description de l'imprimante 1...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-imprimante1')">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <img src="images/imprimante/i2.jpg" class="card-img-top" alt="Imprimante 2">
                        <div class="card-body">
                            <h5 class="card-title">Imprimante 2</h5>
                            <p class="card-text">Description de l'imprimante 2...</p>
                            <div class="card-buttons">
                                <button class="btn btn-primary" onclick="showPopup('popup-imprimante2')">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
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
    </div>
    <footer class="footer">
        <div class="container">
            <span class="text-muted
            ">© 2021 French Systems. Tous droits réservés.</span>
        </div>
    </footer>

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
function showPopup(popupId) {
  var popup = document.getElementById(popupId);
  if (popup) {
    popup.style.display = "block";
    document.body.classList.add("popup-open"); // Ajoute la classe pour désactiver le défilement
  }
}

function closePopup(popupId) {
  var popup = document.getElementById(popupId);
  if (popup) {
    popup.style.display = "none";
    document.body.classList.remove("popup-open"); // Retire la classe pour réactiver le défilement
  }
}



function updateMessageCharacterCount() {
        var message = document.getElementById('message').value;
        var characterCount = message.length;
        var maxCharacters = 500;
        var counterText = characterCount + '/' + maxCharacters;
        var counterElement = document.getElementById('messageCharacterCount');
        counterElement.innerText = counterText;

        if (characterCount > maxCharacters) {
            counterElement.style.color = 'red';
        } else {
            counterElement.style.color = '#6c757d';
        }
    }

    var messageInput = document.getElementById('message');
    messageInput.addEventListener('input', updateMessageCharacterCount);

</script>
</body>
</html>

