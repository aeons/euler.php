<?php
namespace Euler;

class Euler
{
    public function run($argv)
    {
        if (count($argv) != 2) {
            echo "Usage: euler <problem-number>\n";
            exit(0);
        }
        $problem_num = $argv[1];
        $problem_class = '\Euler\Problems\Problem' . $problem_num;

        if (!class_exists($problem_class)) {
            echo "Solution for problem $problem_num not found.\n";
            exit(1);
        }

        $problem = new $problem_class;

        $time_start = microtime(true);
        $solution = number_format($problem->solve(), 0, '', '');
        $time_end = microtime(true);
        $time = $time_end - $time_start;

        echo "Found solution $solution in $time seconds.\n";
    }
}
