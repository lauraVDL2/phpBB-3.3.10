jQuery(function($) {
    phpbb.addAjaxCallback('create_talent_callback', function(re) {
        if(re.action === "TALENT_VALIDATED") {
            window.confirm("Le talent a été créé !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('modify_talent_callback', function(re) {
        if(re.action === "TALENT_MODIFIED") {
            window.confirm("Le talent a été modifié !");
            window.location.reload(true);
        }
        else if(re.action === "TALENT_UNMODIFIED") {
            window.confirm("Les modifications ont été abandonnées !");
            window.location.reload(true);
        }
        else if(re.action === "TALENT_DELETED") {
            window.confirm("Le talent a été supprimé !");
            window.location.reload(true);
        }
    });
});

function modifyTalent(rowCount) {
    let allTalents = document.getElementsByClassName("all_talents")[rowCount];
    let talentTitle = allTalents.getElementsByClassName("talent_title")[0];
    let talentDescription = allTalents.getElementsByClassName("talent_description")[0];
    let input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("value", talentTitle.innerHTML);
    input.name = "edit_title";
    talentTitle.parentNode.replaceChild(input, talentTitle);
    let textarea = document.createElement("textarea");
    textarea.innerHTML = talentDescription.innerHTML;
    textarea.name = "edit_description";
    talentDescription.parentNode.replaceChild(textarea, talentDescription);
    document.getElementsByClassName("click_modify_talent")[rowCount].style.display = "none";
    document.getElementsByClassName("delete_talent")[rowCount].style.display = "none";
    document.getElementsByClassName("modify_talent")[rowCount].style.display = "block";
    document.getElementsByClassName("unmodify_talent")[rowCount].style.display = "block";
}