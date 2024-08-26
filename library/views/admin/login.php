<!-- HTML -->
<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login - Nebula Literaria</title>
   <link rel="stylesheet" href="styles.css">
</head>

<body>
   <div class="container">
      <form id="login-form" class="login-form" method="post">
         <h2>Nebula Literaria</h2>
         <p>Inicia sesión en tu cuenta</p>
         <div class="input-group">
            <input type="text" name="user" required placeholder="usuario">
            <i class="icon email-icon"></i>
         </div>
         <div class="input-group">
            <input type="password" id="password" name="password" required placeholder="Contraseña">
            <i class="icon password-icon"></i>
         </div>
         <button type="submit">Iniciar sesión</button>
      </form>
   </div>
</body>

</html>

<!-- CSS -->
<style>
   body {
      font-family: Arial, sans-serif;
      background-color: #0F1624;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
   }

   .container {
      background-color: #2A3C57;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
   }

   .login-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
   }

   h2 {
      color: #00FF84;
      text-align: center;
      margin-bottom: 0.5rem;
   }

   p {
      color: #B0B0B0;
      text-align: center;
      margin-bottom: 1rem;
      font-size: 0.9rem;
   }

   .input-group {
      position: relative;
   }

   input {
      width: 100%;
      box-sizing: border-box;
      padding: 0.75rem;
      padding-left: 2.5rem;
      border: 1px solid #4A5A77;
      border-radius: 5px;
      background-color: #1E293B;
      color: #FFFFFF;
      font-size: 1rem;
   }

   input::placeholder {
      color: #6B7280;
   }

   .icon {
      position: absolute;
      left: 0.75rem;
      top: 50%;
      transform: translateY(-50%);
      width: 20px;
      height: 20px;
      background-size: contain;
      background-repeat: no-repeat;
   }

   .email-icon {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236B7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z' /%3E%3C/svg%3E");
   }

   .password-icon {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236B7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z' /%3E%3C/svg%3E");
   }

   button {
      background-color: #00FF84;
      color: #0F1624;
      border: none;
      padding: 0.75rem;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
   }

   button:hover {
      background-color: #00CC6A;
   }
</style>
