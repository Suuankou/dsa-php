<?php

namespace Core\Prints;

class Print_Array
{
    public static function render(array $numbers): void
    {
        if (empty($numbers)) {
            return;
        }

        echo "<div class='border p-4 rounded bg-gray-50 mb-4'>";
        echo "<h2 class='font-bold text-lg mb-2'>Generated Numbers</h2>";
        echo "<div class='flex flex-wrap gap-2'>";

        foreach ($numbers as $number) {
            echo "<span class='rounded border border-slate-300 bg-white px-3 py-2 font-mono text-sm text-slate-800'>"
                . htmlspecialchars((string) $number, ENT_QUOTES, 'UTF-8')
                . "</span>";
        }

        echo "</div>";
        echo "</div>";
    }
}
