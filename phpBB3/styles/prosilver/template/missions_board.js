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
    phpbb.addAjaxCallback('modify_mission_callback', function(re) {
        if(re.action === "MISSION_MODIFIED") {
            window.confirm("La mission a bien été modifiée !");
            window.location.reload(true);
        }
        else if(re.action === "MISSION_VALIDATED") {
            window.confirm(`La mission ${re.title} a été validée !`);
            window.location.reload(true);
        }
        else if(re.action === "MISSION_DELETED") {
            window.confirm(`La mission ${re.title} a été supprimée !`);
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('subscribe_mission_callback', function(re) {
        if(re.action === "MISSION_SUBSCRIBED") {
            window.confirm("Vous êtes désormais inscrit à la mission !");
            window.location.reload(true);
        }
        else if(re.action == "MISSION_SUB_FAIL") {
            window.confirm("Vous êtes déjà inscrit à la mission !");
            window.location.reload(true);
        }
        else if(re.action === "MISSION_UNSUBSCRIBED") {
            window.confirm("Vous vous êtes désinscrit de la mission !");
            window.location.reload(true);
        }
    });
});