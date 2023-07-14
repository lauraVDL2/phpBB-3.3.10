function mapEvent(id) {
    let map_descr = document.getElementsByClassName("map_descr");
    for(i = 0; i < map_descr.length; i++) map_descr[i].style.display = "none";
    document.getElementById(id).style.display = "block";
}