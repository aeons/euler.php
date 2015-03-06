<?php
namespace Euler\Problems;

use \Euler\Util;

class Problem9 implements IProblem
{
    public function solve()
    {
        for ($a = 1; $a < 999; $a++) {
            $asq = $a**2;
            for ($b = $a + 1; $b < 999 - $a; $b++) {
                $c = 1000 - $a - $b;
                if ($asq + $b**2 == $c**2 &&
                    $a + $b + $c == 1000) {
                    return $a * $b * $c;
                }
            }
        }
    }
}
