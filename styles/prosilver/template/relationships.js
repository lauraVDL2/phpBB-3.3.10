jQuery(function($) {
    phpbb.addAjaxCallback('kiri_relation_callback', function(re) {
        if(re.action === "RELATION_VALIDATED") {
            window.confirm("Votre relation a été ajoutée !");
            window.location.reload(true);
        }
        else {
            window.confirm("Erreur");
        }
    });
    phpbb.addAjaxCallback('kiri_relation_modify_callback', function(re) {
        if(re.action === "RELATION_UPDATED") {
            window.confirm("Votre relation a bien été mise à jour !");
            window.location.reload(true);
        }
        else if(re.action === "RELATION_ROLLBACK") {
            window.confirm("Les modifications ont été annulées !");
            window.location.reload(true);
        }
        else if(re.action === "RELATION_DELETED") {
            window.confirm("La relation a bien été supprimée !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('suna_relation_callback', function(re) {
        if(re.action === "RELATION_VALIDATED") {
            window.confirm("Votre relation a été ajoutée !");
            window.location.reload(true);
        }
        else {
            window.confirm("Erreur");
        }
    });
    phpbb.addAjaxCallback('suna_relation_modify_callback', function(re) {
        if(re.action === "RELATION_UPDATED") {
            window.confirm("Votre relation a bien été mise à jour !");
            window.location.reload(true);
        }
        else if(re.action === "RELATION_ROLLBACK") {
            window.confirm("Les modifications ont été annulées !");
            window.location.reload(true);
        }
        else if(re.action === "RELATION_DELETED") {
            window.confirm("La relation a bien été supprimée !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('iwa_relation_callback', function(re) {
        if(re.action === "RELATION_VALIDATED") {
            window.confirm("Votre relation a été ajoutée !");
            window.location.reload(true);
        }
        else {
            window.confirm("Erreur");
        }
    });
    phpbb.addAjaxCallback('iwa_relation_modify_callback', function(re) {
        if(re.action === "RELATION_UPDATED") {
            window.confirm("Votre relation a bien été mise à jour !");
            window.location.reload(true);
        }
        else if(re.action === "RELATION_ROLLBACK") {
            window.confirm("Les modifications ont été annulées !");
            window.location.reload(true);
        }
        else if(re.action === "RELATION_DELETED") {
            window.confirm("La relation a bien été supprimée !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('kumo_relation_callback', function(re) {
        if(re.action === "RELATION_VALIDATED") {
            window.confirm("Votre relation a été ajoutée !");
            window.location.reload(true);
        }
        else {
            window.confirm("Erreur");
        }
    });
    phpbb.addAjaxCallback('kumo_relation_modify_callback', function(re) {
        if(re.action === "RELATION_UPDATED") {
            window.confirm("Votre relation a bien été mise à jour !");
            window.location.reload(true);
        }
        else if(re.action === "RELATION_ROLLBACK") {
            window.confirm("Les modifications ont été annulées !");
            window.location.reload(true);
        }
        else if(re.action === "RELATION_DELETED") {
            window.confirm("La relation a bien été supprimée !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('konoha_relation_callback', function(re) {
        if(re.action === "RELATION_VALIDATED") {
            window.confirm("Votre relation a été ajoutée !");
            window.location.reload(true);
        }
        else {
            window.confirm("Erreur");
        }
    });
    phpbb.addAjaxCallback('konoha_relation_modify_callback', function(re) {
        if(re.action === "RELATION_UPDATED") {
            window.confirm("Votre relation a bien été mise à jour !");
            window.location.reload(true);
        }
        else if(re.action === "RELATION_ROLLBACK") {
            window.confirm("Les modifications ont été annulées !");
            window.location.reload(true);
        }
        else if(re.action === "RELATION_DELETED") {
            window.confirm("La relation a bien été supprimée !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('nuke_relation_callback', function(re) {
        if(re.action === "RELATION_VALIDATED") {
            window.confirm("Votre relation a été ajoutée !");
            window.location.reload(true);
        }
        else {
            window.confirm("Erreur");
        }
    });
    phpbb.addAjaxCallback('nuke_relation_modify_callback', function(re) {
        if(re.action === "RELATION_UPDATED") {
            window.confirm("Votre relation a bien été mise à jour !");
            window.location.reload(true);
        }
        else if(re.action === "RELATION_ROLLBACK") {
            window.confirm("Les modifications ont été annulées !");
            window.location.reload(true);
        }
        else if(re.action === "RELATION_DELETED") {
            window.confirm("La relation a bien été supprimée !");
            window.location.reload(true);
        }
    });
});

function modify_relation(rowCount, className) {
    let relationTitle = document.getElementsByClassName(className + "_title")[rowCount];
    let relationDescr = document.getElementsByClassName(className + "_description")[rowCount];
    let input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("value", relationTitle.innerHTML);
    input.name = "edit_title";
    relationTitle.parentNode.replaceChild(input, relationTitle);
    let textarea = document.createElement("textarea");
    textarea.innerHTML = relationDescr.innerHTML;
    textarea.name = "edit_description";
    relationDescr.parentNode.replaceChild(textarea, relationDescr);
    let buttonModify = document.getElementsByClassName(className + "_modify")[rowCount];
    buttonModify.style.display = "none";
    let buttonValidate = document.getElementsByClassName(className + "_validate")[rowCount];
    let buttonRollback = document.getElementsByClassName(className + "_rollback")[rowCount];
    let buttonDelete = document.getElementsByClassName(className + "_delete")[rowCount];
    buttonValidate.style.display = "block";
    buttonDelete.style.display = "none";
    buttonRollback.style.display = "block";
}