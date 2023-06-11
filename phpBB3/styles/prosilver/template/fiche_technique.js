jQuery(function($) {
    let first_select = $('#first_ft_select');
    let second_selects = $('.second_ft_select');
    let third_selects = $('.third_ft_select');
    let ft_tech = $('#new_ft_tech');
    first_select.val("");
    second_selects.val("");
    third_selects.val("");
    first_select.on("change", () => {
        if(first_select.val() === "Ninjutsu") {
            second_selects.val("");
            third_selects.val("");
            second_selects.hide();
            third_selects.hide();
            ft_tech.hide();
            $('#technique_nj_type').show();
        }
        else if(first_select.val() === "Genjutsu") {
            second_selects.val("");
            third_selects.val("");
            second_selects.hide();
            third_selects.hide();
            ft_tech.hide();
            $('#technique_gj_type').show();
        }
        else if(first_select.val() === "Taijutsu") {
            second_selects.val("");
            third_selects.val("");
            second_selects.hide();
            third_selects.hide();
            ft_tech.hide();
            $('#technique_tj_type').show();
        }
        else {
            second_selects.val("");
            third_selects.val("");
            second_selects.hide();
            third_selects.hide();
            ft_tech.hide();
        }
    });
    $('#technique_nj_type').on("change", () => {
        if($('#technique_nj_type').val()) {
            ft_tech.hide();
            $('#technique_nj_rank').show();
        }
        else {
            ft_tech.hide();
            third_selects.hide();
        }
    });
    $('#technique_gj_type').on("change", () => {
        if($('#technique_gj_type').val()) {
            ft_tech.hide();
            $('#technique_gj_rank').show();
        }
        else {
            ft_title.hide();
            ft_technique.hide();
            third_selects.hide();
        }
    });
    $('#technique_tj_type').on("change", () => {
        if($('#technique_tj_type').val()) {
            ft_tech.hide();
            $('#technique_tj_rank').show();
        }
        else {
            ft_tech.hide();
            third_selects.hide();
        }
    });
    $('#technique_nj_rank').on("change", () => {
        if($('#technique_nj_rank').val()) {
            ft_tech.show();
        }
        else {
            ft_tech.hide();
        }
    });
    $('#technique_gj_rank').on("change", () => {
        if($('#technique_gj_rank').val()) {
            ft_tech.show()
        }
        else {
            ft_tech.hide();
        }
    });
    $('#technique_tj_rank').on("change", () => {
        if($('#technique_tj_rank').val()) {
            ft_tech.show();
        }
        else {
            ft_tech.hide();
        }
    });

    //CREATE TECHNIQUE
    $('#new_ft_technique').val($('#new_ft_technique').html());
    phpbb.addAjaxCallback('new_technique_callback', function(r) {
        if(window.confirm("La technique " + $('#new_ft_name').val() + " va être créée, il vous faudra ensuite contacter un administrateur pour la valider !")) {
            if(r.is_ok) {
                window.location.reload(true);
            }
         }
    });

    phpbb.addAjaxCallback('modify_ft_technique_callback', function(re) {
        //MODIFY TECHNIQUE TO BE VALIDATED
        if(re.my_action === "MODIFY") {
            window.confirm("Votre technique a bien été mise à jour !");
        }
        //ADMINISTRATOR : VALIDATE TECHNIQUE
        else if(re.my_action === "VALIDATE") {
            window.confirm("La technique a été validée !");
            window.location.reload(true);
        }
    });

    phpbb.addAjaxCallback('delete_ft_technique_callback', function(re) {
        //ADMINISTRATOR : DELETE VALIDATED TECHNIQUE
        if(re.my_action === "DELETE_TECHNIQUE") {
            window.confirm("La technique a été supprimée !");
            window.location.reload(true);
        }
    });
})