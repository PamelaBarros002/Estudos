<?php
// Recebendo dados do formulário
$largura = $_POST["largura"];
$altura = $_POST["altura"];

// Validação simples
if ($largura <= 0 || $altura <= 0) {
    $erro = "⚠️ Valores inválidos! Digite números maiores que zero.";
} else {
    // Calcula área
    $area = $largura * $altura;

    // Calcula litros (1 litro = 2 m²)
    $litros = $area / 2;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Pintura</title>
 <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="box">
        <?php if (isset($erro)): ?>
            <h2 class="erro"><?php echo $erro; ?></h2>
        <?php else: ?>
            <h2>Relatório de Pintura </h2>
            <p>Para uma parede de <strong><?php echo $largura; ?>m</strong> de largura e 
               <strong><?php echo $altura; ?>m</strong> de altura:</p>
            <p>Área total: <strong><?php echo number_format($area, 2, ",", "."); ?> m²</strong></p>
            <p>Serão necessários <strong><?php echo number_format($litros, 2, ",", "."); ?> litros</strong> de tinta.</p>
        <?php endif; ?>

        <!-- Botão voltar -->
        <form action="../Semana 18/index.html">
            <button type="submit" class="novo-calculo">Novo cálculo</button>
        </form>
    </div>
</body>
</html>



