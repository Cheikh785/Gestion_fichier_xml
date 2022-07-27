var totalQuestions = 1;

function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode,referenceNode.nextSibling);
}

function addQuestion(i) {
    var nbQuestions = document.getElementById("nbQues" + i);
    var nbQ = parseInt(nbQuestions.value);
    var idQuestion = (nbQ == 1 ? "question" + i : "question" + i + "" + (nbQ));

    previousQuestion = document.getElementById(idQuestion);
    
    var divMain = document.createElement("div");
    divMain.setAttribute("class", "form-group col-md-12");
    divMain.setAttribute("id", "questionQ"+(nbQ + 1));

    // Div container question
    var divQuestion = document.createElement("div");
    divQuestion.setAttribute("class", "form-group shadow-textarea divQuestion");
    divMain.appendChild(divQuestion);

    // Label de la question 
    var labelQuestion = document.createElement("label");
    labelQuestion.setAttribute("for", "question");
    labelQuestion.innerHTML = "&nbsp;&nbsp;&nbsp;Question " + (nbQ + 1);
    divQuestion.appendChild(labelQuestion);

    // Textarea de la question
    var inputQuestion = document.createElement("textarea");
    inputQuestion.setAttribute("class", "form-control z-depth-1 shadow bg-white rounded textareaQuestion");
    inputQuestion.setAttribute("id", "question" + i + "" + (nbQ + 1));
    inputQuestion.setAttribute("name", "question" + i + "" + (nbQ + 1));
    inputQuestion.setAttribute("placeholder", "Ecrire la question ici...");
    divQuestion.appendChild(inputQuestion);
    
    insertAfter(previousQuestion, divMain.lastElementChild);
    nbQuestions.value = parseInt(nbQuestions.value) + 1;
}


// Recupérer le checkbox pour l'exercice 11
var temoin = 1;
function verifCheckedQuestion11() {
    var checkExo11 = document.getElementById("addExo11Input");
    previousQuestion11 = document.getElementById("validerTout");

    if(checkExo11.checked == true) {
        temoin = temoin + 1;
        var divMain = document.createElement("div");
        divMain.setAttribute("class", "container");
        
        var divGroup = document.createElement("div");
        divGroup.setAttribute("class", "form-group col-md-6 divQ11");
        divGroup.setAttribute("id", "question11");
        divMain.appendChild(divGroup);

        var titleQuestion11 = document.createElement("h3");
        titleQuestion11.setAttribute("class", "title-exo");
        titleQuestion11.innerHTML = "Exercice 11";   
        divGroup.appendChild(titleQuestion11);

        // Description de l'xercice 11, question 1
        var labelQuestion11 = document.createElement("label");
        labelQuestion11.setAttribute("for", "descriptionOnze");
        labelQuestion11.innerHTML = "Description";
        divGroup.appendChild(labelQuestion11);

        // Input de la description de l'exercice 11, question 1
        var inputQuestion11 = document.createElement("input");
        inputQuestion11.setAttribute("type", "texte");
        inputQuestion11.setAttribute("class", "form-control shadow bg-white rounded")
        inputQuestion11.setAttribute("name", "descQuestion11");
        inputQuestion11.setAttribute("placeholder", "Description");
        divGroup.appendChild(inputQuestion11);


        // Label Exercice 11, question 1
        var labelQuestion11 = document.createElement("label");
        labelQuestion11.setAttribute("for", "questionOnze");
        labelQuestion11.innerHTML = "Question 1";
        divGroup.appendChild(labelQuestion11);

        // Textarea Exercice 11, question 1
        var textareaQuestion11 = document.createElement("textarea");
        textareaQuestion11.setAttribute("class", "form-control z-depth-1 shadow p-3 mb-5 bg-white rounded");
        textareaQuestion11.setAttribute("id", "questionOnze");
        textareaQuestion11.setAttribute("name", "questionOnzeName");
        textareaQuestion11.setAttribute("placeholder", "Ecrire la question ici...");
        divGroup.appendChild(textareaQuestion11);

        // Nombre de question 
        var nbQuestion11 = document.createElement("input");
        nbQuestion11.setAttribute("id", "nbQuestion11");
        nbQuestion11.setAttribute("value", "2");
        
        // Ajouter une question
        var divAdd = document.createElement("div");
        divAdd.setAttribute("class", "form-group col-md-6");
        divGroup.appendChild(divAdd);
        var buttonAdd = document.createElement("button");
        buttonAdd.setAttribute("class", "btn btn-success btnQ11");
        buttonAdd.setAttribute("type", "button");
        buttonAdd.setAttribute("id", "buttonAdd11")
        var faIcon = document.createElement("i");
        faIcon.setAttribute("class", "fa fa-plus");
        buttonAdd.appendChild(faIcon);
        buttonAdd.innerHTML = "Ajouter une question";
        divAdd.appendChild(buttonAdd);
        insertAfter(previousQuestion11, divMain.lastElementChild);

        var nbQ = 1;
        buttonAdd.onclick = function() {
            // var nbQuestions11 = document.getElementById("nbQuestion11");
            // var nbQ = parseInt(nbQuestions11.value);
            // alert(nbQuestion11.value);
            var idQuestion = (nbQ == 1 ? "question11" : "question11" + (nbQ));
            previousQuestion11 = document.getElementById(idQuestion);

            // Div container question
            var divQuestion11 = document.createElement("div");
            divQuestion11.setAttribute("class", "form-group col-md-6 shadow-textarea divAddQ11");
            divMain.appendChild(divQuestion11);

            // Label de la question 
            var labelQuestion11 = document.createElement("label");
            labelQuestion11.setAttribute("for", "question");
            labelQuestion11.innerHTML = "Question " + (nbQ + 1);
            divQuestion11.appendChild(labelQuestion11);

            // Textarea de la question
            var inputQuestion11 = document.createElement("textarea");
            inputQuestion11.setAttribute("class", "form-control z-depth-1 shadow bg-white rounded");
            inputQuestion11.setAttribute("id", "question11" + (nbQ + 1));
            inputQuestion11.setAttribute("name", "question11" + (nbQ + 1));
            inputQuestion11.setAttribute("placeholder", "Ecrire la question ici...");
            divQuestion11.appendChild(inputQuestion11);

            insertAfter(previousQuestion11, divQuestion11);
            // nbQuestions11.value = parseInt(nbQuestions11.value) + 1;
            nbQ = nbQ + 1;
        }
    } else {
        document.getElementById("question11").remove();
    }
}