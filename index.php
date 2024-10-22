<?php
    include 'verifica_fibonacci.php';

    $resultado = 'Nenhum número inserido';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);

        $resultado = pertence_fibonacci($numero) 
        ? "$numero pertence " 
        : "$numero não pertence ";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Verificador de Fibonacci</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Esse número pertence à Fibonacci?</h1>
        <p class="text-center">Teste agora e descubra!</p>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <form method="POST">
                    <div class="mb-3">
                        <label for="numero" class="form-label">Digite um número:</label>
                        <input type="text" name="numero" id="numero" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mx-auto d-block">Verificar</button>
                </form>
            </div>
        </div>
        <?php if ($resultado): ?>
            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="alert alert-info">
                        <?php echo" $resultado à sequência de Fibonacci."; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
