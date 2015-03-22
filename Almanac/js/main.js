function loadAuteurs(){
        $('#article').html($('#Auteur_Document').html());
}

function loadGroupes(){
        $('#article').html($('#GroupeProprietaire_Document').html());
}

function loadTypes() {
    $('#article').html($('#Type_Document').html());
}

$(document).ready(function(){
    $('.codeSnippetContainerTab a:active').toggleClass$("codeSnippetContainerTabActive");
});



