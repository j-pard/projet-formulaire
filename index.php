<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">   
      <meta name="author" content="Jonathan PARDONS">
      <meta name="author" content="Léna BENOIT">
      <meta name="organization" content="BeCode">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
      <script src="https://kit.fontawesome.com/126bbe9047.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="./assets/css/style.css">
      
      <title>Hackers Poulette</title>
</head>
<body>
      <header>
            <!---Cookies--->
            <section id="alert" class="alert text-center cookiealert" role="alert">
                  <b>Tu aimes les cookies?</b> &#x1F36A; Nous utilisons des cookies pour vous assurez la meilleure expérience possible.<a href="https://cookiesandyou.com/" target="_blank">Plus</a>
                  <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
                      I have no choices
                  </button>
            </section>
            <!---Bar Nav--->
            <nav class="navbar navbar-expand-lg navbar-light bg-light font-weight-bold ">
                  <a class="navbar-brand" tabindex="n" href="#who"><img class="ml-3" src="assets/img/hackers-poulette-logoresize.png" alt="logo hacker poulette"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active text-left">
                        <a class="nav-link" tabindex="h" href="#jumbo">Accueil<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link"  tabindex="p" href="#products">Produits</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " tabindex="w" href="#who" tabindex="-1" aria-disabled="true">Qui sommes-nous?</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" tabindex="c" href="#contact">Contact</a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
                      <button class="btn btn-outline-light font-weight-bold my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </nav>
            <section class="jumbotron jumbotron-fluid  p-3 text-center border shadow-sm  ">
                  <article id="jumbo" class="container-fluid row p-3">
                        <div class="col-lg-6 text-center">
                              <h1 id="bat" class="  mb-3 font-weight-bold">Hackers Poulette</h1>
                              <h2 class="mb-4">Best selling reference for<br>Rasberry accessories</h2>
                              <h4 class="mb-4 font-weight-bold"> Ce mois-ci:</h4>
                              <p id="kitdescribe" class="text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, consectetur atque!
                               Necessitatibus, omnis velit iusto alias ipsam numquam sint laudantium totam eius aut corrupti consectetur dolorum odio maiores fugiat natus.
                              Cqui qui galere juste pour centrer un texte? C'est moiiiii</p>
                              <a href="#products"><button class="btn btn-outline-light font-weight-bold mb-2">Voir le kit</button></a> 
                        </div>
                        <figure class="col-lg-5 text-center">
                              <img class="rounded mx-auto d-block" id="kit" src="assets/img/kit.jpg" alt="kit rasberry">
                        </figure>
                  </article>
            </section>
      </header>
      <main class="border">
            <!-----Section produits---->
            <section class="container-fluid  text-center " id="products">            
                  <article class="container" >
                        <h2 class="mt-5 font-weight-bold">Produits en vente</h2>
                  </article>
            </section>
            <section id="product" class="row text-center p-1 p-md-5 shadow-sm m-0">
                  <div class="col-lg-3 card m-3" >
                        <div class="view overlay">
                              <img class="card-img-top img-shop" src="assets/img/fan.jpg"
                              alt="Tournevis + ventilateur">
                              <a href="#!">
                              <div class="mask rgba-white-slight"></div>
                              </a>
                        </div>
                        <div class="card-body ">
                              <h4 class="card-title">2,5€</h4>
                              <p class="card-text">L'ensemble de l'enveloppe extérieure est moulé par injection à partir d'un matériau ABS. La boîte inférieure est conçue avec un trou d'avion monté au mur, qui peut être fixé par n'importe quel mur. La surface est lisse et exquise, et la fente de carte bouclée est parfaitement conçue.</p>
                              <a href="#" class="btn btn-outline-light font-weight-bold">Plus</a>
                        </div>
                  </div>
                  <div class="col-lg-3 card m-3" >
                        <div class="view overlay ">
                              <img class="card-img-top img-shop" src="assets/img/hdmi.jpg"
                              alt="Cable HDMI">
                              <a href="#!">
                              <div class="mask rgba-white-slight"></div>
                              </a>
                        </div>
                        <div class="card-body ">
                              <h4 class="card-title">12€</h4>
                              <p class="card-text">Construit avec une coque en aluminium mince de qualité supérieure et une gaine en nylon tressée de haute qualité, ce câble HDMI peut résister à plus de 10 000 flexions sans réduire la flexibilité du câble et assurer les meilleures performances possibles. Lorem ipsum dolor sit amet.</p>
                              <a href="#" class="btn btn-outline-light font-weight-bold">Plus</a>
                        </div>
                  </div>
                  <div class="col-lg-3 card m-3">
                        <div class="view overlay">
                              <img class="card-img-top img-shop" src="assets/img/case.jpg"
                              alt="Boitier rasberry">
                              <a href="#!">
                              <div class="mask rgba-white-slight"></div>
                              </a>
                        </div>
                        <div class=" card-body">
                              <h4 class="card-title">9€</h4>
                              <p class="card-text">Raspberry Pi 4 modèle B avec processeur quad-core A72 à 1,5 GHz, New Soc BCM2711. Nouvelle mise à jour basée sur le Raspberry Pi 3 B. Bande passante triplée (filaire et sans fil) et capacité à maintenir des performances élevées plus longtemps. Sans ventilateur.</p>
                              <a href="#" class="btn btn-outline-light font-weight-bold">Plus</a>
                        </div>
                  </div>
                  <div class="col-lg-3 card m-3">
                        <div class="view overlay">
                              <img class="card-img-top img-shop" src="assets/img/card.jpg"
                              alt="Carte SD">
                              <a href="#!">
                              <div class="mask rgba-white-slight"></div>
                              </a>
                        </div>
                        <div class=" card-body">
                              <h4 class="card-title">3€</h4>
                              <p class="card-text">Les cartes microSDHC et microSDXC SanDisk Ultra sont rapides pour la réalisation de meilleures photos, des performances applicatives optimales et de la vidéo Full HD.</p>
                              <a href="#" class="btn btn-outline-light font-weight-bold">Plus</a>
                        </div>
                  </div>
                  <div class="col-lg-3 card m-3">
                        <div class="view overlay">
                              <img class="card-img-top img-shop" src="assets/img/rasp.jpg"
                              alt="Carte mère rasberry">
                              <a href="#!">
                              <div class="mask rgba-white-slight"></div>
                              </a>
                        </div>
                        <div class=" card-body">
                              <h4 class="card-title">19€</h4>
                              <p class="card-text">Raspberry Pi 3 Model B+ - Carte mère ultra-compacte avec processeur ARM Cortex-A53 Quad-Core 1.4 GHz - RAM 1 Go - HDMI - 4x USB 2.0 - Gigabit Ethernet - Wi-Fi AC Dual Band - Bluetooth 4.2.</p>
                              <a href="#" class="btn btn-outline-light font-weight-bold">Plus</a>
                        </div>
                  </div>
                  <div class="col-lg-3 card m-3">
                        <div class="view overlay">
                              <img class="card-img-top img-shop" src="assets/img/heat.jpg"
                              alt="diffuseur chaleur">
                              <a href="#!">
                              <div class="mask rgba-white-slight"></div>
                              </a>
                        </div>
                        <div class=" card-body">
                              <h4 class="card-title">5,5€</h4>
                              <p class="card-text">Dissipateur thermique en cuivre Pi 2/3 framboise avec pâte spéciale de refroidissement thermique 3M. apportera à votre module une parfaite dissipation de la chaleur.</p>
                              <a href="#" class="btn btn-outline-light font-weight-bold">Plus</a>
                        </div>
                  </div>
            </section>
            <!---Section Qui sommes-nous/WHO----> 
            <section class="container-fluid p-1 p-md-5 shadow-lg" id="who">
                  <h2 class="font-weight-bold text-center m-4 m-md-1">Qui sommes-nous?</h2>
                  <article class="row container-fluid text-center">
                        <div id="describeQ" class="col-lg-8 col-md-12 text-right p-1 p-md-5">
                              <p>Chez Hackers Poulette, nous nous intéressons à tout ce qui a trait à la technologie, qu'il s'agisse de construire de nouveaux outils et d'aider les gens à enseigner l'informatique, de faire des recherches sur la façon dont les jeunes apprennent à créer avec la technologie ou de réfléchir au rôle que la technologie joue dans nos vies et dans la société. Aujourd'hui, j'écris sur notre habitude de remplacer les appareils par des versions plus récentes juste pour le plaisir.</p>
                        </div>
                        
                        <figure class="col-lg-4 col-md-12">
                              <img  src="assets/img/hackers-poulette-logo.png" alt="logo hacker poulette">
                        </figure>
                        
                  </article>           
            </section>

            
            <!---FORMULAIRE CONTACT--->
            <section class="container-fluid p-5 shadow-lg" id="contact">
                  <h2 class="h2-responsive font-weight-bold text-center my-4">Contact us</h2>
                  <p class="text-center w-responsive mx-auto mb-5">Vous avez des questions ? Des avis? N'hésitez pas à nous contacter via
                        ce formulaire, nos équipes prendront le soin d'y répondre aussi vite que possible.</p>
                  <div id="form-cont" class="row ">
                        <div id="list-cont" class="col-md-3 text-center d-flex align-items-center">
                              <ul class="list-unstyled mb-0">
                                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                      <p>Coq d'Or, Charleroi, BE</p>
                                  </li>
                  
                                  <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                      <p>+ 02 284 547 23</p>
                                  </li>
                  
                                  <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                      <p>hackerspoulette@gmail.com</p>
                                  </li>
                              </ul>
                        </div>

                        <form id="contact-form" action="message.php" method="POST">
                                    <label class="inline-label" for="gender">Civilité : 
                                          <select name="gender" id="gender" required>
                                                <option value="">-- Genre --</option>
                                                <option value="male">Mr.</option>
                                                <option value="female">Mme.</option>
                                                <option value="other">Autre</option>
                                          </select>
                                    </label>
                        
                                    <label class="inline-label" for="nationality">Nationalité: 
                                          <?php 
                                                include("./ressources/nationality.html");
                                          ?>
                                    </label>
                        
                                    <label class="inline-label" for="lastname">Nom: <input type="text" name="lastname" id="lastname" placeholder="Nom" required></label>
                                    <label class="inline-label" for="firstname">Prénom: <input type="text" name="firstname" id="firstname" placeholder="Prénom" required></label>
                                    <label class="inline-label" for="email">Email: <input type="email" name="email" id="email" placeholder="exemple@email.org" required></label>
                        
                                    <label for="subject">Objet: 
                                          <select class="break" name="subject" id="subject" required>
                                                <option value="commands">Suivi de commande</option>
                                                <option value="technical">Informations techniques</option>
                                                <option value="aftersale">Après-vente</option>
                                                <option value="other">Autre</option>
                                          </select>
                                    </label>
                                    
                                    <label for="message">Message: 
                                          <textarea class="break" name="message" id="message" placeholder="Votre message" required></textarea>
                                    </label>
                                    
                                    <div id="buttons">
                                          <input class="btn btn-outline-light font-weight-bold" type="reset" name="reset" value="Réinitialiser">
                                          <input class="btn btn-outline-light font-weight-bold" id="submit" type="submit" name="submit" value="Envoyer" disabled="true">
                                    </div>
                        
                              </form>
                      
                  </div>
              </section>
      </main>
      <div class="container-fluid p-0" id="video">
            <video src="assets/img/futu.mp4" autoplay muted loop></video>
      </div>
      <footer class="page-footer shadow-sm font-small lighten-3 pt-4 container-fluid">
            <div class="container text-center text-md-left">
                  <div class="row">
                        <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
                              <h5 id="poulette" class="font-weight-bold text-uppercase mb-4">Hackers Poulette</h5>
                              <p>Commandes, précommandes, retours, nous mettons tout en place pour convenir à vos envies.</p>
                              <p>Cela fait maintenant de nombreuses années que nos clients ont une totale confiance
                              en nos services. Toute notre équipe ainsi que le directeur vous remercie chaleureusement
                              </p>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div id="site" class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
                              <h5 class="font-weight-bold text-uppercase mb-4">SITE</h5>
                              <ul class="list-unstyled">
                              <li>
                              <p>
                                    <a href="#products" tabindex="p">Produits</a>
                              </p>
                              </li>
                              <li>
                              <p>
                                    <a href="#who" tabindex="w">A propos</a>
                              </p>
                              </li>
                              <li>
                              <p>
                                    <a href="#contact" tabindex="c">Liens</a>
                              </p>
                              </li>
                              <!-- <li>
                              <p>
                                    <a href="#!">Panier</a>
                              </p>
                              </li> -->
                              </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
                              <h5 class="font-weight-bold text-uppercase mb-4">Adresse</h5>
                              <ul class="list-unstyled">
                              <li>
                              <p>
                                    <i class="fas fa-home mr-3"></i>Coq d'Or, Charleroi, BE</p>
                              </li>
                              <li>
                              <p>
                                    <i class="fas fa-envelope mr-3"></i>hackerspoulette@gmail.com</p>
                              </li>
                              <li>
                              <p>
                                    <i class="fas fa-phone mr-3"></i> +04 234 567 88</p>
                              </li>
                              <li>
                              <p>
                                    <i class="fas fa-print mr-3"></i> +02 232 657 89</p>
                              </li>
                              </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-md-2 col-lg-3 text-center mx-auto my-4">
                              <h5 class="font-weight-bold text-uppercase mb-4">Suivez-nous</h5>
                              <a href="https://www.facebook.com" tabindex="f" type="button" class="btn-floating btn-fb">
                              <i class="fab fa-facebook-f fa-2x"></i>
                              </a>
                              <a href="https://www.twitter.com" tabindex="t" type="button" class="btn-floating btn-tw">
                              <i class="fab fa-twitter fa-2x"></i>
                              </a>
                              <a href="https://www.linkedin.com" tabindex="l" type="button" class="btn-floating btn-in">
                              <i class="fab fa-linkedin-in fa-2x"></i>
                              </a>
                              <a href="https://www.dribbble.com" tabindex="d" type="button" class="btn-floating btn-dribbble">
                              <i class="fab fa-dribbble fa-2x"></i>
                              </a>
                        </div>
                  </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2020 Copyright:<a id="hack" href="#"> HackersPoulette.com</a></div>          
      </footer>

      <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="./assets/js/script.js"></script>
</body>

</html>