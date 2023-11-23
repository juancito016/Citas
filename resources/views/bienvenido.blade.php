
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alma Gemela</title>
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        }

        .navbar {
        background-color: #4267b2;
        padding: 10px;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .search-bar {
        width: 200px;
        padding: 5px;
        border: none;
        border-radius: 3px;
        }

        .carousel-container {
        margin-top: 70px;
        text-align: center;
        overflow: hidden;
        }

        .carousel {
        display: flex;
        transition: transform 0.5s ease-in-out;
        }

        .carousel-item {
        flex: 0 0 100%;
        box-sizing: border-box;
        }

        .user-card {
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 10px;
        text-align: center;
        position: relative;
        }

        .user-photo {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        object-fit: cover;
        }

        .user-description {
        margin-top: 10px;
        }

        .carousel-btn {
        cursor: pointer;
        background-color: #4267b2;
        color: white;
        border: none;
        padding: 10px;
        margin: 5px;
        border-radius: 3px;
        }

        .message-modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        background: none;
        border: none;
        font-size: 16px;
        color: #666;
        }

        @media screen and (min-width: 600px) {
        .carousel-item {
            flex: 0 0 48%;
        }
        }

        @media screen and (min-width: 768px) {
        .carousel-item {
            flex: 0 0 31%;
        }
        }
        #mensajeBtn
        {
            /* Estilos generales */
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            /* Otros estilos que desees agregar */

            /* Transiciones para suavizar el cambio de color */
            transition: background-color 0.3s;
        }

    #mensajeBtn:hover {
    /* Cambia el color al pasar el ratón sobre el botón */
    background-color: #2980b9;
    }

/* Estilos para la barra de navegación */
.navbar {
    background-color: #3498db; /* Color de fondo */
    padding: 10px; /* Espaciado interno */
    text-align: center; /* Centrar el contenido */
}

/* Estilos para el texto de bienvenida */
.welcome-text {
    font-size: 24px; /* Tamaño de la fuente */
    font-weight: bold; /* Negrita */
    color: #ffffff; /* Color del texto */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra para resaltar */
}

/* Estilos para la barra de búsqueda */
.search-bar {
    padding: 8px; /* Espaciado interno */
    font-size: 16px; /* Tamaño de la fuente */
    border: none; /* Sin borde */
    border-radius: 5px; /* Bordes redondeados */
}
.var1{
    font-size: 25px; 
    font-family: 'Palatino Linotype', serif;}


</style>
</head>
<body>
    <div class="navbar">
        <span class="var1">Bienvenido a Alma Gemela</span>
        <input type="text" class="search-bar" placeholder="Buscar">
    </div>

    <div class="carousel-container">
        <button class="carousel-btn" onclick="prev()">❮</button>
        <div class="carousel">
        <!-- Carrusel 1 -->
        <div class="carousel-item">
            <div class="user-card">
            <img class="user-photo" src="img/chica1.jpg" alt="Usuario 1">
            <div class="user-description">
                <h2>Pipi</h2>
                <p>Las Princesas no trabjan</p>
                <button id="mensajeBtn" onclick="openMessageModal('Pipi')">Mandar Mensaje</button>
            </div>
            </div>
        </div>

        <!-- Carrusel 2 -->
        <div class="carousel-item">
            <div class="user-card">
            <img class="user-photo" src="img/chica2.jpg" alt="Usuario 2">
            <div class="user-description">
                <h2>Machica</h2>
                <p>Hola!</p>
                <button id="mensajeBtn" onclick="openMessageModal('Machica')">Mandar Mensaje</button>
            </div>
            </div>
        </div>

        <!-- Carrusel 3 -->
        <div class="carousel-item">
            <div class="user-card">
            <img class="user-photo" src="img/chica3.webp" alt="Usuario 3">
            <div class="user-description">
                <h2>Líans</h2>
                <p>
                    Hola! Soy Lians<br>
                    Soy nueva en la app
                </p>
                <button id="mensajeBtn" onclick="openMessageModal('Líans')">Mandar Mensaje</button>
            </div>
            </div>
        </div>

        <!-- Carrusel 4 -->
        <div class="carousel-item">
            <div class="user-card">
            <img class="user-photo" src="img/chica4.jpg" alt="Usuario 4">
            <div class="user-description">
                <h2>Pao</h2>
                <p>
                    Hola! Soy Pao <br>
                    Me gusta vivir la vida
                </p>
                <button id="mensajeBtn" onclick="openMessageModal('Pao')">Mandar Mensaje</button>
            </div>
            </div>
        </div>

        <!-- Carrusel 6 -->
        <div class="carousel-item">
            <div class="user-card">
            <img class="user-photo" src="img/chica6.jpg" alt="Usuario 4">
            <div class="user-description">
                <h2>Liz</h2>
                <p>
                    --------------
                </p>
                <button id="mensajeBtn" onclick="openMessageModal('Liz')">Mandar Mensaje</button>
            </div>
            </div>
        </div>

        <!-- Carrusel 7 -->
        <div class="carousel-item">
            <div class="user-card">
            <img class="user-photo" src="img/chica7.jpg" alt="Usuario 4">
            <div class="user-description">
                <h2>May</h2>
                <p>
                    Hola! Soy May <br>
                </p>
                <button id="mensajeBtn" onclick="openMessageModal('May')">Mandar Mensaje</button>
            </div>
            </div>
        </div>

        <!-- Carrusel 8 -->
        <div class="carousel-item">
            <div class="user-card">
            <img class="user-photo" src="img/chica8.jpg" alt="Usuario 4">
            <div class="user-description">
                <h2>Lau</h2>
                <p>
                    Hola!  <br>
                    
                </p>
                <button id="mensajeBtn" onclick="openMessageModal('Lau)">Mandar Mensaje</button>
            </div>
            </div>
        </div>

        <!-- Agrega más carruseles según sea necesario -->

        </div>
        <button class="carousel-btn" onclick="next()">❯</button>
    </div>

    <div id="messageModal" class="message-modal">
        <button class="close-btn" onclick="closeMessageModal()">✖</button>
        <h2>Mensaje para <span id="modalUserName"></span></h2>
        <textarea rows="4" cols="50" placeholder="Escribe tu mensaje aquí"></textarea>
        <button>Enviar</button>
    </div>

    <script>
        let currentIndex = 0;

        function showItem(index) {
            const itemWidth = document.querySelector('.carousel-item').offsetWidth;
            const carousel = document.querySelector('.carousel');
            carousel.style.transform = `translateX(-${index * itemWidth}px)`;
        }

        function next() {
            currentIndex = (currentIndex + 1) % (document.querySelectorAll('.carousel-item').length / 2);
            showItem(currentIndex);
        }

        function prev() {
            currentIndex = (currentIndex - 1 + document.querySelectorAll('.carousel-item').length / 2) % (document.querySelectorAll('.carousel-item').length / 2);
            showItem(currentIndex);
        }

        function openMessageModal(userName) {
            const modal = document.getElementById('messageModal');
            const modalUserName = document.getElementById('modalUserName');
            modalUserName.textContent = userName;
            modal.style.display = 'block';
        }

        function closeMessageModal() {
            const modal = document.getElementById('messageModal');
            modal.style.display = 'none';
        }

        // Mostrar el primer elemento al cargar la página
        showItem(currentIndex);
    </script>
</body>
</html>
