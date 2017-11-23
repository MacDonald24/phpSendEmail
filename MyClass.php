<?php
	class MyClass extends Person
	{
	    private $foo = TRUE;

	    public function __construct()
	    {
	        $this->foo = FALSE;

	        echo($this->foo);
	    }
	}
?>