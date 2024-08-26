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
                  <h2>Agregar Libro</h2>
               </div>
               <div class="card-body">
                  <form id="libroForm" method="post">
                     <div class="form-group">
                        <label for="nombre">Nombre del Libro:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required minlength="3" maxlength="255">
                        <div class="invalid-feedback">
                           El nombre debe tener entre 3 y 255 caracteres.
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" maxlength="500"></textarea>
                        <div class="invalid-feedback">
                           La descripción no puede exceder los 500 caracteres.
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="imagen">URL de la Imagen:</label>
                        <input type="url" class="form-control" id="imagen" name="imagen" pattern="https?://.+" required>
                        <div class="invalid-feedback">
                           Por favor, ingresa una URL válida.
                        </div>
                     </div>

                     <div id="paginas">
                        <!-- Aquí se agregarán las páginas -->
                     </div>

                     <button type="button" class="btn btn-warning mt-3" id="agregarPagina">Add New Page</button>
                     <button type="submit" class="btn btn-add mt-3">Guardar Libro</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <script>
      const form = document.getElementById('libroForm');
      form.addEventListener('submit', function(event) {
         if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
         }
         form.classList.add('was-validated');
      });

      let numeroPagina = 1;
      document.getElementById('agregarPagina').addEventListener('click', function() {
         let nuevaPagina = `
   <div class="form-group mt-3">
      <label for="pagina${numeroPagina}">Página ${numeroPagina}:</label>
      <textarea class="form-control" id="pagina${numeroPagina}" name="pagina${numeroPagina}" rows="5"></textarea>
   </div>
   `;
         // Se usa appendChild para agregar la nueva página sin borrar las anteriores
         document.getElementById('paginas').appendChild(createElementFromHTML(nuevaPagina));
         numeroPagina++;
      });

      // Función auxiliar para crear elementos HTML desde una cadena
      function createElementFromHTML(htmlString) {
         var div = document.createElement('div');
         div.innerHTML = htmlString.trim();
         return div.firstChild;
      }
   </script>
</body>

</html>
