<?php

class MethodOverriding
{
	public function greet($a)
	{
		return $a;
	}
}

class child extends MethodOverriding
{
	public function greet($a, $b)
	{
		return 'Hi';
	}
}

$MethodOverriding = new MethodOverriding();

echo $MethodOverriding->greet("hello"); // Hello

$child = new child();
echo $child->greet("hi", "hello"); // Hi!
