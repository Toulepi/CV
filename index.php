<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />  <!-- Permet de supporter les "Glyphicons" sous BS4 -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>Toulépi</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="80">
    <div class="container d-flex">
        <nav class="navbar navbar-expand-sm fixed-top">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav nav-pills d-flex flex-wrap">  <!-- les classes "d-flex" et "flex-wrap" permettent d'éviter le débordement -->
                    <li class="nav-item"><a href="#about" class="nav-link active">Moi</a> </li>
                    <li class="nav-item"><a href="#skills" class="nav-link">Compétences</a> </li>
                    <li class="nav-item"><a href="#experiences" class="nav-link">Expériences</a> </li>
                    <li class="nav-item"><a href="#education" class="nav-link">Education</a> </li>
                    <li class="nav-item"><a href="#portfolio" class="nav-link">Portfolio</a> </li>
                    <li class="nav-item"><a href="#recommandations" class="nav-link">Recommandations</a> </li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a> </li>
                </ul>
            </div>
        </nav>
    </div>

    <section id="about" class="container-fluid">
        <div class="row">
            <div class="heading col-12 col-sm-8">
                <p>Bonjour, je suis Toulépi</p>
                <h3>Développeur d'Application Web & Mobile</h3>
                <h3>Ingénieur Energie</h3>
                <a href="docs/CV-TCHINDA%20TOULEPI.pdf" class="button1" target="_blank">Télécharger CV</a>
            </div>
            <div class="col-12 col-sm-4 profile-picture">
                <img src="images/me.jpg" alt="image Toulépi" class="rounded-circle">
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="red-divider">
        </div>
        <div class="heading">
            <h2>Compétences</h2>
        </div>
        <div class="container">
           <div class="row">
               <div class="col-12 col-sm-6">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped " style="width:90%">
                            <h5>HTML 90%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" style="width: 80%">
                            <h5>CSS 80%</h5>
                        </div>
                    </div>
                    <div class="progress" id="jsProgress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 60%">
                            <h5>JavaScript 60%</h5>
                        </div>
                    </div>
               </div>

                <div class="col-12 col-sm-6">
                    <div class="progress ">
                        <div class="progress-bar progress-bar-striped" style="width: 80%">
                            <h5>Bootstrap 80%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" style="width: 70%">
                            <h5>PHP 70%</h5>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 65%">
                            <h5>SQL 65%</h5>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>

    <section id="experiences">
        <div class="container-fluid">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Expériences Professionnelles</h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>FEREST Energies</h3>
                                <h4>Ingénieur Projet</h4>
                                <h5>Performance Energétique Industrielle</h5>
                                <p class="text-muted"><i class="fas fa-clock"></i> 2016</p>
                            </div>
                            <div class="timeline-body">
                                <p> Valorisation énergétique de biomasse</p>
                                <p>Récupération et valorisation de chaleur fatale</p>
                                <p>Réalisation de cartographies énergétiques</p>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>FEREST Energies</h3>
                                <h4>Ingénieur Adjoint</h4>
                                <h5>Audit Energétique Industriel</h5>
                                <p class="text-muted"><i class="fas fa-clock"></i> 2015</p>
                            </div>
                            <div class="timeline-body">
                                <p> Visite de sites industriels</p>
                                <p>Analyse de factures</p>
                                <p>Préparation et chiffrage de solutions d'économies d'énergies</p>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>BH Thermique</h3>
                                <h4>Ingénieur Adjoint</h4>
                                <h5>Etude Thermique</h5>
                                <p class="text-muted"><i class="fas fa-clock"></i> 2014-2015</p>
                            </div>
                            <div class="timeline-body">
                                <p> Calcul des déperditions thermiques du bâtiment</p>
                                <p>Etude RT2012, RT Existant et RT2005</p>
                                <p>Optimisation de l'enveloppe thermique du bâtiment</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

    </section>

    <section id="education">
        <div class="container-fluid">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Education</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="education-block">
                        <h5><i class="fas fa-clock"></i> 2013 - 2016</h5>
                        <span class="fas fa-graduation-cap"></span>
                        <h3>École Mines Douai</h3>
                        <h4>Diplôme d'Ingénieur Energie</h4>
                        <div class="red-divider"></div>
                        <p>Energétique Industrielle</p>
                        <p>Efficacité Energétique</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="education-block">
                        <h5><i class="fas fa-clock"></i> 2018</h5>
                        <span class="fas fa-graduation-cap"></span>
                        <h3>frenchMaker.io</h3>
                        <h4>Formation online "Développeur Web"</h4>
                        <div class="red-divider"></div>
                        <p>HTML/CSS, Javascript</p>
                        <p>Responsive Design</p>
                        <!--<p>Hébergement, noms de domaine</p>-->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="education-block">
                        <h5><i class="fas fa-clock"></i> Mai-Oct 2020</h5>
                        <span class="fas fa-graduation-cap"></span>
                        <h3>Alt-Rh-Consulting</h3>
                        <h4>Formation RNCP 3 "Développeur d'Application Web & Mobile"</h4>
                        <div class="red-divider"></div>
                        <p>HTML5/CSS3, Javascript, jQuery</p>
                        <p>PHP, Bases de données SQL, MySQL</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Portfolio</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3>Agence de Voyage</h3>
                    <h4>Html5 & Css3</h4>
                    <a href="projets/travelAgency/index.html" target="_blank">
                        <img src="images/trip.png" alt="trip" class="img-thumbnail">
                    </a>
                </div>

                <div class="col-md-4">
                    <h3>Lancé du Dé</h3>
                    <h4>Html5/Css3, JS & jQuery</h4>
                    <a href="projets/Lancé de Dé/index.html" target="_blank">
                        <img src="images/dice.png" alt="jeu du Dé" class="img-thumbnail">
                    </a>
                </div>

                <div class="col-md-4">
                    <h3>Converter</h3>
                    <h4>Html5, Css3 & PHP</h4>
                    <a href="projets/projetConverter/index.php" target="_blank">
                        <img src="images/converter.png" alt="snake" class="img-thumbnail">
                    </a>
                </div>
            </div>

            <!--
                <div class="col-md-6">
                    <h3>Compagnie Aérienne</h3>
                    <h4>Base de données, mySQL</h4>
                    <a href="http://www.actors.touleps.com" target="_blank">
                        <img src="images/BDD" alt="BDD" class="img-thumbnail">
                    </a>
                </div>
            -->

        </div>
    </section>

    <section id="recommandations">
        <div class="container">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Recommandations</h2>
            </div>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide="1" ></li>
                    <li data-target="#myCarousel" data-slide="2" ></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h3>"Ayez le courage de commencer et le courage de ne pas renoncer."</h3>
                        <h4>Maxime VICTOR, Firme Maxime Victor Inc</h4>
                    </div>
                    <div class="carousel-item">
                        <h3>"Toulépi est quelqu'un qui ne rechigne pas à la tâche!"</h3>
                        <h4>Laurent DELANNOY, Responsable du pôle ENR&R chez FEREST Energies</h4>
                    </div>
                    <div class="carousel-item">
                        <h3>"Durant votre formation, on vous apprend à apprendre."</h3>
                        <h4>Joachim ZADI, Enseignant & Développeur Full-Stack</h4>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>

    <section id="contact">

        <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Contact</h2>
            </div>

            <form id="contact-form" method="post" action="php/form_submit.php" target="_blank" class="needs-validation" autocomplete="off">  <!--method="post"-->
                <div class="row">
                    <div class="col col-12 col-sm-6 form-group">
                        <label for="firstname">Prénom <sup>*</sup></label>  <!-- "for" permet de faire un focus sur l'id "firstname" -->
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder = "Votre prénom" required>  <!-- le label marche avec un 'id'; "value" permet d'afficher les données de l'utilisateur en 2nd instance -->
                        <div class="valid-feedback"><!-- Saisie valide--></div>
                        <div class="invalid-feedback"><!--SVP veuillez remplir ce champ.--></div>
                    </div>
                    <div class="col col-12 col-sm-6">
                        <label for="name">Nom <sup>*</sup></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-12 col-sm-6">
                        <label for="email">Email <sup>*</sup></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"><!--Ce champ est requis.--></div>
                    </div>
                    <div class="col col-12 col-sm-6">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre numéro de téléphone" >
                    </div>
                </div>

                <div class="row">
                    <div class="col col-12 col-sm-12 ">
                        <label for="subject">Sujet</label>
                        <select name="sujet" id="subject" class="form-control">
                            <option value="Quel est le sujet de votre message ?">Quel est le sujet de votre message ?</option>
                            <option value="Je voudrais avoir plus d'infos sur tes services">Je voudrais avoir plus d'infos sur tes services</option>
                            <option value="J'aimerais recevoir un devis">J'aimerais recevoir un devis</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="message">Message <sup>*</sup></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4" required></textarea>
                    </div>
                </div>


                <div>
                    <h5>Ces informations sont requises (*)</h5>
                </div>
                <div class="col-12">
                    <input type="submit" class="button1" value="Envoyer">
                </div>

            </form>
        </div>
    </section>

    <footer class="text-center">
        <a href="#about">
            <i class="fas fa-chevron-up"></i>
        </a>
        <h5> Copyright © 2020. Tous droits réservés</h5>
    </footer>

    <script src="js/jQuery.js" defer></script>
    <script src="js/bootstrap.min.js" defer ></script>
    <script src="js/script.js" defer></script>
</body>
</html>