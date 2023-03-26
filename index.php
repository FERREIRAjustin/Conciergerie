<?php
    session_start();
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conciergerie des Rochers</title>
        <meta name="description" content="Nous sommes une conciergerie basé sur Penmarch. Nous avons pour secteur d’activité le service aux particuliers et aux entreprises.">
        <link rel="stylesheet" href="mystyle.css">
        <link rel="shortcut icon" href="image/Favicon.png" type="image/x-icon">
    </head>
    <body>

        <nav class="navbar">
            <a href="#" class="logo"><img src="image/Logo1.png" alt="Conciergerie des Rochers"></a>
            <div class="nav-links">
                <ul>
                    <li class="home"><a href="#">Home</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#about">A propos</a></li>
                    <li><a href="#contact">Nous contacter</a></li>
                </ul>
            </div>
            
            <img src="image/menu-btn2.png" alt="menu hamburger" class="menu-hamburger">

        </nav>
        
        <header>
            <div class="titre">
                <h1 class="titre1">Conciergerie</h1>
                <h1 class="titre2">Des Rochers</h1>
            </div>
        </header>

        <main>
            <section id="service">
                <div class="title-container">
                    <div class="line"></div>
                        <h2>Nos Services</h2>
                    <div class="line"></div>
                </div>
                <div class="service">

                    <div class="card">
                        <div class="imgBx">
                            <img src="image/jardinage.jpg" alt="photo camion">
                        </div>
                        <div class="details">
                            <h3>Jardinage</h3>
                            <ul class="compétence">
                                <li>Entretien de jardins</li>
                                <li>Tonte de pelouses</li>
                                <li>Taille de haies</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="imgBx">
                            <img src="image/photo-camion.jpg" alt="photo camion">
                        </div>
                        <div class="details">
                            <h3>Vide maison</h3>
                            <ul class="compétence">
                                <li>Maisons</li>
                                <li>Caves, Greniers</li>
                                <li>Parties communes d'immeuble, box, ...</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="imgBx">
                            <img src="image/cuisine.jpg" alt="photo cuisine">
                        </div>
                        <div class="details">
                            <h3>Meubles à monter</h3>
                            <ul class="compétence">
                                <li>Cuisine</li>
                                <li>Salle de bain</li>
                                <li>Chambre à coucher, ...</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="imgBx">
                            <img src="image/menage.jpg" alt="photo ménage">
                        </div>
                        <div class="details">
                            <h3>Ménage et entretien</h3>
                            <ul class="compétence">
                                <li>Ménage courant habitation principale et location saisonnière</li>
                                <li>Ménage fin de travaux</li>
                                <li>Nettoyage verandas et vitres</li>
                                <li>Entretien parties communes d'immeuble</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="imgBx">
                            <img src="image/bricolage.jpg" alt="photo outils de bricolage">
                        </div>
                        <div class="details">
                            <h3>Bricolage</h3>
                            <ul class="compétence">
                                <li>Peinture, électricité, plomberie</li>
                                <li>Terrasse</li>
                                <li>Création et pose d'étagères</li>
                            </ul>
                        </div>
                    </div>

                </div>
                
            </section>

            <section id="about">
                <div class="title-container">
                    <div class="line"></div>
                        <h2>A propos de nous</h2>
                    <div class="line"></div>
                </div>
                <div class="texte1">
                    <p class="Apropos">Notre société basée sur penmarc’h a pour secteur d’activité le service aux particuliers et aux entreprises.
                        Nous assurons, pour vous, tous les petits travaux de bricolage et de ménage à votre domicile.
                        Laissez nous, réaliser à votre place, le ménage, l’entretien de votre jardin, les réparations, et autres petits bricolages de la maison.
                        Nous nous déplaçons pour définir ensemble les travaux à effectuer et rédiger un devis gratuit.
                    </p>
                    
                </div>
            </section>

            <section id="contact">
                <div class="title-container">
                    <div class="line"></div>
                        <h2>Contactez nous</h2>
                    <div class="line"></div>
                </div>

                <div class="formulaire">
                    <?php if(array_key_exists('errors', $_SESSION)): ?>
                        <div class="alert-danger">
                            <?= implode('<br>', $session['errors']); ?>
                        </div>
                    <?php endif; ?>

                    <?php if(array_key_exists('success', $_SESSION)): ?>
                        <div class="alert-success" style="background-color: #55ca5e54; height: 40px; display: flex; align-items: center; color: black; padding-left: 10px; margin-bottom: 10px; border: 1px dashed;">
                            Votre email nous est bien parvenu
                        </div>
                    <?php endif; ?>
                    
                    <form method="post" action="contact.php">
                        <label for="name">Nom:</label>
                        <input type="text" name="name" id="inputname" required placeholder="Nom" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>" />
                        
                        <label for="subject">Objet Du Message:</label>
                        <input type="text" name="subject" id="subject" required placeholder="Objet du message" value="<?= isset($_SESSION['inputs']['subject']) ? $_SESSION['inputs']['subject'] : ''; ?>"/>

                        <label for="phone">Téléphone:</label>
                        <input type="text" name="phone" id="phone" required placeholder="Votre numéro de téléphone" value="<?= isset($_SESSION['inputs']['phone']) ? $_SESSION['inputs']['phone'] : ''; ?>"/>

                        <label for="email">Email:</label>
                        <input type="email" name="email" id="inputemail" required placeholder="email@exemple.com" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>" />
                        
                        <label for="message">Message:</label>
                        <textarea name="message" id="inputmessage" required><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                        
                        <button type="submit" class="btn-envoie">Envoyer Mon Message</button>
                    </form>
                    </div>

            </section>
        </main>
        
        <footer>
			<div id="map"></div>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZfoz_XoAPRYcF93QvIIMXzXhebAOaphs"></script>
			<script>
				function initMap() {
					var location = {lat: 47.8213852190771, lng: -4.377136735582088}; //set latitude and longitude coordinates for your desired location
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 10, //set the zoom level of the map
						center: location //center the map on your desired location
					});
					var marker = new google.maps.Marker({
						position: location,
						map: map
					});
				}
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZfoz_XoAPRYcF93QvIIMXzXhebAOaphs&callback=initMap"></script>
			

			<div class="title-container2">
				<div class="line"></div>
					<h2>Conciergerie des Rochers</h2>
				<div class="line"></div>
			</div>
            <div class="info-container">
                <div class="item">
                    <img src="image/map.png" alt="Symbole addresse">
                    <div class="commentaire">
                        <p class="top">Notre Adresse:</p>
                        <p>51 rue de poul Briell, 29760 Penmarc'h</p>
                    </div>
                </div>
                <div class="item">
                    <img src="image/telephone.png" alt="Symbole télephone">
                    <div class="commentaire2">
                        <p class="top">Appelez nous:</p>
                        <p>07 81 81 18 25</p>
                    </div>
                </div>
                <div class="item">
                    <img src="image/mail.png" alt="Symbole mail">
                    <div class="commentaire">
                        <p class="top">Mail:</p>
                        <p>conciergeriedesrochers.29@gmail.com</p>
                    </div>
                </div>
            </div>    
			<P class="copyright">© Copyright 2023 | Conciergerie des rochers | Ferreira Justin</p>
		</footer>

    </body>

<script src="script.js"></script>

</html>


<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>
