<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center py-4 gap-3">
                <div class="text-xl font-bold text-gray-800">Admin Panel</div>
                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ route('admin.hero-sections.index') }}" class="text-gray-600 hover:text-gray-800">Hero Sections</a>
                    <a href="{{ route('admin.store-infos.index') }}" class="text-gray-600 hover:text-gray-800">Store Info</a>
                    <a href="{{ route('admin.advantages.index') }}" class="text-gray-600 hover:text-gray-800">Keunggulan</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>
</body>
</html>