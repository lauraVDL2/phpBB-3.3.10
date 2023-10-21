jQuery(function($) {
    phpbb.addAjaxCallback('modify_exp_forum_callback', function(re) {
        if(re.action === "MODIFY_EXP") {
            window.confirm("Les modifications ont bien été enregistrées !");
            window.location.reload(true);
        }
    });
});