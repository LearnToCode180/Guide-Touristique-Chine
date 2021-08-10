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

$reqi = $bdd->prepare('SELECT date_publication,titre,resume,contenu from news where news_id=?');
$reqi->execute(array($_GET['ide']))
       

?>

<!DOCTYPE html>
<html>

<head>
	<title>Description des news</title>
	<link rel="stylesheet" type="text/css" href="miniProjet.css">
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
        
        <div class="navv">
        	
        	<a href="monuments.php">Sites et Monuments</a><br>
        	<a href="villes.php">Index des villes</a><br>
        	<a href="https://www.google.com/maps">Google map</a><br>
        	<a href="Etablissements.php">Etablissements publics</a>

        </div>

        <div class="emplacemen">
         
          <?php 


                       while ($donnees = $reqi->fetch())
                       {
           
                             echo '<h6 class="hh">' . $donnees['titre'] . '</h6>';

                             echo '<h3>Date de publication :</h3><p>' . $donnees['date_publication'] . '</p>';

                             echo '<h3>Resume :</h3><p>' . $donnees['resume'] . '</p>';

                             echo '<h3>Contenu :</h3><p>' . $donnees['contenu'] . '</p>';

                       }
 

           ?>

        	
        </div>

   <div class="video">
        	
        <video src="images/video.mp4" controls width="400" poster="images/poster.jpg"></video>

        <div class="newsletter">
             
             <?php 
                    for($i=0 ; $i<$cmp ; $i++)

                    {
                        echo '<h4>' . $dates[$i] . '</h4>';

                        echo '<h5>' . $titres[$i] . '</h5>'; 

                        echo '<a <a href="description.php?ide=' . $id[$i] .'">Cliquer ici pour plus de details</a><br><br>';
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