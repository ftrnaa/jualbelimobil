<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Venus Cars</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen font-sans">

    <!-- Sidebar -->
    <div class="flex">
        <aside class="w-64 bg-white shadow-md h-screen p-5">
            <h2 class="text-2xl font-bold text-blue-600 mb-10">Venus Cars</h2>
            <nav class="space-y-4">
                <a href="#" class="block py-2 px-4 rounded-xl hover:bg-blue-100 text-gray-700 font-medium">Dashboard</a>
                <a href="#" class="block py-2 px-4 rounded-xl hover:bg-blue-100 text-gray-700 font-medium">My Profile</a>
                <a href="#" class="block py-2 px-4 rounded-xl hover:bg-blue-100 text-gray-700 font-medium">Products</a>
                <a href="#" class="block py-2 px-4 rounded-xl hover:bg-blue-100 text-gray-700 font-medium">Orders</a>
                <a href="#" class="block py-2 px-4 rounded-xl hover:bg-blue-100 text-gray-700 font-medium">Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Welcome to Your Dashboard</h1>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-2xl shadow-md">
                    <h3 class="text-gray-600">Total Users</h3>
                    <p class="text-2xl font-bold text-blue-600">1,245</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-md">
                    <h3 class="text-gray-600">Orders Today</h3>
                    <p class="text-2xl font-bold text-blue-600">78</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-md">
                    <h3 class="text-gray-600">Pending Reviews</h3>
                    <p class="text-2xl font-bold text-blue-600">19</p>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white p-6 rounded-2xl shadow-md">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Recent Activity</h2>
                <ul class="space-y-2">
                    <li class="text-gray-600">✔️ New user <strong>johndoe</strong> registered</li>
                    <li class="text-gray-600">🚗 Order #1024 placed for <strong>Toyota Camry</strong></li>
                    <li class="text-gray-600">📦 Product <strong>Honda Civic</strong> added to inventory</li>
                </ul>
            </div>
        </main>
    </div>

</body>
</html>
