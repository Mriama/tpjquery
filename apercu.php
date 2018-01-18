<?php
    
    if ( isset($_GET['id']) ){
        $id = intval ($_GET['id']);
        include ("connecter.php");
        $req = "SELECT id, type, blob " . 
               "FROM image WHERE id = " . $id;
        $ret = mysql_query ($req) or die (mysql_error ());
        $col = mysql_fetch_row ($ret);
        
        if ( !$col[0] ){
            echo "Id d'image inconnu";
        } else {
            header ("Content-type: " . $col[1]);
            echo $col[2];
        }

    } else {
        echo "Mauvais id d'image";
    }

?>