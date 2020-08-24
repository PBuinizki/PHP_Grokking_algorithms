<?php
/* СОздаем функцию бинарного поиска */
function binary_search($list, $item)
{
    $low = 0; /* Наименьшее число, начинаем с нуля */
    $high = count($list) - 1; /* Наивысшее число, длина массива */

    while ($low <= $high) {         /* Ищем, пока не сократится до одного элемента */
        $mid = ($low + $high) / 2;  /* Определяем средний элемент */
        $guess = $list[$mid];
        if ($guess == $item) {
            return $mid;            /* Найден! */
        } elseif ($guess > $item) {
            $high = $mid - 1;       /* Много */
        } elseif ($guess < $item) {
            $low = $mid + 1;        /* Мало */
        } else {
            return null;            /* Значение не найдено */
        };
    };
};

$arr = [1, 2, 3, 4, 5, 6, 7];
echo binary_search($arr, 6);
