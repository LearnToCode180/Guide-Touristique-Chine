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
if( isset($_POST['s\'inscrire']) )
{
    if( !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) )
    {

           $nom=htmlspecialchars($_POST['nom']);
           $prenom=htmlspecialchars($_POST['prenom']);
           $email=htmlspecialchars($_POST['email']);


        $req = $bdd->prepare('INSERT INTO internaute(nom, prenom, email) VALUES(:nom, :prenom, :email)');

        $req->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email));

      $mess = '<script> alert("Operation reussite !!"); </script>';

    }

    else
    {
      $mess = '<p class="erreur">Veuillez remplir toutes les informations !!</p>';
    }
}

  ?>


<!DOCTYPE html>
<html>

<head>
	<title>Inscription d'internaute :</title>
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

      
          <h2>Inscriptions des internautes :</h2>




             <form method="POST" action="internaute.php">
               
                  <table class="tab">
                    
                    <tr>
                      
                      <td>
                      	<input type="text" name="nom" placeholder="nom" class="text">
                      </td>
                    </tr>

                    <tr>
                      <td>
                      	<input type="text" name="prenom" placeholder="prenom" class="text">
                      </td>
                    </tr>

                    <tr>
                      <td>
                      	<input type="email" name="email" placeholder="email">
                      </td>
                    </tr>

                    
                    <tr>
                      <td><input type="submit" value="s'inscrire" name="s'inscrire"></td>
                    </tr>
                     

                    
                    


                  </table>

             </form>

             
              <?php  
                     if(isset($mess))
                     {
                       echo $mess;
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