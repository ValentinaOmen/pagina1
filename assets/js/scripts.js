document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('button');
    button.addEventListener('click', function() {
        Swal.fire({
            title: "hola",
            text: "bienvenidos",
            icon: "success"
        });
    });
});
