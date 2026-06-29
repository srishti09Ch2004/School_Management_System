<?php

$badge = "Everything Included";

$title = "School Features, All in One Place";

$subtitle = "From attendance to the library — every workflow your school needs.";

$features = [

[
    "icon" => "calendar_month",
    "title" => "Attendance Management",
    "description" => "Automated attendance with instant reports and parent notifications."
],

[
    "icon" => "assignment",
    "title" => "Result Management",
    "description" => "Create, publish and manage student results with ease."
],

[
    "icon" => "payments",
    "title" => "Online Fees",
    "description" => "Secure online fee collection with receipts and payment history."
],

[
    "icon" => "menu_book",
    "title" => "Homework",
    "description" => "Assign homework digitally and track submissions effortlessly."
],

[
    "icon" => "schedule",
    "title" => "Class Timetable",
    "description" => "Create and manage class schedules without conflicts."
],

[
    "icon" => "library_books",
    "title" => "Library Management",
    "description" => "Issue, return and manage books through a digital library."

]

];

?>

<section class="py-24 bg-gradient-to-b from-[#f7f3ff] to-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-10">

        <!-- Heading -->

        <div class="text-center max-w-3xl mx-auto">

            <span class="inline-block bg-green-100 text-green-700 px-5 py-2 rounded-full text-sm font-semibold">

                <?php echo $badge; ?>

            </span>

            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mt-5">

                <?php echo $title; ?>

            </h2>

            <p class="text-lg text-gray-600 mt-6 leading-8">

                <?php echo $subtitle; ?>

            </p>

        </div>

        <!-- Cards -->

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">

            <?php foreach($features as $feature){ ?>

            <div class="group bg-white border border-gray-200 rounded-3xl p-9 shadow-sm hover:shadow-2xl hover:-translate-y-2 hover:border-green-500 transition-all duration-300 h-[210px] flex">

                <div class="flex items-start gap-5">

                    <!-- <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-red-50 to-green-100 flex items-center justify-center group-hover:from-green-500 group-hover:to-green-600 transition-all duration-300">

                        <span class="material-symbols-outlined text-3xl text-red-600 group-hover:text-white">

                            <?php echo $feature['icon']; ?>

                        </span>

                    </div> -->
                    <div class="w-20 h-11 rounded-full bg-gradient-to-br from-red-50 via-white to-green-100
                        flex items-center justify-center
                        shadow-sm border border-gray-100
                        group-hover:bg-gradient-to-br group-hover:from-green-500 group-hover:to-green-600
                        group-hover:shadow-lg transition-all duration-300">

                            <span class="material-symbols-outlined text-[30px] text-red-600 group-hover:text-white transition-all duration-300">

                                <?php echo $feature['icon']; ?>

                            </span>

                        </div>

                    <div>

                        <h3 class="text-2xl font-semibold text-gray-900 group-hover:text-green-700 transition">

                            <?php echo $feature['title']; ?>

                        </h3>

                        <p class="text-gray-600 mt-3 leading-7">

                            <?php echo $feature['description']; ?>

                        </p>

                    </div>

                </div>

            </div>

            <?php } ?>

        </div>

    </div>

</section>