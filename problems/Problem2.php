<?php
namespace Euler\Problems;

use \Euler\Util;

class Problem2 implements IProblem
{
    public function solve()
    {
        $fibs = iterator_to_array(Util::fib(1e100, 4e6));
        $evens = array_filter($fibs, '\Euler\Util::even');
        return Util::sum($evens);
    }
}
