<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caisse-PopUp</title>
    <link rel="stylesheet" href="popup.css">
    
</head>
<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="../src/controleur/TraitementUser.php" method="post" autocomplete="off" class="sign-in-form">
                        <div class="logo">
                            <img src="images/logo.png" alt="logo" />
                            <h4>Nuage Air</h4>
                        </div>
                        <div class="heading">
                            <h2>Bienvenue</h2>
                            <h6>Pas encore inscrit ?</h6>
                            <a href="#" class="toggle">Inscription</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" name="mail" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Adresse Mail</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" name="mdp" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Mot de Passe</label>
                            </div>

                            <input type="submit" name="connexion" value="Se Connecter" class="sign-btn" />

                            <p class="text">
                                <a href="user/MotdePasseOubliee.php">Mot de passe oublié ?</a>
                            </p>
                        </div>
                    </form>

                    <form action="../src/controleur/TraitementUser.php" method="post" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="images/logo.png" alt="logo" />
                            <h4>Nuage Air</h4>
                        </div>

                        <div class="heading">
                            <h2>Commencer</h2>
                            <h6>Déjà un compte ?</h6>
                            <a href="#" class="toggle">Se connecter</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" name="nom" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Nom</label>
                            </div>

                            <div class="input-wrap">
                                <input type="text" name="prenom" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Prenom</label>
                            </div>

                            <div class="input-wrap">
                                <input type="date" name="date" minlength="4" class="input-field-date" autocomplete="off" required />
                                <label>Date de naissance</label>
                            </div>

                            <div class="input-wrap">
                                <input type="text" name="ville" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Ville de Résidence</label>
                            </div>

                            <div class="input-wrap">
                                <input type="email" name="mail" class="input-field" autocomplete="off" required />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" name="mdp" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Mot de passe</label>
                            </div>


                            <input type="submit" name="inscriptionclient" value="S'inscrire" class="sign-btn" />
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="images/image1.png" class="image img-1 show" alt="" />
                        <img src="images/image2.png" class="image img-2" alt="" />
                        <img src="images/image1.png" class="image img-3" alt="" />
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <div class="heading">
                                    <h2>Nuage Air</h2>
                                    <h2>Réservation de Vol</h2>
                                    <h2>Prise en charge</h2>
                                </div>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
                    </div>
        </div>
    </main>
<script src="app.js"></script>
</body>
</html>