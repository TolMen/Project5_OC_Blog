<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Blog de Jessy"
    />
    <meta name="mobile-web-app-capable" content="yes" />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../../../public/asset/img/LogoSite.png"
    />
    <link rel="stylesheet" type="text/css" href="../../../public/css/csshome/HomeStyle.css" />
    <title>Project5_OC_Blog</title>
  </head>
  <body>
    <!-- En-tête de page -->
    <header>
      <nav>
        <ul>
          <li><a href="#">IndexA</a></li>
          <li><a href="#">IndexB</a></li>
          <li><a href="#">Ressources</a></li>
        </ul>
      </nav>
      <div class="top-page">
        <img src="../../../public/asset/img/LogoSite.png" alt="Logo site" />
        <h2>
          Jessy <br />
          FRACHISSE
        </h2>
        <p class="phraseAccroche">
          Explorez l'univers fascinant de l'informatique : inspirations,
          découvertes et astuces sont à découvrir !
        </p>
      </div>
    </header>

    <!-- Section Formulaire -->
    <section class="formulaire">
      <div class="box">
        <span class="borderLine"></span>
        <form>
          <h2>Je t'écoute</h2>
          <div class="inputBox">
            <input type="text" required="required" />
            <span>Nom</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="text" required="required" />
            <span>Prénom</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="email" required="required" />
            <span>E-Mail</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="text" required="required" />
            <span>Message</span>
            <i></i>
          </div>
          <div class="radiobox">
            <input type="radio" name="radiobox" id="radioboxFormContact">
            <label for="radioboxFormContact">J'accepte que mes données soient collectées afin d'être recontactées par le propriétaire du site.</label>
          </div>
          <div class="g-recaptcha" data-sitekey="VOTRE_CLÉ_RECAPTCHA"></div>
          <input type="submit" value="Envoyer" />
        </form>
      </div>
    </section>

    <!-- Pied de page -->
    <footer>
      <div class="boite1">
        <nav class="boite-reseaux">
          <ul>
            <li>
              <a target="_blank" href="https://github.com/TolMen"
                ><ion-icon name="logo-github"></ion-icon
              ></a>
            </li>
            <li>
              <a
                target="_blank"
                href="https://www.linkedin.com/in/jessyfrachisse/"
                ><ion-icon name="logo-linkedin"></ion-icon
              ></a>
            </li>
            <li>
              <a href="../../../public/asset/dl/CVJessy.pdf" download="CVJessy"
                ><ion-icon name="download"></ion-icon
              ></a>
            </li>
            <!-- Rajouter li + a pour un autre réseau  -->
          </ul>
        </nav>
        <p>©2023 Jessy | Tous les droits sont réservés</p>
      </div>
    </footer>

    <!-- Script pour les icônes -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
