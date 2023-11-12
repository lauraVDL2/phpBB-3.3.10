jQuery(function($) {
    phpbb.addAjaxCallback('create_mission_callback', function(re) {
        if(re.action === "NO_GROUP_SELECTED") {
            window.confirm("Veuillez sélectionner au moins un groupe concerné afin de créer la mission !");
        }
        else if(re.action === "MISSION_INSERTED") {
            window.confirm("La mission a bien été créée ! Il faudra maintenant attendre la validation d\'un administrateur.");
            window.location.reload(true);
        }
    });
});