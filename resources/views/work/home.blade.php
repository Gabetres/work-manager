<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg w-full max-w-4xl">
        <!-- Responsive Flexbox for buttons -->
        <div class="flex flex-col sm:flex-row justify-between items-center mb-4 gap-4">
            <button id="openModalBtn" class="bg-white text-gray-900 px-4 py-2 rounded-md hover:bg-gray-200 w-full sm:w-auto">
                Mês/Ano
            </button>
            <button id="newClientBtn" class="bg-white text-gray-900 px-4 py-2 rounded-md hover:bg-gray-200 w-full sm:w-auto">
                Novo Cliente
            </button>
        </div>

        <!-- Responsive Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto text-left">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="px-4 py-2">CLIENTE</th>
                        <th class="px-4 py-2">NÚMERO DE PEÇAS</th>
                        <th class="px-4 py-2">VALOR TOTAL</th>
                        <th class="px-4 py-2">VALOR P/ PEÇA</th>
                        <th class="px-4 py-2">DATA</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($works as $work )
                        <tr class="bg-gray-800 border-b border-gray-700">
                            <td class="px-4 py-2">{{ $work->customer->name }}</td> 
                            <td class="px-4 py-2">{{ $work->pices }}</td> 
                            <td class="px-4 py-2">{{ $work->totalPrice() }}</td> 
                            <td class="px-4 py-2">{{ $work->price() }}</td> 
                            <td class="px-4 py-2">{{ $work->date }}</td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-gray-900 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg w-full max-w-lg p-6 text-gray-900">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold">Adicionar Novo Cliente</h2>
                <button id="closeModalBtn" class="text-gray-900 hover:text-red-500">&times;</button>
            </div>

            <form id="newClientForm">
                <div class="mb-4">
                    <label for="clientName" class="block text-sm font-medium">Nome do Cliente</label>
                    <input type="text" id="clientName" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="numPecas" class="block text-sm font-medium">Número de Peças</label>
                    <input type="number" id="numPecas" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="valorTotal" class="block text-sm font-medium">Valor Total</label>
                    <input type="number" id="valorTotal" step="0.01" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="valorPeca" class="block text-sm font-medium">Valor por Peça</label>
                    <input type="number" id="valorPeca" step="0.01" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="data" class="block text-sm font-medium">Data</label>
                    <input type="date" id="data" class="w-full p-2 border border-gray-300 rounded-md" value="{{$now}}">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 w-full">
                    Adicionar Cliente
                </button>
            </form>
        </div>
    </div>

    <script>
        // Seleciona os elementos do DOM
        const modal = document.getElementById('modal');
        const newClientBtn = document.getElementById('newClientBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const newClientForm = document.getElementById('newClientForm');

        // Abrir o modal
        newClientBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        // Fechar o modal
        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        // Fechar o modal clicando fora do conteúdo
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });

        // Lidar com o envio do formulário (exemplo simples de adição)
        newClientForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Pegue os valores dos campos
            const clientName = document.getElementById('clientName').value;
            const numPecas = document.getElementById('numPecas').value;
            const valorTotal = document.getElementById('valorTotal').value;
            const valorPeca = document.getElementById('valorPeca').value;
            const data = document.getElementById('data').value;

            // Validação simples (todos os campos obrigatórios)
            if (clientName && numPecas && valorTotal && valorPeca && data) {
                alert(`Cliente ${clientName} adicionado com sucesso!`);
                modal.classList.add('hidden');
            } else {
                alert('Por favor, preencha todos os campos.');
            }
        });
    </script>
</body>

</html>