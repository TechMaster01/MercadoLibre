document.getElementById('registroForm').addEventListener('submit', async (event) => {
    event.preventDefault();

  
    const name = document.getElementById('name').value;
    const lastname = document.getElementById('lastname').value;
    const email = document.getElementById('email').value;
    const telefono = document.getElementById('telefono').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    const responseMessage = document.getElementById('responseMessage');

    if (password !== confirmPassword) {
        responseMessage.innerText = "Las contraseñas no coinciden.";
        responseMessage.style.color = "red";
        return;
    }

    try {

        const response = await fetch('http://127.0.0.1:8000/api/usuarios', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                NOMBRES: name,
                APELLIDOS: lastname,
                EMAIL: email,
                TELEFONO: telefono,
                CONTRASENA: password
            })
        });

        const result = await response.json();

        if (response.ok) {
            responseMessage.innerText = "Registro exitoso. Bienvenido, " + result.user.NOMBRE;
            responseMessage.style.color = "green";
        } else {
            responseMessage.innerText = "Error: " + (result.message || "Hubo un problema con el registro.");
            responseMessage.style.color = "red";
        }
    } catch (error) {
        console.error('Error:', error);
        responseMessage.innerText = "Error al conectar con el servidor.";
        responseMessage.style.color = "red";
    }
});
