<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Product List</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2 text-gray-800"><?= htmlspecialchars($product['name']) ?></h2>
                            <p class="text-gray-600 mb-4"><?= htmlspecialchars($product['description']) ?></p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$<?= htmlspecialchars($product['price']) ?></span>
                                <a class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" href="?action=delete&id=<?= $product['id'] ?>">Supprimer</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center text-gray-600">
                    <p>Aucun produit disponible.</p>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="mt-8 text-center">
            <a class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-colors" href="?action=add">Ajouter un produit</a>
        </div>
    </div>
</body>
</html>

