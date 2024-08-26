<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Panel de Administración de Libros</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
   body {
      background-color: #0D1117;
      /* Fondo oscuro */
      color: #fff;
   }

   .table {
      background-color: #161B22;
      /* Fondo de tabla ligeramente más claro */
      color: #fff;
   }

   .table th,
   .table td {
      border-color: #21262D;
      /* Borde de tabla aún más claro */
   }

   .btn-add {
      background-color: #00FF9F;
      /* Verde brillante */
      color: #0D1117;
      /* Texto oscuro para contraste */
   }

   .btn-add:hover {
      background-color: #00D180;
      /* Verde brillante más oscuro al pasar el mouse */
      color: #0D1117;
   }

   .btn-primary {
      background-color: #B33771;
      /* Rosa/Morado */
      color: #fff;
   }

   .btn-primary:hover {
      background-color: #922B5C;
      /* Rosa/Morado más oscuro */
      color: #fff;
   }

   .btn-danger {
      background-color: #FFD32A;
      /* Amarillo */
      color: #0D1117;
      /* Texto oscuro para contraste */
   }

   .btn-danger:hover {
      background-color: #E6B820;
      /* Amarillo más oscuro */
      color: #0D1117;
   }

   .btn-warning {
      background-color: #00FF9F;
      /* Verde brillante */
      color: #0D1117;
      /* Texto oscuro para contraste */
   }

   .btn-warning:hover {
      background-color: #00D180;
      /* Verde brillante más oscuro */
      color: #0D1117;
   }

   .text-primary {
      color: #00FF9F !important;
      /* Verde brillante */
   }
</style>

<body>
   <div class="container-fluid">
      <div class="row d-flex justify-content-center">
         <div class="col-8">

            <h1 class="text-center mb-4 text-primary">Panel de Administración de Libros</h1>

            <a href="/admin/new" class="btn btn-primary">Agregar Libro</a>

            <div class="table-responsive mt-2">
               <table class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th style="min-width: 300px;">Acciones</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($books as $book): ?>
                        <tr>
                           <td><?= $book['book_id'] ?></td>
                           <td><?= $book['book_name'] ?></td>
                           <td><?= $book['book_description'] ?></td>
                           <td>
                              <a href="/admin/book/add-page/<?= $book['book_id'] ?>" class="btn btn-sm btn-warning">Add Page</a>
                           </td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>

         </div>
      </div>

   </div>

   <!-- Bootstrap JS and dependencies -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
