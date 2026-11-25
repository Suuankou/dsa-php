<?php

require(BASE_PATH . 'views/partials/head.php');
require(BASE_PATH . 'views/partials/nav.php');
require BASE_PATH . "Core/Sorting/NumGen.php";
require BASE_PATH . "Core/Prints/Print_Array.php";

$numbers = NumGen::generate_numbers();
$lowestNum = \Core\Sorting\Traverse::lowest($numbers);
?>

<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-6">Selection sort</h1>
    <p class="text-slate-600 mb-4">Generated values for selection sorting.</p>

    <?php \Core\Prints\Print_Array::render($numbers); ?>

    <h2 class="text-2xl font-bold mb-6">Lowest Number: <?= $lowestNum ?> </h2>
</main>
