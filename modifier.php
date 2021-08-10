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

if(isset($_GET['test']))
{
  $erreur = '<p class="mess">Operation reussite !!</p>';
}

if( isset($_POST['modifier']) )
{
   

   if( !empty($_POST['titre']) )
   {
       $titre =$_POST['titre'];
       $aide = 1;


       $req = $bdd->query('SELECT titre from news');
       while ($donnees = $req->fetch())
       {
             if($donnees['titre'] == $titre)
             {
                 $aide = 0;
                 break;
             }
       } 

       if($aide == 1)
       {
          $erreur = '<p class="erreur">Cette news n\'existe pas !!</p>';
       }
       else
       {
           header("location: modification.php?titre=$titre");
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
	<title>Modification des news:</title>
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

      
          <h2 class="conn">Modification des newsletter:</h2>

            <form method="POST" action="modifier.php">
              
            <p>Donnez le titre de la newsletter que vous voulez modifier :</p>
            
            <table>
              
              <tr>
                <td><input type="text" name="titre" id="titre" ></td>
              </tr>

              <tr>
                <td><input type="submit" name="modifier" value="modifier"></td>
              </tr>

            </table>




            </form>



<p><a class="aa" href="admin.php" >Retour a la page d'admin</a></p>
             

             

             
 <?php  
                     if(isset($erreur))
                     {
                       echo $erreur;
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