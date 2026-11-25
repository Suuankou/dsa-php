<?php
require(BASE_PATH . 'views/partials/head.php');
require(BASE_PATH . 'views/partials/nav.php');
require BASE_PATH . "Core/Sorting/Fibonacci.php";
require BASE_PATH . "Core/Prints/Print_Sequence.php";

$fib = new Fibonacci();
$numbers = [];
$limit = isset($_GET['limit']) ? (int) $_GET['limit'] : null;
$error = null;

if ($limit !== null) {
    if ($limit > 2) {
        $limit = min($limit, 100);
        $numbers = $fib->calculate_rec([], $limit);
    } else {
        $error = "Please enter a number greater than 2.";
    }
}
?>

<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-6">Fibonacci (rec)</h1>

    <div class="border p-4 rounded bg-white mb-4">
        <form action="/fib_rec" method="GET" class="flex flex-col gap-3 sm:max-w-xs">
            <label for="limit" class="font-semibold text-slate-800">Limit</label>
            <input
                type="number"
                id="limit"
                name="limit"
                min="3"
                max="100"
                value="<?= htmlspecialchars((string) ($limit ?? ''), ENT_QUOTES, 'UTF-8') ?>"
                class="px-4 py-2 border rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-slate-300"
            >
            <button
                type="submit"
                class="inline-flex items-center justify-center rounded border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-800 transition hover:border-slate-400 hover:bg-slate-50 hover:shadow-sm"
            >
                Generate
            </button>
        </form>
    </div>

    <?php if ($error !== null): ?>
        <p class="text-red-500"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

    <?php if (!empty($numbers)): ?>
        <?php \Core\Prints\Print_Sequence::render($numbers); ?>
        <?php \Core\Prints\Print_Sequence::renderCount($numbers); ?>
    <?php endif; ?>
</main>
