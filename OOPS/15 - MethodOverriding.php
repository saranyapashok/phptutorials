<?php

class MethodOverriding
{
	public function greet()
	{
		return 'Hello!';
	}
}

class child extends MethodOverriding
{
	public function greet()
	{
		return 'Hi';
	}
}

$MethodOverriding = new MethodOverriding();

echo $MethodOverriding->greet(); // Hello

$child = new child();
echo $child->greet(); // Hi!
