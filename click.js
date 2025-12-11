function myFunction(){
    document.getElementById("myDropdown").classList.toggle("show")
}

window.onclick = function(e) {
    if (!e.target.matches('dropbtn')) {
        var dropdown = document.getElementById("myDropdown");
        if (dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
        }
    }
}
