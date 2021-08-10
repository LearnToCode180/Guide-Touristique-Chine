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
	<title>Remparts de Xi'an</title>
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

               <h2>Remparts de Xi'an :</h2>
        	     
               <a href="images/Remparts de Xi'an.jpg" ><img  class="image_profil" src="images/Remparts de Xi'an.jpg" width="500px" ></a>
               <p>La ville de <strong>Xi'an</strong> est une des anciennes capitales de la Chine. Elle est entourée de remparts (<strong>西安城墙</strong>) qui sont les plus anciens et les mieux conservés de Chine.Le mur qui se dresse actuellement autour de <strong>Xi'an</strong> a été construit en <strong>1370</strong> sous le règne de <strong>Zhu Yuanzhang</strong>, le premier empereur de la dynastie Ming. Aujourd'hui, les remparts de <strong>Xi'an</strong> ont des dimensions plus petites que celles du mur initial. Ils n'ont en effet que 13,7 km de circonférence, 12 m de haut, avec une épaisseur de 15 à 18 m. Des fortifications ont été érigées tous les 120 mètres (une distance égale à une portée de flèches) et chacune d'entres elles disposait d'un poste de guet pour abriter les sentinelles. Ces fortifications servaient à protéger la ville et à empêcher les envahisseurs de grimper sur les remparts. Il y a en tout 5.948 créneaux en haut des remparts de <strong>Xi'an</strong>. Et sous chaque créneau, se cache une meurtrière. Le côté intérieur du mur est plus bas, pour former un parapet. Cela permettait d'amortir les chutes éventuelles des soldats.</p>
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