<?php 




	//connexion à la base de données
	
try 
{
$bdd = new PDO('mysql:host=localhost;dbname=ghrv;charset=utf8', 'root', 'root');
}
catch (Exception $e){
	echo "erreur";
}

//fonction qui calcule la distance euclidienne entre deux données 
function distanceEuclidienne($vector1, $vector2)
    {
        $n = count($vector1);
        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            $sum += ($vector1[$i] - $vector2[$i]) * ($vector1[$i] - $vector2[$i]);
        }
        return sqrt($sum);
    }

    //fonction qui détermine les k plus proches voisins
    function kNN($k, $vecteurDistance,$vecteurId){
    	$plusProchesDistance = array();
    	$plusProches= array();
    	$j=0;
    	//premier remplissage 
    	for($i=0;$i<$k;$i++){
    		$plusProchesDistance[$i]=$vecteurDistance[$i];
    	}
    	//avoir les distances les plus proches 
    	for($i; $i<sizeof($vecteurDistance);$i++)
    		
			{ 
				$b=0;$l=0;
				while (($l<$k)AND($b==0)) {
					
				
					if($vecteurDistance[$i] < $plusProchesDistance[$l])
					{
						$plusProchesDistance[$l]=$vecteurDistance[$i];
						$b=1;
					}
					else
					$l++;
				}
			}
			//get les identifiants des plus proches distances à utiliser plus tard (décision)
		for($i=0;$i<sizeof($plusProchesDistance);$i++){
			for($l=0;$l<sizeof($vecteurDistance);$l++)
			{
					if($plusProchesDistance[$i]==$vecteurDistance[$l]){
						$plusProches[$j]=$vecteurId[$l];
						$j++;
					}
			}
		}
			return $plusProches;
    }

// classification
    function classification($vectorPlusProches,$nombreClasse){
    	try{
    		$bdd = new PDO('mysql:host=localhost;dbname=ghrv;charset=utf8', 'root', 'root');
    	}
    	catch (Exception $e){
    		 die('Erreur : ' . $e->getMessage());
    	}
    	$idd=array();
    	$nS=0;
    	$nM=0;
    	//$nombreApparitionClasse = array();
    	$reponse = $bdd->query('SELECT * FROM dataset');
    	while ($donnees = $reponse->fetch()){
    		for($i=0;$i<sizeof($vectorPlusProches);$i++){
    			if($donnees['id']==$vectorPlusProches[$i])
    			{
    				if($donnees['classe']=="malade"){
    					$nM++;
    				}
    				elseif ($donnees['classe']=="sain") {
    					$nS++;
    				}
    			}	
    		}
    		

    	}
    	$reponse->closeCursor();
    	

			    
		if($nM>$nS)
			$cl="malade";
		else
			$cl="sain";
		
		
		return $cl;





    }
     function getObservation($k, $vecteurDistance,$vecteurId,$nombreClasse){
		
    	$t=classification(kNN($k,$vecteurDistance,$vecteurId),$nombreClasse);
    	return $t;
    	

    }
