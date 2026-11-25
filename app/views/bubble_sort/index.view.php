<?php

require(BASE_PATH . 'views/partials/head.php');
require(BASE_PATH . 'views/partials/nav.php');
require BASE_PATH . "Core/Sorting/NumGen.php";
require BASE_PATH . "Core/Sorting/BubbleSort.php";

$initial_arr = NumGen::generate_numbers();
$arr_to_sort = $initial_arr; // Make a copy so we keep the original for display

ob_start();
$sorted_arr = BubbleSort::SortArray($arr_to_sort);
$sorting_steps_html = ob_get_clean();
?>

<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-6">Bubble Sort Visualization</h1>

    <div class="border p-4 rounded bg-gray-50 mb-4">
        <h2 class="font-bold text-lg mb-2">Initial Array</h2>
        <div class="p-3 bg-white border border-slate-300 font-mono text-lg rounded">
            <?php echo implode(', ', $initial_arr); ?>
        </div>
    </div>

    <h2 class="text-xl font-semibold mb-4">Step-by-Step Passes:</h2>
    <div class="mb-8">
        <?php echo $sorting_steps_html; ?>
    </div>

    <div class="border p-4 rounded bg-green-50 border-green-200 mb-8">
        <h2 class="font-bold text-green-800 text-lg">Final Result:</h2>
        <p class="font-mono text-lg text-green-900 bg-white p-3 border border-green-200 rounded mt-2">
            <?php echo implode(', ', $sorted_arr); ?>
        </p>
    </div>
</main>