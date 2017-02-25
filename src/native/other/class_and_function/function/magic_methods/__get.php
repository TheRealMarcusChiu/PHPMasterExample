<?php

class CurrencyFormatter
{
	private $name = "marcus";

	function __get($var)
	{
		$return_val = "";

		if($var === "god") {
			$return_val = "you can't get god";
		} else {
			$return_val = $this->$var;
		}

		return $return_val;
	}
}

$d = new CurrencyFormatter();

echo $d->god;
echo "<div/>";
echo $d->name;

?>