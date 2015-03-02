<?php
namespace Euler\Problems;

use \Euler\Util;

class Problem6 implements IProblem
{
    public function solve()
    {
        $sumOfSquares = Util::sum(array_map(function($x) { return $x*$x; }, range(1, 100)));
        $squareOfSum = Util::sum(range(1, 100)) ** 2;
        return abs($sumOfSquares - $squareOfSum);
    }
}
