<?php
require 'vendor/autoload.php';
require 'config/db.php';

/*========================= ADMIN =========================================*/
flight::route('GET|POST /admin/book/add-page/@id', function ($id) {
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $contenido = $_POST['contenido'];
      $nuevaPagina = ORM::for_table('book_page')->create();
      $nuevaPagina->page_book_id = $id;
      $nuevaPagina->page_content = $contenido;
      $nuevaPagina->save();

      flight::redirect('/admin');
   } else {
      $book = ORM::for_table('book')->find_one($id);
      flight::render('admin/add_page.php', array('book' => $book));
   }
});

flight::route('GET|POST /admin/new', function () {
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nombre = $_POST['nombre'];
      $descripcion = $_POST['descripcion'];
      $imagen = $_POST['imagen'];

      $libro = ORM::for_table('book')->create();
      $libro->book_name = $nombre;
      $libro->book_description = $descripcion;
      $libro->book_image = $imagen;
      $libro->save();

      $libro_id = $libro->id(); // Ahora se obtiene con ->id()

      $paginas = array_filter($_POST, function ($key) {
         return strpos($key, 'pagina') === 0;
      }, ARRAY_FILTER_USE_KEY);

      foreach ($paginas as $pagina) {
         $nuevaPagina = ORM::for_table('book_page')->create();
         $nuevaPagina->page_book_id = $libro_id;
         $nuevaPagina->page_content = $pagina;
         $nuevaPagina->save();
      }

      // Redirigir o mostrar un mensaje de éxito
      flight::redirect('/admin/'); // Reemplaza con la URL de tu panel de administración
   } else {
      flight::render('admin/new_book.php');
   }
});

flight::route('/admin', function () {
   if (isset($_SESSION['user'])) {
      flight::redirect('/admin/login');
      return;
   }

   $book_list = ORM::for_table('book')->find_array();
   flight::render(
      'admin/admin.php',
      [
         'books' => $book_list,
         'page' => 'Admin'
      ]
   );
});


flight::route('GET|POST /admin/login', function () {
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $user = Flight::request()->data['user'];
      $pass = Flight::request()->data['password'];
      if ($user == 'admin' && $pass == 'admin') {
         @session_start();
         $_SESSION['user'] = 'Admin';
         flight::redirect('/admin');
         return;
      }
   }
   flight::render('admin/login.php');
});

/*========================= ADMIN =========================================*/


Flight::route('/', function () {
   $books_query = ORM::for_table('book')->find_array();
   return flight::render(
      'index.php',
      array(
         'books' => $books_query,
         'title' => 'Inicio'
      )
   );
});

Flight::route('/book/@id', function ($id) {
   $book = ORM::for_table('book')->find_one($id);
   flight::render(
      'book_content.php',
      array(
         'book' => $book,
         'title' => $book['book_name']
      )
   );
});

Flight::route('/book/read/@id', function ($id) {
   $book = ORM::for_table('book')->find_one($id);
   $paginas = ORM::for_table('book_page')
      ->where('page_book_id', $id)
      ->find_many();

   // Agregar las páginas al objeto del libro
   $book->paginas = $paginas;

   flight::render(
      'book_read.php',
      array(
         'book' => $book,
         'title' => $book->book_name
      )
   );
});

Flight::start();
