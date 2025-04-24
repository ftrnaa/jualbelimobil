<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Public Directory Example</title>
  <!-- GANTI LINK KE SCRIPT agar Tailwind JS bisa jalan -->
  <script src="/styles/tailwindcss3.4.1.js"></script>
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white">

  <!-- Container utama dengan padding dan tata letak flex -->
  <div class="max-w-7xl mx-auto p-6">
    <!-- Heading dengan font besar dan teks yang lebih dramatis -->
    <h1 class="text-5xl font-extrabold text-center mb-8">
      <span class="text-yellow-400">Halo Dunia!</span> Selamat Datang di Galeri Mobil
    </h1>

    <!-- Wrapper untuk gambar, dengan efek grid responsive dan jarak antar gambar -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Gambar 1 -->
      <div class="relative group">
        <img src="/images/mobil1.jpeg" alt="Mobil 1" class="w-full h-80 object-cover rounded-lg shadow-xl transition duration-500 transform group-hover:scale-105 group-hover:shadow-2xl">
        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex justify-center items-center">
          <p class="text-xl text-white font-semibold">Mobil 1</p>
        </div>
      </div>
      
      <!-- Gambar 2 -->
      <div class="relative group">
        <img src="/images/mobil2.jpeg" alt="Mobil 2" class="w-full h-80 object-cover rounded-lg shadow-xl transition duration-500 transform group-hover:scale-105 group-hover:shadow-2xl">
        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex justify-center items-center">
          <p class="text-xl text-white font-semibold">Mobil 2</p>
        </div>
      </div>

    </div>

  </div>

</body>
</html>
