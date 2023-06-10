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

    $('#new_ft_technique').val($('#new_ft_technique').html());
    phpbb.addAjaxCallback('new_technique_callback', function(r) {
        if(window.confirm("Voulez-vous créer la technique " + $('#new_ft_name').val() + " ? Il vous faudra ensuite contacter un administrateur pour la valider !")) {
            if(r.is_ok) {
                location.reload();
            }
         }
    });
})