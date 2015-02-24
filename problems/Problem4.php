<?php
namespace Euler\Problems;

use \Euler\Util;

class Problem4 implements IProblem
{
    public function solve()
    {
        $max = 0;
        for ($a = 100; $a < 1000; $a++) {
            for ($b = $a + 1; $b < 1000; $b++) {
                $n = $a * $b;
                if ($n == strrev($n) && $n > $max) {
                    $max = $n;
                }
            }
        }
        return $max;
    }
}
