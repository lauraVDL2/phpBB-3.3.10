jQuery(function($) {
    let first_select = $('#first_ft_select');
    let second_selects = $('.second_ft_select');
    let third_selects = $('.third_ft_select');
    let ft_tech = $('#new_ft_tech');
    let second_type_select = $('.second_type_select');
    second_type_select.val("");
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
            second_type_select.val("");
            second_type_select.hide();
            $('#technique_nj_type').show();
        }
        else if(first_select.val() === "Genjutsu") {
            second_selects.val("");
            third_selects.val("");
            second_selects.hide();
            third_selects.hide();
            ft_tech.hide();
            second_type_select.val("");
            second_type_select.hide();
            $('#technique_gj_type').show();
        }
        else if(first_select.val() === "Taijutsu") {
            second_selects.val("");
            third_selects.val("");
            second_selects.hide();
            third_selects.hide();
            ft_tech.hide();
            second_type_select.val("");
            second_type_select.hide();
            $('#technique_tj_type').show();
        }
        else if(first_select.val() === "Kekkei Genkai") {
            second_selects.val("");
            third_selects.val("");
            second_selects.hide();
            third_selects.hide();
            ft_tech.hide();
            second_type_select.val("");
            second_type_select.hide();
            $('#technique_kg_type').show();
        }
        else if(first_select.val() === "Hiden") {
            second_selects.val("");
            third_selects.val("");
            second_selects.hide();
            third_selects.hide();
            ft_tech.hide();
            second_type_select.val("");
            second_type_select.hide();
            $('#technique_hiden_type').show();
        }
        else {
            second_selects.val("");
            third_selects.val("");
            second_selects.hide();
            third_selects.hide();
            ft_tech.hide();
            second_type_select.val("");
            second_type_select.hide();
        }
    });
    $('#technique_kg_type').on("change", () => {
        ft_tech.hide();
        $('#technique_kg_rank').show();
        second_type_select.val("");
        second_type_select.hide();
    });
    $('#technique_hiden_type').on("change", () => {
        ft_tech.hide();
        $('#technique_hiden_rank').show();
        second_type_select.val("");
        second_type_select.hide();
    });
    $('#technique_nj_type').on("change", () => {
        let nj_type = $('#technique_nj_type').val();
        if(nj_type === "Irou Jutsu") {
            second_type_select.val("");
            second_type_select.hide();
            $('#irou_jutsu_ft_type').show();
            ft_tech.hide();
        }
        else if(nj_type === "Fuinjutsu") {
            second_type_select.val("");
            second_type_select.hide();
            $('#fuinjutsu_ft_type').show();
            ft_tech.hide();
        }
        else if(nj_type) {
            ft_tech.hide();
            $('#technique_nj_rank').show();
            second_type_select.val("");
            second_type_select.hide();
        }
        else {
            ft_tech.hide();
            third_selects.hide();
        }
        third_selects.val("");
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
        third_selects.val("");
    });
    $('#technique_tj_type').on("change", () => {
        if($('#technique_tj_type').val() === "Bukijutsu") {
            second_type_select.val("");
            second_type_select.hide();
            $('#buki_ft_type').show();
            ft_tech.hide();
        }
        else if($('#technique_tj_type').val()) {
            second_type_select.val("");
            second_type_select.hide();
            ft_tech.hide();
            $('#technique_tj_rank').show();
        }
        else {
            ft_tech.hide();
            third_selects.hide();
        }
        third_selects.val("");
    });
    $('#technique_kg_rank').on("change", () => {
        if($('#technique_kg_rank').val()) {
            ft_tech.show();
        }
        else {
            ft_tech.hide();
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
    $('#technique_hiden_rank').on("change", () => {
        if($('#technique_hiden_rank').val()) {
            ft_tech.show();
        }
        else {
            ft_tech.hide();
        }
    });


    //Sous catégories
    $('#buki_ft_type').on("change", () => {
        if($('#buki_ft_type').val()) {
            ft_tech.hide();
            $('#technique_tj_rank').show();
        }
        else {
            ft_tech.hide();
            third_selects.hide();
        }
        third_selects.val("");
    });
    $('#irou_jutsu_ft_type').on("change", () => {
        if($('#irou_jutsu_ft_type').val()) {
            ft_tech.hide();
            $('#technique_nj_rank').show();
        }
        else {
            ft_tech.hide();
            third_selects.hide();
        }
        third_selects.val("");
    });
    $('#fuinjutsu_ft_type').on("change", () => {
        if($('#fuinjutsu_ft_type').val()) {
            ft_tech.hide();
            $('#technique_nj_rank').show();
        }
        else {
            ft_tech.hide();
            third_selects.hide();
        }
        third_selects.val("");
    });

    //CREATE TECHNIQUE
    $('#new_ft_technique').val($('#new_ft_technique').html());
    phpbb.addAjaxCallback('new_technique_callback', function(r) {
        window.confirm("La technique " + $('#new_ft_name').val() + " va être créée, il vous faudra ensuite contacter un administrateur pour la valider !");
        if(r.is_ok) {
            window.location.reload(true);
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
        //ADMINISTRATOR : CHANGE THE TECHNIQUE TO MODIFY MODE
        else if(re.my_action === "MODIFY_TECHNIQUE") {
            window.confirm("La technique repasse en modification !");
            window.location.reload(true);
        }
    });

    phpbb.addAjaxCallback('add_ft_talent_callback', function(re) {
        if(re.action === "TALENT_ADDED") {
            window.confirm("Le talent a bien été ajouté !");
            window.location.reload(true);
        }
    });

    phpbb.addAjaxCallback('delete_ft_talent_callback', function(re) {
        if(re.action === "TALENT_DELETED") {
            window.confirm("Le talent a bien été supprimé !");
            window.location.reload(true);
        }
    });

    phpbb.addAjaxCallback('update_inventory_callback', function(re) {
        if(re.action === "INVENTORY_UPDATED") {
            window.confirm("L'inventaire a été mis à jour !");
            window.location.reload(true);
        }
    });
})

function copyNinjutsu(t) {
    let ninjutsu = document.getElementsByClassName('ft_ninjutsu')[t];
    let title = ninjutsu.getElementsByClassName('ft_technique_information')[0].innerHTML;
    let description = ninjutsu.getElementsByClassName('ft_technique_description')[0].innerHTML;
    let txt = `[ninjutsu][title_technique]${title}[/title_technique][descr_t]${description}[/descr_t][/ninjutsu]`;
    navigator.clipboard.writeText(txt);
}

function copyTaijutsu(t) {
    let taijutsu = document.getElementsByClassName('ft_taijutsu')[t];
    let title = taijutsu.getElementsByClassName('ft_technique_information')[0].innerHTML;
    let description = taijutsu.getElementsByClassName('ft_technique_description')[0].innerHTML;
    let txt = `[taijutsu][title_technique]${title}[/title_technique][descr_t]${description}[/descr_t][/taijutsu]`;
    navigator.clipboard.writeText(txt);
}

function copyGenjutsu(t) {
    let genjutsu = document.getElementsByClassName('ft_ninjutsu')[t];
    let title = genjutsu.getElementsByClassName('ft_technique_information')[0].innerHTML;
    let description = genjutsu.getElementsByClassName('ft_technique_description')[0].innerHTML;
    let txt = `[genjutsu][title_technique]${title}[/title_technique][descr_t]${description}[/descr_t][/genjutsu]`;
    navigator.clipboard.writeText(txt);
}

function copyKG(t) {
    let kg = document.getElementsByClassName('ft_kg')[t];
    let title = kg.getElementsByClassName('ft_technique_information')[0].innerHTML;
    let description = kg.getElementsByClassName('ft_technique_description')[0].innerHTML;
    let txt = `[kg][title_technique]${title}[/title_technique][descr_t]${description}[/descr_t][/kg]`;
    navigator.clipboard.writeText(txt);
}