<?php

$bdd = new PDO('mysql:host=localhost;dbname=test;port=3308;charset=utf8', 'root', '');

$req = $bdd->query('SELECT date_publication,titre,news_id from news order by date_publication desc');
       
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
	<title>La page principale</title>
	<link rel="stylesheet" type="text/css" href="miniProjet.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro|Roboto|PT+Serif&display=swap" rel="stylesheet">
	<meta charset="utf-8">
</head>

<body>



  <div id="top"><img src="images/top.png" width="50"></div>

	<div id="block1">


       

       <div class="heading">
         
          
          <h1 class="title">Welcome to the China world</h1>
          <a id="down">Let's start</a>


       </div> 

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
   

        <script>
          
            function openSideBar()
            {
                document.getElementById('block').style.marginLeft = '220px';
                document.getElementById('banniere').style.marginLeft = '200px';
                document.getElementById('nav').style.width = '200px';
                document.getElementById('block1').style.opacity = '0.6';
                document.getElementById('block2').style.opacity = '0.6';
                document.getElementById('banniere').style.opacity = '0.6';


            }

            function closeSideBar()
            {
                document.getElementById('block').style.marginLeft = '0px';
                document.getElementById('banniere').style.marginLeft = '0px';
                document.getElementById('nav').style.width = '0px';
                document.getElementById('block1').style.opacity = '1';
                document.getElementById('block2').style.opacity = '1';
                document.getElementById('banniere').style.opacity = '1';
            }



            const up = document.getElementById('top');

            window.addEventListener("scroll", goTop);

            function goTop()
            {
              if(window.pageYOffset > 200)
              {
               up.style.display = "block";
              }
              else
              {
               up.style.display = "none";
              }
            }

             up.addEventListener("click", goUp);

            function goUp()
            {
              window.scrollTo(0,0);
            }

            document.getElementById('down').addEventListener("click",goDown);

            function goDown()
            {
              window.scrollTo(0,660);
            }

        </script>





  
   


   <section id="block">
        
        <nav id="nav">
        	
          <a  class="button"  onclick="closeSideBar()">&times;</a>
        	<a href="monuments.php">Sites et Monuments</a><br>
        	<a href="villes.php">Index des villes</a><br>
        	<a href="https://www.google.com/maps">Google map</a><br>
        	<a href="Etablissements.php">Etablissements publics</a>

        </nav>

      <div id="block2"> 

        <div class="emplacements">

        	<h1>Voici la Chine en bref:</h1>
              
            
            <ul>
            	
               <li><strong>Nom officiel :</strong>R??publique populaire de Chine (?????????????????????).</li><br>
               <li><strong>Capitale :</strong> P??kin/Beijing (21 millions d'habitants).</li><br>
               <li><strong>Superficie du pays :</strong>9 600 000 km??.</li><br>
               <li><strong>Langue officielle </strong>chinois (mandarin ou putonghua).</li><br>
               <li><strong>Chef de l'Etat :</strong>Xi Jinping (?????????).</li><br>
               <li><strong>Premier ministre :</strong>Li Keqiang (?????????).</li><br>
               <li><strong>Chef des arm??es : </strong>Xi Jinping.</li><br>
               <li><strong>Secr??taire g??n??ral du Parti communiste :</strong>Xi Jinping.</li><br>
               <li><strong>Villes principales :</strong>P??kin/Beijing (21 millions d'habitants), Shanghai (24 millions d'habitants), Canton/Guangzhou (10 millions), Chongqing (29 millions), Hong Kong (8 millions).</li><br>
               <li><strong>Population totale (estimations 2016) :</strong>1,379 milliard d'habitants.</li><br>
               <li><strong>Population urbaine :</strong>53 %</li><br>
               <li><strong>Densit?? :</strong>144 hab./km??.</li><br>
               <li><strong>Esp??rance de vie :</strong>76 ans.</li><br>
               <li><strong>Religions principales : </strong>bouddhisme, tao??sme, islam, catholicisme, protestantisme.</li><br>
               <li><strong>Taux de croissance :</strong>croissance ?? deux chiffes depuis 2003. Une baisse en 2009 (8,7 %) et de nouveau une croissance ?? deux chiffres d??s 2010 (10,3 %). Pour 2016, les estimations sont de plus ou moins 7 % (6,7 %).</li><br>
               <li><strong>PIB:</strong>11 800 milliards de dollars en 2016.</li><br>
               <li><strong>PNB par habitant : </strong>8 480 dollars/habitant.</li><br>


            </ul>
    <div class="em">

            <div class="e e1">
               
               <div class="ctn"> 

                 <h2>Zhangjiajie :</h2>                             
                 <p>une <strong>ville-pr??fecture</strong> du nord-ouest de la province du <strong>Hunan</strong> en <strong>Chine</strong>. Elle est situ??e ?? 400 km de <strong>Changsha</strong>, capitale de cette province.<br>Le parc de <strong>Zhangjiajie</strong> s'??tend sur une r??gion de 130 km2 et b??n??ficie d'un climat subtropical et d'une <strong>biodiversit??</strong> ??tonnante. Il abrite des vari??t??s d'arbres rares et plusieurs esp??ces d???animaux en voie de disparition comme la panth??re longibande2. Le parc a inspir?? <strong>James Cameron</strong> pour son film <strong>Avatar2</strong>. Un pont en verre, <strong>le pont de verre de Zhangjiajie</strong>, y a ??t?? ouvert en 2016.</p>

               </div>
                   
            </div>

            <div class="e e2">
               
               <div class="ctn"> 

                 <h2>Centre mondial des finances de Shanghai :</h2>                             
                 <p>Bien qu'il ne s'agisse pas d'un monument historique, haut de ses <strong>492 m??tres</strong>, c'est l'un des plus grands gratte-ciel du monde. Celui-ci est situ?? dans le district de Pudong. Et avec ses <strong>101 ??tages</strong> hors sol, la tour du World Financial Center est d??sormais d??pass??e par la tour <strong>Shanghai</strong> qui culmine ?? <strong>632 m</strong>.</p>

               </div>
                   
            </div>

            <div class="e e3">
               
               <div class="ctn"> 

                 <h2>Reed Flute Cave :</h2>              
                 <p>Brillante grotte karstique marqu??e sur presque tous les itin??raires de voyage, <strong>Reed Flute Cave</strong> tire son nom des roseaux verdoyants poussant ?? l'ext??rieur, avec lesquels les gens fabriquent des fl??tes. En fait, cette grotte ??rod??e par l???eau abrite un monde spectaculaire de stalactites, de piliers en pierre et de formations rocheuses cr????es par des d??p??ts de carbonate. ??clair?? par une lumi??re color??e, le spectacle fantastique se d??cline en plusieurs variantes. En se promenant dans les piliers de pierre serr??s, les touristes se r??galent des yeux sur des lieux changeants, se sentant dans <strong>un paradis</strong> o?? vivent les dieux.</p>

               </div>
                   
            </div>

              
  </div>

   <div class="video">
        	
        <video src="images/video.mp4" controls width="730" poster="images/entete9.jpg"></video>

    </div>

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
   


</section>

  

    <footer>

        <div class="footer1">                 

            <a href="#"><img src="images/facebook.png"></a>
            <a href="#"><img src="images/linkedin.png"></a>
            <a href="#"><img src="images/whatsapp.png"></a>
            <a href="#"><img src="images/twitter.png"></a>

        </div>
    
    <div class="footer2">
      <p> Copyright ?? 2020 My website </p>
    </div>
        
        
    </footer>


    

    



</body>

</html>