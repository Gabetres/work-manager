<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Trabalho</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Formulário de Trabalho</h2>
        <form action="#" method="post">
            <!-- imput de nome do trabalho -->
            <div class="form-group">
                <label for="nomeTrabalho">Nome do Trabalho:</label>
                <input type="text" class="form-control" id="nomeTrabalho" name="nomeTrabalho" required>
            </div>

            <!-- imput de quantidade -->
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" oninput="calcularValor()" required>
            </div>

            <!-- imput de multiplicador -->
            <div class="form-group">
                <label for="multiplicador">Multiplicador:</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="multiplicador" name="multiplicador" value="0.5" step="0.01" min="0" oninput="calcularValor()" required>
                    <div class="input-group-append">
                        <span class="input-group-text">x</span>
                    </div>
                </div>
            </div>

            <!-- imput de valor -->
            <div class="form-group">
                <label for="valor">Valor:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input disabled type="number" class="form-control" id="valor" name="valor" step="0.01" required>
                </div>
            </div>

            <!-- Botão de enviar -->
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Bootstrap JS e dependências -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script para calcular o valor -->
    <script>
        function calcularValor() {
            // Obtém os valores dos campos
            let quantidade = parseFloat(document.getElementById('quantidade').value) || 0;
            let multiplicador = parseFloat(document.getElementById('multiplicador').value) || 0;
            
            // Calcula o valor
            let valor = quantidade * multiplicador;

            // Atualiza o campo de valor
            document.getElementById('valor').value = valor.toFixed(2);
        }
    </script>
</body>

</html>
