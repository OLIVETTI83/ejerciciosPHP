<?php

// $id = $_GET['id'];



try {
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
    // echo "Conexión establecida ";

    // método query
    // $resultados = $conexion->query('SELECT * FROM usuarios');

    // añade dos pedros a la base de datos
    // $resultados = $conexion->query('INSERT INTO usuarios VALUES(null, "Pedro")');


    // foreach($resultados as $fila){
    //    echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br/>';
    // }

        // PREPARED STATEMENTS
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id');
        $statement->execute(
            array(':id' => 2)
            );

        // $resultados = $statement->fetchAll();
        // echo "<pre>";
        // print_r($resultados);
        // echo "</pre>";
        
        $resultados = $statement->fetchAll();
        foreach($resultados as $usuario){
            echo $usuario['nombre'] . '<br/>';
        }



} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>