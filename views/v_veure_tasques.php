<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/flowbite@1.3.3/dist/datepicker.js"></script>
  
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

                <?php 
                  //require('../models/m_altres.php');
                  foreach ($usuaris as $usuari) {                    
                ?>
                  <option><?php echo @$usuari;?></option>
                  
                <?php 
                  }                    
                ?>
                </select>
              </div>

              <div class="w-1/4">
                <label for="taskStatus" class="">Estat inicial de la Tasca:</label>
                <select
                  name="taskStatus"
                  id="taskStatus"
                  class="mt-1 w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >
                <?php                   
                  foreach ($estatsTasca as $estat) {                    
                ?>
                  <option><?php echo @$estat;?></option>  
                <?php 
                  }                    
                ?>
                </select>
              </div>

              <div class="flex space-x-16">
                <div class="w-1/2">
                  <label for="taskName" class="">Tasca:</label>
                  <input
                    type="text"
                    name="taskName"
                    id="taskName"
                    placeholder="Nom de la Tasca"
                    class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  />
                </div>

                

                <div class="w-1/6">  
                  <label for="taskStart" class="">Data inici:</label>
                  <input datepicker datepicker-format="dd/mm/yyyy" name="taskStart" id="taskStart" placeholder="Data Inici" type="text" 
                  class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  placeholder="Data Inici">                  
                </div>

                <div class="w-1/6">  
                  <label for="taskEnd" class="">Data Fi:</label>
                  <input datepicker datepicker-format="dd/mm/yyyy" name="taskEnd" id="taskEnd" value="<?php echo @$tasca['endDate'];?>" type="text" 
                  class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  placeholder="Data Fi">                  
                </div>

              </div>

              <div class="">
                <label for="description" class="">Descripció:</label>
                <textarea
                  type="textarea"
                  cols="30"
                  rows="5"
                  name="taskDescription"
                  id="taskDescription"
                  placeholder="Descripció de la tasca"
                  class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                ></textarea>
              </div>            

              <div>
                <input type="hidden" id="accio" name="accio" value="afegir">  
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
    /*$tasques = array();

    $tasques[0] = array();
    $tasques[0]['name'] = 'Anar a la platja';
    $tasques[0]['description'] = 'fer entrepans, carregar sombrilla, agafar nevera...';
    
    $tasques[1] = array();
    $tasques[1]['name'] = 'Contractar asistenta';
    $tasques[1]['description'] = 'mirar anuncis, trucar ETTs, parlar amb';
    */
    foreach($tasques as $tasca) {
?>
            <tr>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                    <?php echo @$tasca['taskStart'];?>                    
                </p>
              </td>
              
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">                   
                    <?php echo @$tasca['taskEnd'];?>
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">                    
                    <?php echo @$tasca['taskName'];?>
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">                    
                    <?php echo @$tasca['taskDescription'];?>
                </p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                  <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                  <span class="relative"><?php echo @$tasca['taskStatus'];?></span>
                </span>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                <?php echo @$tasca['userName'];?>
                </p>
              </td>
                



              <td class="px-7 py-5 border-b border-gray-200 bg-white text-sm">
              <form method="post" action="../controllers/c_control.php">              
                  <input type="hidden" id="accio" name="accio" value="modificar">
                  <input type="hidden" id="id" name="id" value="<?php echo @$tasca['idTask'];?>">
                  <button
                                type="submit"
                                class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600"
                              >
                                Modificar
                  </button>
              </form>   
              </td>
              <td class="px-7 py-5 border-b border-gray-200 bg-white text-sm ">
              <form method="post" action="../controllers/c_control.php">              
                  <input type="hidden" id="accio" name="accio" value="esborrar">
                  <input type="hidden" id="id" name="id" value="<?php echo @$tasca['idTask'];?>">
                  <button
                                type="submit"
                                class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600"
                              >
                                Esborrar
                  </button>
              </form>
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


