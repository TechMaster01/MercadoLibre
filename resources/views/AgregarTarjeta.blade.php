<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/StyleAgregarT.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Libre</title>
</head>
<body>
    <div class="banner">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.22.5/mercadolibre/logo__large_plus.png" alt="Mercado Libre Logo" width="200">
    </div>
    
    <div class="card-container">
        <h2>Ingresa nueva tarjeta</h2>
        <form id="cardForm">
            <label for="cardNumber">Número de tarjeta</label>
            <input type="text" id="cardNumber" placeholder="Número de tarjeta" required>
            
            <label for="cardName">Nombre y apellido</label>
            <input type="text" id="cardName" placeholder="Nombre y apellido" required>
            
            <label for="expiryDate">Fecha de pago (MM/AA)</label>
            <input type="text" id="expiryDate" placeholder="MM/AA" maxlength="5" required>

            <label for="cvv">Código de seguridad (CVV)</label>
            <input type="text" id="cvv" placeholder="CVV" required minlength="3" maxlength="3">
            
            <button type="submit">Continuar</button>
        </form>
        <div id="responseMessage" style="margin-top: 20px; color: red;"></div>
    </div>

    <script>
        
        document.getElementById('cardNumber').addEventListener('input', function (e) {
            let input = e.target.value.replace(/\D/g, ''); 
            input = input.slice(0, 16); 
            input = input.match(/.{1,4}/g)?.join(' ') || ''; 
            e.target.value = input;
        });

    
        const expiryDateInput = document.getElementById("expiryDate");
        expiryDateInput.addEventListener("input", function(e) {
            let value = e.target.value.replace(/\D/g, ""); 
            if (value.length >= 2) {
                value = value.slice(0, 2) + "/" + value.slice(2, 4); 
            }
            e.target.value = value;
        });

        document.getElementById('cvv').addEventListener('input', function (e) {
            e.target.value = e.target.value.replace(/\D/g, '').slice(0, 4);
        });

        document.getElementById('cardForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const cardNumber = document.getElementById('cardNumber').value.replace(/\s/g, '');
            const cardName = document.getElementById('cardName').value;
            const expiryDate = document.getElementById('expiryDate').value;
            const cvv = document.getElementById('cvv').value;

            const responseMessage = document.getElementById('responseMessage');

            try {
              
                const response = await fetch('http://127.0.0.1:8000/api/tarjetas', { 
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        ID_BILLETERA: 1,
                        NUMERO_TARJETA: cardNumber,
                        NOMBRE_TITULAR: cardName,
                        FECHA_EXPIRACION: expiryDate,
                        CVV: cvv,
                        APODO:null
                    })
                });

                const result = await response.json();

                if (response.ok) {
                    responseMessage.style.color = 'green';
                    responseMessage.innerText = '¡Tarjeta registrada exitosamente!';
                } else {
                    responseMessage.style.color = 'red';
                    responseMessage.innerText = result.message || 'Hubo un problema al registrar la tarjeta.';
                }
            } catch (error) {
                console.error('Error:', error);
                responseMessage.style.color = 'red';
                responseMessage.innerText = 'Error al conectar con el servidor.';
            }
        });
    </script>
</body>
</html>
