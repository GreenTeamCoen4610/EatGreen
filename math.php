<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>math</title>
</head>

<body>
<?php

//Variables
$convertCategory = $_POST["convertCategory"];
$amoun = $_POST["amount"];
$Result;
$convertFrom;
$convertTo;

//Determine value of conversionValue
	if ($convertCategory == 'cup-cup')
	{
		$convertResult = $amount * 1;
		$conversionFrom = "Cups";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'cup-gallon')
	{
		$convertResult = $amount * 0.0625;
		$conversionFrom = "Cups";
		$conversionTo = "Gallons";	 
	}
	if ($convertCategory == 'cup-ounce')
	{
		$convertResult = $amount * 8;
		$conversionFrom = "Cups";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'cup-pint')
	{
		$convertResult = $amount * 0.5;
		$conversionFrom = "Cups";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'cup-quart')
	{
		$convertResult = $amount * 0.25;
		$conversionFrom = "Cups";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'cup-tablespoon')
	{
		$convertResult = $amount * 16;
		$conversionFrom = "Cups";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'cup-teaspoon')
	{
		$convertResult = $amount * 48;
		$conversionFrom = "Cups";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'cup-liter')
	{
		$convertResult = $amount * 0.236588;
		$conversionFrom = "Cups";
		$converstionTo = "Liters";
	}
	if ($convertCategory == 'gallon-cup')
	{
		$convertResult = $amount * 16;
		$conversionFrom = "Gallons";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'gallon-gallon')
	{
		$convertResult = $amount * 1;
		$conversionFrom = "Gallons";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'gallon-ounce')
	{
		$convertResult = $amount * 128;
		$conversionFrom = "Gallons";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'gallon-pint')
	{
		$convertResult = $amount * 8;
		$conversionFrom = "Gallons";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'gallon-quart')
	{
		$convertResult = $amount * 4;
		$conversionFrom = "Gallons";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'gallon-tablespoon')
	{
		$convertResult = $amount * 256;
		$conversionFrom = "Gallons";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'gallon-teaspoon')
	{
		$convertResult = $amount * 768;
		$conversionFrom = "Gallons";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'gallon-liter')
	{
		$convertResult = $amount * 3.78541;
		$conversionFrom = "Gallons";
		$conversionTo = "Liters";
	}
	if ($convertCategory == 'ounce-cup')
	{
		$convertResult = $amount * 0.125;
		$conversionFrom = "Ounces";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'ounce-gallon')
	{
		$convertResult = $amount * 0.007813;
		$conversionFrom = "Ounces";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'ounce-ounce')
	{
		$convertResult = $amount * 1;
		$conversionFrom = "Ounces";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'ounce-pint')
	{
		$convertResult = $amount * 0.0625;
		$conversionFrom = "Ounces";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'ounce-quart')
	{
		$convertResult = $amount * 0.03125;
		$conversionFrom = "Ounces";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'ounce-tablespoon')
	{
		$convertResult = $amount * 2;
		$conversionFrom = "Ounces";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'ounce-teaspoon')
	{
		$convertResult = $amount * 6;
		$conversionFrom = "Ounces";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'ounce-liter')
	{
		$convertResult = $amount * 0.0295735;
		$conversionFrom = "Ounces";
		$conversionTo = "Liters";
	}
	if ($convertCategory == 'pint-cup')
	{
		$convertResult = $amount * 2;
		$conversionFrom = "Pints";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'pint-gallon')
	{
		$convertResult = $amount * 0.125;
		$conversionFrom = "Pints";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'pint-ounce')
	{
		$convertResult = $amount * 32;
		$conversionFrom = "Pints";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'pint-pint')
	{
		$convertResult = $amount * 1;
		$conversionFrom = "Pints";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'pint-quart')
	{
		$convertResult = $amount * 0.5;
		$conversionFrom = "Pints";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'pint-tablespoon')
	{
		$convertResult = $amount * 32;
		$conversionFrom = "Pints";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'pint-teaspoon')
	{
		$convertResult = $amount * 96;
		$conversionFrom = "Pints";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'pint-liter')
	{
			$convertResult = $amount * 0.473176;
			$conversionFrom = "Pints";
			$conversionTo = "Liters";
	}
	if ($convertCategory == 'quart-cup')
	{
		$convertResult = $amount * 4;
		$conversionFrom = "Quarts";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'quart-gallon')
	{
		$convertResult = $amount * 0.25;
		$conversionFrom = "Quarts";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'quart-ounce')
	{
		$convertResult = $amount * 32;
		$conversionFrom = "Quarts";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'quart-pint')
	{
		$convertResult = $amount * 2;
		$conversionFrom = "Quarts";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'quart-quart')
	{
		$convertResult = $amount * 1;
		$conversionFrom = "Quarts";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'quart-tablespoon')
	{
		$convertResult = $amount * 64;
		$conversionFrom = "Quarts";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'quart-teaspoon')
	{
		$convertResult = $amount * 192;
		$conversionFrom = "Quarts";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'quart-liter')
	{
		$convertResult = $amount * 0.946353;
		$conversionFrom = "Quarts";
		$conversionTo = "Liters";
	}
	if ($convertCategory == 'tablespoon-cup')
	{
		$convertResult = $amount * 0.0625;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'tablespoon-gallon')
	{
		$convertResult = $amount * 0.003906;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'tablespoon-ounce')
	{
		$convertResult = $amount * 0.5;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'tablespoon-pint')
	{
		$convertResult = $amount * 0.03125;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'tablespoon-quart')
	{
		$convertResult = $amount * 0.015625;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'tablespoon-tablespoon')
	{
		$convertResult = $amount * 1;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'tablespoon-teaspoon')
	{
		$convertResult = $amount * 3;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'tablespoon-liter')
	{
		$convertResult = $amount * 0.0147868;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Liters";
	}
	if ($convertCategory == 'teaspoon-cup')
	{
		$convertResult = $amount * 0.020833;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'teaspoon-gallon')
	{
		$convertResult = $amount * 0.001302;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'teaspoon-ounce')
	{
		$convertResult = $amount * 0.166667;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'teaspoon-pint')
	{
		$convertResult = $amount * 0.010417;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'teaspoon-quart')
	{
		$convertResult = $amount * 0.005208;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'teaspoon-tablespoon')
	{
		$convertResult = $amount * 0.333333;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'teaspoon-teaspoon')
	{
		$convertResult = $amount * 1;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'teaspoon-liter')
	{
		$convertResult = $amount * 0.00492892;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Liters";
	}
	if ($convertCategory == 'liter-cup')
	{
		$convertResult = $amount * 4.22675;
		$conversionFrom = "Liters";
		$conversionTo = "Cups";
	}
	
	if ($convertCategory == 'liter-gallon')
	{
		$convertResult = $amount * 0.264172;
		$conversionFrom = "Liters";
		$conversionTo = "Gallons";
	}
	
	if ($convertCategory == 'liter-ounce')
	{
		$convertResult = $amount * 33.814;
		$conversionFrom = "Liters";
		$conversionTo = "Ounces";
	}
	
	if ($convertCategory == 'liter-pint')
	{
		$convertResult = $amount * 2.11338;
		$conversionFrom = "Liters";
		$conversionTo = "Pints";
	}
	
	if ($convertCategory == 'liter-quart')
	{
		$convertResult = $amount * 1.05669;
		$conversionFrom = "Liters";
		$conversionTo = "Quarts";
	}
	
	if ($convertCategory == 'liter-tablespoon')
	{
		$convertResult = $amount * 67.628;
		$conversionFrom = "Liters";
		$conversionTo = "Tablespoons";
	}
	
	if ($convertCategory == 'liter-teaspoon')
	{
		$convertResult = $amount * 202.884;
		$conversionFrom = "Liters";
		$conversionTo = "Teaspoons";
	}
	
	if ($convertCategory == 'liter-liter')
	{
		$convertResult = $amount * 1;
		$conversionFrom = "Liters";
		$conversionTo = "Liters";
	}
	
	if ($convertCategory == 'null')
	{	
		echo "Error. Null value.";
		exit;
	}
	
//Output results
echo $_POST["amount"] $convertFrom = $Result $convertTo;
return;

?>
</body>
</html>
