<?php
//Number 1
$hex = '596f7520636f6e76657274656420697420636f72726563746c7921';            // and much more hex values as string as in your example
$bin = hex2bin($hex);       // convert the hex values to binary data stored as a PHP string
echo("1-");
echo $bin;

//Number 2
$htmlContent=" <h1>PHP track</h1><p>PHP is an interpreted language</p>";
echo("<br>");
echo("2-");
echo strip_tags($htmlContent);

//Number 3
$username = " Kareem Fouad ";
$username=trim($username);
echo("<br>");
echo("3-");
var_dump($username);

//Number 4
$num = 15023198.91;
echo("<br>");
echo("4-");
echo number_format($num,2);

//Number 5
$employeePositions = [
    'kareem fouad' => 'backend',
    'ahmed bahnasy' => 'frontend',
    'mohammed nabeel' => 'android',
    ];

$employees=array_keys($employeePositions);
$positions=array_values($employeePositions);
echo("<br>");
echo("5-");
echo "<pre>";
print_r($employees);
print_r($positions);
echo "</pre>";

//Number 6
$nums = [4, 7, 1];
list($x,$y,$z)=$nums;
echo("6-");
echo("<br>");
echo ("x is").$x;
echo("<br>");
echo ("y is").$y;
echo("<br>");
echo ("z is").$z;

//Number 7
$userData = [
    'name' => 'kareem',
    'job' => 'backend',
    'language' => 'php',
    'framework' => 'laravel',
    ];
extract($userData);
echo("<br>");
echo("7-");
echo("<br>");
echo $name ,$job , $language , $framework;

?>