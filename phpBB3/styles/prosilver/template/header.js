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

const toggleSwitch = document.querySelector('.switch input[type="checkbox"]');

if(localStorage.getItem('isDarkMode') == 'true') {
    document.documentElement.setAttribute('data-theme', 'dark');
    document.getElementById("burger").src = "https://zupimages.net/up/23/52/gndq.png";
    toggleSwitch.checked = true;
}
else {
    document.documentElement.setAttribute('data-theme', 'light');
    document.getElementById("burger").src = "https://zupimages.net/up/23/26/tmpz.png";
    toggleSwitch.checked = false;
}

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        document.getElementById("burger").src = "https://zupimages.net/up/23/52/gndq.png";
        localStorage.setItem('isDarkMode', true);
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
        document.getElementById("burger").src = "https://zupimages.net/up/23/26/tmpz.png";
        localStorage.setItem('isDarkMode', false);
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);

