<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>math</title>
</head>

<body>
<?php

//Variables
$convertCategory = $_POST['convertCategory'];
$Input = $_POST['Input'];
$Result;
$convertFrom;
$convertTo;

//Determine value of conversionValue
	if ($convertCategory == 'cup-cup')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Cups";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'cup-gallon')
	{
		$convertResult = $Input * 0.0625;
		$conversionFrom = "Cups";
		$conversionTo = "Gallons";	 
	}
	if ($convertCategory == 'cup-ounce')
	{
		$convertResult = $Input * 8;
		$conversionFrom = "Cups";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'cup-pint')
	{
		$convertResult = $Input * 0.5;
		$conversionFrom = "Cups";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'cup-quart')
	{
		$convertResult = $Input * 0.25;
		$conversionFrom = "Cups";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'cup-tablespoon')
	{
		$convertResult = $Input * 16;
		$conversionFrom = "Cups";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'cup-teaspoon')
	{
		$convertResult = $Input * 48;
		$conversionFrom = "Cups";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'cup-liter')
	{
		$convertResult = $Input * 0.236588;
		$conversionFrom = "Cups";
		$converstionTo = "Liters";
	}
	if ($convertCategory == 'gallon-cup')
	{
		$convertResult = $Input * 16;
		$conversionFrom = "Gallons";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'gallon-gallon')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Gallons";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'gallon-ounce')
	{
		$convertResult = $Input * 128;
		$conversionFrom = "Gallons";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'gallon-pint')
	{
		$convertResult = $Input * 8;
		$conversionFrom = "Gallons";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'gallon-quart')
	{
		$convertResult = $Input * 4;
		$conversionFrom = "Gallons";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'gallon-tablespoon')
	{
		$convertResult = $Input * 256;
		$conversionFrom = "Gallons";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'gallon-teaspoon')
	{
		$convertResult = $Input * 768;
		$conversionFrom = "Gallons";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'gallon-liter')
	{
		$convertResult = $Input * 3.78541;
		$conversionFrom = "Gallons";
		$conversionTo = "Liters";
	}
	if ($convertCategory == 'ounce-cup')
	{
		$convertResult = $Input * 0.125;
		$conversionFrom = "Ounces";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'ounce-gallon')
	{
		$convertResult = $Input * 0.007813;
		$conversionFrom = "Ounces";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'ounce-ounce')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Ounces";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'ounce-pint')
	{
		$convertResult = $Input * 0.0625;
		$conversionFrom = "Ounces";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'ounce-quart')
	{
		$convertResult = $Input * 0.03125;
		$conversionFrom = "Ounces";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'ounce-tablespoon')
	{
		$convertResult = $Input * 2;
		$conversionFrom = "Ounces";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'ounce-teaspoon')
	{
		$convertResult = $Input * 6;
		$conversionFrom = "Ounces";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'ounce-liter')
	{
		$convertResult = $Input * 0.0295735;
		$conversionFrom = "Ounces";
		$conversionTo = "Liters";
	}
	if ($convertCategory == 'pint-cup')
	{
		$convertResult = $Input * 2;
		$conversionFrom = "Pints";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'pint-gallon')
	{
		$convertResult = $Input * 0.125;
		$conversionFrom = "Pints";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'pint-ounce')
	{
		$convertResult = $Input * 32;
		$conversionFrom = "Pints";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'pint-pint')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Pints";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'pint-quart')
	{
		$convertResult = $Input * 0.5;
		$conversionFrom = "Pints";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'pint-tablespoon')
	{
		$convertResult = $Input * 32;
		$conversionFrom = "Pints";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'pint-teaspoon')
	{
		$convertResult = $Input * 96;
		$conversionFrom = "Pints";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'pint-liter')
	{
			$convertResult = $Input * 0.473176;
			$conversionFrom = "Pints";
			$conversionTo = "Liters";
	}
	if ($convertCategory == 'quart-cup')
	{
		$convertResult = $Input * 4;
		$conversionFrom = "Quarts";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'quart-gallon')
	{
		$convertResult = $Input * 0.25;
		$conversionFrom = "Quarts";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'quart-ounce')
	{
		$convertResult = $Input * 32;
		$conversionFrom = "Quarts";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'quart-pint')
	{
		$convertResult = $Input * 2;
		$conversionFrom = "Quarts";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'quart-quart')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Quarts";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'quart-tablespoon')
	{
		$convertResult = $Input * 64;
		$conversionFrom = "Quarts";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'quart-teaspoon')
	{
		$convertResult = $Input * 192;
		$conversionFrom = "Quarts";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'quart-liter')
	{
		$convertResult = $Input * 0.946353;
		$conversionFrom = "Quarts";
		$conversionTo = "Liters";
	}
	if ($convertCategory == 'tablespoon-cup')
	{
		$convertResult = $Input * 0.0625;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'tablespoon-gallon')
	{
		$convertResult = $Input * 0.003906;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'tablespoon-ounce')
	{
		$convertResult = $Input * 0.5;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'tablespoon-pint')
	{
		$convertResult = $Input * 0.03125;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'tablespoon-quart')
	{
		$convertResult = $Input * 0.015625;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'tablespoon-tablespoon')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'tablespoon-teaspoon')
	{
		$convertResult = $Input * 3;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'tablespoon-liter')
	{
		$convertResult = $Input * 0.0147868;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Liters";
	}
	if ($convertCategory == 'teaspoon-cup')
	{
		$convertResult = $Input * 0.020833;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'teaspoon-gallon')
	{
		$convertResult = $Input * 0.001302;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'teaspoon-ounce')
	{
		$convertResult = $Input * 0.166667;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'teaspoon-pint')
	{
		$convertResult = $Input * 0.010417;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'teaspoon-quart')
	{
		$convertResult = $Input * 0.005208;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'teaspoon-tablespoon')
	{
		$convertResult = $Input * 0.333333;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'teaspoon-teaspoon')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'teaspoon-liter')
	{
		$convertResult = $Input * 0.00492892;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Liters";
	}
	if ($convertCategory == 'liter-cup')
	{
		$convertResult = $Input * 4.22675;
		$conversionFrom = "Liters";
		$conversionTo = "Cups";
	}
	
	if ($convertCategory == 'liter-gallon')
	{
		$convertResult = $Input * 0.264172;
		$conversionFrom = "Liters";
		$conversionTo = "Gallons";
	}
	
	if ($convertCategory == 'liter-ounce')
	{
		$convertResult = $Input * 33.814;
		$conversionFrom = "Liters";
		$conversionTo = "Ounces";
	}
	
	if ($convertCategory == 'liter-pint')
	{
		$convertResult = $Input * 2.11338;
		$conversionFrom = "Liters";
		$conversionTo = "Pints";
	}
	
	if ($convertCategory == 'liter-quart')
	{
		$convertResult = $Input * 1.05669;
		$conversionFrom = "Liters";
		$conversionTo = "Quarts";
	}
	
	if ($convertCategory == 'liter-tablespoon')
	{
		$convertResult = $Input * 67.628;
		$conversionFrom = "Liters";
		$conversionTo = "Tablespoons";
	}
	
	if ($convertCategory == 'liter-teaspoon')
	{
		$convertResult = $Input * 202.884;
		$conversionFrom = "Liters";
		$conversionTo = "Teaspoons";
	}
	
	if ($convertCategory == 'liter-liter')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Liters";
		$conversionTo = "Liters";
	}
	
	if ($convertCategory == 'null')
	{	
		echo "Error. Null value.";
		exit;
	}
	
//Output results
echo "$Input $convertFrom = $Result $convertTo";
return;

?>
</body>
</html>
