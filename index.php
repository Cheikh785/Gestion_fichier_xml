<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js"></script>
    <title>Cinema</title>
</head>
<body>
    <h2 class="titre">Formulaire de creation d'un programme de cinema </h2>
    
        <form id="film1" action="cinema.php" method="POST" class="container">
            <div class="form-row" id="main1" >
                <div class="form-group col-md-12"><h4>Film 1</h4></div>
                <div class="form-group col-md-3">
                    <label for="classe">Titre du film</label>
                    <input class="form-control" type="text" id="titre1" name="titre1" placeholder="titre"/> 
                </div>
                <div class="form-group col-md-3">
                    <label for="matiere">Genre du film</label>
                    <input class="form-control" type="text" id="genre1" name="genre1" placeholder="genre"/> 
                </div>
                <div class="form-group col-md-3">
                    <label for="semestre">Realisateur du film</label>
                    <input class="form-control" type="text" id="realisateur1" name="realisateur1" placeholder="realisateur" />
                </div>
                <div class="form-group col-md-3">
                    <label for="semestre">Duree du film</label>
                    <input class="form-control" type="time" id="duree1" name="duree1" placeholder="duree" min="00:00" max="1000:00" />
                </div>
                <div class="form-group col-md-3">
                    <label for="semestre">Acteur du film</label>
                    <input class="form-control" type="text" id="acteur1" name="acteur1" placeholder="acteur" />
                </div>
                <div class="form-group col-md-3">
                    <label for="semestre">Annee de sortie du film</label>
                    <input class="form-control" type="number" id="annee1" name="annee1" placeholder="annee" min="1900" max="2022" step="1" value="2022" />
                </div>
                <div class="form-group col-md-3">
                    <label for="semestre">Langue du film</label>
                    <input class="form-control" type="text" id="langue1" name="langue1" placeholder="langue" />
                </div>
                <div class="form-group col-md-3">
                    <label for="semestre">Intrigue du film</label>
                    <input class="form-control" type="text" id="intrigue1" name="intrigue1" placeholder="intrigue" />
                </div>
                <div class="form-group col-md-3">
                    <label for="semestre">Note du film</label>
                    <input class="form-control" type="text" id="note1" name="note1" placeholder="note" />
                </div>
                <div class="form-group col-md-3">
                    <label for="semestre">Horraire du film</label>
                    <input class="form-control" type="text" id="horrraire1" name="horraire1" placeholder="horraire" />
                </div>
                <div class="form-group col-md-3 nbFilm">
                    <label for="nbFilm">Nombre de film</label>
                    <input class="form-control" type="text" id="nbFilms" name="nbFilm" value="1" />  
                </div>
            </div>
            <div class="form-group col-md-12 valider">
                <button class="btn btn-success" type="button" id="addFilms" onclick="creerExercice()" ><i class="fa fa-plus"></i> Ajouter un film</button>
                <button class="btn btn-primary" type="submit" name="valider" id="valider"> Valider </button>
            </div>   
        </form>
</body>
</html>