//récupèrer les données saisies  dans un tableau
$newInformation = array ('1','2','3','4','5','6','7','8','9','10','11','12','13','14');
if(isset($_POST['SystoliqueJ1'])AND isset($_POST['SystoliqueJ2'])AND isset($_POST['SystoliqueJ3'])AND isset($_POST['SystoliqueJ4'])AND isset($_POST['SystoliqueJ5'])AND isset($_POST['SystoliqueJ6'])AND isset($_POST['SystoliqueJ7']) AND isset($_POST['diastoliqueJ1'])AND isset($_POST['diastoliqueJ2'])AND isset($_POST['diastoliqueJ3'])AND isset($_POST['diastoliqueJ4'])AND isset($_POST['diastoliqueJ5'])AND isset($_POST['diastoliqueJ6'])AND isset($_POST['diastoliqueJ7'])AND isset($_POST['nom'])AND isset($_POST['prenom'])AND isset($_POST['naissance'])){


$newInformation[0]= $_POST['SystoliqueJ1'];
$newInformation[2]=$_POST['SystoliqueJ2'];
$newInformation[4]=$_POST['SystoliqueJ3'];
$newInformation[6]=$_POST['SystoliqueJ4'];
$newInformation[8]=$_POST['SystoliqueJ5'];
$newInformation[10]=$_POST['SystoliqueJ6'];
$newInformation[12]=$_POST['SystoliqueJ7'];
$newInformation[1]=$_POST['diastoliqueJ1'];
$newInformation[3]=$_POST['diastoliqueJ2'];
$newInformation[5]=$_POST['diastoliqueJ3'];
$newInformation[7]=$_POST['diastoliqueJ4'];
$newInformation[9]=$_POST['diastoliqueJ5'];
$newInformation[11]=$_POST['diastoliqueJ6'];
$newInformation[13]=$_POST['diastoliqueJ7'];




}
//vecteur tableau qui vas contenir les données d'une ligne 
$vecteur=array( '1','2','3','4','5','6','7','8','9','10','11','12','13','14');

//distances c 'est le tableau qui vas contenir la distance entre la nouvelle donnée et la base d'apprentissage 
$distances= array();
$identifiant=array();
$reponse = $bdd->query('SELECT * FROM dataset');

//parcourir la base de données ligne par ligne et remplissage du tableau distances 
$i=0;
while ($donnees = $reponse->fetch())
{
		$vecteur[0]= $donnees['SystoliqueJ1'];
		$vecteur[2]=$donnees['SystoliqueJ2'];
		$vecteur[4]=$donnees['SystoliqueJ3'];
		$vecteur[6]=$donnees['SystoliqueJ4'];
		$vecteur[8]=$donnees['SystoliqueJ5'];
		$vecteur[10]=$donnees['SystoliqueJ6'];
		$vecteur[12]=$donnees['SystoliqueJ7'];
		$vecteur[1]=$donnees['DiastoliqueJ1'];
		$vecteur[3]=$donnees['DiastoliqueJ2'];
		$vecteur[5]=$donnees['DiastoliqueJ3'];
		$vecteur[7]=$donnees['DiastoliqueJ4'];
		$vecteur[9]=$donnees['DiastoliqueJ5'];
		$vecteur[11]=$donnees['DiastoliqueJ6'];
		$vecteur[13]=$donnees['DiastoliqueJ7'];

		$distances[$i]=distanceEuclidienne($newInformation,$vecteur);
		$identifiant[$i]=$donnees['id'];

		$i++;

}

$reponse->closeCursor(); // Termine le traitement de la requête
foreach($distances as $element)
{
    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
foreach ($identifiant as $value) {
	echo $value.'<br/>';
}

$name=$_POST['nom'];
$pren=$_POST['prenom'];
$nais=$_POST['naissance'];
$str=getObservation(1,$distances,$identifiant,2);

$reponse = $bdd->query('SELECT * FROM patient ');
while ($donnees = $reponse->fetch())
{
	if($donnees['nom']==$name AND $donnees['prenom']==$pren AND $donnees['naissance']==$nais)
	 $identif=$donnees['id'];
}

$reponse->closeCursor();


echo getObservation(1,$distances,$identifiant,2);

$req = $bdd->prepare('INSERT INTO evaluation (idPatient,nom,prenom,SoJ1,DoJ1,SoJ2,DoJ2,SoJ3,DoJ3,SoJ4,DoJ4,SoJ5,DoJ5,SoJ6,DoJ6,SoJ7,DoJ7,observation) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$req->execute(array($identif,$_POST['nom'], $_POST['prenom'],$vecteur[0],$vecteur[1],$vecteur[2],$vecteur[3],$vecteur[4],$vecteur[5],$vecteur[6],$vecteur[7],$vecteur[8],$vecteur[9],$vecteur[10],$vecteur[11],$vecteur[12],$vecteur[13],getObservation(1,$distances,$identifiant,2)));


?>