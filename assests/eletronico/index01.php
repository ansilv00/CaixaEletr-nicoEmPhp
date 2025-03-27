<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            /* box-sizing: border-box; */
        }
        body{
            font-family: 'Poppins',sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            color: #000000;
        }
        form{
            background: saddlebrown;
            border-radius: 20px;
        }
        main{
            background: white;
            border-radius: 25%;
        }
        h1{
            text-align: center;
        }
        label{
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        
        input[type="number"] {
            width: 90%;
            padding: 10px;
            border: 1px solid var(--cinza-escuro);
            border-radius: 5px;
            margin-bottom: 10px;
            border: none;
        }
        input[type="submit"]{
            background: var(--cinza-escuro);
            color: var(--branco);
            border: none;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: 0.3s;
        }
    </style>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $saque = $_REQUEST['saque'] ?? 0;
        
        $resto = $saque;

        $tot100 = floor($resto / 100);
        $resto %= 100;

        $tot50 = floor($resto / 50);
        $resto %= 50;

        $tot10 = floor($resto / 10);
        $resto %= 10;

        $tot5 = floor($resto / 5);
        $resto %= 5;

    }
    ?>
    <main>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">

            <h1>Caixa Eletrônico</h1>

            <label for="saque">Qual valor você de deseja sacar (R$)<sup>*</sup></label>

            <input type="number" name="saque" id="saque" step="5" required value="<?= $saque ?? ' '?>">

            <p stype="font-size: 0.6em"><sup>*</sup>Notas disponiveis: R$ 100, R$50, R$20, R$10 e R$5</p>

            <input type="submit" value="Sacar">

        </form>
    </main>


    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>

        <section>

            <h2>Saque de R$<?= $saque ?> realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>

            <li><img src="/assests/imgs/imagens/100-reais.jpg" alt="Nota de 100"  class="nota">x<?=$tot100?></li>

            <li><img src="/assests/imgs/imagens/50-reais.jpg" alt="Nota de 100"  class="nota">x<?=$tot50?></li>

            <li><img src="/assests/imgs/imagens/10-reais.jpg" alt="Nota de 100"  class="nota">x<?=$tot10?></li>

            <li><img src="/assests/imgs/imagens/5-reais.jpg" alt="Nota de 100"  class="nota">x<?=$tot5?></li>

            </ul>
        </section>
        <?php endif; ?>
</body>
</html>