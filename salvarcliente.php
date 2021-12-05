<?php


$nomeCliente = $_GET["nome"];
$CPFCliente = $_GET["CPF"];
$foneCliente = $_GET["fone"];
$emailCliente = $_GET["email"];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Cliente</title>
</head>
<body>
    <center>
    <table border="3"> 
            <td> Nome Completo: </td>
            <td><?php echo $nomeCliente; ?></td>
        </tr>
        <tr> 
            <td> CPF: </td>
            <td> <?php echo $CPFCliente; ?> </td>
       </tr>
       <tr> 
            <td> Telefone: </td>
            <td> <?php echo $foneCliente; ?> </td>
       </tr>
       <tr> 
            <td> Email: </td>
            <td> <?php echo $emailCliente; ?> </td>
       </tr>
    </table>
</center>
</body>
</html>

