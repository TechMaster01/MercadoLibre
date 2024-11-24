<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Mercado Play</title>
    <style>
        body {
        position: relative; 
        background-image: url('img/fondo-series-generico.jpg'); 
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat; 
        height: 100vh; 
    }


        body::before {
        content: ""; 
        position: absolute; 
        top: 0; 
        left: 0; 
        right: 0; 
        bottom: 0; 
        background-color: rgba(0, 0, 0, 0.8); 
        z-index: 1; 
    }

        body > * {
        position: relative; 
        z-index: 2; 
    }

    </style>
</head>
<body>
    <div class="logo">
        <img src="img/MPlay-Photoroom.png" alt="">
        <p class="eslogan">Series y películas gratis</p>
    </div>

    <div class="loading">
        <div class="loader">
    </div>
</div>
</body>

<style>
    .logo {
    display: flex;
    flex-direction: column; 
    justify-content: center; 
    align-items: center;     
    height: 100vh;           
    text-align: center; 
    margin-bottom: -100px;
    }

    .eslogan {
        font-size: 40px; 
        color: white;    
        padding: 20px;
        text-align: center;
        margin-top: -100px;
    }
    .loading {
    display: flex; 
    justify-content: center; 
    align-items: center; 
    margin-top: 20px; 
}

.loader {
    border: 8px solid rgba(255, 255, 255, 0.3); 
    border-top: 8px solid #3483fa; 
    border-radius: 50%; 
    width: 50px; 
    height: 50px; 
    animation: spin 1s linear infinite; 
    margin-top: -300px;
}

/* simulación de "cargando" */
@keyframes spin {
    0% {
        transform: rotate(0deg); 
    }
    100% {
        transform: rotate(360deg); 
    }
}

</style>
</html>