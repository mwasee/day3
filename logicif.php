<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        date_default_timezone_set("Asia/Kolkata");
$t = date("H");

//echo $t;
if ($t < "11") {
    echo "Good Morning!";
}
 if ($t >=11) {
    echo "Good after noon!";
}

 
 
?>
    </body>
</html>
