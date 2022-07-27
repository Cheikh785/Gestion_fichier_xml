<!Doctype html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <title>Creation Exam</title>
        <link rel="stylesheet"  href="css/bootstrap.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-center">Formulaire de creation d'un examen </h2>
        </div> 
    <form id="examen" action="creerExamen.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="classe">Classe</label>
                <input class="form-control" type="text" id="classe" name="classe" placeholder="classe"/> 
            </div>
            <div class="form-group col-md-3">
                <label for="matiere">Matiere</label>
                <input class="form-control" type="text" id="matiere" name="matiere" placeholder="matiere"/> 
            </div>
            <div class="form-group col-md-3">
                <label for="semestre">Nom du professeur</label>
                <input class="form-control" type="text" id="nom" name="nom" placeholder="nom" />
            </div>
            <div class="form-group col-md-3">
                <label for="semestre">Prenom du professeur</label>
                <input class="form-control" type="text" id="prenom" name="prenom" placeholder="prenom" />
            </div>
            <div class="form-group col-md-3">
                <label for="date"> la date </label>
                <input class="form-control" type="date" id="date" name="date" /> 
            </div>
        </div>
        <div class="form-row">
        <?php 
        $i = 1;
        while($i <= 10) { ?>
            <div class="form-group col-md-12"> Exercie <?= $i?></div>
                <div class="form-group col-md-3">
                    <label for="classe">Description</label>
                    <input class="form-control" type="text" id="description<?= $i?>" name="description<?= $i?>" placeholder="description" required/> 
                </div>
                <div class="form-group col-md-3">
                    <label for="classe">Question 1</label>
                    <input class="form-control" type="text" id="question1" name="question1" placeholder="question1" required/> 
                </div>
                <div class="form-group col-md-3 nbFilm">
                    <label for="nbFilm">Nombre de Question</label>
                    <input class="form-control" type="text" id="nbQues1" name="nbQues1" value="1" />  
                </div>     
                <button class="btn btn-success" type="button" id="addFilms" onclick="creerExercice()" ><i class="fa fa-plus"></i> Ajouter une question</button>
            </div>
<?php       $i++;
        } ?>
        <div class="form-group col-md-12"> Exercie 11</div>
            <div class="form-group col-md-3">
                <label for="classe">Description</label>
                <input class="form-control" type="text" id="description11" name="description11" placeholder="description"/> 
            </div>
            <div class="form-group col-md-3">
                <label for="classe">Question 1</label>
                <input class="form-control" type="text" id="question1" name="question1" placeholder="question1"/> 
            </div>
            <div class="form-group col-md-3 nbFilm">
                <label for="nbFilm">Nombre de Question</label>
                <input class="form-control" type="text" id="nbQues1" name="nbQues1" value="1" />  
            </div>     
            <button class="btn btn-success" type="button" id="addFilms" onclick="creerExercice()" ><i class="fa fa-plus"></i> Ajouter une question</button>
        </div>
        <button class="btn btn-primary" type="submit" name="valider"> Valider </button>
        </form> 
        </div>
    
        <!-- integration jquery-->
        <script src="examen.js"> </script>
        <script src="js/jquery-3.5.1.min.js"> </script>
        <!-- integration bootstrap.js-->
        <script src="js/bootstrap.js"> </script>
    </body>    
</html>