<?php
$pagetitle = 'Success-product | CandyPop';
require_once 'head.php';
?>

<body>
    
<?php

require_once 'navbar.php'

?>

<div class="mx-auto max-w-2xl py-16 sm:py-48 lg:py-16">
  <div class="text-center pt-16">
    <div class="outline p-12 rounded-3xl outline-cyan-700 shadow-lg shadow-cyan-700">
      <h1 class="text-6xl font-bold tracking-tight text-gray-900 mb-10">Success!</h1>
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Het product is toegevoegd</h2>
      <p class="text-lg text-gray-900 mb-10">
      Iedereen kan hem nu zien!
      </p>
      <ul class="text-gray-900">
        <li class="mb-5">
          <span class="text-lg">Wil jij hem ook zien?</span>
          <div class="mt-2 flex items-center justify-center">
          <a href="snoep.php" class="rounded-md bg-gradient-to-br from-fuchsia-900 via-fuchsia-900 to-rose-500 px-3 py-2 text-sm font-semibold text-white ">Bekijk de snoep pagina</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>



<?php

require_once 'footer.php'

?>

</body>
</html>