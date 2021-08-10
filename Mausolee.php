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
	<title>Mausolée de l'empereur Qin, Xi'an</title>
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
        
        <nav class="nav7">
        	
        	<a href="monuments.php">Sites et Monuments</a><br>
          <a href="villes.php">Index des villes</a><br>
          <a href="https://www.google.com/maps">Google map</a><br>
          <a href="Etablissements.php">Etablissements publics</a>

        </nav>

        <div class="emplacements">


               <h2>Mausolée de l'empereur Qin, Xi'an :</h2>
        	     
               <a href="images/Mausolée de l'empereur Qin, Xi'an.jpg"><img src="images/Mausolée de l'empereur Qin, Xi'an.jpg" width="500px"></a>
               <p>Situé au pied du versant nord du mont <strong>Lishan</strong>, à 35 kilomètres au nord-est de <strong>Xi'an</strong>, province du <strong>Shaanxi</strong>, le mausolée de Qin Shi Huang est le tombeau de l'empereur <strong>Qin Shi Huang</strong>, fondateur du premier empire unifié de l'histoire chinoise au cours du IIIe siècle avant J.-C. Commencé en 246 avant J.-C., le tombeau est  recouvert par un  tumulus d’une hauteur de 51,3 mètres et bâti à l'intérieur d'une enceinte rectangulaire à double paroi orientée nord-sud. Près de 200 puits contenant des milliers de guerriers et de chevaux en terre cuite grandeur nature, de chars et d’armes en bronze avec des sépultures et des vestiges architecturaux - une découverte de renommée mondiale - ; les vestiges totalisent plus de 600 sites dans la zone du bien qui couvre  56,25 kilomètres carrés. Selon l'historien <strong>Sima Qian</strong> (v. 145-95 avant J.-C.), des ouvriers venus de toutes <strong>les provinces de l'Empire</strong> travaillèrent sans relâche jusqu'à la mort de l'empereur en 210, pour édifier une ville souterraine à l'intérieur d'un gigantesque tumulus.</p>
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