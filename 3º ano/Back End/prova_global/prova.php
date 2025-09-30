<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova Global</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <main>
        <h1>Carrinho de compras</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="preco">Preço do Produto:</label>
        <input type="number" name="preco" id="preco" step="0.01" required>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>
        <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 
        if($_SERVER['REQUEST_METHOD']== "GET");
            $preco = $_GET ['preco'];
        $quantidade = $_GET ['quantidade'];
        $subtotal = $preco * $quantidade;
        $preco_formatado = number_format($preco, 2, ",", ".");
        $subtotal_formatado = number_format($subtotal, 2, ",", ".");
        //Calculando imposto de 12,5%
        $imposto = $subtotal * 0.125;
        $imposto_formatado = number_format($imposto, 2, ",", ".");
        $total = $subtotal + $imposto;
        $total_formatado = number_format($total, 2, ",", ".");
        //Calculando Frete com número aleátorio
        $frete = rand(3000, 15000) / 100;
        $frete_formatado = number_format($frete, 2, ",", ".");
        $valor_total = $total + $frete;
        $valor_total_formatado = number_format($valor_total, 2, ",", ".");

        echo "<h2>---Orçamento PC-Pronto ---</h2>";
        echo "Produto: R$ $preco_formatado (x$quantidade) <br>";
        echo "Subtotal: R$ $subtotal_formatado <br>";
        echo "Imposto (12,5%): R$ $imposto_formatado <br>";
        echo "Total Final: R$ $total_formatado <br>";
        echo "Frete: R$ $frete_formatado <br>";
        echo "Valor Total com o Frete: R$ $valor_total_formatado";
?>

    </section>
</body>
</html>