<?php
// Simulação de uma lógica de sistema de gestão
$projeto = "Sistema de Automação DevOps";
$status_servidor = "Online";
$versao_atual = "1.2.0";

function verificarIntegridade($status) {
    return ($status == "Online") ? "✅ Sistema Operacional" : "❌ Falha no Sistema";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - <?php echo $projeto; ?></title>
    <style>
        body { background: #0d1117; color: #58a6ff; font-family: sans-serif; text-align: center; padding: 50px; }
        .card { border: 1px solid #30363d; padding: 20px; border-radius: 10px; display: inline-block; }
        .status { color: #3fb950; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h1><?php echo $projeto; ?></h1>
        <p>Monitoramento de Artefatos GitHub</p>
        <p class="status"><?php echo verificarIntegridade($status_servidor); ?></p>
        <hr>
        <small>Versão: <?php echo $versao_atual; ?> | Auditoria: Ativa</small>
    </div>
</body>
</html>