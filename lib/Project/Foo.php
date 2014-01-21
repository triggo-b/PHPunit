<?php
namespace Project;

class Foo
{
	public function Math($a, $b)
	{
        if($b === '0') {
            throw new Exception\Alarm('Division by zero');
        }
		$Ex = $a / $b;
		return $Ex;
	}
}