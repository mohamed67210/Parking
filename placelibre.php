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
		<table class="table table-dark">
		  <thead>
			<tr>
			  <th scope="col">nom du parking</th>
			  <th scope="col">numero de place</th>
			   <th scope="col"></th>
			</tr>
		  </thead>
						
						<form method="POST" >
						  <div class="form-group">
						  <label>
						  <h2>Selectionner votre categorie de vehicule </h2>
						  </label>
						  <select class="form-control form-control-lg" name="categorie">
							  <option>selectionner categorie :</option>
							  <option> categorie A </option>
							  <option>categorie B </option>
							  <option>categorie C </option>
						  </select>
						  <label>
						  <h2>Selectionner votre categorie de vehicule </h2>
						  </label>
						    <select class="form-control form-control-lg"name="nomparking">
							  <option>selectionner le nom du paking :</option>
							  <option >zone A </option>
							  <option>zone B </option>
							  <option>zone C </option>
						    </select>
							
						  <center><button type="submit" name="chercher" class="btn btn-success  mt-2">Chercher</button></center>
						</form>
			<tbody>
				<?php
				if(isset($_POST['chercher']))
					{
						require 'DataBase.php';
						$db = Database::connect();
						
						$chercher= $db->prepare("SELECT * FROM placedeparking WHERE NomParking=:nomparking AND CategorieVehicule=:categorie");
						$chercher->bindParam("nomparking",$_POST['nomparking']);
						$chercher->bindParam("categorie",$_POST['categorie']);
						$chercher->execute();
						
						while($placedeparking = $chercher->fetch())
						{
							echo"<tr>";
							echo "<td>" .$placedeparking['NomParking']."</td>";
							echo "<td>" .$placedeparking['NumeroPlace']."</td>";
							echo "<td width=300>";
							echo '<a class="btn btn-success" href="reserverplace.php">reservez cette place</a>';
							echo "</tr>";
						}
					}
					?>
					
			</tbody>
		</table>
		<h1>Reservez votre place </h1>
		<!-- heure d'entree -->
		<div class="form-group row">
		  <label for="example-time-input" class="col-2 col-form-label">Heure d'entrée</label>
		  <div class="col-10">
			<input class="form-control" type="time" value="13:45:00" id="example-time-input">
		  </div>
		</div>
		<!-- heure de sortie prevue -->
		<div class="form-group row">
		  <label for="example-time-input" class="col-2 col-form-label">Heure de sortie prevue</label>
		  <div class="col-10">
			<input class="form-control" type="time" value="14:45:00" id="example-time-input">
		  </div>
		</div>
		<!-- immatriculation  -->
		<div class="form-group row">
		  <label for="example-text-input" class="col-2 col-form-label">Immatriculation du vehicule</label>
		  <div class="col-10">
			<input class="form-control" type="text"  id="example-text-input">
		  </div>
		</div>
		<!-- numero de place -->
		<div class="form-group row">
		  <label for="example-text-input" class="col-2 col-form-label">Numéro de place </label>
		  <div class="col-10">
			<input class="form-control" type="text"  id="example-text-input">
		  </div>
		</div>
		<center><button type="submit" name="valider" class="btn btn-success  mt-2">Valider</button></center>
	</body>
</html>