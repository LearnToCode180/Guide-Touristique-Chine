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
	<title>Les monuments</title>
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
        
        <nav>
        	
        	<a href="Monuments.php">Sites et Monuments</a><br>
        	<a href="villes.php">Index des villes</a><br>
        	<a href="https://www.google.com/maps">Google map</a><br>
        	<a href="Etablissements.php">Etablissements publics</a>

        </nav>

        <div class="emplacements">

               <h2>Couvent de Chi Lin (Hong Kong) :</h2>
        	     
               <a href="images/Couvent.jpg" ><img  class="image_profil" src="images/Couvent.jpg" width="300px" ></a>
               <p>Ce temple bouddhiste a été bâti en <strong>1934</strong> puis rénové en <strong>1990</strong>. Couvrant un espace de plus de 33 000 mètres carrés, le complexe du temple comprend un couvent, ainsi que des halls, jardins, auberges pour les visiteurs et un restaurant végétarien.</p>

               
               <h2>Grand Bouddha de Hong Kong:</h2>
               
               <a href="images/Grand Bouddha de Hong Kong.jpg" ><img  class="image_profil" src="images/Grand Bouddha de Hong Kong.jpg" width="300px" ></a>
               <p>Le Bouddha de Tian Tan, mesurant 34 mètres de haut, est situé au sommet de la colline de Ngong Ping, sur l'île de Lantau à Hong Kong. Sa construction a débuté en <strong>1990</strong>
               pour se terminer en décembre <strong>1993</strong>.</p>

               
               <h2>Temple du ciel (Pékin):</h2>
               
               <a href="images/Temple du ciel.jpg" ><img  class="image_profil" src="images/Temple du ciel.jpg" width="300px" ></a>
               <p>Le Temple du ciel est un autel sacrificiel impérial localisé dans le sud de Pékin. Celui-ci a été construit de <strong>1406</strong> à <strong>1420</strong> pendant le règne de l'Empereur Yongle. Il figure sur la liste du patrimoine mondial de l'UNESCO depuis <strong>1998</strong>.</p>
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