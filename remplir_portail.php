<!Doctype html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <title>Creation Exam</title>
        <link rel="stylesheet"  href="css/bootstrap.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="js/bootstrap.js">
        <link rel="stylesheet"  href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/remplir-portail.css">
        <script src="js/remplir_portail.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="title">Formulaire de remplissage d'un portail de restauration </h2>
            </div> 
            <form id="fiche1" action="portail.php" method="POST">
                <div id="main1">
                    <h3>Fiche 1</h3>
                    <h5 class="subtitle">Coordonnées</h5>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="classe">Nom du restaurant</label>
                            <input class="form-control" type="text" id="nom1" name="nom1" placeholder="nom"/> 
                        </div>
                        <div class="form-group col-md-4">
                            <label for="matiere">Adresse</label>
                            <input class="form-control" type="text" id="adresse1" name="adresse1" placeholder="adresse"/> 
                        </div>
                        <div class="form-group col-md-4">
                            <label for="semestre">Restaurateur</label>
                            <input class="form-control" type="text" id="restaurateur1" name="restaurateur1" placeholder="restaurateur" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="semestre">Description</label>
                            <input class="form-control" type="text" id="description1" name="description1" placeholder="description" />
                        </div>
                        <div class="form-group col-md-3">
                            <label for="semestre">Photo du resto</label>
                            <input type="file" id="photoResto1" name="photoResto1"  />
                        </div>
                    </div>

                    <h5 class="subtitle">Menus</h5>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="matiere">Titre du menu</label>
                            <input class="form-control" type="text" id="titreMenu1" name="titreMenu1" placeholder="titreMenu"/> 
                        </div>
                        <div class="form-group col-md-4">
                            <label for="date"> Prix du menu</label>
                            <input class="form-control" type="text" id="prixMenu1" name="prixMenu1" placeholder="prix menu"/> 
                        </div>
                        <div class="form-group col-md-4">
                            <label for="date"> Description du Menu </label>
                            <input class="form-control" type="text" id="descriptionMenu1" name="descriptionMenu1" placeholder="description menu"/> 
                        </div>
                        <div class="form-group nbFiche">
                            <label for="nbFilm">Nombre de fiche</label>
                            <input class="form-control" type="text" id="nbFiche" name="nbFiche" value="1" />  
                        </div>
                        <div class="form-group col-md-4">
                            <label for="semestre">Photo du Menu</label>
                            <input type="file" id="photoMenu1" name="photoMenu1"  />
                        </div>
                    </div>

                    <h5 class="subtitle">Carte</h5>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="date"> Description du plat </label>
                            <input class="form-control" type="text" id="descriptionPlat1" name="descriptionPlat1" placeholder="description plat"/> 
                        </div>
                        <div class="form-group col-md-4">
                            <label for="date"> Prix du Plat</label>
                            <input class="form-control" type="text" id="prixPlat1" name="prixPlat1" placeholder="prix plat"/> 
                        </div>
                        <div class="form-group col-md-4">
                            <h6>Repas</h6>
                            <label for="date"> Entrée</label>
                            <input type="radio" id="entree1" name="repas1" value="entree"/>

                            <label for="date"> Dessert</label>
                            <input type="radio" id="dessert1" name="repas1" value="dessert"/>

                            <label for="date"> Fromage</label>
                            <input type="radio" id="fromage1" name="repas1" value="fromage"/>

                            <label for="date"> Plat</label>
                            <input type="radio" id="plat1" name="repas1" value="plat"/> 
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12 valider">
                    <button class="btn btn-success" type="button" id="addFiche" onclick="creerFiche()" ><i class="fa fa-plus"></i> Ajouter une fiche</button>
                    <button class="btn btn-primary" type="submit" name="valider" id="validerFiche"> Valider </button>
                </div>
                
            </form> 
        </div>
        <p class="test"></p>
    </body>    
</html>