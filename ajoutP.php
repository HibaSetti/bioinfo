<!DOCTYPE html>
<html>
<head>
	<title>Nouveau Patient</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
<div class="page">	
			<div class="container">
				<div class="home">
			     <a class="btn btn-primary" href="index.html" role="button">Accueil</a>			
                </div>		
		<div id="form-main">
		<div id="form-div">
			<form class="form" id="form1" method="post" action="forme_action.php">
			
			<p class="name">
				<input name="nom" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
			</p>
			<p class="name">
				<input name="prenom" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="prenom" id="name" />
			</p>
			<p class="email">
				<input name="naissance" type="date" class="validate[required,custom[email]] feedback-input" id="email" placeholder="date de naissance" />
			</p>
			<p class="name">
				<input name="tel" type="number" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
			</p>
			
			<div class="submit">
				<input type="submit" value="ajouter" id="button-blue"/>
				<div class="ease"></div>
			</div>
			</form>
		</div>
			</div>
			
</div>

</body>
</html>