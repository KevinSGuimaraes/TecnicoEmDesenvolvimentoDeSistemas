<?php
/*
include_once("../models/Compromisso.php");

$obj = new Compromisso();

$compromissos = $obj->ListarCompromissosMes();
*/

// Primeiro dia do mês atual
$primeiroDiaMes = date("Y-m-01");

// Dia da semana do primeiro dia
// 1 = Segunda
// 2 = Terça
// ...
// 7 = Domingo
$diaSemanaInicio = date("N", strtotime($primeiroDiaMes));

// Quantidade de dias do mês
$totalDiasMes = date("t");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Calendário</title>
<link rel="stylesheet" href="calendario.css">
</head>
<body>

<h1>Calendário de Compromissos</h1>

<div class="calendario">

    <!-- Cabeçalho -->

    <div class="cabecalho">Seg</div>
    <div class="cabecalho">Ter</div>
    <div class="cabecalho">Qua</div>
    <div class="cabecalho">Qui</div>
    <div class="cabecalho">Sex</div>
    <div class="cabecalho">Sáb</div>
    <div class="cabecalho">Dom</div>

    <!-- Espaços vazios antes do dia 1 -->

    <?php for($i = 1; $i < $diaSemanaInicio; $i++): ?>

        <div class="dia vazio"></div>

    <?php endfor; ?>

    <!-- Dias do mês -->

    <?php for($dia = 1; $dia <= $totalDiasMes; $dia++): ?>

        <div class="dia">

            <div class="numero">
                <?= $dia ?>
            </div>

            <?php if(isset($compromissos)): ?>

                <?php foreach($compromissos as $compromisso): ?>

                    <?php
                        $diaCompromisso =
                            date(
                                "j",
                                strtotime(
                                    $compromisso["data_compromisso"]
                                )
                            );
                    ?>

                    <?php if($diaCompromisso == $dia): ?>

                        <div class="evento">

                            <?= $compromisso["hora_compromisso"] ?>

                            <br>

                            <?= $compromisso["titulo"] ?>

                            <br>

                            <small>
                                <?= $compromisso["status"] ?>
                            </small>

                        </div>

                    <?php endif; ?>

                <?php endforeach; ?>

            <?php endif; ?>

        </div>

    <?php endfor; ?>

</div>

</body>
</html>