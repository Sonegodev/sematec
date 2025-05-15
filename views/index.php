<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Durk</title>
    <link rel="icon" type="image/png" href="imagens/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            33% {
                transform: translateX(-100%);
            }

            66% {
                transform: translateX(-200%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .carousel-inner {
            animation: slide 12s infinite;
        }
    </style>
</head>

<body class="bg-gray-100">
    <?php include '../includes/header.php'; ?>

    <div class="relative w-full overflow-hidden max-h-[450px]">
        <div class="flex w-[300%] carousel-inner">
            <img src="imagens/banner1.jpg" alt="carrosel 1" class="w-full object-cover">
            <img src="imagens/banner2.jpg" alt="carrosel 2" class="w-full object-cover">
            <img src="imagens/banner3.jpg" alt="carrosel 3" class="w-full object-cover">
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 py-12">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-900">
                Bem-vindo à
                <span class="text-purple-600" style="font-family: 'Source Code Pro', monospace;">Durk</span>
            </h1>
            <p class="text-gray-500 mt-2">Novos lançamentos sempre para você!</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white shadow rounded-lg p-4">
                <div class="h-48 bg-gray-200 rounded mb-4"></div>
                <h3 class="text-lg font-semibold">Nome do Produto</h3>
                <p class="text-sm text-gray-500">Categoria</p>
                <p class="text-green-600 font-bold mt-1">R$ 99,90</p>
            </div>
            <div class="bg-white shadow rounded-lg p-4">
                <div class="h-48 bg-gray-200 rounded mb-4"></div>
                <h3 class="text-lg font-semibold">Nome do Produto</h3>
                <p class="text-sm text-gray-500">Categoria</p>
                <p class="text-green-600 font-bold mt-1">R$ 149,90</p>
            </div>
            <div class="bg-white shadow rounded-lg p-4">
                <div class="h-48 bg-gray-200 rounded mb-4"></div>
                <h3 class="text-lg font-semibold">Nome do Produto</h3>
                <p class="text-sm text-gray-500">Categoria</p>
                <p class="text-green-600 font-bold mt-1">R$ 199,90</p>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>