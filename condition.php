<?php

//$age = 50;

$age = $_POST['age'];


//First Approach
if($age > 60)
{
    echo "You are able to get Senior Citizen Discount";
    echo "<br>";
}
else
{
    echo "You are not getting Senior Citizen Discount";
    echo "<br>";
}



//Second Approach
if($age < 12)
{
    echo "You can get Junior Youth Rate";
    echo "<br>";
}
elseif($age > 60)
{
    echo "You are able to get Senior Citizen Discount";
    echo "<br>";
}
else
{
    echo "You are Neither able to get Senior Citizen Discount Nor get Junior Youth Rate";
    echo "<br>";
}
?>


<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="condition.php">

            <fieldset>
                <legend>Check Citizen Priority</legend>
                    <label>Enter Your Age: </label>
                    <input type="text" name="age">
                    <input type="button" name="submit" value="Check">
                </fieldset>
        </form>

    </body>
</html>
