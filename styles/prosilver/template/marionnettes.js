jQuery(function($) {
    phpbb.addAjaxCallback('delete_kt_technique_callback', function(r) {
        if(r.action == "TECHNIQUE_TO_BE_VALIDATED") {
            window.confirm("La technique va repasser en modification !");
            window.location.reload(true);
        }
        else if(r.action == "TECHNIQUE_DELETED") {
            window.confirm("La technique a été supprimée !");
            window.location.reload(true);
        }
    });

    phpbb.addAjaxCallback('modify_kt_technique_callback', function(r) {
        if(r.action == "TECHNIQUE_MODIFIED") {
            window.confirm("La technique a été modifiée !");
            window.location.reload(true);
        }
        else if(r.action == "TECHNIQUE_VALIDATED") {
            window.confirm("La technique a été validée !");
            window.location.reload(true);
        }
    });

    phpbb.addAjaxCallback('new_technique_callback', function(r) {
        if(r.action == "TECHNIQUE_CREATED") {
            window.confirm("La technique a été créée ! Il vous faudra attendre la validation d'un administrateur.");
            window.location.reload(true);
        }
    });
});

function changeSelect(e) {
    let first_select = e.value;
    let parent = e.parentNode;
    let fuinjutsu = parent.getElementsByClassName("fuinjutsu_ft_type")[0];
    let irou_jutsu = parent.getElementsByClassName("irou_jutsu_ft_type")[0];
    let second_select = parent.getElementsByClassName("second_type_select");
    let rank_select = parent.getElementsByClassName("rank_select")[0];
    if(first_select === "Fuinjutsu") {
        for(i = 0; i < second_select.length; i++) {
            second_select[i].value = "";
            second_select[i].style.display = "none";
        }
        rank_select.value = "";
        rank_select.style.display = "none";
        fuinjutsu.style.display = "inline-block";

    }
    else if(first_select === "Irou Jutsu") {
        for(i = 0; i < second_select.length; i++) {
            second_select[i].value = "";
            second_select[i].style.display = "none";
        }
        rank_select.value = "";
        rank_select.style.display = "none";
        irou_jutsu.style.display = "inline-block";
    }
    else if(first_select === "") {
        rank_select.style.display = "none";
        rank_select.value = "";
    }
    else {
        for(i = 0; i < second_select.length; i++) {
            second_select[i].value = "";
            second_select[i].style.display = "none";
        }
        rank_select.value = "";
        rank_select.style.display = "inline-block";
    }
}

function secondChangeSelect(e) {
    let second_select = e.value;
    let parent = e.parentNode;
    let rank_select = parent.getElementsByClassName("rank_select")[0];
    if(second_select != "") {
        rank_select.style.display = "inline-block";
        rank_select.value = "";
    }
    else {
        rank_select.style.display = "none";
        rank_select.value = "";
    }
}

function rankSelect(e) {
    let rank_select = e.value;
    let tech_infos = e.parentNode.getElementsByClassName("tech_infos")[0];
    if(rank_select != "") {
        tech_infos.style.display = "block";
    }
    else {
        tech_infos.style.display = "none";
    }
}

function copyInvoc(parent_id, child_id) {
    let ninjutsu = document.getElementsByClassName('tech_invoc')[parent_id].getElementsByClassName('ft_ninjutsu')[child_id];
    let title = ninjutsu.getElementsByClassName('ft_technique_information')[0].innerHTML;
    let description = ninjutsu.getElementsByClassName('ft_technique_description')[0].innerHTML;
    let txt = `[ninjutsu][title_technique]${title}[/title_technique][descr_t]${description}[/descr_t][/ninjutsu]`;
    navigator.clipboard.writeText(txt);
}