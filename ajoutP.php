<!DOCTYPE html>
<html>
<head>
	<title>Nouveau Patient</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<form method="post" action="forme_action.php">
        <div class="row">
			<div class="col">
			  <input type="text" name="nom" class="form-control" placeholder="Nom" >
			</div>
			<div class="col">
			 <input  type="text" name="prenom" class="form-control" placeholder="Prenom">
            </div>
       </div> 
			<input type="date" name="naissance"><br>
			<input type="number" name="tel"><br>
			<input type="submit" value="Valider" />

 
	</form>
</div>

</body>
</html>