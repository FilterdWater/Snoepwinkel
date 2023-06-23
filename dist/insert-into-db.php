<?php
$pagetitle = 'Voeg product toe | CandyPop';
require_once 'head.php';
?>

<body>

<div class="bg-white">

<?php

require_once 'navbar.php';

?>

<form action="db.dist.php" method="POST" enctype="multipart/form-data">
  <div class="flex min-h-full flex-col justify-center px-6 py-24 lg:px-8">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900 mt-4">Voeg een product toe</h2>
      <p class="mt-1 text-sm leading-6 text-gray-600">Alle info die je hierin voert wordt gebruikt om een nieuw product weer te geven</p>
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-2">
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Naam</label>
          <div class="mt-2">
            <input type="text" name="name" id="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="col-span-full">
          <label for="picture" class="block text-sm font-medium leading-6 text-gray-900">Foto</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
              <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
              </svg>
              <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label for="picture" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                  <span>Upload a file</span>
                  <input id="picture" name="picture" type="file" class="sr-only">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs leading-5 text-gray-600">WEBP or JPG/JPEG up to 10MB</p>
            </div>
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Prijs</label>
          <div class="mt-2">
            <input type="text" name="price" id="price" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-4">
          <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Beschrijving</label>
          <div class="mt-2">
            <input type="text" name="description" id="description" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-4">
          <label for="detailed_description" class="block text-sm font-medium leading-6 text-gray-900">Gedetailleerde beschrijving</label>
          <div class="mt-2">
            <textarea name="detailed_description" id="detailed_description" required rows="4" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="nutritional_value" class="block text-sm font-medium leading-6 text-gray-900">Voedingswaarde</label>
          <div class="mt-2">
            <textarea name="nutritional_value" id="nutritional_value" required rows="4" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="filter_category" class="block text-sm font-medium leading-6 text-gray-900">Filter-categorie</label>
          <div class="mt-2">
            <input type="text" name="filter_category" id="filter_category" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
      </div>
    </div>
    <div class="flex items-center gap-x-3 mt-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </div>
</form>


<?php

require_once 'footer.php';

?>


</body>
</html>