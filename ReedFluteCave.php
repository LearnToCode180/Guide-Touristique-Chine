<?php

$bdd = new PDO('mysql:host=localhost;dbname=test;port=3308;charset=utf8', 'root', '');

$req = $bdd->query('SELECT date_publication,titre,news_id from news');
       
$cmp=0;

       while ($donnees = $req->fetch())
       {
           if($cmp<3)
           {
              $titres[] = $donnees['titre'];
              $dates[] = $donnees['date_publication'];
              $id[] = $donnees['news_id'];
              $cmp++;
           }

           else
           {
            break;
           }

       }

?>

<!DOCTYPE html>
<html>

<head>
	<title>Reed Flute Cave</title>
	<link rel="stylesheet" type="text/css" href="monuments.css">
	<meta charset="utf-8">
</head>

<body>

	<header>

    
	
		<div class="banniere">
		<ul>

			<a href="miniProjet.php">Acceuil</a>
                     <a href="plan.php">Plan du site</a>
                     <a href="informationsPersonnelles.php">Qui suis-je</a>
                     <a href="contact.php">Contact</a>
		</ul>
        </div>
    </header>
   
<div id="block">

   <section>
        
        <nav class="nav5">
        	
        	<a href="monuments.php">Sites et Monuments</a><br>
          <a href="villes.php">Index des villes</a><br>
          <a href="https://www.google.com/maps">Google map</a><br>
          <a href="Etablissements.php">Etablissements publics</a>

        </nav>

        <div class="emplacements">


               <h2>Reed Flute Cave :</h2>
        	     <a href="images/Reed Flute Cave.jpg"><img src="images/Reed Flute Cave.jpg" width="500px"></a>
               <p>Brillante grotte karstique marquée sur presque tous les itinéraires de voyage, <strong>Reed Flute Cave</strong> tire son nom des roseaux verdoyants poussant à l'extérieur, avec lesquels les gens fabriquent des flûtes. En fait, cette grotte érodée par l’eau abrite un monde spectaculaire de stalactites, de piliers en pierre et de formations rocheuses créées par des dépôts de carbonate. Éclairé par une lumière colorée, le spectacle fantastique se décline en plusieurs variantes. En se promenant dans les piliers de pierre serrés, les touristes se régalent des yeux sur des lieux changeants, se sentant dans <strong>un paradis</strong> où vivent les dieux.
                <h2>Caracteristiques :</h2>
                <div class="cara">

<strong>Lieu:</strong> 5 kilomètres au nord-ouest du centre-ville de Guili<br>
<strong>Taille:</strong> 240 mètres de profondeur; la hauteur maximale de 18 mètres (59 pi); le point le plus large 93 mètres <br>

<strong>Longueur du circuit:</strong> environ 500 mètres<br>
 
<strong>De quoi se cache l’intérieur:</strong> un monde spectaculaire composé de différentes stalactites, piliers de pierre et formations rocheuses <br>

<strong>Quel âge:</strong> environ 700 000 ans <br>

<strong>À sa découverte:</strong> en 1959</p>
                </div>
        </div>

   <div class="video">
        	
        <video src="images/video.mp4" controls width="400" poster="images/poster.jpg"></video>

        <div class="newsletter">
             
             <?php 
                    for($i=0 ; $i<$cmp ; $i++)

                    {
                        echo '<h4>' . $dates[$i] . '</h4>';

                        echo '<h5>' . $titres[$i] . '</h5>'; 

                        echo '<a href="description.php?ide=' . $id[$i] .'">Cliquer ici pour plus de details</a><br><br>';
                    }

                     
                     echo '<a class="news" href="news.php">Toutes les news<a>';
             ?>

        </div>
                    <a href="internaute.php">S'inscrire a la newsletter</a><br>
                 <a href="connexion.php">Se connecter</a><br>
                 <a href="recherche.php">Recherche des news</a>
   </div>


</section>

    
    	



    <footer>
    	
    	<div class="bas">
    	    <p>SUGGESTIONS</p>
            <p>CONDITIONS D'UTILISATION</p>
        </div>

        <p>COPY RIGHT 21458 2019/2020</p>
        
    </footer>


</div>



</body>

</html>