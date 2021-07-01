<?php 

$num1 = $_GET['txtN'];
$num2 = $_GET['txtb'];

if ($num1 % 2 == 0)
{
    echo "<hr>";
    echo "Numero1 = Par";
    echo "<hr>";
}else
{
    echo "<hr>";
    echo "Numero1 = Impar";
    echo "<hr>";
}

if ($num2 % 2 == 0)
{

    echo "<hr>";
    echo "Numero2 = Par";
    echo "<hr>";
}

else
{

    echo "<hr>";
    echo "Numero2 = Impar";
    echo "<hr>";
}

if ($num1 < 0)
{
    echo "<hr>";
    echo "Numero1 = Negativo";
    echo "<hr>";
}

else
{
    echo "<hr>";
    echo "Numero1 = Positivo";
    echo "<hr>";
}

if ($num2 < 0)
{

    echo "<hr>";
    echo "Numero2 = Negativo";
    echo "<hr>";
}

else
{

    echo "<hr>";
    echo "Numero2 = Positivo";
    echo "<hr>";
}

?>
