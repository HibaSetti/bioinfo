<!DOCTYPE html>
<html>
<head>
	<title>Nouveau Patient</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   
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