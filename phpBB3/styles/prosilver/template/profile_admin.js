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
});