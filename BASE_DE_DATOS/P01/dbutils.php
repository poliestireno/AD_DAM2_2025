<?php
function conectarDB()
{
    try
    {
        $cadenaConexion = "mysql:host=localhost;dbname=BD_JUEGOS";
        $usu="root";
        $pw="";
        $db = new PDO($cadenaConexion,$usu,$pw);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $db;
    }
    catch (PDOException $ex)
    {
        echo "Error conectando ".$ex->getMessage();
    }
}
function getTodosJuegos($db)
{
    $vectorTotal = array();
    try
    {
        $stmt = $db->query("SELECT * FROM JUEGOS");
        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $vectorTotal[] = $fila;
        }
    }
    catch(PDOException $ex)
    {
        echo "Error en getTodosJuegos ".$ex->getMessage();
    }

    return $vectorTotal;
}
?>