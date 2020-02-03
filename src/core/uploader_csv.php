<?php 

require ('conn.php'); 

$linea = 0;
//Abrimos nuestro archivo
$fp = fopen("files/export_projects2345.csv", "r");
//Lo recorremos
$count = 0;
$count_pos = 0;
$count_neg = 0;        
    while ($data = fgetcsv ($fp, 1000, ",")) {

        $num = count ($data);
        
        try {

            $query = "INSERT INTO video (
                nombre,
                ruta,
                visitas,
                tags,
                categorias,
                thumbnail
            )   VALUES (
                '{$data[5]}', 
                '{$data[0]}',
                '{$data[7]}', 
                '{$data[2]}' , 
                '{$data[2]}', 
                '{$data[9]}'
            )";
            mysqli_query($conn , $query);
            $count_pos++;
                //print_r($data);

            echo "insertada -> ".$count_pos;
            
        } catch (Exception $e) {
            $count_neg++;
             echo 'Excepción capturada: ',  $e->getMessage(), "\n";

        }

    }


    

// echo $count_pos.'\n';  
// echo $count_neg; 
//Cerramos el archivo
fclose($fp);




?>