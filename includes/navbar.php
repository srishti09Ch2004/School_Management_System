<?php

$logo = "assets/images/logo6.png";
$school_name = "Future Academy";
$tagline = "School Management System";

$menus = [
    "Home",
    "About",  
    "Contact"
];

?>

<nav class="bg-gray-200 border-b border-gray-300 sticky top-0 z-50 shadow-md">

    <div class="max-w-[1650px] mx-auto h-[85px] px-6 lg:px-16 flex items-center justify-between">

        <!-- Logo Section -->
        <div class="flex items-center gap-4">

            <img
                src="<?= $logo ?>"
                alt="Logo"
                class="h-[70px] w-auto"
            >

            <div>

                <h1 class="text-3xl font-bold text-gray-900">
                    <?= $school_name ?>
                </h1>

                <p class="mt-1 text-red-600 text-xs font-semibold uppercase tracking-[2px]">
                    <?= $tagline ?>
                </p>

            </div>

        </div>

        <!-- Menu + Login -->
<div class="hidden md:flex items-center gap-8">

    <!-- Menu -->
    <?php foreach ($menus as $menu) { ?>

        <a
            href="#"
            class="text-gray-800 text-[17px] font-medium hover:text-green-700 transition duration-300"
        >
            <?= $menu ?>
        </a>

    <?php } ?>

    <!-- Login Button -->
    <a
        href="login.php"
        class="ml-4 px-6 py-3 bg-green-700 text-white rounded-xl font-semibold shadow-lg hover:bg-green-800 hover:scale-105 transition-all duration-300"
    >
        Login
    </a>

</div>

    </div>

</nav>