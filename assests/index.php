<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Caixa Eletrônico</title>
    <style>
        img.nota{
            margin: 50px;
        }
    </style>
</head>
<body>

    <!-- funiconou? -->
    <?php

    $saque = $_REQUEST['saque'] ?? 0;

    ?>
        <!-- funiconou? senao, apaga. -->
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>"
            <p style="font-size: 0.6em"><sup>*</sup>Notas disponiveis: R$100, R$50, e R$5</p>
            <input type="sumbit" value="Sacar">
        </form>
    </main>
    <?php 
    $resto = $resto;
     //Saque de R$100
    $tot100 = floor($resto/100);
    $resto %= 100;

     //Saque de R$50
    $tot50 = floor($resto/50);
    $resto %= 50;

     //Saque de R$10
    $to10 = floor($resto/10);
    $resto %= 10;

     //Saque de R$5
    $tot5 = floor($resto/5);
    $resto %= 5;
    ?>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", "." )?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="/assests/imgs/imagens/100-reais.jpg" alt="Nota de 100"  class="nota">x<?=$tot100?></li>

            <li><img src="/assests/imgs/imagens/50-reais.jpg" alt="Nota de 100"  class="nota">x<?=$tot50?></li>

            <li><img src="/assests/imgs/imagens/10-reais.jpg" alt="Nota de 100"  class="nota">x<?=$tot10?></li>
            
            <li><img src="/assests/imgs/imagens/5-reais.jpg" alt="Nota de 100"  class="nota">x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>