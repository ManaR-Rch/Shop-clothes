<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Ajouter des icônes (Font Awesome) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Product Grid</title>
</head>

<body class="bg-slate-300">
    <!-- Header -->
    <header class="bg-slate-700 text-white p-6 text-center shadow-lg">
        <h1 class="text-3xl font-bold">Welcome to My Product Page</h1>
        <p class="mt-2 text-slate-300">Discover our amazing products</p>
    </header>

    <!-- Main Content -->
    <main class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-6">
        <article class="bg-white/80 backdrop-blur-sm rounded-xl shadow-2xl p-6 hover:transform hover:scale-105 transition duration-300 ease-in-out border border-white/10">
            <!-- En-tête de l'annonce -->
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-semibold text-black/70">Title</h2>
                <!-- Statut (facultatif) -->
                <span class="text-green-300 text-sm font-medium bg-green-900/20 px-2 py-1 rounded-full">Trouvé</span>
                <!-- <span class="text-red-300 text-sm font-medium bg-red-900/20 px-2 py-1 rounded-full">Perdu</span> -->
            </div>

            <!-- Image (facultative) -->
            <a href="#">
                <div class="mb-4">
                    <img src="/api/placeholder/400/300" alt="test img" class="w-full h-48 object-cover rounded-lg shadow-md" />
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <h3 class="text-red-300 font-medium mb-2">Description</h3>
                    <p class="text-gray-500 text-sm">
                        Her Description
                    </p>
                </div>
            </a>

            <!-- Date et Lieu -->
            <div class="mb-4 border-t border-red-500/30 pt-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h3 class="text-red-300 font-medium mb-1">Date</h3>
                        <p class="text-gray-500 text-sm">01/01/2024</p>
                    </div>
                    <div>
                        <h3 class="text-red-300 font-medium mb-1">Lieu</h3>
                        <p class="text-gray-500 text-sm">Safi, Maroc</p>
                    </div>
                </div>
            </div>

            <!-- Informations de contact -->
            <div class="border-t border-red-500/30 pt-4">
                <h3 class="text-red-300 font-medium mb-2">Pour demande</h3>
                <div class="space-y-2">
                    <div class="flex items-center text-gray-500 text-sm">
                        <i class="fas fa-envelope mr-2 text-red-300"></i>
                        <span>exemple@email.com</span>
                    </div>
                    <div class="flex items-center text-gray-500 text-sm">
                        <i class="fas fa-phone mr-2 text-red-300"></i>
                        <span>06-xx-xx-xx-xx</span>
                    </div>
                </div>
            </div>
        </article>
    </main>
</body>

</html>