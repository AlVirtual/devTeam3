<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  
  <script>
    function mostrar_ocultar_formulari() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }
    </script>

  <title>Gestor de Tasques</title>
</head>
<body>
  
<div class="py-8 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center sm:text-center">
      <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Tasques Gestió</h2>
      <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
        Amb aquesta aplicació pots crear, editar i eliminar tasques.... <br>
        ....si tens sort i funciona ;)
      </p>
    </div>
  </div>
</div>

<div>
        <button 
            onclick="mostrar_ocultar_formulari()" 
            type="submit"
            class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600"
        >
            Crear una nova Tasca
        </button>
    </div>

  <div class="bg-white px-8 rounded-md w-full" style="display:none" id="myDIV">
      <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="bg-indigo-50 min-w-full shadow rounded-lg overflow-hidden">
          <form
            method="post"
            action="../controllers/c_control.php"
            id=""
          >
            <div class="px-4 max-w-3xl mx-auto space-y-4 bg-indigo-50 py-2">
              <div class="w-1/4">
                <label for="userName" class="">Usuari que crea la Tasca:</label>
                <select
                  name="userName"
                  id="userName"
                  class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >
                  <option>Joan</option>
                  <option>Fidel</option>
                  <option>Albert</option>
                </select>
              </div>

              <div class="w-1/4">
                <label for="userName" class="">Estat inicial de la Tasca:</label>
                <select
                  name="userName"
                  id="userName"
                  class="mt-1 w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >
                  <option selected>Pendent</option>
                  <option>En execució</option>
                  <option>Acabada</option>
                </select>
              </div>

              <div class="flex space-x-16">
                <div class="w-1/2">
                  <label for="taskName" class=""></label>
                  <input
                    type="text"
                    name="taskName"
                    id="taskName"
                    placeholder="Nom de la Tasca"
                    class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  />
                </div>

                <div class="w-1/6">
                  <label for="startDate" class=""></label>
                  <input
                    type="text"
                    name="startDate"
                    id="startDate"
                    placeholder="Data Inici"
                    class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  />
                </div>

                <div class="w-1/6">
                  <label for="endDate" class=""></label>
                  <input
                    type="text"
                    name="endDate"
                    id="endDate"
                    placeholder="Data Final"
                    class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  />
                </div>
              </div>

              <div class="">
                <label for="description" class=""></label>
                <textarea
                  type="textarea"
                  cols="30"
                  rows="5"
                  name="description"
                  id="description"
                  placeholder="Descripció de la tasca"
                  class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                ></textarea>
              </div>            

              <div>
                <input type="hidden" id="accio" name="accio" value="alta">  
                <input type="hidden" id="id" name="id" value="null">
                <button
                  type="submit"
                  class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600"
                >
                  Desar Tasca
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

<div class="bg-white p-8 rounded-md w-full">
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
      <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal table-fixed">
          <thead>
            <tr>
              <th
                class="w-1/12 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Data inici
              </th>
              <th
                class="w-1/12 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Data Final
              </th>
              <th
                class="w-1/5 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Tasca
              </th>
              <th
                class="w-1/2 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Descripció
              </th>
              <th
                class="w-1/12 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Estat
              </th>
              <th
                class="w-1/12 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Usuari
              </th>
              <th
                class="w-1/12 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Editar
              </th>
              <th
                class="w-1/12 px-5 py-3 border-b-2 border-gray-200 bg-indigo-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Esborrar
              </th>
            </tr>
          </thead>

          <tbody>
<?php 

    // Array de proves, comentar quan sigui cridat desde el controlador
    $tasques = array();

    $tasques[0] = array();
    $tasques[0]['name'] = 'Anar a la platja';
    $tasques[0]['description'] = 'fer entrepans, carregar sombrilla, agafar nevera...';
    
    $tasques[1] = array();
    $tasques[1]['name'] = 'Contractar asistenta';
    $tasques[1]['description'] = 'mirar anuncis, trucar ETTs, parlar amb';

    foreach($tasques as $tasca) {
?>
            <tr>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                    <?php echo @$tasca['startDate'];?>                    
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">                   
                    <?php echo @$tasca['endDate'];?>
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">                    
                    <?php echo @$tasca['name'];?>
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">                    
                    <?php echo @$tasca['description'];?>
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                  <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                  <span class="relative"><?php echo @$tasca['status'];?></span>
                </span>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                <?php echo @$tasca['user'];?>
                </p>
              </td>
              <td class="px-7 py-5 border-b border-gray-200 bg-white text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400 " fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
              </td>
              <td class="px-7 py-5 border-b border-gray-200 bg-white text-sm ">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </td>
            </tr>
<?php            
    }
?>            
          </tbody>
        </table>
      </div>
    </div>
  </div>

    

  </body>


