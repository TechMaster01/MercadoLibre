document.getElementById('loginForm').addEventListener('submit', async (event) => {
    event.preventDefault();


    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    try {

        const response = await fetch('http://127.0.0.1:8000/api/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                EMAIL: email,
                CONTRASENA: password
            })
        });

        const result = await response.json();
        const responseMessage = document.getElementById('responseMessage');

        if (response.ok) {
            //alert(`Inicio de sesión exitoso. Bienvenido, ${result.user.NOMBRES}`);
            window.location.href = 'http://127.0.0.1:8000/home'; 
        } else {
            alert(`Error: ${result.message}`);
            //responseMessage.innerText = `Error: ${result.message}`;
            //responseMessage.style.color = 'red';
        }
    } catch (error) {
        console.error('Error:', error);
        document.getElementById('responseMessage').innerText = 'Error al conectar con el servidor.';
    }
});
