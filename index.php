<?php
session_start();

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Bimbel 404 - Think IT, Think Until 404</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js" defer></script>
    <!-- <style> button { background-color: red !important; } </style> -->
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-blue-600 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Bimbel 404</h1>
        <nav>
        <ul class="flex space-x-4 items-center">
            <li><a href="#about" class="hover:underline">About</a></li>
            <li><a href="#programs" class="hover:underline">Programs</a></li>
            <li><a href="#testimonials" class="hover:underline">Testimonials</a></li>
            <li><a href="#test" class="hover:underline">Test</a></li>
            <?php if(isset($_SESSION['user'])): ?>
                <li><button id="logoutBtn" class="bg-white text-blue-500 px-4 py-1 rounded hover:bg-gray-200">Halo, <?php echo $_SESSION['user']['username']; ?></button></li>
            <?php else: ?>
                <li><button id="loginBtn" class="bg-blue-900 text-white px-4 py-1 rounded hover:bg-gray-600">Login</button></li>
                <li><button id="signupBtn" class="bg-green-500 text-white px-4 py-1 rounded hover:bg-green-600">Signup</button></li>
            <?php endif; ?>
        </ul>
        </nav>
    </div>
    </header>

    <!-- Hero -->
    <section id="hero" class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-20 text-center opacity-0 transition-opacity duration-1000">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold mb-4">Think IT, Think Until 404</h2>
            <p class="text-xl mb-4">Bimbel 404 adalah penyedia kursus IT premier yang berdedikasi untuk membantu individu menguasai pemrograman web dengan mudah dan percaya diri.</p>
            <a href="#programs" class="bg-white text-blue-500 px-6 py-3 rounded hover:bg-gray-200 transition duration-300">Learn More</a>
        </div>
    </section>

    <!-- About -->
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

    <!-- Programs -->
    <section id="programs" class="bg-white py-16 opacity-0 transition-opacity duration-1000">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Programs</h2>
            <div id="programList" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
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
                    <a href="#test" class="text-blue-500 hover:underline">Explore Classes | Register</a>
                </div>

                <!-- Hidden additional programs -->
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

    <!-- Testimonials -->
    <section id="testimonials" class="py-16 bg-gray-100 opacity-0 transition-opacity duration-1000">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Testimonials</h2>
            <div id="testimonialSlider" class="grid grid-cols-1 md:grid-cols-3 gap-8 overflow-hidden">
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

    <!-- Test / Form -->
    <section id="test" class="py-16 text-center">
        <h2 class="text-3xl font-bold mb-4">Improve Your IT Skills</h2>
        <p>Login atau Signup untuk mengikuti test kami!</p>
    </section>

    <!-- Login Modal -->
    <div id="loginModal" class="fixed inset-0 bg-gray-100 bg-opacity-30 hidden flex justify-center items-start pt-20 z-50">
    <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6 relative">
        <button id="closeLogin" class="absolute top-3 right-3 text-gray-400 hover:text-gray-700 text-xl">&times;</button>
        <h2 class="text-2xl font-bold text-center mb-4">Login</h2>
        <form id="loginForm" class="space-y-4">
        <input type="email" name="email" placeholder="Email" required class="w-full border rounded-lg p-2"/>
        <input type="password" name="password" placeholder="Password" required class="w-full border rounded-lg p-2"/>
        <div id="loginMessage" class="text-sm hidden"></div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Login</button>
        </form>
    </div>
    </div>

    <!-- Signup Modal -->
    <div id="signupModal" class="fixed inset-0 bg-gray-100 bg-opacity-30 hidden flex justify-center items-start pt-20 z-50">
    <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6 relative">
        <button id="closeSignup" class="absolute top-3 right-3 text-gray-400 hover:text-gray-700 text-xl">&times;</button>
        <h2 class="text-2xl font-bold text-center mb-4">Signup</h2>
        <form id="signupForm" class="space-y-4">
        <input type="text" name="username" placeholder="Username" required class="w-full border rounded-lg p-2"/>
        <input type="email" name="email" placeholder="Email" required class="w-full border rounded-lg p-2"/>
        <input type="password" name="password" placeholder="Password" required class="w-full border rounded-lg p-2"/>
        <div id="signupMessage" class="text-sm hidden"></div>
        <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Signup</button>
        </form>
    </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 text-center">
        <p>&copy; <?php echo date("Y"); ?> Bimbel 404. All rights reserved.</p>
    </footer>
</body>
</html>