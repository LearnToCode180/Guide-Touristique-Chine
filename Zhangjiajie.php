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
	<title>Zhangjiajie</title>
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


               <h2>Zhangjiajie :</h2>
        	     
               <a href="images/Zhangjiajie.jpg"><img src="images/Zhangjiajie.jpg" width="500px"></a>
               <p>une <strong>ville-préfecture</strong> du nord-ouest de la province du <strong>Hunan</strong> en <strong>Chine</strong>. Elle est située à 400 km de <strong>Changsha</strong>, capitale de cette province.<br>Le parc de <strong>Zhangjiajie</strong> s'étend sur une région de 130 km2 et bénéficie d'un climat subtropical et d'une <strong>biodiversité</strong> étonnante. Il abrite des variétés d'arbres rares et plusieurs espèces d’animaux en voie de disparition comme la panthère longibande2. Le parc a inspiré <strong>James Cameron</strong> pour son film <strong>Avatar2</strong>. Un pont en verre, <strong>le pont de verre de Zhangjiajie</strong>, y a été ouvert en 2016.</p>
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