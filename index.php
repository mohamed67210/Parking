
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
			  <th scope="col">numero de client</th>
			  <th scope="col">Nom</th>
			   <th scope="col">Prenom</th>
			   <th scope="col">Adresse</th>
			   <th scope="col">abonnement ok ?</th>
			   <th scope="col"></th>
			   
			  
			</tr>
		  </thead>
						
						<form method="POST">
						  <div class="form-group">
							<label >Numéro de Client</label>
							<input type="text" class="form-control" name="id" aria-describedby="emailHelp" placeholder="Enter votre numéro de client">
							<small id="emailHelp" class="form-text text-muted">Exemple:124.</small>
						  </div>
						  <div class="form-group">
							<label >Nom de client</label>
							<input type="text" class="form-control mt-2"  name="nom" placeholder="Entrez votre Nom">
							<small id="emailHelp" class="form-text text-muted">Exemple: Mohamed.</small>
						  </div>
						  <button type="submit" name="login" class="btn btn-success mt-2">Se connecter</button>
						</form>
			<tbody>
				<?php
				if(isset($_POST['login']))
					{
						require 'DataBase.php';
						$db = Database::connect();
						
						$login= $db->prepare("SELECT * FROM personne WHERE ID=:id AND Nom=:nom");
						$login->bindParam("id",$_POST['id']);
						$login->bindParam("nom",$_POST['nom']);
						$login->execute();
						
						while($personne = $login->fetch())
						{
							echo"<tr>";
							echo "<td>" .$personne['ID']."</td>";
							echo "<td>" .$personne['Nom']."</td>";
							echo "<td>" .$personne['Prenom']."</td>";
							echo "<td>" .$personne['Adresse']."</td>";
							echo "<td>" .$personne['AbonnementOK']."</td>";
							echo "<td width=300>";
							echo '<a class="btn btn-primary" href="vehicules.php">mes vehicules</a>';
							echo "</tr>";
						}
					}
					?>
			</tbody>
		</table>
	</body>
</html>