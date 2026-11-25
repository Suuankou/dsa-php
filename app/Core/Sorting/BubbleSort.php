<?php
class BubbleSort {

    public static function SortArray(array $numbers): array {
        $n = count($numbers);
        $sorted_indices = []; // Tracks which elements are confirmed sorted

        for ($i = 0; $i < $n - 1; $i++) {
            echo '<details open class="my-4 border p-4 rounded bg-gray-50">';
            echo '<summary class="cursor-pointer font-bold text-lg">Pass ' . ($i + 1) . '</summary>';
            echo '<div class="mt-4 overflow-x-auto pb-2">';

            for ($j = 0; $j < $n - $i - 1; $j++) {
                // Pass sorted_indices to maintain the darker background
                self::print_table($numbers, $j, $j + 1, $sorted_indices);

                if ($numbers[$j] > $numbers[$j + 1]) {
                    $temp = $numbers[$j];
                    $numbers[$j] = $numbers[$j + 1];
                    $numbers[$j + 1] = $temp;
                }
            }

            // After each inner loop, the last element is sorted
            $sorted_indices[] = $n - 1 - $i;

            echo '<div class="mt-4 p-2 bg-blue-100 text-sm font-semibold">End of Pass ' . ($i + 1) . ' Result: ' . implode(', ', $numbers) . '</div>';
            echo '</div>';
            echo '</details>';
        }
        return $numbers;
    }

    public static function print_table(array $data_array, int $idx1, int $idx2, array $sorted_indices) {
        echo '<div class="my-2">';
        echo '<table class="border-collapse border border-slate-400 bg-white text-sm">';
        echo '<tbody><tr>';

        foreach ($data_array as $index => $cell) {
            $class = 'border border-slate-300 px-4 py-2 text-slate-600';

            // Check if element is in the "sorted" set
            if (in_array($index, $sorted_indices)) {
                $class .= ' bg-slate-400 text-white font-bold'; // Darker for sorted elements
            } elseif ($index === $idx1 || $index === $idx2) {
                // Active comparisons
                $val1 = $data_array[$idx1];
                $val2 = $data_array[$idx2];
                $color = ($val1 > $val2)
                    ? ($index === $idx1 ? 'bg-green-200' : 'bg-red-200')
                    : ($index === $idx1 ? 'bg-red-200' : 'bg-green-200');
                $class .= " border-2 border-slate-700 $color font-bold";
            }

            echo '<td class="' . $class . '">' . htmlspecialchars($cell) . '</td>';
        }
        echo '</tr></tbody></table></div>';
    }
}
