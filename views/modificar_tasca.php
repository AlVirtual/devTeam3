<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

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

    // Array de proves comentar quan sigui cridat desde el controlador
    $tasques = array();

    $tasques[0] = array();
    $tasques[0]['id'] = 1;
    $tasques[0]['name'] = 'Anar a la platja';
    $tasques[0]['description'] = 'fer entrepans, carregar sombrilla, agafar nevera...';
    $tasques[0]['usuari'] = 'Albert';
    $tasques[0]['status'] = 'en curs';

    foreach($tasques as $tasca) {
    
?>

  <div class="bg-white px-8 rounded-md w-full">
      <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="bg-indigo-50 min-w-full shadow rounded-lg overflow-hidden">
          <form
            method="post"
            action="../controllers/TasquesController.php"
            id=""
          >
            <div class="px-4 max-w-3xl mx-auto space-y-4 bg-indigo-50 py-2">
              <div class="w-1/4">
                <label for="userName" class=""></label>
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

              <div class="flex space-x-16">
                <div class="w-1/2">
                  <label for="taskName" class=""></label>
                  <input
                    type="text"
                    name="taskName"
                    id="taskName"
                    value="<?php echo @$tasca['id'];?>"
                    class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  />
                </div>

                <div class="w-1/6">
                  <label for="startDate" class=""></label>
                  <input
                    type="text"
                    name="startDate"
                    id="startDate"
                    value="<?php echo @$tasca['startDate'];?>"
                    class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  />
                </div>

                <div class="w-1/6">
                  <label for="endDate" class=""></label>
                  <input
                    type="text"
                    name="endDate"
                    id="endDate"
                    value="<?php echo @$tasca['endDate'];?>"
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
                  value="<?php echo @$tasca['description'];?>"
                  class="mt-1 block w-full py-2 px-3 border-b border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                ></textarea>
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


