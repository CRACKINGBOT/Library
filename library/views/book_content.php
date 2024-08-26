<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $title ?>- Nebula Library</title>
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Rajdhani:wght@300;400;700&display=swap');

      :root {
         --bg-color: #0a192f;
         --text-color: #e6f1ff;
         --accent-color: #00ff88;
         --secondary-color: #112240;
         --tertiary-color: #ffd700;
      }

      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }

      .flex {
         display: flex;
         gap: 30px;
      }


      body {
         font-family: 'Rajdhani', sans-serif;
         background-color: var(--bg-color);
         background-image: url('/api/placeholder/1920/1080');
         background-size: cover;
         background-attachment: fixed;
         background-position: center;
         color: var(--text-color);
         line-height: 1.6;
      }

      .container {
         width: 100%;
         max-width: 1200px;
         margin: 0 auto;
         padding: 0 20px;
      }

      header {
         background-color: rgba(17, 34, 64, 0.8);
         padding: 20px 0;
         backdrop-filter: blur(5px);
      }

      nav {
         display: flex;
         justify-content: space-between;
         align-items: center;
      }

      .logo {
         font-family: 'Orbitron', sans-serif;
         font-size: 2rem;
         font-weight: 700;
         color: var(--accent-color);
      }

      .nav-links {
         display: flex;
         gap: 20px;
      }

      .nav-links a {
         color: var(--text-color);
         text-decoration: none;
         font-weight: 700;
         transition: color 0.3s ease;
      }

      .nav-links a:hover {
         color: var(--accent-color);
      }

      .book-header {
         background-color: rgba(10, 25, 47, 0.7);
         padding: 60px 0;
         text-align: center;
         backdrop-filter: blur(5px);
      }

      .book-title {
         font-family: 'Orbitron', sans-serif;
         font-size: 3rem;
         color: var(--accent-color);
         margin-bottom: 20px;
      }

      .book-author {
         font-size: 1.5rem;
         color: var(--tertiary-color);
         margin-bottom: 20px;
      }

      .book-rating {
         font-size: 1.2rem;
         color: var(--text-color);
      }

      .book-content {
         display: flex;
         flex-wrap: wrap;
         gap: 40px;
         padding: 60px 0;
         background-color: rgba(17, 34, 64, 0.8);
         backdrop-filter: blur(5px);
      }

      .book-image {
         flex: 1;
         min-width: 300px;
         max-width: 400px;
      }

      .book-image img {
         width: 100%;
         height: auto;
         border-radius: 10px;
         box-shadow: 0 0 20px rgba(0, 255, 136, 0.3);
      }

      .book-details {
         flex: 2;
         min-width: 300px;
      }

      .book-description {
         margin-bottom: 30px;
      }

      .book-info {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
         gap: 20px;
         margin-bottom: 30px;
      }

      .info-item {
         background-color: rgba(230, 241, 255, 0.1);
         padding: 15px;
         border-radius: 10px;
      }

      .info-item h3 {
         color: var(--tertiary-color);
         margin-bottom: 10px;
      }

      .cta-button {
         display: inline-block;
         padding: 12px 24px;
         background-color: var(--accent-color);
         color: var(--bg-color);
         text-decoration: none;
         border-radius: 30px;
         font-weight: 700;
         transition: all 0.3s ease;
         text-transform: uppercase;
      }

      .cta-button:hover {
         background-color: var(--tertiary-color);
         transform: scale(1.05);
      }

      footer {
         background-color: rgba(17, 34, 64, 0.8);
         text-align: center;
         padding: 20px 0;
         backdrop-filter: blur(5px);
      }

      @media (max-width: 768px) {
         .nav-links {
            display: none;
         }

         .book-title {
            font-size: 2.5rem;
         }

         .book-content {
            flex-direction: column;
            align-items: center;
         }

         .book-image {
            max-width: 100%;
         }
      }
   </style>
</head>

<body>
   <header>
      <nav class="container">
         <div class="logo">Nebula Literaria</div>
         <div class="nav-links">
            <a href="#inicio">Inicio</a>
            <a href="#catalogo">Catálogo</a>
            <a href="#eventos">Eventos</a>
            <a href="#contacto">Contacto</a>
         </div>
      </nav>
   </header>

   <main>
      <section class="book-header">
         <div class="container">
            <h1 class="book-title"><?= $book['book_name'] ?></h1>
            <p class="book-author">Por Aria Starlight</p>
            <div class="book-rating">★★★★☆ 4.5/5</div>
         </div>
      </section>

      <section class="book-content">
         <div class="container flex">
            <div class="book-image">
               <img src="<?= $book['book_image'] ?>" alt="Portada de Nebulosa de Sueños">
            </div>
            <div class="book-details">
               <div class="book-description">
                  <h2>Sinopsis</h2>
                  <p><?= $book['book_description'] ?></p>
               </div>
               <div class="book-info">
                  <div class="info-item">
                     <h3>Género</h3>
                     <p>Ciencia Ficción, Aventura Espacial</p>
                  </div>
                  <div class="info-item">
                     <h3>Páginas</h3>
                     <p>420</p>
                  </div>
                  <div class="info-item">
                     <h3>Año de Publicación</h3>
                     <p>2184</p>
                  </div>
                  <div class="info-item">
                     <h3>Idioma</h3>
                     <p>Español</p>
                  </div>
               </div>
               <a href="/book/read/<?= $book['book_id'] ?>" class="cta-button">Comenzar Lectura</a>
            </div>
         </div>
      </section>
   </main>

   <footer>
      <div class="container">
         <p>&copy; 2024 Nebula Literaria. Todos los derechos reservados en esta y otras dimensiones.</p>
      </div>
   </footer>
</body>

</html>
