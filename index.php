<?php

require_once(__DIR__  .'/config.php');
require_once(__DIR__  .'/bingo.php');

$bingo = new \MyApp\Bingo();
$nums = $bingo->create();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BINGO!</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container">
        <h3>Loto 6　ジェネレーター</h3>
        <table>
        <tr>
            <?php for ( $j = 0 ; $j < 6 ; $j ++) : ?>
            <td>
                <?= $nums[$j]; ?>
                
            </td>
            <!-- <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td> -->
            <?php endfor; ?>
        </tr>
        </table>

    </div>
    
</body>
</html>