jQuery(function($) {
    phpbb.addAjaxCallback('character_introduction_callback', function(re) {
        window.location.replace(re.url);
    });
});