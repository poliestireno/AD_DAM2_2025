<?php
//    var_export( $_POST);

    $num1 =$_POST['numero1']+1; 
    $num2 =$_POST['numero2']+1; 
    
  //  echo " El número 1 es ".$num1;
  //  echo " El número 2 es ".$num2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br/>
    <input type="text" value="<?php echo $num1?>"/>
    <br/>
    <input type="text" value="<?php echo $num2?>"/>
</body>
</html>