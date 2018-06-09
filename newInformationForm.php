<!DOCTYPE html>
<html>
<head>
	<title>projet</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css"
</head>
<body>
		

<div class="page">
	<div class="container">

	<div class="home">
			     <a class="btn btn-primary" href="index.html" role="button">Accueil</a>			
				</div>
	<div id="form-main">
		<div id="form-div">
           <form method="post" action="traitementBD.php">
 
			<input required type="text"  class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nom" name="nom">
			<input required type="text"  class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Prenom" name="prenom"><br>
			<input required type="date"  class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="date de naissance"name="naissance" required=""><br>
			
			<input required type="number" step="0.01" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="systo jour1" name="SystoliqueJ1">
			<input required type="number" step="0.01"  class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="diasto jour1" name="diastoliqueJ1"><br>
		
			<input required type="number" step="0.01" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="systo jour2"  name="SystoliqueJ2">
			<input required type="number" step="0.01"  class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="diasto jour2"name="diastoliqueJ2"><br>
			
			<input required type="number" step="0.01" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="systo jour3" name="SystoliqueJ3">
			<input required type="number" step="0.01"  class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="diasto jour3"name="diastoliqueJ3"><br>
			<input required type="number" step="0.01" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="systo jour4" name="SystoliqueJ4">
			<input required type="number" step="0.01"  class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="diasto jour4"name="diastoliqueJ4"><br>
			<input required type="number" step="0.01" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="systo jour5" name="SystoliqueJ5">
			<input required type="number" step="0.01"  class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="diasto jour5"name="diastoliqueJ5"><br>
			<input required type="number" step="0.01" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="systo jour6" name="SystoliqueJ6">
			<input required type="number" step="0.01"  class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="diasto jour6"name="diastoliqueJ6"><br>
			<input required type="number" step="0.01" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="systo jour7" name="SystoliqueJ7">
			<input required type="number" step="0.01"  class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="diasto jour7"name="diastoliqueJ7"><br>
			<!--<select required name="ComboBox">
			      <option>Femme</option>
			      <option>Homme</option>
			      
    		</select>
    		-->
			<input required type="submit" value="Valider" id="button-blue" />
		</form>
		</div>
</div>
</div>
</div>

</body>
</html>