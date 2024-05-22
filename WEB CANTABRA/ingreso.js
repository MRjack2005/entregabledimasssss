document.getElementById('verificarBtn').addEventListener('click', function() {
    const contrasena = document.getElementById('contrasena').value;
    if (contrasena === 'f') {
        window.location.href = '../administrador.php'; 
    } else {
        alert('Contraseña incorrecta');
    }
});
