$("#pf_gain_level").keypress(function (evt) {
    evt.preventDefault();
});

jQuery(function($) {
    phpbb.addAjaxCallback('pf_gain_level_callback', function(re) {
        if(re.action === "PF_LEVEL_UP") {
            window.confirm("Le personnage gagne " + $('#pf_gain_level').val() + " niveaux");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_gain_exp_callback', function(re) {
        if(re.action === "PF_EXPERIENCE") {
            window.confirm("Le personnage gagne " + $('#pf_gain_exp').val() + " points d\'expérience");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_give_skillpoints_callback', function(re) {
        if(re.action === "PF_SKILLPOINTS") {
            window.confirm("Le personnage gagne " + $('#pf_give_skillpoints').val() + " points de compétence");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_give_influence_callback', function(re) {
        if(re.action === "PF_INFLUENCE") {
            window.confirm("Le groupe gagne " + $('#pf_give_influence').val() + " points d\'influence");
            window.location.reload(true);
        }
        else window.confirm("Les points d\'influence ne sont pas disponibles pour ce groupe !");
    });
    phpbb.addAjaxCallback('pf_gain_rank_callback', function(re) {
        if(re.action === "is_chunin") {
            window.confirm("Le personnage est devenu Chûnin !");
            window.location.reload(true);
        }
        else if(re.action === "is_jonin") {
            window.confirm("Le personnage est devenu Jônin !");
            window.location.reload(true);
        }
        else if(re.action === "is_kage") {
            window.confirm("Le personnage est devenu Kage !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_give_technique_callback', function(re) {
        if(re.action === "PF_D_TECHNIQUE") {
            window.confirm("Le personnage a reçu une technique de rang D !");
            window.location.reload(true);
        }
        else if(re.action === "PF_C_TECHNIQUE") {
            window.confirm("Le personnage a reçu une technique de rang C !");
            window.location.reload(true);
        }
        else if(re.action === "PF_B_TECHNIQUE") {
            window.confirm("Le personnage a reçu une technique de rang B !");
            window.location.reload(true);
        }
        else if(re.action === "PF_A_TECHNIQUE") {
            window.confirm("Le personnage a reçu une technique de rang A !");
            window.location.reload(true);
        }
        else if(re.action === "PF_S_TECHNIQUE") {
            window.confirm("Le personnage a reçu une technique de rang S !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_give_jinchuriki_callback', function(re) {
        if(re.action === "PF_JINCHURIKI") {
            window.confirm(`Le personnage est devenu le propriétaire de ${re.demon} !`);
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_erase_jinchuriki_callback', function(re) {
        if(re.action === "PF_ERASE_JINCHURIKI") {
            window.confirm("Le personnage n'est plus un jinchuriki, son démon est libre pour un autre joueur !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_give_overspecialization_callback', function(re) {
        if(re.action === "PF_GIVE_OVERSPECIALIZATION") {
            window.confirm("Le personnage est désormais surpécialisé !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_erase_overspecialization_callback', function(re) {
        if(re.action === "PF_ERASE_OVERSPECIALIZATION") {
            window.confirm("Le personnage n'est plus surspécialisé, il peut désormais dépenser des points dans d'autres domaines !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_give_first_kg_callback', function(re) {
        if(re.action === "PF_GIVE_FIRST_KG") {
            window.confirm(`Le personnage a reçu le Kekkei Genkai suivant : ${re.kg_type} !`);
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_give_second_kg_callback', function(re) {
        if(re.action === "PF_GIVE_SECOND_KG") {
            window.confirm(`Le personnage a reçu le Kekkei Genkai suivant : ${re.kg_type} !`);
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_erase_first_kg_callback', function(re) {
        if(re.action === "PF_ERASE_FIRST_KG") {
            window.confirm("Le Kekkei Genkai a été retiré !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_erase_second_kg_callback', function(re) {
        if(re.action === "PF_ERASE_SECOND_KG") {
            window.confirm("Le Kekkei Genkai a été retiré !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_give_first_hiden_callback', function(re) {
        if(re.action === "PF_GIVE_FIRST_HIDEN") {
            window.confirm(`Le personnage a reçu le Hiden suivant : ${re.hiden_type} !`);
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_give_second_hiden_callback', function(re) {
        if(re.action === "PF_GIVE_SECOND_HIDEN") {
            window.confirm(`Le personnage a reçu le Hiden suivant : ${re.hiden_type} !`);
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_erase_first_hiden_callback', function(re) {
        if(re.action === "PF_ERASE_FIRST_HIDEN") {
            window.confirm("Le Hiden a été retiré !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_erase_second_hiden_callback', function(re) {
        if(re.action === "PF_ERASE_SECOND_HIDEN") {
            window.confirm("Le Hiden a été retiré !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_reset_callback', function(re) {
        console.log("ok");
        console.log(re.action);
        if(re.action === "PF_RESET") {
            window.confirm("Le reset a été effectué !");
            window.location.reload(true);
        }
    });
});