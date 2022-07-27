<!Doctype html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <title>Creation Exam</title>
        <link rel="stylesheet"  href="css/bootstrap.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/remplir-examen.css">
        <link rel="stylesheet" href="js/bootstrap.js">
        <script src="js/jquery-3.5.1.min.js"> </script>
        <script src="js/remplir-examen.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="titre">Formulaire de creation d'un examen </h1>
            </div> 
        </div>

        <div class="container" id="main">
            <form id="examen" action="examen.php" method="POST">
                <div class="form-row create-examen">
                    <div class="form-group col-md-4">
                        <label for="classe">Classe</label>
                        <input class="form-control" type="text" id="classe" name="classe" placeholder="Classe"/> 
                    </div>
                    <div class="form-group col-md-4">
                        <label for="classe">Code cours</label>
                        <input class="form-control" type="text" id="code_cours" name="code_cours" placeholder="code cours"/> 
                    </div>
                    <div class="form-group col-md-4">
                        <label for="matiere">Matiere</label>
                        <input class="form-control" type="text" id="matiere" name="matiere" placeholder="Matiere"/> 
                    </div>
                    <div class="form-group col-md-4">
                        <label for="semestre">Nom du professeur</label>
                        <input class="form-control" type="text" id="nom" name="nom" placeholder="Nom" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="semestre">Prenom du professeur</label>
                        <input class="form-control" type="text" id="prenom" name="prenom" placeholder="Prenom" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="date"> Date </label>
                        <input class="form-control" type="date" id="date" name="date" /> 
                    </div>
                    <div class="form-group col-md-4 nbExos">
                        <label for="date"> Nombre d'exercice </label>
                        <input class="form-control" type="text" id="nbExos" name="nbExos" value="10" /> 
                    </div>
                </div>
                <div class="form-row">
                <?php 
                    $i = 1;
                    while($i <= 10) { ?>
                        <div class="form-group col-md-6 create-question"> 
                            <h3 class="title-exo">Exercice <?= $i?></h3>
                            <div class="form-group col-md-12">
                                <label for="classe">Description</label>
                                <input class="form-control shadow bg-white rounded" type="text" id="description<?= $i?>" name="description<?= $i?>" placeholder="Description"/> 
                            </div>
                            <div class="form-group col-md-12" id="question<?= $i?>">
                                <div class="form-group shadow-textarea ">
                                    <label for="question">Question 1</label>
                                    <textarea class="form-control z-depth-1 shadow bg-white rounded" id="question" name="question<?= $i?>" rows="3" placeholder="Ecrire la question ici..."></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-12 nbQuestion">
                                <label for="nbFilm">Nombre de Question</label>
                                <input class="form-control" type="text" id="nbQues<?= $i?>" name="nbQues<?= $i?>" value="1" />  
                            </div>     
                            <div class="form-group col-md-12">  
                                <button class="btn btn-success" type="button" id="addQuestions" onclick="addQuestion(<?= $i?>)" ><i class="fa fa-plus"></i> Ajouter une question</button>
                            </div>
                            <div class="form-group col-md-12 line-separator">  
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                            </div>
                        </div>
                    <?php       
                        $i++;
                    }
                    ?>
                </div>
                <div class="form-group addExo11">
                    <input class="form-check-input" type="checkbox" id="addExo11Input" onclick="verifCheckedQuestion11()">
                    <label class="form-check-label" for="addExo11Input">Ajouter un onzième(11) exercice</label>
                </div>
                <div id="validerTout">

                </div>
                <div class="form-group col-md-12 valider">  
                    <button class="btn btn-primary" type="submit" name="valider">Valider</button>
                </div>                         
                </div>              
            </form> 
        </div>
    </body>    
</html>