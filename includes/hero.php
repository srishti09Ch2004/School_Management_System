<?php
$academy_name = "Future Academy";
$heading = "Empowering Minds. Shaping Futures.";
$description = "Future Academy provides a dynamic and supportive space where quality education meets modern learning to build your successful tomorrow.";
$image = "assets/images/hero-students.png";
?>


    <section class="bg-gradient-to-r from-[#f5f9f8] via-[#f9fcfb] to-[#ffff000] min-h-[89vh] flex items-center">


    <div class="max-w-[1600px] mx-auto px-6 lg:px-16 w-full">

        <div class="flex flex-col lg:flex-row items-center justify-between gap-16">

            <!-- Left Content -->
            <div class="flex-1 min-w-[300px] lg:-mt-16">

                <span class="text-red-600 font-semibold uppercase tracking-[2px]">
                    <?= $academy_name ?>
                </span>

                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mt-4">
                    <?= $heading ?>
                </h1>

                <p class="text-lg text-gray-500 leading-8 mt-6">
                    <?= $description ?>
                </p>

                <div class="mt-9 flex flex-wrap gap-4">

                    <button
                        class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-full transition duration-300">
                        Get Started
                    </button>

                    <button
                        class="bg-white border border-green-600 text-green-600 hover:bg-green-50 px-8 py-3 rounded-full transition duration-300">
                        Login
                    </button>

                </div>

            </div>

            <!-- Right Image -->
            <div class="flex-1 flex justify-center min-w-[300px]">

                <div class="w-[350px] h-[350px] md:w-[450px] md:h-[450px] lg:w-[510px] lg:h-[510px] rounded-full overflow-hidden border-2 border-white shadow-2xl">

                    <img
                        src="<?= $image ?>"
                        alt="Students"
                        class="w-full h-full object-cover"
                    >

                </div>

            </div>

        </div>

    </div>

</section>