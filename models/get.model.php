<?php
require_once "conexion.php";
class getModel
{
    static public function obtenerEmpleados()
    {
        //$sql = "SELECT * FROM empleados";
        //$stmt = Conexion::conectar()->prepare($sql);
        //$stmt->execute();
        
          //  $results = $stmt-> fetchAll();
           // return $results;
           $mysqli = new mysqli('localhost', 'root', '', 'db_emp');
           $query = $mysqli -> query ("SELECT * FROM empleados");

           $arreglo = [];
           while($valores = mysqli_fetch_assoc($query) )
           {
            array_push($arreglo,$valores);

           }
           return ($arreglo);

      
    }
   
}