<?php
namespace Euler\Problems;

use \Euler\Util;

class Problem5 implements IProblem
{
    public function solve()
    {
        // Brute force
        //for ($i = 2520;; $i += 2520) {
            //$divisible = true;
            //foreach (range(11, 20) as $divisor) {
                //if ($i % $divisor != 0) {
                    //$divisible = false;
                    //break;
                //}
            //}
            //if ($divisible) {
                //return $i;
            //}
        //}
        // Prime factorization
        // 20 = 2**2 * 5
        // 19 = 19
        // 18 = 3**2
        // 17 = 17
        // 16 = 2**4
        // 15 = 3 * 5
        // 14 = 2 * 7
        // 13 = 13
        // 12 = 2**2 * 3
        // 11 = 11
        // Multiply greatest power of each unique factor
        return 2**4 * 3**2 * 5 * 7 * 11 * 13 * 17 * 19;
    }
}
