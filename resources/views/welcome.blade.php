<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kiosk Display</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="w-full max-w-7xl h-[90vh] bg-white shadow-lg rounded-2xl p-4">
        <h1 class="text-2xl font-bold mb-4 text-center">Maxsulotlar</h1>

        <!-- Сетка 6 x 8 -->
        <div class="grid grid-cols-8 grid-rows-6 gap-3 h-full">
            <!-- Пример кнопок -->
            @foreach ($data as $product)
                <button
                    class="bg-green-500 text-white rounded-xl flex items-center justify-center text-sm font-semibold hover:bg-blue-600 transition">
                    {{ $product->name }} / {{ $product->lifetime }} soat
                </button>
            @endforeach


        </div>
    </div>

</body>

</html>
