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
            window.confirm("Le personnage est devenu le propriétaire de " + re.demon + " !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('pf_erase_jinchuriki_callback', function(re) {
        if(re.action === "PF_ERASE_JINCHURIKI") {
            window.confirm("Le personnage n'est plus un jinchuriki, son démon est libre pour un autre joueur !");
            window.location.reload(true);
        }
    });
});