<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <script defer src="mobile-menu.js"></script>
    <title>Succes!</title>
</head>
<body>
    
<?php

require_once 'header.php'

?>

<div class="mx-auto max-w-2xl py-16 sm:py-48 lg:py-16">
  <div class="text-center pt-16">
    <div class="outline p-12 rounded-3xl outline-cyan-700 shadow-lg shadow-cyan-700">
      <h1 class="text-6xl font-bold tracking-tight text-gray-900 mb-10">Success!</h1>
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Je order is ontvangen</h2>
      <p class="text-lg text-gray-900 mb-10">
        Wij kunnen nu zien dat je hebt bestelden en betaald
      </p>
      <ul class="text-gray-900">
        <li class="mb-5">
          <span class="text-lg">Wil je ons beter leren kennen?</span>
          <div class="mt-2 flex items-center justify-center">
          <a href="about.php" class="rounded-md bg-gradient-to-br from-fuchsia-900 via-fuchsia-900 to-rose-500 px-3 py-2 text-sm font-semibold text-white ">Bekijk de over ons pagina</a>
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