
<!DOCTYPE html>
<html lang="fr">
 <head>
   <title></title>
 </head>
 <body>
    
  <form method="post">
  <label for="login">pseudo: </label>
  <input type="text" id="login" name="nom" placeholder="votre nom"> <br/><br/>
  <label for="login">mot de passe : </label>
  <input type="password" name="password" placeholder=" mot de passe"> <br/><br/>
  <input type="submit" value="valider"><br/><br/>
 
 </form>
  <?php
  //recuperer le nom et le mot de passe a partir de le formulaire  -empty pr si la requete poste est videalors je traite//
  if(!empty($_POST)){
	  echo $_POST["nom"];</br></br>
	  echo $_POST["password"];

	//recuperer ip //

	  $ip = $_SERVER['REMOTE_ADDR'];
	  echo 'Votre adresse IP est : ' . $ip; 

 }




/* Créer un formulaire qui demande un login et un mot de passe */

/** puis une fois le formulaire validé, afficher :
* - Le login
* - Le mot de passe
* - L'adresse ip du client
*/
 ?>
</body>
</html>