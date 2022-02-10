<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>
<body>
  
<div class="py-8 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center sm:text-center">
      <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Cutre Gestió</h2>
      <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        La manera més cutre de crear una tasca
      </p>
      <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
        Amb aquesta aplicació pots crear, editar i eliminar tasques.... <br>....si tens sort i funciona.
      </p>
    </div>
  </div>
</div>
<?php
include("form.html");
include("table.html");
include("cards.html");
?>


</body>
</html>