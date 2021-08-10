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



$req = $bdd->prepare('SELECT * from news where titre=? limit 1');
    $req->execute(array($_GET['titre']));
     
    while ($donnees = $req->fetch())
    {
        $t = $donnees['titre'];
        $r = $donnees['resume'];
        $c = $donnees['contenu'];
        $d = $donnees['date_publication'];
    }



if(isset($_POST['modifier2']))
{
    

  if( !empty($_POST['titre1']) && !empty($_POST['resume']) && !empty($_POST['contenu']) && !empty($_POST['date_pub']) )
    {

     $req = $bdd->prepare('delete from news where titre=?');
     $req->execute(array($_GET['titre2']));

    $req = $bdd->prepare('INSERT INTO news(titre, resume, contenu, date_publication) VALUES(:titre1, :resume, :contenu, :date_pub)');

    $req->execute(array(
                  'titre1' => $_POST['titre1'],
                  'resume' => $_POST['resume'],
                  'contenu' => $_POST['contenu'],
                  'date_pub' => $_POST['date_pub'],
                  
                  ));

    
    header("location: modifier.php?test='bien'");
    
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

            

<p>Donnez les nouvelles valeurs de cette news :</p>

<form method="POST" action="modification.php?titre2=<?php if(isset($_GET['titre'])) { echo $_GET['titre'];} ?>">
               
              <table class="tab">
                    
                    <tr>
                      
                      <td>
                        <input type="text" name="titre1" placeholder="titre" value="<?php echo $t; ?>">
                      </td>
                    </tr>

                    <tr>
                     
                      <td>
                        <textarea rows="4" cols="30" placeholder="resume" name="resume" ><?php echo $r; ?></textarea>
                      </td>
                    </tr>

                    <tr>
                     
                      <td>
                        <textarea rows="6" cols="42" placeholder="contenu" name="contenu" ><?php echo $c; ?></textarea>
                      </td>
                    </tr>


                    <tr>
                     
                      <td>
                        <label for="date">date de publication :</label>
                        <input type="date" name="date_pub" id="date" value="<?php echo $d; ?>">
                      </td>
                    </tr>
                    
                    <tr>
                      <td><input type="submit"  name="modifier2"></td>
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