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
	<title>Le plan de site :</title>
	<link rel="stylesheet" type="text/css" href="monuments.css">
	<meta charset="utf-8">
</head>

<body>

	<header>

    
    <div class="heading">
      
    </div>
	  
		<div id="banniere">

          <ul>

             <a  class="humberger" onclick="openSideBar()"></a>
             <a href="miniProjet.php" class="con1">Acceuil</a>
             <a href="plan.php" class="con1">Plan du site</a>
             <a href="informationsPersonnelles.php" class="con1">Qui suis-je</a>
             <a href="contact.php" class="con">Contact</a>

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

            <h2>Voici le plan de ce site:</h2>


                  <a class="aaaa" href="miniProjet.php">Acceuil</a>
                  <a class="aaaa" href="informationsPersonnelles.php">Informations personnelles</a>
                  <a class="aaaa" href="contact.php">Contact</a>
                  <a class="aaaa" href="monuments.php">Differents monuments</a>
                  <a class="aaaa" href="villes.php">Villes principales</a>
                  <a class="aaaa" href="Etablissements.php">Etablissements publics</a>
                  <a class="aaaa" href="https://www.google.com/maps">Google map</a>
                  <a class="aaaa" href="connexion.php">connexion d'admin</a>
                  <a class="aaaa" href="recherche.php">Recherche de news</a>
            
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