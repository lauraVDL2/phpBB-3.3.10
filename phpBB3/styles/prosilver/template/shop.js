jQuery(function($) {
    phpbb.addAjaxCallback('sp_kuchiyose_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous pouvez désormais sélectionner les invocations sur votre Fiche Technique ! (Catégorie Ninjutsu)");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_fuin_seal_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous pouvez désormais sélectionner le Fuinjustu (sceaux) dans votre Fiche Techique ! (Catégorie Ninjutsu)");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_fuin_barrer_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous pouvez désormais sélectionner le Fuinjustu (barrières) dans votre Fiche Techique ! (Catégorie Ninjutsu)");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_irou_heal_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous pouvez désormais sélectionner l'Irou Jutsu (soins) dans votre Fiche Techique ! (Catégorie Ninjutsu)");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_irou_poison_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous pouvez désormais sélectionner l'Irou Jutsu (poisons) dans votre Fiche Techique ! (Catégorie Ninjutsu)");
            window.location.reload(true);
        }
    });

    //MORE ELEMENTS
    phpbb.addAjaxCallback('sp_second_element_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous pouvez désormais sélectionner un second élément parmi ceux que vous ne possédez pas déjà sur la page d\'accueil !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_third_element_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous pouvez désormais sélectionner un second élément parmi ceux que vous ne possédez pas déjà sur la page d\'accueil !");
            window.location.reload(true);
        }
    });

    //GAIN NEW TECHNIQUE
    phpbb.addAjaxCallback('sp_d_technique_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous avez maintenant accès à une nouvelle technique de rang D dans votre Fiche Technique !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_c_technique_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous avez maintenant accès à une nouvelle technique de rang C dans votre Fiche Technique !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_b_technique_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous avez maintenant accès à une nouvelle technique de rang B dans votre Fiche Technique !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_a_technique_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous avez maintenant accès à une nouvelle technique de rang A dans votre Fiche Technique !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_s_technique_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous avez maintenant accès à une nouvelle technique de rang S dans votre Fiche Technique !");
            window.location.reload(true);
        }
    });

    //UPGRADE RANK
    phpbb.addAjaxCallback('sp_chunin_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Félicitation, vous êtes devenu Chûnin ! Vous gagnez 4 points d'attribut, 1 technique de rang C et 1 technique de rang C.");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_jonin_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Félicitation, vous êtes devenu Jônin ! Vous gagnez 4 points d'attribut, 1 technique de rang B et 1 technique de rang A.");
            window.location.reload(true);
        }
    });

    //GENJUTSU
    phpbb.addAjaxCallback('sp_sight_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous pouvez désormais maîtriser des techniques de Genjutsu liées au contact visuel !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_sound_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous pouvez désormais maîtriser des techniques de Genjutsu liées au contact auditif !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_demonic_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous avez désormais la spécialisation élite Illusions Démoniaques !");
            window.location.reload(true);
        }
    });
})