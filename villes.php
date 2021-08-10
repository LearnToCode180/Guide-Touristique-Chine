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
	<title>Les principales villes:</title>
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
        
        <nav class="nav1">
        	
        	<a href="Monuments.php">Sites et Monuments</a><br>
        	<a href="villes.php">Index des villes</a><br>
        	<a href="https://www.google.com/maps">Google map</a><br>
        	<a href="Etablissements.php">Etablissements publics</a>

        </nav>

        <div class="emplacements">


               <h2>Voici les trois villes les plus connues en Chine:</h2>
        	     

                <h3>Pekin</h3>
                
                <a href="images/pek2.jpg" ><img src="images/pek2.jpg" width="600px"></a>
<div class="galerie">  
                <a href="images/pek1.jpg" ><img src="images/pek1.jpg"></a>
               <a href="images/pek3.jpg" ><img src="images/pek3.jpg"></a>
               <a href="images/pek4.jpg" ><img src="images/pek4.jpg"></a>
        </div>
                <ul>
                    <li><strong>Nom complet :</strong>Beijing (北京）.</li><br>
                    <li><strong>Superficie :</strong>16 800 km².</li><br>
                    <li><strong>Population :</strong>plus ou moins 21 millions (les autorités ont néanmoins annoncé qu'elles entendaient plafonner la population résidente à 23 millions de personnes d'ici 2020).</li><br>
                    <li><strong>Densité : </strong> 1 289 habitants/km².</li>
                </ul>
                
                <h3>Hong Kong</h3>
                
                <a href="images/hong1.jpg" ><img src="images/hong1.jpg" width="600px"></a>
        <div class="galerie">  
               <a href="images/hong2.jpg" ><img src="images/hong2.jpg"></a>
                <a href="images/hong3.jpg" ><img src="images/hong3.jpg"></a>
                <a href="images/hong4.jpg" ><img src="images/hong4.jpg"></a>
        </div>
   
             <ul>
                    <li><strong>Nom complet :</strong>Hong Kong (chinois : 香港 ; pinyin : Xiānggǎng）.</li><br>
                    <li><strong>Superficie :</strong>1 104 km2.</li><br>
                    <li><strong>Population :</strong>7 466 441 hab.</li><br>
                    <li><strong>Densité : </strong> 6 763 hab./km2</li>
                    
                </ul>

            
            <h3>Shanghai </h3>
                
                <a href="images/sha1.jpg" ><img src="images/sha1.jpg" width="600px"></a>
        <div class="galerie">  
               <a href="images/sha2.jpg" ><img src="images/sha2.jpg"></a>
               <a href="images/sha3.jpg" ><img src="images/sha3.jpg"></a>
               <a href="images/sha4.png" ><img src="images/sha4.png"></a>
        </div>
   
             <ul>
                    <li><strong>Nom complet :</strong>Shanghai (chinois : 上海 ; pinyin : Shànghǎi) .</li><br>
                    <li><strong>Superficie :</strong> 6 340 km2 .</li><br>
                    <li><strong>Population :</strong> 24 150 000 hab.</li><br>
                    <li><strong>Densité : </strong> 3 809 hab/km2.</li>
                </ul>

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