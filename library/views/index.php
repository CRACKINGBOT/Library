<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nebula Library | <?= $title ?></title>
   <link rel="stylesheet" href="public/css/style.css">
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
      <section class="hero">
         <div class="hero-content container">
            <h1>Explora el Universo Literario</h1>
            <p>Descubre mundos infinitos a través de nuestras páginas estelares</p>
            <a href="#catalogo" class="cta-button">Inicia tu Viaje</a>
         </div>
      </section>
      <section class="featured-books">
         <div class="container">
            <h2>Libros Destacados</h2>
            <div class="book-grid">

               <?php foreach ($books as $book): ?>
                  <div class="book-card">
                     <img src="<?= $book['book_image'] ?>" alt="Nebulosa de Sueños">
                     <div class="book-info">
                        <h3><?= $book['book_name'] ?></h3>
                        <p><?= substr($book['book_description'], 0, 100) ?>...</p>
                        <a href="book/<?= $book['book_id'] ?>" class="read-more">Leer más</a>
                     </div>
                  </div>
               <?php endforeach; ?>

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
