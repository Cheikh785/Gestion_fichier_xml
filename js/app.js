
var totalFilms = 1;

function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode,referenceNode.nextSibling);
}
function creerExercice()
{
    previousFilm = document.getElementById("main" + totalFilms);

    var divMain=document.createElement("div");
    divMain.setAttribute("class","form-row");
    divMain.setAttribute("id","main" + (totalFilms+1));

        // Numero Film
        var divNumero=document.createElement("div");
        divNumero.setAttribute("class","form-group col-md-12");
        divNumero.innerHTML="<br>Film " + (totalFilms+1);
        divMain.appendChild(divNumero);

        // Titre film
        var divTitre= document.createElement("div");
        divTitre.setAttribute("class","form-group col-md-3");
        divMain.appendChild(divTitre);

            var labelTitre=document.createElement("label");
            labelTitre.setAttribute("for","classe");
            labelTitre.innerHTML="Titre du film";
            divTitre.appendChild(labelTitre);

            var inputTitre=document.createElement("input");
            inputTitre.setAttribute("class","form-control");
            inputTitre.setAttribute("type","text");
            inputTitre.setAttribute("id","titre" + (totalFilms+1));
            inputTitre.setAttribute("name","titre" + (totalFilms+1));       
            inputTitre.setAttribute("placeholder","titre");
            divTitre.appendChild(inputTitre);

        // Genre Film
        var divGenre= document.createElement("div");
        divGenre.setAttribute("class","form-group col-md-3");
        divMain.appendChild(divGenre);

            var labelGenre=document.createElement("label");
            labelGenre.setAttribute("for","classe");
            labelGenre.innerHTML="Genre du film";
            divGenre.appendChild(labelGenre);

            var inputGenre=document.createElement("input");
            inputGenre.setAttribute("class","form-control");
            inputGenre.setAttribute("type","text");
            inputGenre.setAttribute("id","genre" + (totalFilms+1));
            inputGenre.setAttribute("name","genre" + (totalFilms+1));       
            inputGenre.setAttribute("placeholder","genre");
            divGenre.appendChild(inputGenre);
     
        // Realisateur Film
        var divRealisateur= document.createElement("div");
        divRealisateur.setAttribute("class","form-group col-md-3");
        divMain.appendChild(divRealisateur);

            var labelRealisateur=document.createElement("label");
            labelRealisateur.setAttribute("for","classe");
            labelRealisateur.innerHTML="Realisateur du film";
            divRealisateur.appendChild(labelRealisateur);

            var inputRealisateur=document.createElement("input");
            inputRealisateur.setAttribute("class","form-control");
            inputRealisateur.setAttribute("type","text");
            inputRealisateur.setAttribute("id","realisateur" + (totalFilms+1));
            inputRealisateur.setAttribute("name","realisateur" + (totalFilms+1));       
            inputRealisateur.setAttribute("placeholder","realisateur");
            divRealisateur.appendChild(inputRealisateur);

        // Duree Film
        var divDuree= document.createElement("div");
        divDuree.setAttribute("class","form-group col-md-3");
        divMain.appendChild(divDuree);

            var labelDuree=document.createElement("label");
            labelDuree.setAttribute("for","classe");
            labelDuree.innerHTML="Duree du film";
            divDuree.appendChild(labelDuree);

            var inputDuree=document.createElement("input");
            inputDuree.setAttribute("class","form-control");
            inputDuree.setAttribute("type","time");
            inputDuree.setAttribute("min", "00:00");
            inputDuree.setAttribute("max", "1000:00");
            inputDuree.setAttribute("id","duree" + (totalFilms+1));
            inputDuree.setAttribute("name","duree" + (totalFilms+1));       
            inputDuree.setAttribute("placeholder","duree");
            divDuree.appendChild(inputDuree);

        // Acteur Film
        var divActeur= document.createElement("div");
        divActeur.setAttribute("class","form-group col-md-3");
        divMain.appendChild(divActeur);

            var labelActeur=document.createElement("label");
            labelActeur.setAttribute("for","classe");
            labelActeur.innerHTML="Acteur du film";
            divActeur.appendChild(labelActeur);

            var inputActeur=document.createElement("input");
            inputActeur.setAttribute("class","form-control");
            inputActeur.setAttribute("type","text");
            inputActeur.setAttribute("id","acteur" + (totalFilms+1));
            inputActeur.setAttribute("name","acteur" + (totalFilms+1));       
            inputActeur.setAttribute("placeholder","acteur");
            divActeur.appendChild(inputActeur);
        
        // Année Film
        var divAnnee= document.createElement("div");
        divAnnee.setAttribute("class","form-group col-md-3");
        divMain.appendChild(divAnnee);

            var labelAnnee=document.createElement("label");
            labelAnnee.setAttribute("for","classe");
            labelAnnee.innerHTML="Annee de sortie du film";
            divAnnee.appendChild(labelAnnee);

            var inputAnnee=document.createElement("input");
            inputAnnee.setAttribute("class","form-control");
            inputAnnee.setAttribute("type","number");
            inputAnnee.setAttribute("min","1900");
            inputAnnee.setAttribute("max","2022");
            inputAnnee.setAttribute("step","1");
            inputAnnee.setAttribute("value","2022");
            inputAnnee.setAttribute("id","annee" + (totalFilms+1));
            inputAnnee.setAttribute("name","annee" + (totalFilms+1));       
            inputAnnee.setAttribute("placeholder","annee");
            divAnnee.appendChild(inputAnnee);

        // Langue Film
        var divLangue= document.createElement("div");
        divLangue.setAttribute("class","form-group col-md-3");
        divMain.appendChild(divLangue);

            var labelLangue=document.createElement("label");
            labelLangue.setAttribute("for","classe");
            labelLangue.innerHTML="Langue du film";
            divLangue.appendChild(labelLangue);

            var inputLangue=document.createElement("input");
            inputLangue.setAttribute("class","form-control");
            inputLangue.setAttribute("type","text");
            inputLangue.setAttribute("id","langue" + (totalFilms+1));
            inputLangue.setAttribute("name","langue" + (totalFilms+1));       
            inputLangue.setAttribute("placeholder","langue");
            divLangue.appendChild(inputLangue);

        // Intrigue Film
        var divIntrigue= document.createElement("div");
        divIntrigue.setAttribute("class","form-group col-md-3");
        divMain.appendChild(divIntrigue);

            var labelIntrigue=document.createElement("label");
            labelIntrigue.setAttribute("for","classe");
            labelIntrigue.innerHTML="Intrigue du film";
            divIntrigue.appendChild(labelIntrigue);

            var inputIntrigue=document.createElement("input");
            inputIntrigue.setAttribute("class","form-control");
            inputIntrigue.setAttribute("type","text");
            inputIntrigue.setAttribute("id","intrigue" + (totalFilms+1));
            inputIntrigue.setAttribute("name","intrigue" + (totalFilms+1));       
            inputIntrigue.setAttribute("placeholder","intrigue");
            divIntrigue.appendChild(inputIntrigue);
     
        // Note Film
        var divNote= document.createElement("div");
        divNote.setAttribute("class","form-group col-md-3");
        divMain.appendChild(divNote);

            var labelNote=document.createElement("label");
            labelNote.setAttribute("for","classe");
            labelNote.innerHTML="Note du film";
            divNote.appendChild(labelNote);

            var inputNote=document.createElement("input");
            inputNote.setAttribute("class","form-control");
            inputNote.setAttribute("type","text");
            inputNote.setAttribute("id","note" + (totalFilms+1));
            inputNote.setAttribute("name","note" + (totalFilms+1));       
            inputNote.setAttribute("placeholder","note");
            divNote.appendChild(inputNote);

        // Horraire Film
        var divHorraire= document.createElement("div");
        divHorraire.setAttribute("class","form-group col-md-3");
        divMain.appendChild(divHorraire);

            var labelHorraire=document.createElement("label");
            labelHorraire.setAttribute("for","classe");
            labelHorraire.innerHTML="Horraire du film";
            divHorraire.appendChild(labelHorraire);

            var inputHorraire=document.createElement("input");
            inputHorraire.setAttribute("class","form-control");
            inputHorraire.setAttribute("type","text");
            inputHorraire.setAttribute("id","horraire" + (totalFilms+1));
            inputHorraire.setAttribute("name","horraire" + (totalFilms+1));       
            inputHorraire.setAttribute("placeholder","horraire");
            divHorraire.appendChild(inputHorraire);

        // Nombre Film
        var nbFILM = document.getElementById("nbFilms");
        nbFILM.setAttribute("value",totalFilms+1);
     
    
    insertAfter(previousFilm,divMain);
    totalFilms=totalFilms+1; 
}