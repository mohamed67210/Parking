<html>
    <head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	</head>
	<title>Formulaire de saisie utilisateur </title>
	</head>
    <body>
        <center><h1>Parking.</h1></center>
		
        <h2>Reservez Maintenant Votre Place !</h2>
		
        <form  method="post" >
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
		
		<div class="form-group row">
		  <label for="example-text-input" class="col-2 col-form-label">Immatriculation du vehicule</label>
		  <div class="col-10">
			<input class="form-control" type="text"  id="example-text-input">
		  </div>
		</div>
           
            <input class="btn btn-success" type="submit" name="valider" value="Reserver"/>
        </form>
    </body>
</html>