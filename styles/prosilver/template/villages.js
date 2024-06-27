jQuery(function($) {
    phpbb.addAjaxCallback('kiri_influence_callback', function(re) {
        if(re.action === "ADVANTAGE_ADDED") {
            window.confirm("Avantage ajouté à Kiri !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('iwa_influence_callback', function(re) {
        if(re.action === "ADVANTAGE_ADDED") {
            window.confirm("Avantage ajouté à Iwa !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('suna_influence_callback', function(re) {
        if(re.action === "ADVANTAGE_ADDED") {
            window.confirm("Avantage ajouté à Suna !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('kumo_influence_callback', function(re) {
        if(re.action === "ADVANTAGE_ADDED") {
            window.confirm("Avantage ajouté à Kumo !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('konoha_influence_callback', function(re) {
        if(re.action === "ADVANTAGE_ADDED") {
            window.confirm("Avantage ajouté à Konoha !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('kiri_modify_influence_callback', function(re) {
        if(re.action === "ADVANTAGE_UPDATED") {
            window.confirm("L'avantage de Kiri a été mis à jour !");
            window.location.reload(true);
        }
        else if(re.action === "ADVANTAGE_DELETED") {
            window.confirm("L'avantage a été supprimé !");
            window.location.reload(true);
        }
        else if(re.action === "ADVANTAGE_NOT_UPDATED") {
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('iwa_modify_influence_callback', function(re) {
        if(re.action === "ADVANTAGE_UPDATED") {
            window.confirm("L'avantage d'Iwa a été mis à jour !");
            window.location.reload(true);
        }
        else if(re.action === "ADVANTAGE_DELETED") {
            window.confirm("L'avantage a été supprimé !");
            window.location.reload(true);
        }
        else if(re.action === "ADVANTAGE_NOT_UPDATED") {
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('suna_modify_influence_callback', function(re) {
        if(re.action === "ADVANTAGE_UPDATED") {
            window.confirm("L'avantage de Suna a été mis à jour !");
            window.location.reload(true);
        }
        else if(re.action === "ADVANTAGE_DELETED") {
            window.confirm("L'avantage a été supprimé !");
            window.location.reload(true);
        }
        else if(re.action === "ADVANTAGE_NOT_UPDATED") {
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('kumo_modify_influence_callback', function(re) {
        if(re.action === "ADVANTAGE_UPDATED") {
            window.confirm("L'avantage de Kumo a été mis à jour !");
            window.location.reload(true);
        }
        else if(re.action === "ADVANTAGE_DELETED") {
            window.confirm("L'avantage a été supprimé !");
            window.location.reload(true);
        }
        else if(re.action === "ADVANTAGE_NOT_UPDATED") {
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('konoha_modify_influence_callback', function(re) {
        if(re.action === "ADVANTAGE_UPDATED") {
            window.confirm("L'avantage de Konoha a été mis à jour !");
            window.location.reload(true);
        }
        else if(re.action === "ADVANTAGE_DELETED") {
            window.confirm("L'avantage a été supprimé !");
            window.location.reload(true);
        }
        else if(re.action === "ADVANTAGE_NOT_UPDATED") {
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('substract_influence_callback', function(re) {
        if(re.action === "POINTS_SUBSTRACTED") {
            window.confirm("Les points d'influence ont été retirés !");
            window.location.reload(true);
        }
    });
});

function modifyAdvantage(rowCount, className) {
    let advantageTitle = document.getElementsByClassName(`${className}_advantage_title`)[rowCount];
    let advantageDescr = document.getElementsByClassName(`${className}_advantage_description`)[rowCount];
    let firstButtons = document.getElementsByClassName(`${className}_first_disp`)[rowCount];
    let secondButtons = document.getElementsByClassName(`${className}_second_disp`)[rowCount];
    let input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("value", advantageTitle.innerHTML);
    input.name = "edit_title";
    advantageTitle.parentNode.replaceChild(input, advantageTitle);
    let textarea = document.createElement("textarea");
    textarea.innerHTML = advantageDescr.innerHTML;
    textarea.name = "edit_description";
    advantageDescr.parentNode.replaceChild(textarea, advantageDescr);
    firstButtons.style.display = "none";
    secondButtons.style.setProperty("display", "flex", "important");
}