<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Agregar Libro</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
      body {
         background-color: #0D1117;
         color: #fff;
      }

      .table {
         background-color: #161B22;
         color: #fff;
      }

      .table th,
      .table td {
         border-color: #21262D;
      }

      .btn-add {
         background-color: #00FF9F;
         color: #0D1117;
      }

      .btn-add:hover {
         background-color: #00D180;
         color: #0D1117;
      }

      .btn-primary {
         background-color: #B33771;
         color: #fff;
      }

      .btn-primary:hover {
         background-color: #922B5C;
         color: #fff;
      }

      .btn-danger {
         background-color: #FFD32A;
         color: #0D1117;
      }

      .btn-danger:hover {
         background-color: #E6B820;
         color: #0D1117;
      }

      .btn-warning {
         background-color: #00FF9F;
         color: #0D1117;
      }

      .btn-warning:hover {
         background-color: #00D180;
         color: #0D1117;
      }

      .text-primary {
         color: #00FF9F !important;
      }

      .card {
         background-color: #161B22;
         border-color: #21262D;
      }

      .form-control {
         background-color: #21262D;
         color: #fff;
         border-color: #454b50;
      }

      .form-control:focus {
         background-color: #21262D;
         color: #fff;
         border-color: #00FF9F;
         box-shadow: 0 0 0 0.2rem rgba(0, 255, 159, 0.25);
      }
   </style>
</head>

<body>
   <div class="container mt-5">
      <div class="row d-flex justify-content-end">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header text-center text-primary">
                  <h2>Agregar Página a <?= $book->book_name ?></h2>
               </div>
               <div class="card-body">
                  <form method="POST">
                     <div class="form-group">
                        <label for="contenido">Contenido de la página:</label>
                        <textarea class="form-control" id="contenido" name="contenido" rows="5"></textarea>
                     </div>
                     <button type="submit" class="btn btn-add mt-3">Guardar Página</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>
