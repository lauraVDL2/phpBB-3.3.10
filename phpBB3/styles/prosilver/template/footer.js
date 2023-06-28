jQuery(function($) {
    $('#kiri_p').on('mouseover', () => {
        $('#kiri_d').show();
    });
    $('#iwa_p').on('mouseover', () => {
        $('#iwa_d').show();
    });
    $('#suna_p').on('mouseover', () => {
        $('#suna_d').show();
    });
    $('#kumo_p').on('mouseover', () => {
        $('#kumo_d').show();
    });
    $('#konoha_p').on('mouseover', () => {
        $('#konoha_d').show();
    });
    $('#nukenin_p').on('mouseover', () => {
        $('#nukenin_d').show();
    });

    $('.progress_p').on('mouseleave', () => {
        $('.group_d').hide();
    });
});