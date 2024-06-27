function tabs(id, event) {
    let links = document.getElementsByClassName("gb_link");
    let current_link = event.target;
    let gb_visible = document.getElementsByClassName("gb_visible");
    for(i = 0; i < links.length; i++) {
        links[i].style.fontWeight = "normal";
        links[i].innerHTML = links[i].innerHTML.replace('<img src="https://zupimages.net/up/23/13/vjii.png"> ', '');
    }
    current_link.style.fontWeight = "bold";
    current_link.innerHTML = `<img src="https://zupimages.net/up/23/13/vjii.png"> ${current_link.innerHTML}`;
    //TABS
    for(i = 0; i < gb_visible.length; i++) {
        gb_visible[i].style.display = "none";
    }
    document.getElementById(id).style.display = "block";
}