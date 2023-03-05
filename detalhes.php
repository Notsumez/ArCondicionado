<?php 
    include 'conn/connect.php';
    $lista = $conn->query("select * from produtos;");
    $row_destaque =  $lista->fetch_assoc();
    $num_linhas = $lista->num_rows;
?>