<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/cinema.css">
    <title>Cinema</title>
</head>
<body>
    <?php
        $scan = scandir("./cinema");
    ?>
    <div class="form-group col-md-12 formulaire">
        <form id="film" action="cinema.php" method="POST">
            <div class="title-cinema">
                <h1>Cinéma</h1>
            </div>
            <div class="col-md-6">
                <select name="fichier" size="3">
                    <?php
                    $i = 1;
                    foreach ($scan as $fichier){
                        if($i > 2){
                        ?>
                            <option class="option" value="<?=$fichier ?>">Cinema <?=$i-2?> </option> <?php
                        } 
                        $i++;   
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-6 valider">
                <button class="btn btn-primary" type="submit" name="valider"> Valider </button>
            </div>
        </form> 
    </div>     

<?php 
    if(isset($_POST['titre1']))
    {
        $cinema = simplexml_load_file("xml/exo2.xml");
        $i = 1;
        while($i <= intval($_POST['nbFilm']))
        {
            $film = $cinema->addChild("film");
            $film->addChild("titre", $_POST['titre'.$i]);
            $film->addChild("duree", $_POST['duree'.$i]);
            $film->addChild("genre", $_POST['genre'.$i]);
            $film->addChild("realisateur", $_POST['realisateur'.$i]);
            $film->addChild("acteurs", $_POST['acteur'.$i]);
            $film->addChild("année", $_POST['annee'.$i]);
            $film->addChild("langue", $_POST['langue'.$i]);
            $film->addChild("intrigue", $_POST['intrigue'.$i]);
            $film->addChild("horaire", $_POST['horraire'.$i]);
            $film->addChild("notes", $_POST['note'.$i]);
            $i++;
        }
        $date = date('d-m-y-h-i-s');
        $cinema->asXml("cinema/cinema".$date.".xml");
       // echo "programme cinema cree avec succes";
    }
    if(isset($_POST["fichier"]))
    {
        $cinema = simplexml_load_file("cinema/".$_POST["fichier"]); ?>
        <h2 class="list-film"> Liste des films</h2>
        <table align="center" border="1" width="50%">
                <tr>
                    <th>Titre</th>
                    <th>Duree</th>
                    <th>Genre</th>
                    <th>Realisateur</th>
                    <th>Acteur</th>
                    <th>Annee</th>
                    <th>Langue</th>
                    <th>Intrigue</th>
                    <th>Horraire</th>
                    <th>Notes</th>
                </tr>
                <?php 
                    foreach($cinema->film as $film)
                    {?>
                        <tr>
                            <td><?= $film->titre ?></td>
                            <td><?= $film->duree ?></td>
                            <td><?= $film->genre ?></td>
                            <td><?= $film->realisateur ?></td>
                            <td><?= $film->acteurs ?></td>
                            <td><?= $film->année ?></td>
                            <td><?= $film->langue ?></td>
                            <td><?= $film->intrigue ?></td>
                            <td><?= $film->horaire ?></td>
                            <td><?= $film->notes ?></td>
                        </tr>
            <?php   }?>

        </table> <?php
    } ?> 
    <div class="test">
        <p class="test">test</p> 
    </div>
</body>
</html>    

