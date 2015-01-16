<?php


//$number = NULL;
//$number = 1120;

$number = $_POST['number'];


if(($number%2) == 0)
{
    echo "The Given Number is Even";
    echo "<br>";
}
elseif(($number%2) != 0)
{
    echo "The Given Number is Odd";
    echo "<br>";
}
else
{
    echo "The Given Number is Invalid";
    echo "<br>";
}


function indentifyEvenOrOddNumber(){

    $number = $_POST['number'];
//    $number = NULL;
//    $number = 12;

    if(($number%2) == 0)
    {
        echo "The Given Number is Even";
        echo "<br>";
    }
    elseif(($number%2) != 0)
    {
        echo "The Given Number is Odd";
        echo "<br>";
    }
    else
    {
        echo "The Given Number is Invalid";
        echo "<br>";
    }
}

indentifyEvenOrOddNumber($number);


echo "<br>";
echo "<br>";


function myTest(){

    //$sum = 2+3;
    echo "Hello World";
    //return 'BKIICT';
    echo "<br>";
}


//var_dump(is_null(myTest()));
myTest();
echo myTest();
echo "<br>";


function myTest2(){
    return "Hello World";
    echo "<br>";
}

myTest();
echo myTest2();
















