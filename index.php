<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>CV Antoine Coignac</title>
  <meta name=description content="CV Antoine Coignac" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>

<body>
  <header>
    <a href="menu.html"><img src="images/menu.png" alt="" /></a>
  </header>
  <main>
    <section id="hautdepage">
      <h1><a href="#Presentation">DECOUVRIR LE CV</a></h1>
    </section>
    <div id="Presentation">
      <h2>• Présentation</h2>
      <div class="contentPrésentation">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ipsam incidunt eum, voluptatibus molestiae ullam ipsum atque veniam asperiores nisi repudiandae. Ab odit blanditiis debitis enim odio ipsa, quia doloribus dolorum minima eligendi rerum soluta obcaecati asperiores ex dolore excepturi modi voluptate corrupti vero, explicabo amet quae cupiditate vel? Debitis suscipit pariatur quisquam consequuntur nulla soluta consectetur minima nisi, nihil aliquid dolor ratione labore facere? Doloremque, rerum. Non quasi eveniet reiciendis odio aut nam cumque dolorem laboriosam unde facere excepturi, ad esse et. Magnam minima provident nesciunt id eligendi rem quam, architecto aliquam nulla dignissimos placeat deleniti repellat dolore a quis impedit tempora atque. At dignissimos rem magni esse commodi laborum doloremque nihil cum perspiciatis, qui repellendus officia nemo aliquam eos error facilis quam, atque consectetur ducimus ratione sed unde. Nesciunt, asperiores dignissimos beatae aut quibusdam cupiditate laborum. Harum dicta magni illo repellendus est minima sequi labore eaque, sapiente nobis animi atque expedita veniam adipisci ducimus possimus nam hic eum consequatur quisquam tempora. Consequatur unde dolorem porro odit cum vel enim sed facilis. Necessitatibus ipsum eveniet nulla reiciendis omnis obcaecati minima aspernatur, sed molestiae cumque quae magni ea rerum itaque, dolor numquam sint. Iste fuga optio similique facilis? Quas, pariatur? Tempora voluptates tenetur aliquam quia exercitationem, ipsum id dicta corporis iusto vel, necessitatibus tempore. Quo tempore reprehenderit excepturi eius neque explicabo et? Dolor obcaecati eum totam accusantium aliquid perferendis optio esse eligendi explicabo ducimus, atque quae recusandae ab commodi similique tempora perspiciatis magnam quis voluptatem! Quos laborum facilis molestiae corrupti! Et illo aspernatur quos repellendus, inventore, voluptatem suscipit officiis omnis asperiores ad qui culpa, similique iste repudiandae! Voluptatum natus accusamus exercitationem atque hic est ducimus quo. Iure nobis animi sit? Repellat laboriosam aliquam suscipit eligendi quam vitae ex, doloribus veniam!</p>
        <img src="images/1200x900.png" alt="" />
      </div>
    </div>
    <div id="Competences">
      <h2>• Compétences</h2>
      <div class="contentCompétences">
        <img src="images/logiciels.svg" alt="" />
        <div id="competencesLogiciels">
          <?php
          $lecteur = new SplFileObject("informations/logiciels.csv", 'r');
          while ($lecteur->eof() == false) {
            $ligne = $lecteur->fgets();
            if ($ligne != "") {
              $tab = explode(";", $ligne);
              $nom = $tab[0];
              $valeur = $tab[1];
            }
          ?>
            <div class="logiciel">
              <div class="blocDescriptionLogiciel">
                <div class="descriptionLogiciel">
                  <h3 class="titreLogiciel"><?php echo ($nom); ?> (<?php echo ($valeur); ?> mois)</h3>
                </div>
              </div>
              <div class="nomBarre">
                <progress max="55" value="<?php echo ($valeur); ?>"></progress>
              </div>
            </div>
          <?php
          }
          $lecteur = null;
          ?>
        </div>
        <img src="images/langages.svg" alt="" />
        <div id="competencesLangages">
          <?php
          $lecteur = new SplFileObject("informations/langages.csv", 'r');
          while ($lecteur->eof() == false) {
            $ligne = $lecteur->fgets();
            if ($ligne != "") {
              $tab = explode(";", $ligne);
              $nom = $tab[0];
              $valeur = $tab[1];
            }
          ?>
            <div class="langage">
              <div class="blocDescriptionLangage">
                <div class="descriptionLangage">
                  <h3 class="titreLangage"><?php echo ($nom); ?> (<?php echo ($valeur); ?> mois)</h3>
                </div>
              </div>
              <div class="nomBarre">
                <progress max="27" value="<?php echo ($valeur); ?>"></progress>
              </div>
            </div>
          <?php
          }
          $lecteur = null;
          ?>
        </div>
      </div>
    </div>
    <div id="QualitesDefauts">
      <h2>• Qualités</h2>
      <div class="contentQualitésDéfauts">
        <div><img src="images/1200x900.png" alt="" /><h3>Impliqué</h3></div>
        <div><img src="images/1200x900.png" alt="" /><h3>Créatif</h3></div>
        <div><img src="images/1200x900.png" alt="" /><h3>Efficace</h3></div>
        <div><img src="images/1200x900.png" alt="" /><h3>Organisé</h3></div>
        <div><img src="images/1200x900.png" alt="" /><h3>Cultivé</h3></div>
      </div>
    </div>
    <div id="Parcours">
      <h2>• Parcours</h2>
      <div class="contentParcours">
        <img src="images/1200x900.png" alt="" />
        <p><span>PRIMAIRE</span><br>
          <i>École publique Haut-Chemin, 35740 Pacé</i><br>
          <br>
          A l’école primaire, je commence déjà à m’intéresser à la peinture, au sport, aux jeux vidéos mobiles, je commence à jouer de la guitare et prends donc des cours.<br>
          <br>
          <span>COLLEGE</span><br>
          <i>Collège publique Françoise Dolto, 35740 Pacé</i><br>
          <br>
          Au collège, je réalise mes premiers projets dans le domaine du multimédia, avec la réalisation de nombreuses vidéo dans le cadre des études. Je réalise notamment des concepts de publicités en 3ème avec mes camarades et cela me plaît beaucoup. Je m’investis aussi dans la vie associative du collège, en intégrant un club de journalisme en 3ème et la section d’athlétisme de la 6ème à la 3ème. Lors de mon temps libre, je pratique l’athlétisme en compétition, je continue les cours de guitare et commence le chant. En 2017, je lance ma chaîne YouTube de divertissement sur les jeux vidéos. Cela me permet d’apprendre le montage vidéo sur Wondershare Filmora 9, j’apprends également à animer pour retenir le spectateur et je réalise des designs de logos, des bannières ainsi que des miniatures attractives sur PhotoFiltre 7.<br>
          <br>
          <span>LYCEE</span><br>
          <i>Lycée publique Victor et Hélène Basch, 35000 Rennes</i><br>
          <br>
          Au lycée, j’ai énormément pratiqué puisque je me suis impliqué dans de nombreux projets scolaires et extrascolaires. En première, je prends les spécialités Maths, NSI et Physique-Chimie et en terminal, je garde Maths et NSI avec l’option Maths expertes. Je fais de nombreuses présentations orales en groupe ou individuellement et je réalise généralement le design des diapositives. Durant ces 3 années, je réalise des vidéos en Anglais et Espagnol, dont 3 projets principaux : une interview dans lequel on crée un clip musical, un court métrage et une vidéo préventive sur la pollution, en lien avec la protection animale. En dehors des cours, je développe ma chaîne YouTube et commence à faire des lives cela me permet de me rapprocher de ma communauté et de proposer des évènements comme des tournois de jeux vidéos en direct. Vers la fin du lycée, je m’investis dans l’esport associatif en tant que responsable WebTv, ce qui me permet de créer des overlays et faire de l’animation 2d. Sur le plan sportif, je continue les compétitions et deviens entraîneur des petits au sein du club.<br>
          <br>
          <span>BAC +1</span><br>
          <i>IUT MMI, 53000 Laval</i><br>
          <br>
          Après mon bac, je me dirige vers un IUT MMI afin de mettre à profit les compétences que j’ai acquise mais surtout en apprendre d’avantage. Je développe, apprends et expérimente dans différents domaines comme le développement web, la production de vidéos web et le graphisme. Je coach désormais les benjamins et les minimes à l’athlétisme et continue la course à pied en compétition. Je continue l’esport mais en tant que joueur et pour cela je m’entraîne de nombreuses heures par semaine.<br>
          Voici où en est ma chaîne YouTube aujourd’hui :<iframe height="50px" width="175px" frameborder="0" src="https://livecounts.org/compteur-youtube/NetoStream" allowfullscreen></iframe>
        </p>
      </div>
    </div>
    <div id="Realisations">
      <h2>• Réalisations</h2>
      <div class="contentRéalisations">
        <div>
          <img src="images/pvadroyale.jpg" alt="" />
          <h3> ►</h3>
        </div>
        <div>
          <img src="images/pvesport.jpg" alt="" />
          <h3> ►</h3>
        </div>
        <div>
          <img src="images/pvaffiches.jpg" alt="" />
          <h3> ►</h3>
        </div>
        <div>
          <img src="images/pvshowop.jpg" alt="" />
          <h3> ►</h3>
        </div>
        <div>
          <img src="images/pvyoutube.jpg" alt="" />
          <h3> ►</h3>
        </div>
      </div>
    </div>
    <div id="Contact">
      <h2>• Contact</h2>
      <div class="contentContact">
        <p>Email : acoignac35@gmail.com<br>Tel : 0781694950<br><br>Twitter : <a href="https://twitter.com/NetoStream">@NetoStream</a><br>Instagram : <a href="https://www.instagram.com/netostream/">@netostream</a><br>Linkedin : <a href="https://vu.fr/ifv0">Antoine Coignac</a><br>YouTube : <a href="https://vu.fr/5fG4">NetoStream</a></p>
        <form action="contact.php" method="get">
          <label for="nom">Nom</label>
          <br>
          <input id="nom" type="text" name="nom" size="40" />
          <br>
          <br>
          <label for="email">Email</label>
          <br>
          <input id="email" type="email" name="adresseMail" size="40" />
          <br>
          <br>
          <label for="mess">Message</label>
          <br>
          <textarea id="mess" name="mess" cols="80" rows="5"></textarea>
          <br>
          <br>
          <input class="bouton" type="submit" value="ENVOYER" />
          <input class="bouton" type="reset" value="ANNULER" />
        </form>
      </div>
    </div>
  </main>
  <footer>
    <a href="#hautdepage"><img src="images/flechetop.png" alt="" /></a>
  </footer>

</body>

</html>