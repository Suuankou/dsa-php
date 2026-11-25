<?php

namespace Core\Prints;

class Print_Sequence
{
    public static function render(array $numbers): void
    {
        if (empty($numbers)) {
            return;
        }

        echo "<div class='border p-4 rounded bg-gray-50'>";
        echo "<h2 class='font-bold text-lg mb-2'>Sequence</h2>";
        echo "<div class='flex flex-wrap gap-2'>";

        foreach ($numbers as $value) {
            echo "<span class='rounded border border-slate-300 bg-white px-3 py-2 font-mono text-sm text-slate-800'>"
                . htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8')
                . "</span>";
        }

        echo "</div>";
        echo "</div>";
    }

    public static function renderCount(array $numbers): void
    {
        if (empty($numbers)) {
            return;
        }

        echo "<p class='mt-3 text-sm text-slate-600'>Total numbers: " . count($numbers) . "</p>";
    }
}
