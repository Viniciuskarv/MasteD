<?php
    // UTILIZANDO MYSQL
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'site1';
    $conn = mysql_connect($hostname, $username, $password, $dbname);



    
    if($conn) {
        // selecionar a base de dados
        if(mysql_select_db($dbname, $conn) === TRUE){
            echo 'Província : <select id="provincia" name="provincia">';
            $sql = "SELECT * FROM provincias where pais ='".$_GET['pais']."'";
            $result = mysql_query($sql);
            if($result) {
                    
            // se houver registos
            if(mysql_num_rows($result) !== 0) {
                    while($row=mysql_fetch_array($result)) {
                        echo '<option value="'.$row['id'].'">'.$row['provincia'].'</option>';
                    }    
                } else {
                    echo 'Não foram encontrados registos';
                }
            }
        } else {
            echo 'Erro ao selecionar a base de dados';
        }
        
        echo '</select>';
        mysql_close($conn);
    } else {

        echo 'Falha na conexão';
    }
    
?>