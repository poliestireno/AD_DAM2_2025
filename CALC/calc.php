<?php
//var_export($_POST);
$res = 0;
switch ($_POST['op']) {
    case '+':
        //echo "suma";
        $res = $_POST['n1'] + $_POST['n2'];
        break;
    case '-':
        //echo "resta";
        $res = $_POST['n1'] - $_POST['n2'];
        break;
    case 'x':
        //echo "mul";
        $res = $_POST['n1'] * $_POST['n2'];
        break;
    case '/':
        //echo "div";
        $res = $_POST['n1'] / $_POST['n2'];
        break;    
    default:
        echo "error de operación, elige una operación";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
 
    <title>Calculadora</title>
</head>
<body>
    <form action="calc.php" method="post">
        n1:<input type="text" name="n1" id="n1">   
        n2:<input type="text" name="n2" id="n2">
        <br/>
        <input type="submit" name="op" value="+">
        <input type="submit" name="op" value="-">
        <input type="submit" name="op" value="x">
        <input type="submit" name="op" value="/">
        <br/>
        R:<input type="text" value="<?php echo $res?>" name="res" id="res">
    </form>
</body>  
</html>