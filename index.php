<?php
session_start();
$error = isset($_GET['error']) ? $_GET['error'] : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbel 404 - Think IT, Think Until 404</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js" defer></script>
    <style>
        button { background-color: red !important; }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header dengan hover effects. -->
    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold transition duration-300 hover:scale-105">Bimbel 404</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#about" class="hover:underline hover:text-yellow-300 transition duration-300">About Us</a></li>
                    <li><a href="#programs" class="hover:underline hover:text-yellow-300 transition duration-300">Programs</a></li>
                    <li><a href="#testimonials" class="hover:underline hover:text-yellow-300 transition duration-300">Testimonials</a></li>
                    <li><a href="#test" class="hover:underline hover:text-yellow-300 transition duration-300">Test Your Skills</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section dengan fade-in animation. -->
    <section class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-20 text-center opacity-0 transition-opacity duration-1000" id="hero">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold mb-4">Think IT, Think Until 404</h2>
            <p class="text-xl mb-4">Bimbel 404 adalah penyedia kursus IT premier yang berdedikasi untuk membantu individu menguasai pemrograman web dengan mudah dan percaya diri.</p>
            <a href="#programs" class="bg-white text-blue-500 px-6 py-3 rounded hover:bg-gray-200 transition duration-300">Learn More</a>
        </div>
    </section>

    <!-- About Us dengan fade-in. -->
    <section id="about" class="py-16 opacity-0 transition-opacity duration-1000">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">About Us</h2>
            <p class="text-lg mb-4">Bimbel 404 adalah institusi yang berdedikasi untuk meningkatkan kemampuan pemrograman web, dengan penekanan khusus pada pengembangan keterampilan praktis.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                <div class="p-4 bg-white shadow rounded hover:shadow-lg transition-shadow duration-300"><h3 class="text-2xl font-bold">100</h3><p>Active Students</p></div>
                <div class="p-4 bg-white shadow rounded hover:shadow-lg transition-shadow duration-300"><h3 class="text-2xl font-bold">100</h3><p>Alumni</p></div>
                <div class="p-4 bg-white shadow rounded hover:shadow-lg transition-shadow duration-300"><h3 class="text-2xl font-bold">10</h3><p>Teachers</p></div>
            </div>
        </div>
    </section>

    <!-- Programs Section dengan load more button (interaktif via jQuery). -->
    <section id="programs" class="bg-white py-16 opacity-0 transition-opacity duration-1000">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Programs</h2>
            <div id="programList" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- Initial programs (load more akan tambah sisanya via JS). -->
                <div class="bg-gray-50 p-6 rounded shadow hover:scale-105 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">Basic Web Dev</h3>
                    <p class="mb-2">5-12 Tahun</p>
                    <p class="text-green-600 font-bold">Starts at Rp 100K per month</p>
                    <a href="#" class="text-blue-500 hover:underline">Explore Classes | Register</a>
                </div>
                <div class="bg-gray-50 p-6 rounded shadow hover:scale-105 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">Intermediate Web</h3>
                    <p class="mb-2">13-18 Tahun</p>
                    <p class="text-green-600 font-bold">Starts at Rp 100K per month</p>
                    <a href="#" class="text-blue-500 hover:underline">Explore Classes | Register</a>
                </div>
                <div class="bg-gray-50 p-6 rounded shadow hover:scale-105 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">Advanced PHP</h3>
                    <p class="mb-2">&gt;18 Tahun</p>
                    <p class="text-green-600 font-bold">Starts at Rp 200K per month</p>
                    <a href="#" class="text-blue-500 hover:underline">Explore Classes | Register</a>
                </div>
                <div class="bg-gray-50 p-6 rounded shadow hover:scale-105 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">Pro Development</h3>
                    <p class="mb-2">All Ages</p>
                    <p class="text-green-600 font-bold">Starts at Rp 250K per month</p>
                    <a href="#register" class="text-blue-500 hover:underline">Explore Classes | Register</a>
                </div>
                <!-- Sisanya hidden, ditampilkan via load more. -->
                <div class="hidden bg-gray-50 p-6 rounded shadow hover:scale-105 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">Web Cert Private</h3>
                    <p class="text-green-600 font-bold">Rp 900K per month</p>
                    <a href="#" class="text-blue-500 hover:underline">Register</a>
                </div>
                <div class="hidden bg-gray-50 p-6 rounded shadow hover:scale-105 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">JS Mastery</h3>
                    <p class="text-green-600 font-bold">Rp 1000K per month</p>
                    <a href="#" class="text-blue-500 hover:underline">Register</a>
                </div>
                <div class="hidden bg-gray-50 p-6 rounded shadow hover:scale-105 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">Full Stack Dev</h3>
                    <p class="text-green-600 font-bold">Rp 1100K per month</p>
                    <a href="#" class="text-blue-500 hover:underline">Register</a>
                </div>
                <div class="hidden bg-gray-50 p-6 rounded shadow hover:scale-105 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-2">API Integration</h3>
                    <p class="text-green-600 font-bold">Rp 1300K per month</p>
                    <a href="#" class="text-blue-500 hover:underline">Register</a>
                </div>
            </div>
            <button id="loadMorePrograms" class="mx-auto block bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600 transition duration-300">Load More</button>
        </div>
    </section>

    <!-- Testimonials dengan jQuery slider (carousel). -->
    <section id="testimonials" class="py-16 bg-gray-100 opacity-0 transition-opacity duration-1000">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Testimonials</h2>
            <div id="testimonialSlider" class="grid grid-cols-1 md:grid-cols-3 gap-8 overflow-hidden">
                <!-- Testimonials untuk slider. -->
                <div class="bg-white p-6 rounded shadow hover:shadow-xl transition-shadow duration-300">
                    <p>"Quality IT education..."</p>
                    <p class="font-bold">- Dewi Putri Cahaya</p>
                </div>
                <div class="bg-white p-6 rounded shadow hover:shadow-xl transition-shadow duration-300">
                    <p>"Outstanding IT classes..."</p>
                    <p class="font-bold">- Agus Setiawan Suryadi</p>
                </div>
                <div class="bg-white p-6 rounded shadow hover:shadow-xl transition-shadow duration-300">
                    <p>"Best decision ever..."</p>
                    <p class="font-bold">- Budi Santoso Wibowo</p>
                </div>
                <div class="bg-white p-6 rounded shadow hover:shadow-xl transition-shadow duration-300">
                    <p>"Exceptional quality..."</p>
                    <p class="font-bold">- Siti Nurul Hidayah</p>
                </div>
                <div class="bg-white p-6 rounded shadow hover:shadow-xl transition-shadow duration-300">
                    <p>"Transformative learning..."</p>
                    <p class="font-bold">- Ahmad Rizki Pratama</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Test Section dengan AJAX form. -->
    <section id="test" class="py-16 opacity-0 transition-opacity duration-1000">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Improve Your IT Skills</h2>
            <p class="text-center mb-8">Discover your level with our mentor, come join us!</p>
            <form id="testForm" class="max-w-md mx-auto bg-white p-6 rounded shadow">
                <div id="formMessage" class="mb-4 text-red-500 hidden"></div>
                <div class="mb-4">
                    <label for="username" class="block text-sm font-bold mb-2">Username:</label>
                    <input type="text" id="username" name="username" required class="w-full p-2 border rounded focus:border-blue-500 transition duration-300">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-bold mb-2">Password:</label>
                    <input type="password" id="password" name="password" required class="w-full p-2 border rounded focus:border-blue-500 transition duration-300">
                </div>
                <button type="submit" class="w-full bg-red-500 text-white p-2 rounded hover:bg-red-600 transition duration-300">Register for Test</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 text-center">
        <p>&copy; 2025 Bimbel 404. All rights reserved.</p>
    </footer>

    <script>
    </script>
</body>
</html>