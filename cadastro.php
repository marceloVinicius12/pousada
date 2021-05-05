<?php
if(isset($_GET['nome']) && $_GET['nome'] != '') {
    $reserva = [];
    $reserva['nome'] = $_GET['nome'];
    if (isset($_GET['telefone'])) {
        $reserva['telefone'] = $_GET['telefone'];
    } else {
        $reserva['telefone'] = '';
    }
    if (isset($_GET['whatsap'])) {
        $reserva['whatsap'] = $_GET['whatsap'];
    } else {
        $reserva['whatsap'] = 'nao';
    }
    if (isset($_GET['adultos'])) {
        $reserva['adultos'] = $_GET['adultos'];
    } else {
        $reserva['adultos'] = '1';
    }
    if (isset($_GET['criancas'])) {
        $reserva['criancas'] = $_GET['criancas'];
    } else {
        $reserva['criancas'] = '0';
    }
    if (isset($_GET['quartos'])) {
        $reserva['quartos'] = $_GET['quartos'];
    } else {
        $reserva['quartos'] = '1';
    }
    if (isset($_GET['fumante'])) {
        $reserva['fumante'] = $_GET['fumante'];
    } else {
        $reserva['fumante'] = 'nao';
    }
    if (isset($_GET['cafe'])) {
        $reserva['cafe'] = $_GET['cafe'];
    } else {
        $reserva['cafe'] = 'nao';
    }
    if (isset($_GET['estacionamento'])) {
        $reserva['estacionamento'] = $_GET['estacionamento'];
    } else {
        $reserva['estacionamento'] = 'nao';
    }
    if (isset($_GET['ar'])) {
        $reserva['ar'] = $_GET['ar'];
    } else {
        $reserva['ar'] = 'nao';
    }
    if (isset($_GET['entrada'])) {
        $reserva['entrada'] = $_GET['entrada'];
    } else {
        $reserva['entrada'] = '';
    }
    if (isset($_GET['saida'])) {
        $reserva['saida'] = $_GET['saida'];
    } else {
        $reserva['saida'] = '';
    }
}
include "conexao.php";
if (isset($reserva)) {
    $sqlInserir = "INSERT INTO tb_reservas(
       nome,
       telefone,
       whatsap,
       criancas,
       adultos,
       quartos,
       fumante,  
       cafe,
       estacionamento,
       ar,
       entrada,
       saida
       )VALUES(
   '{$reserva['nome']}',
   '{$reserva['telefone']}',
   '{$reserva['whatsap']}',
   '{$reserva['adultos']}',
   '{$reserva['criancas']}',
   '{$reserva['quartos']}',
   '{$reserva['fumante']}',
   '{$reserva['cafe']}',
   '{$reserva['estacionamento']}',
   '{$reserva['ar']}',
   '{$reserva['entrada']}',
   '{$reserva['saida']}'
);";
    mysqli_query($conexao, $sqlInserir);
}

include "template.php";
?>
  <script src="js/funcoes.js"></script>
