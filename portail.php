<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="js/bootstrap.js">
        <link rel="stylesheet"  href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/portail.css">
        <title>Portail</title>
    </head>
    <body>
        <?php $scan = scandir("./portail"); ?>
        <div class="form-group col-md-12 formulaire">
            <form id="restaurant" action="portail.php" method="POST">
                <div class="title-portail">
                    <h1>Portail</h1>
                </div>      
                <div class="form-group col-md-6">
                    <select name="fichier" size="3">
                        <?php $i = 1;
                        foreach ($scan as $fichier)
                        {
                            if($i > 2)
                            {?>
                                <option class="option" value="<?=$fichier ?>">Portail<?=$fichier?> </option> <?php
                            } 
                            $i++;   
                        } ?>
                    </select>
                </div> 
                <div class="col-md-6 valider">
                    <button class="btn btn-primary" type="submit" name="valider"> Valider </button>
                </div>    
        </form> 
        <?php 
            if(isset($_POST['nom1'], $_POST['adresse1']))
            {
                $i = 1;
                while($i <= intval($_POST['nbFiche']))
                {
                    $portail = simplexml_load_file("xml/exo7.xml");
                    $fiche = $portail->addChild("fiche");
                    $coord = $fiche->addChild("coordonnées");
                    $nom = $coord->addChild("nom", $_POST['nom'.$i]);
                    $adresse = $coord->addChild("adresse", $_POST['adresse'.$i]);
                    $restaurateur = $coord->addChild("restaurateur", $_POST['restaurateur'.$i]);
                    $description = $coord->addChild("description");
                    $paragraphe1 = $description->addChild("paragraphe", $_POST['description'.$i]);
                    $img = $paragraphe1->addChild("img");
                    $img->addAttribute("url", $_POST['photoResto'.$i]);
                    $carte = $fiche->addChild("carte");
                    $plat = $carte->addChild("plat");
                    $plat->addChild("paragraphe", $_POST['descriptionPlat'.$i]);
                    $prix = $plat->addChild("prix", $_POST['prixPlat'.$i]);
                    $prix->addAttribute("devise", "fcfa");
                    $plat->addAttribute("repas", $_POST['repas'.$i]);
                    $menu = $fiche->addChild("menu");
                    $menu->addChild("titre", $_POST['titreMenu'.$i]);
                    $paragraphe = $menu->addChild("paragraphe", $_POST['descriptionMenu'.$i]);
                    $img1 = $paragraphe->addChild("img");
                    $img1->addAttribute("url", $_POST['photoMenu'.$i]);
                    $prix1 = $menu->addChild("prix", $_POST['prixMenu'.$i]);
                    $prix1->addAttribute("devise", "fcfa");
                    $i++;
                }
                $date = date('d-m-y-h-i-s');
                $portail->asXml("portail/portail_du_".$date.".xml");
               // echo "portail cree avec succes";
            }
            if(isset($_POST["fichier"]))
            {
                $portail = simplexml_load_file("portail/".$_POST["fichier"]); ?>
                <div class="portail">
                    <?php   $i = 1;
                    foreach($portail->fiche as $fiche)
                    {?>
                        <h2 class="title-resto">Restaurant <?= $fiche->coordonnées->nom?></h2>
                        <h4 class="title-coordonne">Coordonnées</h4>
                        <div class=" row">
                            <div class="col">
                                <div class="row">
                                    <div class="col"><p>Adresse</p></div>
                                    <div class="col"><p> : </p></div>
                                    <div class="col"><?= $fiche->coordonnées->adresse?></div>
                                </div>
                                <div class="row">
                                    <div class="col"><p>Restaurateur</p></div>
                                    <div class="col"><p> : </p></div>
                                    <div class="col"><?= $fiche->coordonnées->restaurateur?></div>
                                </div>
                                <div class="row">
                                    <div class="col"><p>Description du restaurant</p></div>
                                    <div class="col"><p> : </p></div>
                                    <div class="col"><?= $fiche->coordonnées->description->paragraphe?></div>
                                </div>
                            </div>
                            <div class="col">
                                <img class="image-resto" src="<?=$fiche->coordonnées->description->paragraphe->img["url"]?>" alt="image du restaurant"/>
                            </div>
                        </div>
                        <h4 class="title-menu">Menus</h4>
                        <div class="row menus">
                            <div class="col">
                                <div class="row">
                                    <div class="col"><p>Menu</p></div>
                                    <div class="col"><p> : </p></div>
                                    <div class="col"><?= $fiche->menu->titre?></div>
                                </div>
                                <div class="row">
                                    <div class="col"><p>Prix du menu</p></div>
                                    <div class="col"><p> : </p></div>
                                    <div class="col"><?= $fiche->menu->prix." ".($fiche->menu->prix)["devise"]?></div>
                                </div>
                                <div class="row">
                                    <div class="col"><p>Description du menu</p></div>
                                    <div class="col"><p> : </p></div>
                                    <div class="col"><?= $fiche->menu->paragraphe?></div>
                                </div>
                            </div>
                            <div class="col">
                                <img class="image-plat" src="<?=$fiche->menu->paragraphe->img["url"]?>" alt="image du menu"/>
                            </div>
                        </div>
                        <h4 class="title-carte">Carte</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col"><p>Plat</p></div>
                                    <div class="col"><p> : </p></div>
                                    <div class="col"><?= $fiche->carte->plat["repas"]?></div>
                                </div>
                                <div class="row">
                                    <div class="col"><p>Prix du plat</p></div>
                                    <div class="col"><p> : </p></div>
                                    <div class="col"><?= $fiche->carte->plat->prix." ".$fiche->carte->plat->prix["devise"]?></div>
                                </div>
                                <div class="row">
                                    <div class="col"><p>Description du plat</p></div>
                                    <div class="col"><p> : </p></div>
                                    <div class="col"><?= $fiche->carte->plat->paragraphe?></div>
                                </div>
                            </div>
                        </div>
                        <hr class="separator">
            <?php   } 
                            ?>
                </div>  
 <?php      }
        ?>
    </body>
</html>