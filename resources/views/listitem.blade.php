<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Item - Venus Cars</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen font-sans">

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md h-screen p-5">
            <h2 class="text-2xl font-bold text-blue-600 mb-10">Venus Cars</h2>
            <nav class="space-y-4">
                <a href="/dashboard" class="block py-2 px-4 rounded-xl hover:bg-blue-100 text-gray-700 font-medium">Dashboard</a>
                <a href="/listitem" class="block py-2 px-4 rounded-xl bg-blue-100 text-blue-700 font-semibold">List Item</a>
                <a href="#" class="block py-2 px-4 rounded-xl hover:bg-blue-100 text-gray-700 font-medium">Orders</a>
                <a href="#" class="block py-2 px-4 rounded-xl hover:bg-blue-100 text-gray-700 font-medium">Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">List Item</h1>

            <div class="overflow-x-auto bg-white rounded-2xl shadow-md p-6">
                <table class="min-w-full text-sm text-left text-gray-600">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">Item Name</th>
                            <th class="px-6 py-3">Category</th>
                            <th class="px-6 py-3">Price</th>
                            <th class="px-6 py-3">Stock</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4 font-medium">Honda Civic</td>
                            <td class="px-6 py-4">Sedan</td>
                            <td class="px-6 py-4">Rp 250.000.000</td>
                            <td class="px-6 py-4">12</td>
                            <td class="px-6 py-4">
                                <button class="text-blue-600 hover:underline">Edit</button>
                                <button class="text-red-600 hover:underline ml-2">Delete</button>
                            </td>
                        </tr>
                        <!-- Tambah baris item lainnya sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>
