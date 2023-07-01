jQuery(function($) {
    let burger = $('#burger');
    let greyscreen = $('#greyscreen');
    let subnav = $('#subnav');
    burger.on("click", () => {
        greyscreen.show();
        subnav.show();
    });
    greyscreen.on("click", () => {
        greyscreen.hide();
        subnav.hide();
    });
});