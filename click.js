function myFunction(){
    document.getElementById("myDropdown").classList.toggle("show")
}

window.onclick = function(event) {
    if (!event.target.matches('dropbtn')) {
        var dropdown = document.getElementsByClassName("dropdown-content");
        if (dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
        }
    }
}
