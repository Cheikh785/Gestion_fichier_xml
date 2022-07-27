
var totalFiches = 1;
var h5 = ['Coordonnées', 'Menus', 'Carte'];
var nameLabel = ['Nom du restaurant', 'Adresse', 'Restaurateur', 'Description', 'Photo du resto', 'Titre du menu', 'Prix du menu', 'Description du menu', 'Nombre de fiche', 'Photo du menu', 'Description du plat', 'Prix du plat', 'Entrée', 'Dessert', 'Fromage', 'Plat'];
var idName = ['nom', 'adresse', 'restaurateur', 'description', 'photoResto', 'titreMenu', 'prixMenu', 'descriptionMenu', 'nbFiche', 'photoMenu', 'descriptionPlat', 'prixPlat', 'entree', 'dessert', 'fromage', 'plat'];

function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode,referenceNode.nextSibling);
}

function creerFiche()
{
    var ind = 0;
    prevFiche = document.getElementById("main" + totalFiches);
    var divMain = document.createElement("div");
    divMain.setAttribute("id","main" + (totalFiches + 1));
        var fiche = document.createElement("h3");
        fiche.innerHTML = "Fiche " + (totalFiches + 1);
        divMain.appendChild(fiche);
        for (let index = 0; index < h5.length; index++) {
            var coord = document.createElement("h5");
            coord.innerHTML = h5[index];
            coord.setAttribute("class", "subtitle");
            divMain.appendChild(coord);
            var divMain1 = document.createElement("div");
            divMain1.setAttribute("class","form-row");
            divMain.appendChild(divMain1);
                var taille = (index < 2 ? 6 : 7);
                for (let i = 1; i < taille; i++) {
                    if(ind < 13) {
                        var divNom = document.createElement("div");
                        divNom.setAttribute("class","form-group col-md-4");
                        divMain1.appendChild(divNom);
                    }
                    if(ind == 12) {
                        var rep = document.createElement("h6");
                        rep.innerHTML = "Repas";
                        divNom.appendChild(rep);
                    }
                        var labelNom = document.createElement("label");
                        labelNom.setAttribute("for", "for");
                        labelNom.innerHTML = nameLabel[ind];
                        divNom.appendChild(labelNom);
                        var inputNom = document.createElement("input");
                        inputNom.setAttribute("id", idName[ind] + (totalFiches + 1));
                        inputNom.setAttribute("name", idName[ind] + (totalFiches + 1));
                        if(index < 2) {
                            if (i < 5 ) {
                                inputNom.setAttribute("type", "text");
                                inputNom.setAttribute("class", "form-control");
                                inputNom.setAttribute("placeholder", idName[ind]);
                            }
                            else {
                                inputNom.setAttribute("type", "file");
                            }
                        }
                        else{
                            if (i < 3 ) {
                                inputNom.setAttribute("type", "text");
                                inputNom.setAttribute("class", "form-control");
                                inputNom.setAttribute("placeholder", idName[ind]);
                            }
                            else {
                                inputNom.setAttribute("type", "radio");
                            }
                        }
                        divNom.appendChild(inputNom);
                        ind++;
                }
        }
        var divMain3 = document.createElement("div");
        divMain3.setAttribute("class","form-row");
    insertAfter(prevFiche,divMain);
    totalFiches=totalFiches+1;
    document.getElementById("nbFiche").value = totalFiches;
}