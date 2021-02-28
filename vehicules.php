<! DOCTYPE html>
<html>
	<head>
		<title>Parking </title>
		
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	</head>
	
	
	<body>
		
		<center><h1>Parking</h1></center>
		
		<!-- afficher les donées dans le tableau -->
		<center><table class="table table-dark">
		  <thead>
			<tr>
			  <th scope="col">Categories de vehicule</th>
			  <th scope="col">Immatriculation</th>
			   <th scope="col"></th>
			</tr>
		  </thead>
	<tbody>
		<!-- connexion a la base de donnée parking -->
		<?php
				require 'DataBase.php';
				$db = Database::connect();
				$statement = $db->query('SELECT  * FROM vehicule ');
				while($vehicule = $statement->fetch())
				{
					echo"<tr>";
					echo "<td>" .$vehicule['Categorie']."</td>";
					echo "<td>" .$vehicule['Immatriculation']."</td>";
					
					echo "<td width=300>";
					echo '<a class="btn btn-success" href="placelibre.php">reservez votre place</a>';
					echo "</tr>";
				}
				Database::disconnect();
				
		?>
	</tbody>
		</table></center>
		<center><p>Categorie A : deux-roues <br> Categorie B : Voiture particulier <br> Categorie C : Camionette </p></center>
	</body>
</html>