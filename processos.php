<?php

        $processo = "touch /home/processos.txt";
        $comand = "ps aux > /home/processos.txt";
        $connection = ssh2_connect('localhost', 22);
        ssh2_auth_password($connection, 'root', 'root');
        $stream = ssh2_exec($connection, $processo);
        $stream = ssh2_exec($connection, $comand);
?>

<html>
 
    <head>
 
    <title>LISTA DE PROCESSOS LINUX</title>
    <style>
    </style>
    </head>
 
    <body>
 
     
    <?php
    
   $file = fopen("/home/processos.txt", "r");
    echo '<table border="1">';
    while(!feof($file)) {
        $line = fgets($file) . "<br>";
        $table = preg_split("/[\s,]+/",$line);
        echo '<tr><td>'.$table[0].'</td><td>'.$table[1].'</td><td>'.$table[2].'</td><td>'.$table[3].'</td><td>'.$table[4].'</td><td>'.$table[5].'</td><td>'.$table[6].'</td><td>'.$table[7].'</td><td>'.$table[8].'</td><td>'.$table[9].'</td><td>'.$table[10].'</td></tr>';
        }
    echo '</table>';    
    fclose($file);
    ?>
     
    </body>
    </html>
     