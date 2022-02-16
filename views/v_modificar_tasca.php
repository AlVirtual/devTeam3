<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/flowbite@1.3.3/dist/datepicker.js"></script>

  <title>Gestor de Tasques</title>
</head>
<body>
  
<div class="py-8 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center sm:text-center">
      <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Tasques Gestió</h2>
      <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
        Modificar Tasca
      </p>
    </div>
  </div>
</div>

<?php 

    // Array de proves, comentar quan sigui cridat desde el controlador
    $tasques = array();

    $tasques[0] = array();
    $tasques[0]['id'] = 1;
    $tasques[0]['name'] = 'Anar a la platja';
    $tasques[0]['description'] = 'fer entrepans, carregar sombrilla, agafar nevera...';
    $tasques[0]['usuari'] = 'Albert';
    $tasques[0]['status'] = 'Pendent';
    $tasques[0]['startDate'] = '15/02/2022';

    foreach($tasques as $tasca) {
    
?>

  <div class="bg-white px-8 rounded-md w-full">
      <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="bg-indigo-50 min-w-full shadow rounded-lg overflow-hidden">
          <form
            method="post"
            action="../controllers/c_control.php"
            id=""
          >
            <div class="px-4 max-w-3xl mx-auto space-y-4 bg-indigo-50 py-2">
              <div class="w-1/4">
                <label for="userName" class="">Usuari:</label>
                <select
                  name="userName"
                  id="userName"
                  class="mt-1 w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >
                  <option <?php if (@$tasca['usuari'] == 'Joan') echo 'selected';?>>Joan</option>
                  <option <?php if (@$tasca['usuari'] == 'Fidel') echo 'selected';?>>Fidel</option>
                  <option <?php if (@$tasca['usuari'] == 'Albert') echo 'selected';?>>Albert</option>
                </select>
              </div>

              <div class="w-1/4">
                <label for="userName" class="">Estat:</label>
                <select
                  name="userName"
                  id="userName"
                  class="mt-1 w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >
                  <option <?php if (@$tasca['status'] == 'Pendent') echo 'selected';?>>Pendent</option>
                  <option <?php if (@$tasca['status'] == 'En execució') echo 'selected';?>>En execució</option>
                  <option <?php if (@$tasca['status'] == 'Acabada') echo 'selected';?>>Acabada</option>
                </select>
              </div>

              <div class="flex space-x-16">
                <div class="w-1/2">
                  <label for="taskName" class="">Tasca:</label>
                  <input
                    type="text"
                    name="taskName"
                    id="taskName"
                    value="<?php echo @$tasca['name'];?>"
                    class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  />
                </div>

                <div class="w-1/6">  
                  <label for="startDate" class="">Data inici:</label>
                  <input datepicker datepicker-format="dd/mm/yyyy" name="startDate" id="startDate" value="<?php echo @$tasca['startDate'];?>" type="text" 
                  class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  placeholder="Data Inici">                  
                </div>

                <div class="w-1/6">  
                  <label for="startDate" class="">Data Fi:</label>
                  <input datepicker datepicker-format="dd/mm/yyyy" name="endDate" id="endDate" value="<?php echo @$tasca['endDate'];?>" type="text" 
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
                  name="description"
                  id="description"                  
                  class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                ><?php echo @$tasca['description'];?></textarea>
              </div>            

              <div>
                <input type="hidden" id="accio" name="accio" value="modificar">  
                <input type="hidden" id="id" name="id" value="<?php echo @$tasca['id'];?>">
                <button
                  type="submit"
                  class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600"
                >
                  Desar canvis
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
<?php            
    }
?> 

  </body>


