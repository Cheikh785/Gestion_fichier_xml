<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/examen.css">
        <title>Examen</title>
    </head>
    <body>
        <?php $scan = scandir("./examen"); $mois = array("01" => "Janvier", "02" => "Fevrier", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Aout", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Decembre");?>
        <div class="form-group col-md-12 formulaire">
            <form id="examen" action="examen.php" method="POST">
                <div class="title-examen">
                    <h1>Examen</h1>
                </div>  
                <div class="form-group col-md-6">
                    <select name="fichier" size="3">
                    <?php $i = 1;
                        foreach ($scan as $fichier)
                        {
                            if($i > 2)
                            {
                                $examen = simplexml_load_file("examen/".$fichier);?>
                                <option class="option" value="<?=$fichier ?>">Examen de <?= $examen->matiere?> le <?= $examen->date?> pour les <?= $examen->classe?> </option> <?php
                            } 
                            $i++;   
                        } ?>
                    </select>
                </div>     
                <div class="col-md-6 valider">
                    <button class="btn btn-primary" type="submit" name="valider"> Valider </button>
                </div>
            </form> 
        </div>
        <?php 
            if(isset($_POST['classe'], $_POST['matiere']))
            {
                $examen = simplexml_load_file("xml/exo6.xml");
                $examen->addAttribute("code_cours", $_POST['code_cours']);
                $classe = $examen->addChild("classe", $_POST['classe']);
                $matiere = $examen->addChild("matiere", $_POST['matiere']);
                $prof = $examen->addChild("prof");
                $nom = $prof->addChild("nom", $_POST['nom']);
                $prenom = $prof->addChild("prenom", $_POST['prenom']);
                $date = $examen->addChild("date", $_POST['date']);
                $date->addAttribute("annee", explode("-", $_POST['date'])[0]);
                $date->addAttribute("mois", $mois[explode("-", $_POST['date'])[1]]);
                $i = 1;
                while($i <= $_POST['nbExos'])
                {
                    $exercice = $examen->addChild("Exercice");
                    $exercice->addChild("description", $_POST['description'.$i]);
                    $j = 1;
                    while($j <= $_POST['nbQues'.$i])
                    {
                        $idQues = ($j == 1 ? $i : $i.$j);
                        $exercice->addChild("question", $_POST['question'.$idQues]);
                        $j++;
                    }
                    $i++;
                }
                $date = date('d-m-y-h-i-s');
                $examen->asXml("examen/Examen_du_".$date.".xml");
               // echo "examen cree avec succes";
            }
            if(isset($_POST["fichier"]))
            {
                $examen = simplexml_load_file("examen/".$_POST["fichier"]); ?>
                <div class="resultat container">
                    <h2 class="devoir-surveille">Devoir Surveillé</h2>
                    <div class="resume">
                        <p><span class="matiere">Matière <span class="deux-point-matiere">:</span> </span><?= $examen->matiere?></p>
                        <p><span class="date">Date <span class="deux-point-date">:</span> </span><?= $examen->date?></p>
                        <p><span class="professeur">Professeur <span class="deux-point-professeur">:</span> </span><?= $examen->prof->nom."  ".$examen->prof->prenom ?></p>
                        <p><span class="classe">Classe <span class="deux-point-classe">:</span></span><?= $examen->classe?></p>
                    </div>
                </div>
                <div class="container">
                    <?php   $i = 1;
                    foreach($examen->Exercice as $exercice)
                    {?>
                    <div class="row">
                        <div class="exercice col-md-12">
                            <h3 class="title-exo">Exercice <?=$i?> : </h3>
                        </div>
                        <div class="contenu col-md-12">
                            <p class="description"><?=$exercice->description?></p> 
                            <?php
                            $j = 1;
                            foreach($exercice->question as $question)
                            { ?>
                                <p class="qestion"><?=$j?>°) <?=$question?></p>
                            <?php   $j++;
                            }
                            $i++;
                            }?>
                            <?php   } 
                            ?> 
                        </div>
                    </div>
                </div>  
    </body>
</html>