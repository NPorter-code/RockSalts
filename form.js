const myInput = document.getElementById('form');

myInput.addEventListener('invalid', function(e) {
    e.preventDefault();
});