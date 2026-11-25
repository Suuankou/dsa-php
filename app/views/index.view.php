
<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<main class="min-h-screen bg-slate-50">
    <section class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="mb-6 rounded border bg-white p-4">
            <h1 class="mb-2 text-2xl font-bold text-slate-900">Choose a demo</h1>
            <p class="text-slate-600">Open one of the data structure or algorithm examples below.</p>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <a
                href="/fib"
                class="rounded border border-slate-300 bg-white p-4 transition hover:border-slate-400 hover:bg-slate-50 hover:shadow-sm"
            >
                <h2 class="font-bold text-lg mb-1 text-slate-900">Fibonacci</h2>
                <p class="text-sm text-slate-600">Generate the sequence iteratively.</p>
            </a>

            <a
                href="/fib_rec"
                class="rounded border border-slate-300 bg-white p-4 transition hover:border-slate-400 hover:bg-slate-50 hover:shadow-sm"
            >
                <h2 class="font-bold text-lg mb-1 text-slate-900">Fibonacci (rec)</h2>
                <p class="text-sm text-slate-600">Recursive version of the sequence.</p>
            </a>

            <a
                href="/dsa_arrays"
                class="rounded border border-slate-300 bg-white p-4 transition hover:border-slate-400 hover:bg-slate-50 hover:shadow-sm"
            >
                <h2 class="font-bold text-lg mb-1 text-slate-900">DSA Array</h2>
                <p class="text-sm text-slate-600">Inspect generated values and traversal output.</p>
            </a>

            <a
                href="/bubble_sort"
                class="rounded border border-slate-300 bg-white p-4 transition hover:border-slate-400 hover:bg-slate-50 hover:shadow-sm"
            >
                <h2 class="font-bold text-lg mb-1 text-slate-900">Bubble Sort</h2>
                <p class="text-sm text-slate-600">Step through a basic sorting example.</p>
            </a>


            <a
                    href="/selection_sort"
                    class="rounded border border-slate-300 bg-white p-4 transition hover:border-slate-400 hover:bg-slate-50 hover:shadow-sm"
            >
                <h2 class="font-bold text-lg mb-1 text-slate-900">Selection sort</h2>
                <p class="text-sm text-slate-600">Selection sort example.</p>
            </a>
        </div>
    </section>
</main>
