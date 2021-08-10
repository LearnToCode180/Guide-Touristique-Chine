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







if( isset($_POST['supprimer']) )
{
   if( !empty($_POST['ide']) )
   {
       $ide = intval($_POST['ide']);
       $aide = 1;


       $req = $bdd->query('SELECT news_id from news');
       while ($donnees = $req->fetch())
       {
             if($donnees['news_id'] == $ide)
             {
                 $aide = 0;
                 break;
             }
       } 

       if($aide == 1)
       {
          $erreur = '<p class="erreur">Cette news n\'existe pas !!</p>';
          $mess ='<p class="para">voici la liste des news qui existent dans la base de donnees :</p>';

          $req = $bdd->query('SELECT news_id from news');
          while ($donnees = $req->fetch())
          {
             $ListeId[] = $donnees['news_id'];
          }    
          
       }

       else
       {
         $req = $bdd->prepare('DELETE from news where news_id=?');
         $req->execute(array($ide));
       
         $erreur = '<script> alert("News supprimee !!"); </script>';
       }


   }

   else
   {
      $erreur = '<p class="erreur">Veuillez remplir toutes les informations !!</p>';
   }


}

?>

<!DOCTYPE html>
<html>

<head>
	<title>La page de suppression :</title>
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

        	<h2 class="conn">Suppression des newsletter:</h2>
           
          <form method="POST" action="suppression.php">

            <p>Entrer le numero de la news que vous voulait supprimer :</p>
            
            <table>
              
              <tr>
                <td><input type="text" name="ide" id="ide" class="num" ></td>
              </tr>

              <tr>
                <td><input type="submit" name="supprimer" value="supprimer"></td>
              </tr>

            </table>
            
          </form>
                  <p><a class="aa" href="admin.php" >Retour a la page d'admin</a></p>
              <?php  
                     if(isset($erreur))
                     {
                         echo $erreur;
                     }

                     if(isset($mess))
                     {
                            echo $mess . '<p>';
                         foreach ($ListeId as $value) 
                         {
                             echo $value . '&nbsp;&nbsp;&nbsp;';
                         }
                         echo '</p>';
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