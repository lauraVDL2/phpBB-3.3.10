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
    phpbb.addAjaxCallback('sp_gen1_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez désormais le talent Généraliste+ !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_gen2_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez désormais le talent Généraliste++ !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_gen3_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez désormais le talent Généraliste+++ !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_senjutsu_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez la spécialisation élite Senjutsu !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_hiraishin_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez la spécialisation élite Hiraishin !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_jinton_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez la spécialisation élite Jinton !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_gyoton_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez la spécialisation élite Gyôton !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_kyoton_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez la spécialisation élite Kyôton !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_cursed_seal_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez la spécialisation élite Marque maudite !");
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
    phpbb.addAjaxCallback('sp_illu1_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez désormais le talent Illusionniste+ !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_illu2_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez désormais le talent Illusionniste++ !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_illu3_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez désormais le talent Illusionniste+++ !");
            window.location.reload(true);
        }
    });

    //TAIJUTSU
    phpbb.addAjaxCallback('sp_second_weapon_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous avez désormais la possibilité de sélectionner une nouvelle arme dans le menu utilisateur !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_third_weapon_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous avez désormais la possibilité de sélectionner une nouvelle arme dans le menu utilisateur !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_hachimon_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez la spécialisation élite Hachimon !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_nintaijutsu_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez la spécialisation élite Nintaijutsu !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_chakrablade_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez la spécialisation élite Lames de Chakra !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_crit1_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez désormais le talent Critique+ !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_crit2_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez désormais le talent Critique++ !");
            window.location.reload(true);
        }
    });

    //HIDEN & KG
    phpbb.addAjaxCallback('sp_kugutsu_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous pouvez désormais sélectionner le Kugutsu dans votre Fiche Technique !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_mangekyo_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez la spécialisation élite Mangekyô !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_hashirama_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez la spécialisation élite Hashirama !");
            window.location.reload(true);
        }
    });
    phpbb.addAjaxCallback('sp_hitokugutsu_callback', function(r) {
        if(r.is_ok) {
            window.confirm("Achat effectué, vous possédez la spécialisation élite Hitokugutsu !");
            window.location.reload(true);
        }
    });
})